<?php
//ȸ�����Կ�
    //**************************************************************************************************************
    //NICE������ Copyright(c) KOREA INFOMATION SERVICE INC. ALL RIGHTS RESERVED
    
    //���񽺸� :  üũ�÷��� - �Ƚɺ������� ����
    //�������� :  üũ�÷��� - ���� ȣ�� ������
    
    //������ ���� �����ص帮�� ������������ ���� ���� �� �������� ������ �ֽñ� �ٶ��ϴ�.
    //��ȭ�� ���� : IP 121.131.196.215 , Port 80, 443     
    //**************************************************************************************************************

	session_start();
   
    $sitecode = "FU05";						// NICE�κ��� �ο����� ����Ʈ �ڵ�

    $sitepasswd = "44327276";			// NICE�κ��� �ο����� ����Ʈ �н�����
    
    // Linux = /������/ , Window = D:\\������\\ , D:\������\
	$cb_encode_path = "/home/hanpasss/www/module/niceID/mobile/CPClient_64bit";


	/*
	�� cb_encode_path ������ ���� ����  ��������������������������������������������������������������������
		��� ��μ�����, '/������/����' ���� ������ �ּž� �մϴ�.
		
		+ FTP �� ��� ���ε�� �������¸� 'binary' �� ������ �ֽð�, ������ 755 �� ������ �ּ���.
		
		+ ������ Ȯ�ι��
		  1. Telnet �Ǵ� SSH ���� ��, cd ��ɾ �̿��Ͽ� ����� �����ϴ� ������ �̵��մϴ�.
		  2. pwd ��ɾ��� �̿��ϸ� �����θ� Ȯ���Ͻ� �� �ֽ��ϴ�.
		  3. Ȯ�ε� �����ο� '/����'�� �߰��� ������ �ּ���.
	������������������������������������������������������������������������������������������������������������������������������������������
	*/
    
    $authtype = "";      		// ������ �⺻ ����ȭ��, X: ����������, M: �ڵ���, C: ī�� (1������ ��� ����)
    	
    $popgubun 	= "N";		//Y : ��ҹ�ư ���� / N : ��ҹ�ư ����
    $customize 	= "";		//������ �⺻ �������� / Mobile : ����������� (default���� ��, ȯ�濡 �´� ȭ�� ����)
    
    $gender = "";      		// ������ �⺻ ����ȭ��, 0: ����, 1: ����
	
    $reqseq = "REQ_".time();     // ��û ��ȣ, �̴� ����/�����Ŀ� ���� ������ �ǵ����ְ� �ǹǷ�
                                    // ��ü���� �����ϰ� �����Ͽ� ���ų�, �Ʒ��� ���� �����Ѵ�.
									
    // �������� �̱�����(`) �ܿ���, 'exec(), system(), shell_exec()' ��� �ͻ� ��å�� �°� ó���Ͻñ� �ٶ��ϴ�.
    $reqseq = `$cb_encode_path SEQ $sitecode`;
    
    // CheckPlus(��������) ó�� ��, ��� ����Ÿ�� ���� �ޱ����� ���������� ���� http���� �Է��մϴ�.
    // ����url�� ���� �� ������������ ȣ���ϱ� �� url�� �����ؾ� �մϴ�. ex) ���� �� url : http://www.~ ���� url : http://www.~


if($_SERVER['SERVER_PORT'] == '443'){ // https �⺻��Ʈ 443
    $returnurl = "https://".$_SERVER['HTTP_HOST']."/module/niceID/mobile/niceOk.php";		// ������ �̵��� URL
    $errorurl = "https://".$_SERVER['HTTP_HOST']."/module/niceID/mobile/niceFail.php";		// ���н� �̵��� URL
}else{
    $returnurl = "http://".$_SERVER['HTTP_HOST']."/module/niceID/mobile/niceOk.php";		// ������ �̵��� URL
    $errorurl = "http://".$_SERVER['HTTP_HOST']."/module/niceID/mobile/niceFail.php";			// ���н� �̵��� URL
}



/*
	$type = $_POST['type'];
	
	if($type == 'join')					$returnurl .= "niceOk1.php";		//����ȸ������
	elseif($type == 'joinCo')		$returnurl .= "niceOk2.php";		//���ȸ������
	elseif($type == 'joinMy')		$returnurl .= "niceOk3.php";		//����ȸ����������
	elseif($type == 'joinCoMy')	$returnurl .= "niceOk4.php";		//���ȸ����������
*/

    // reqseq���� ������������ �� ��� ������ ���Ͽ� ���ǿ� ��Ƶд�.
    
    $_SESSION["REQ_SEQ"] = $reqseq;
    

    // �Էµ� plain ����Ÿ�� �����.
    $plaindata = "7:REQ_SEQ" . strlen($reqseq) . ":" . $reqseq .
				 "8:SITECODE" . strlen($sitecode) . ":" . $sitecode .
				 "9:AUTH_TYPE" . strlen($authtype) . ":". $authtype .
				 "7:RTN_URL" . strlen($returnurl) . ":" . $returnurl .
				 "7:ERR_URL" . strlen($errorurl) . ":" . $errorurl .
				 "11:POPUP_GUBUN" . strlen($popgubun) . ":" . $popgubun .
				 "9:CUSTOMIZE" . strlen($customize) . ":" . $customize .
				 "6:GENDER" . strlen($gender) . ":" . $gender ;
    


    $enc_data = `$cb_encode_path ENC $sitecode $sitepasswd $plaindata`;

    $returnMsg = "";

    if( $enc_data == -1 )
    {
        $returnMsg = "��/��ȣȭ �ý��� �����Դϴ�.";
        $enc_data = "";
    }
    else if( $enc_data== -2 )
    {
        $returnMsg = "��ȣȭ ó�� �����Դϴ�.";
        $enc_data = "";
    }
    else if( $enc_data== -3 )
    {
        $returnMsg = "��ȣȭ ������ ���� �Դϴ�.";
        $enc_data = "";
    }
    else if( $enc_data== -9 )
    {
        $returnMsg = "�Է°� ���� �Դϴ�.";
        $enc_data = "";
    }

	$resArr = Array();
	$resArr['msg'] = $returnMsg;
	$resArr['data'] = $enc_data;

	echo json_encode($resArr);
?>