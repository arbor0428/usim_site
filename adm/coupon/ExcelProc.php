<?
include "../../module/class/class.DbCon.php";
include "../../module/class/class.FileUpload.php";
include "../../module/class/class.Msg.php";

$UPLOAD_DIR = './upfile';

$doc_name	= 'upfile01';

$userip = $_SERVER['REMOTE_ADDR'];

if($_FILES[$doc_name]['name']){
	$temp_doc = $_FILES[$doc_name]['name'];

	$ext = FileUpload::getFileExtension($_FILES[$doc_name]['name']);
	if($ext != 'xls' && $ext != 'xlsx'){
		Msg::backMsg("엑셀파일을 다시 선택해 주십시오");
		exit();
	}

	$fileUpload = new FileUpload($UPLOAD_DIR,$_FILES[$doc_name],'E');

	if($fileUpload->uploadFile()){
		$upload_filename = $fileUpload->fileInfo['rename'];
	}else{
		Msg::backMsg("파일을 다시 선택해 주십시오");
		exit();
	}


	$excelName = $temp_doc;
	$excelDate = date('Y-m-d H:i:s');


	require_once "../../module/PHPExcel-1.8/Classes/PHPExcel.php"; // PHPExcel.php을 불러옴.
	$objPHPExcel = new PHPExcel();
	require_once "../../module/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php"; // IOFactory.php을 불러옴.

	$filename = './upfile/'.$upload_filename; // 읽어들일 엑셀 파일의 경로와 파일명을 지정한다.

	try{
		// 업로드 된 엑셀 형식에 맞는 Reader객체를 만든다.
		$objReader = PHPExcel_IOFactory::createReaderForFile($filename);

		// 읽기전용으로 설정
		$objReader->setReadDataOnly(true);

		// 엑셀파일을 읽는다
		$objExcel = $objReader->load($filename);

		// 첫번째 시트를 선택
		$objExcel->setActiveSheetIndex(0);
		$objWorksheet = $objExcel->getActiveSheet();
		$rowIterator = $objWorksheet->getRowIterator();

		foreach($rowIterator as $row){ // 모든 행에 대해서
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false);
		}

		$maxRow = $objWorksheet->getHighestRow();

		$orderNum = '';
		$uDate = '';
		$uTime = '';
		$userip = $_SERVER['REMOTE_ADDR'];

		$a = 0;
		$alimArr = Array();		//알림톡 발송용
		$clientID = '';

		for($i=2; $i<=$maxRow; $i++){

			$title = addslashes(trim($objWorksheet->getCell('A' . $i)->getValue()));
			$price = trim($objWorksheet->getCell('B' . $i)->getValue());
			$date1 = trim($objWorksheet->getCell('C' . $i)->getValue());
			$userid = addslashes(trim($objWorksheet->getCell('D' . $i)->getValue()));
			$date2 = trim($objWorksheet->getCell('E' . $i)->getValue());

			$price = str_replace(',','',$price);

			$date1 = ($date1 - 25569) * 86400 - 60 * 60 * 9;
			$date1 = round( $date1 * 10 ) / 10;
			$eDate = date('Y-m-d', $date1);
			$eTime = strtotime($eDate) + 86399;	//사용기한

			$date2 = ($date2 - 25569) * 86400 - 60 * 60 * 9;
			$date2 = round( $date2 * 10 ) / 10;
			$rDate = date('Y-m-d', $date2);
			$rTime = strtotime($rDate);

			//회원 아이디 확인
			$row = sqlRow("select * from ks_member where userid='".$userid."'");
			if($row){
				$sql = "insert into ks_coupon (userid,title,price,eDate,eTime,orderNum,uDate,uTime,userip,rDate,rTime) values ";
				$sql .= "('$userid','$title','$price','$eDate','$eTime','$orderNum','$uDate','$uTime','$userip','$rDate','$rTime')";
				sqlExe($sql);

				if($clientID)		$clientID .= ',';
				$clientID .= $userid;

				$alimArr[$a]['name'] = $row['name'];
				$alimArr[$a]['phone'] = $row['phone'];
				$alimArr[$a]['couponName'] = $title;

				$a++;
			}
		}

		if(count($alimArr)){
			$talkType = 'coupon';

			include '../../module/kakao/alimtalk.php';
		}

		echo ("<script>parent.searchChk();</script>");
		exit;



	}catch(exception $e){
		Msg::backMsg("엑셀파일 오류입니다");
		exit();
	}
}
?>