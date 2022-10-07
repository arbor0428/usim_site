<?
	include '../header.php';
?>
	<style>
		.subWrap02 .joinStepShow li:nth-child(1) {
			padding: 15px 31px;
			background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
			color: #fff;
			box-shadow: 0 3px 5px 0 #dedede;
			-webkit-box-shadow: 0 3px 5px 0 #dedede;
		}
		@media (max-width:1023px){
			.subWrap02 .m_joinStepShow li:nth-child(1) {
				background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
				color: #fff;
				box-shadow: 0 3px 5px 0 #dedede;
				-webkit-box-shadow: 0 3px 5px 0 #dedede;
			}
		}
	</style>
	<div class="subWrap02">
		<div class="wht01">
			<h3 class="sub_tit bold2">요금제 가입</h3>
			<div class="c_center">
				<div class="joinKindWrap">
					<a class="joinKindBtn dp_f dp_c dp_cc" href="./joinPrice_step1.php" title="">
						선불 가입 하기
					</a>
					<a class="joinKindBtn dp_f dp_c dp_cc" href="./joinPrice_step1.php" title="">
						후불 가입 하기
					</a>
				</div>
			</div>
		</div>
	</div>
<?
	include '../footer.php';
?>