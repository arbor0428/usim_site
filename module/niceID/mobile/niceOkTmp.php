<?php
	$dupInfo = "niceID".time();
	$name = "홍길동";
	$birthdate = '19880913';
	$bDate = substr($birthdate,0,4).'-'.substr($birthdate,4,2).'-'.substr($birthdate,6,2);
	$gender = rand(0,1);
	if($gender == 0)	$gender = 2;
	if($gender == 1)		$genderTxt = '남';
	elseif($gender == 2)	$genderTxt = '여';

	$mobileno = '01052103630';
	$mobile = substr($mobileno,0,3).'-'.substr($mobileno,3,4).'-'.substr($mobileno,7,4);
?>

<!doctype html>
<html lang="en">
<head>
<script src="/module/js/jquery-1.11.3.min.js"></script>

<script>
$(document).ready(function () {
	opener.$('#dupInfo').val("<?=$dupInfo?>");
	opener.$('#nameTmp,#name').val("<?=$name?>");
	opener.$('#bDateTmp,#bDate').val("<?=$bDate?>");
	opener.$('#genderTmp').val("<?=$genderTxt?>성");
	opener.$('#gender').val("<?=$genderTxt?>");
	opener.$('#mobileTmp,#mobile').val("<?=$mobile?>");

	//휴대폰 인증 버튼 숨기기
	opener.$('.userAuth').hide();

	self.close();
});
</script>

</head>
</html>