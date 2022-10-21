<?php

	include '../../class/class.DbCon.php';
	include '../../class/class.Msg.php';
	include '../../class/class.Util.php';

    //**************************************************************************************************************
    //NICE평가정보 Copyright(c) KOREA INFOMATION SERVICE INC. ALL RIGHTS RESERVED
    
    //서비스명 :  체크플러스 - 안심본인인증 서비스
    //페이지명 :  체크플러스 - 결과 페이지
    
    //보안을 위해 제공해드리는 샘플페이지는 서비스 적용 후 서버에서 삭제해 주시기 바랍니다.
    //인증 후 결과값이 null로 나오는 부분은 관리담당자에게 문의 바랍니다.	
    //**************************************************************************************************************
    
    session_start();
	
    $sitecode = "FU05";				// NICE로부터 부여받은 사이트 코드
    $sitepasswd = "44327276";				// NICE로부터 부여받은 사이트 패스워드
	
	$returnMsg = '';
    
    // Linux = /절대경로/ , Window = D:\\절대경로\\ , D:\절대경로\
	$cb_encode_path = "/home/hanpass/www/module/niceID/mobile/CPClient_64bit";
	
    $enc_data = $_REQUEST["EncodeData"];		// 암호화된 결과 데이타

		//////////////////////////////////////////////// 문자열 점검///////////////////////////////////////////////
    if(preg_match('~[^0-9a-zA-Z+/=]~', $enc_data, $match)) {echo "입력 값 확인이 필요합니다 : ".$match[0]; exit;} // 문자열 점검 추가. 
    if(base64_encode(base64_decode($enc_data))!=$enc_data) {echo "입력 값 확인이 필요합니다"; exit;}

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

    if ($enc_data != "") {

        $plaindata = `$cb_encode_path DEC $sitecode $sitepasswd $enc_data`;		// 암호화된 결과 데이터의 복호화
//        echo "[plaindata]  " . $plaindata . "<br>";

        if ($plaindata == -1){
            $returnMsg  = "암/복호화 시스템 오류";
        }else if ($plaindata == -4){
            $returnMsg  = "복호화 처리 오류";
        }else if ($plaindata == -5){
            $returnMsg  = "HASH값 불일치 - 복호화 데이터는 리턴됨";
        }else if ($plaindata == -6){
            $returnMsg  = "복호화 데이터 오류";
        }else if ($plaindata == -9){
            $returnMsg  = "입력값 오류";
        }else if ($plaindata == -12){
            $returnMsg  = "사이트 비밀번호 오류";
        }else{
            // 복호화가 정상적일 경우 데이터를 파싱합니다.
            $ciphertime = `$cb_encode_path CTS $sitecode $sitepasswd $enc_data`;	// 암호화된 결과 데이터 검증 (복호화한 시간획득)

            $requestnumber = GetValue($plaindata , "REQ_SEQ");
            $responsenumber = GetValue($plaindata , "RES_SEQ");
            $authtype = GetValue($plaindata , "AUTH_TYPE");
//            $name = GetValue($plaindata , "NAME");
            $name = GetValue($plaindata , "UTF8_NAME"); //charset utf8 사용시 주석 해제 후 사용
            $birthdate = GetValue($plaindata , "BIRTHDATE");
            $gender = GetValue($plaindata , "GENDER");
            $nationalinfo = GetValue($plaindata , "NATIONALINFO");	//내/외국인정보(사용자 매뉴얼 참조)
            $dupInfo = GetValue($plaindata , "DI");
            $conninfo = GetValue($plaindata , "CI");
			$mobileno = GetValue($plaindata , "MOBILE_NO");
            $mobileco = GetValue($plaindata , "MOBILE_CO");
			
			$pageType = $_SESSION["pageType"];
			
            if(strcmp($_SESSION["REQ_SEQ"], $requestnumber) != 0)
            {
                $requestnumber = "";
                $responsenumber = "";
                $authtype = "";
                $name = "";
            	$birthdate = "";
            	$gender = "";
            	$nationalinfo = "";
            	$dupInfo = "";
            	$conninfo = "";
				$mobileno = "";
				$mobileco = "";

				Msg::alert("세션값이 다릅니다. 올바른 경로로 접근하시기 바랍니다.");
				exit;
            }

			$name = urldecode($name);

			//if($gender == '0')		$gender = '2';

			//$virtualNo = $ret[1];

			$userip = $_SERVER['REMOTE_ADDR'];
			$rDate = date('Y-m-d H:i:s');
			$rTime = time();
			$nType = 'join';

			//결과값 저장
			$sql = "insert into ks_nice_log (requestnumber,responsenumber,authtype,name,birthdate,gender,nationalinfo,dupInfo,conninfo,mobileno,mobileco,userip,rDate,rTime,plaindata,virtualNo,nType) values ('$requestnumber','$responsenumber','$authtype','$name','$birthdate','$gender','$nationalinfo','$dupInfo','$conninfo','$mobileno','$mobileco','$userip','$rDate','$rTime','$plaindata','$virtualNo','$nType')";
			$result = mysqli_query($dbc,$sql);

/*
			//가입회원 중복확인
			$sql = "select * from tb_member where mtype='M' and dupInfo='$dupInfo'";
			$result = mysqli_query($dbc,$query);
			$num = mysqli_num_rows($result);

			if($num > 0){
				$returnMsg = '이미 가입이 되어있습니다.';
			}
*/
			$sql = "select * from ks_member where mtype='M' and dupInfo='$dupInfo'";
			$result = mysqli_query($dbc,$sql);
			$num = mysqli_num_rows($result);

			//신청조회 후 중복확인
/*			if($pageType == '1') {
				$returnMsg = '신청기한이 종료되었습니다.';
/*
				if($num > 0){
					$returnMsg = '이미 신청이 되어있습니다.';
					echo $returnMsg;
					exit;
				}
*/
			//신청조회 후 빈값확인
/*			}elseif($pageType == '2') {
				if($num == 0){
					$returnMsg = '신청이 되어있지 않습니다.';
					echo $returnMsg;
					return;
				}
			}
*/
        }
    }

