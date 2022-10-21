<style>
* {margin:0; padding:0; font-family: 'Lato', sans-serif;}
ul,li {list-style:none;}
a {text-decoration:none;}
img {vertical-align:top;}
body {position:relative; line-height:1;}


#login_container .videowrap {position:relative; width:100vw; height:100vh; overflow:hidden; background-color: #000;}
#login_container .videowrap video {position:absolute; top:50%; left:50%; width: 100%; transform:translate(-50%,-50%);}
#login_container .videowrap .video_bg {position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #fbf4ef;}

#login_container .homeBtn {position: absolute; top: 60px; right: 80px; display: block; width: 55px; height: 55px; background-image: url(../images/home.png); background-repeat: no-repeat; background-size: 100% 100%; background-position: center center; text-indent: -9999px;}

#login_container .loginWrap {position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%);}
#login_container .loginWrap .logo {margin-bottom: 65px;text-align:center;}
#login_container .loginWrap .logo a {display: block; width: 450px; text-align:center; font-size:30px; color:#fff;}
#login_container .loginWrap .useBtn {display: none; margin: 0 auto; width: 290px; height: 55px; line-height: 55px; border-radius: 25px; background-color: #4d64fe; color: #fff; text-align: center; letter-spacing:2px; font-size: 1.2em; transition: all 0.3s;}
#login_container .loginWrap .useBtn:hover {background-color: #203470;}
#login_container .loginWrap .useBtn.on {/*background-color: #203470; opacity: 0.5;*/ display:none;}
#login_container .loginWrap .loginBox {display: block; /*background-color:#4d64fe;*/ background-color:rgba(255,255,255,.8); padding:10px 0 50px 0; border-radius:20px;}
#login_container .loginWrap .loginBox h2 {margin-top: 60px; text-align: center; font-size: 1.25em; color: #01010d;}
#login_container .loginWrap .id_box {width: 280px; margin: 30px auto 20px;}
#login_container .loginWrap .pass_box {width: 280px; margin: 20px auto;}
#login_container .loginWrap #login_btn {display:block; width: 150px; margin: 40px auto 20px; height: 45px; line-height: 45px; border: none; border-radius: 30px; background-color: #4d64fe; color: #fff; text-align: center; letter-spacing:2px; font-size: 1.2em; cursor: pointer; transition: all 0.3s;}
#login_container .loginWrap #login_btn:hover {background-color: #203470;}
#login_container .loginWrap .id_box input {font-size:1rem;}
#login_container .loginWrap .pass_box input {font-size:1.1rem;}

#login_container .loginWrap .dt {font-size: 0.6em; color: #fff; text-align: center;}


@media (max-width: 1619px){
  #login_container .videowrap video {width: 120%;}
}

@media (max-width: 1360px){
  #login_container .videowrap video {width: 140%;}
}

@media (max-width: 1172px){
  #login_container .videowrap video {width: 180%;}
}

@media (max-width: 920px){
  #login_container .videowrap video {width: 220%;}
}

@media (max-width: 920px){
  #login_container .videowrap video {width: 300%; left: 97%;}
}

@media (max-width: 560px){
  #login_container .videowrap video {width: 350%; }
}

@media (max-width: 460px){
  #login_container .videowrap video {width: 400%;}
  #login_container .loginWrap .logo a {width: 350px;}
  #login_container .loginWrap .useBtn {width: 274px; font-size: 1em;}
  #login_container .loginWrap .id_box {width: 274px;}
  #login_container .loginWrap .pass_box {width: 274px;}
  #login_container .loginWrap  input::placeholder {font-size: 1em;}
  #login_container .loginWrap #login_btn {font-size: 1.1em;}
}

@media (max-width: 370px){
  #login_container .videowrap video {width: 500%; left: 114%;}
  #login_container .loginWrap .logo a {width: 290px;}
  #login_container .loginWrap .useBtn {width: 250px; height: 50px; line-height: 50px; font-size: 0.95em;}
  #login_container .loginWrap .id_box {width: 250px;}
  #login_container .loginWrap .pass_box {width: 250px;}
  #login_container .loginWrap  input::placeholder {font-size: 0.95em;}
  #login_container .loginWrap #login_btn {height: 40px; line-height: 40px; font-size: 1em;}
  
}

</style>

<script>
function masterLogin(){
	form = document.frmLogin;

	if(isFrmEmptyModal(form.userid,"아이디를 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.passwd,"비밀번호를 입력해 주십시오."))	return;

	form.target = 'ifra_gbl';
	form.submit();
}
</script>

</head>

<body>
    <div id="login_container">
        <div class="videowrap">
		<!--
            <video autoplay loop muted playsinline>
                <source src="/adm/img/video.mp4">
            </video>
		-->
            <div class="video_bg"><!--video bg--></div>
        </div>
        <div class="loginWrap">

			<form name='frmLogin' class="user" method='post' action='/module/login/login_proc.php'>
			<input type='text' style='display:none;'>
			<input type='hidden' name='next_url' value="<?=$_SERVER['PHP_SELF']?>">
				
                <h1 class="logo"><a href="/adm/"><img src='/images/logo_blk.png'></a></h1>
                <a class="useBtn" href="#" title="useBtn">Click here!</a>
                <div class="loginBox">
                    <h2>관리자 로그인</h2>

                    <div class="id_box">
						<div class="form-group">
							<input type="text" name="userid" id="userid" class="form-control form-control-user" placeholder="아이디" onkeypress="if(event.keyCode==13){masterLogin();}">
						</div>
                    </div>
                    <div class="pass_box">
						<div class="form-group">
							<input type="password" name="passwd" id="passwd" class="form-control form-control-user" placeholder="비밀번호" onkeypress="if(event.keyCode==13){masterLogin();}">
						</div>
                    </div>
                    <!--<input id="login_btn" type="submit" value="LOG IN">-->
					<a id="login_btn" href="javascript:masterLogin();">접속하기</a>
                </div>
            </form>
        </div>
    </div>
</body>


<script>
$(function(){
    //처음에 스크롤바 위치 0
    $(window).on("load",function(){

        $("html,body").stop().animate({"scrollTop":0},10); 
        
    });
    
    $(".useBtn").on("click",function(event){

        event.preventDefault();
        $(".loginBox").stop().slideDown();
		
        //$(".useBtn").addClass("on");
		$(".useBtn").hide();
		alert("LOG IN 버튼을 클릭해주세요");
    });
});
</script>


<?
	include '../module/popupoverlay.php';
?>
