<?
	$query = "select * from ks_member where uid='$uid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
		$uid = $row['uid'];
		$email = $row['email'];
		$randCode = $row['randCode'];

		$name='한패스모바일';

	//보내는이
	$from_email = 'iwebzone@naver.com';
	$from_name = '=?UTF-8?B?'.base64_encode($name).'?=';



	//받는이
	$to_email = $email;
	$to_name = '=?UTF-8?B?'.base64_encode($name).'?=';


	$subject = '인증코드 발송';
	$subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

	$rDate = date('Y-m-d H:i:s');

	//실제전송파일
	$file_name = 'email.html';

	if($buffer = file_exists($file_name)){

		$sMessage = '';

		$fp = fopen($file_name, "r");

		if ($fp != NULL) {
			while(!feof($fp)){
				$sMessage .=  fread($fp,100);
			}
		}

		$sMessage = str_replace("#randCode", $randCode, $sMessage);
//		$sMessage = str_replace("#name", $name, $sMessage);

		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
	//	$headers .= "To: ".$to_name." <".$to_email.">\r\n";
		$headers .= "From: ".$from_name." <".$from_email.">\r\n";

		mail($to_email, $subject, $sMessage, $headers);
	}
?>