?>

<?

    //********************************************************************************************
    //해당 함수에서 에러 발생 시 $len => (int)$len 로 수정 후 사용하시기 바랍니다. (하기소스 참고)
    //********************************************************************************************
	
    function GetValue($str , $name) 
    {
        $pos1 = 0;  //length의 시작 위치
        $pos2 = 0;  //:의 위치

        while( $pos1 <= strlen($str) )
        {
            $pos2 = strpos( $str , ":" , $pos1);
            $len = substr($str , $pos1 , $pos2 - $pos1);
            $key = substr($str , $pos2 + 1 , (int)$len);
            $pos1 = $pos2 + (int)$len + 1;
            if( $key == $name )
            {
                $pos2 = strpos( $str , ":" , $pos1);
                $len = substr($str , $pos1 , $pos2 - $pos1);
                $value = substr($str , $pos2 + 1 , (int)$len);
                return $value;
            }
            else
            {
                // 다르면 스킵한다.
                $pos2 = strpos( $str , ":" , $pos1);
                $len = substr($str , $pos1 , $pos2 - $pos1);
                $pos1 = $pos2 + (int)$len + 1;
            }            
        }
    }

?>

<!doctype html>
<html lang="en">
<head>
<script src="/module/js/jquery-1.11.3.min.js"></script>

<?if($returnMsg){?>
<script>

	$(document).ready(function () {
		opener.GblMsgBox('<?=$returnMsg?>','');
		self.close();
	});

</script>

<?}else{?>
<script>
$(document).ready(function () {
	pageType = opener.$('#pageType').val();

	//신청페이지
	if(pageType == '1'){
		opener.$('#FRM').append('<input type="hidden" name="dupInfo" value="<?=$dupInfo?>">');
		opener.$('#FRM').append('<input type="hidden" name="name" value="<?=$name?>">');
		opener.$('#FRM').submit();
		self.close();

	//조회페이지
	}else if(pageType == '2'){
		opener.$('#FRM1').append('<input type="hidden" name="dupInfo" value="<?=$dupInfo?>">');
		opener.$('#FRM1').append('<input type="hidden" name="name" value="<?=$name?>">');
		opener.$('#FRM1').submit();
		self.close();
	}
});
</script>
<?
	}
?>
</head>

<body>
</body>
</html>
