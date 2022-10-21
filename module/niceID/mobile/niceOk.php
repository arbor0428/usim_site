<?php

	include '../../class/class.DbCon.php';
	include '../../class/class.Msg.php';
	include '../../class/class.Util.php';

    //**************************************************************************************************************
    //NICE������ Copyright(c) KOREA INFOMATION SERVICE INC. ALL RIGHTS RESERVED
    
    //���񽺸� :  üũ�÷��� - �Ƚɺ������� ����
    //�������� :  üũ�÷��� - ��� ������
    
    //������ ���� �����ص帮�� ������������ ���� ���� �� �������� ������ �ֽñ� �ٶ��ϴ�.
    //���� �� ������� null�� ������ �κ��� ��������ڿ��� ���� �ٶ��ϴ�.	
    //**************************************************************************************************************
    
    session_start();
	
    $sitecode = "FU05";				// NICE�κ��� �ο����� ����Ʈ �ڵ�
    $sitepasswd = "44327276";				// NICE�κ��� �ο����� ����Ʈ �н�����
	
	$returnMsg = '';
    
    // Linux = /������/ , Window = D:\\������\\ , D:\������\
	$cb_encode_path = "/home/hanpass/www/module/niceID/mobile/CPClient_64bit";
	
    $enc_data = $_REQUEST["EncodeData"];		// ��ȣȭ�� ��� ����Ÿ

		//////////////////////////////////////////////// ���ڿ� ����///////////////////////////////////////////////
    if(preg_match('~[^0-9a-zA-Z+/=]~', $enc_data, $match)) {echo "�Է� �� Ȯ���� �ʿ��մϴ� : ".$match[0]; exit;} // ���ڿ� ���� �߰�. 
    if(base64_encode(base64_decode($enc_data))!=$enc_data) {echo "�Է� �� Ȯ���� �ʿ��մϴ�"; exit;}

		///////////////////////////////////////////////////////////////////////////////////////////////////////////

    if ($enc_data != "") {

        $plaindata = `$cb_encode_path DEC $sitecode $sitepasswd $enc_data`;		// ��ȣȭ�� ��� �������� ��ȣȭ
//        echo "[plaindata]  " . $plaindata . "<br>";

        if ($plaindata == -1){
            $returnMsg  = "��/��ȣȭ �ý��� ����";
        }else if ($plaindata == -4){
            $returnMsg  = "��ȣȭ ó�� ����";
        }else if ($plaindata == -5){
            $returnMsg  = "HASH�� ����ġ - ��ȣȭ �����ʹ� ���ϵ�";
        }else if ($plaindata == -6){
            $returnMsg  = "��ȣȭ ������ ����";
        }else if ($plaindata == -9){
            $returnMsg  = "�Է°� ����";
        }else if ($plaindata == -12){
            $returnMsg  = "����Ʈ ��й�ȣ ����";
        }else{
            // ��ȣȭ�� �������� ��� �����͸� �Ľ��մϴ�.
            $ciphertime = `$cb_encode_path CTS $sitecode $sitepasswd $enc_data`;	// ��ȣȭ�� ��� ������ ���� (��ȣȭ�� �ð�ȹ��)

            $requestnumber = GetValue($plaindata , "REQ_SEQ");
            $responsenumber = GetValue($plaindata , "RES_SEQ");
            $authtype = GetValue($plaindata , "AUTH_TYPE");
//            $name = GetValue($plaindata , "NAME");
            $name = GetValue($plaindata , "UTF8_NAME"); //charset utf8 ���� �ּ� ���� �� ���
            $birthdate = GetValue($plaindata , "BIRTHDATE");
            $gender = GetValue($plaindata , "GENDER");
            $nationalinfo = GetValue($plaindata , "NATIONALINFO");	//��/�ܱ�������(����� �Ŵ��� ����)
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

				Msg::alert("���ǰ��� �ٸ��ϴ�. �ùٸ� ��η� �����Ͻñ� �ٶ��ϴ�.");
				exit;
            }

			$name = urldecode($name);

			//if($gender == '0')		$gender = '2';

			//$virtualNo = $ret[1];

			$userip = $_SERVER['REMOTE_ADDR'];
			$rDate = date('Y-m-d H:i:s');
			$rTime = time();
			$nType = 'join';

			//����� ����
			$sql = "insert into ks_nice_log (requestnumber,responsenumber,authtype,name,birthdate,gender,nationalinfo,dupInfo,conninfo,mobileno,mobileco,userip,rDate,rTime,plaindata,virtualNo,nType) values ('$requestnumber','$responsenumber','$authtype','$name','$birthdate','$gender','$nationalinfo','$dupInfo','$conninfo','$mobileno','$mobileco','$userip','$rDate','$rTime','$plaindata','$virtualNo','$nType')";
			$result = mysqli_query($dbc,$sql);

/*
			//����ȸ�� �ߺ�Ȯ��
			$sql = "select * from tb_member where mtype='M' and dupInfo='$dupInfo'";
			$result = mysqli_query($dbc,$query);
			$num = mysqli_num_rows($result);

			if($num > 0){
				$returnMsg = '�̹� ������ �Ǿ��ֽ��ϴ�.';
			}
*/
			$sql = "select * from ks_member where mtype='M' and dupInfo='$dupInfo'";
			$result = mysqli_query($dbc,$sql);
			$num = mysqli_num_rows($result);

			//��û��ȸ �� �ߺ�Ȯ��
/*			if($pageType == '1') {
				$returnMsg = '��û������ ����Ǿ����ϴ�.';
/*
				if($num > 0){
					$returnMsg = '�̹� ��û�� �Ǿ��ֽ��ϴ�.';
					echo $returnMsg;
					exit;
				}
*/
			//��û��ȸ �� ��Ȯ��
/*			}elseif($pageType == '2') {
				if($num == 0){
					$returnMsg = '��û�� �Ǿ����� �ʽ��ϴ�.';
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
    //�ش� �Լ����� ���� �߻� �� $len => (int)$len �� ���� �� ����Ͻñ� �ٶ��ϴ�. (�ϱ�ҽ� ����)
    //********************************************************************************************
	
    function GetValue($str , $name) 
    {
        $pos1 = 0;  //length�� ���� ��ġ
        $pos2 = 0;  //:�� ��ġ

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
                // �ٸ��� ��ŵ�Ѵ�.
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

	//��û������
	if(pageType == '1'){
		opener.$('#FRM').append('<input type="hidden" name="dupInfo" value="<?=$dupInfo?>">');
		opener.$('#FRM').append('<input type="hidden" name="name" value="<?=$name?>">');
		opener.$('#FRM').submit();
		self.close();

	//��ȸ������
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
