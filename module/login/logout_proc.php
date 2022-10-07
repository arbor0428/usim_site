<?

session_start();

unset($_SESSION["ses_member_id"]);
echo '/';
unset($_SESSION["ses_member_name"]);
unset($_SESSION["ses_member_cmod"]);
unset($_SESSION["ses_member_ctype"]);
unset($_SESSION["ses_member_pwd"]);
unset($_SESSION["ses_member_type"]);
unset($_SESSION["ses_member_code"]);

unset($_SESSION["ses_member_chk01"]);
unset($_SESSION["ses_member_chk02"]);
unset($_SESSION["ses_member_chk03"]);
unset($_SESSION["ses_member_chk04"]);



header("Location:/");

?>