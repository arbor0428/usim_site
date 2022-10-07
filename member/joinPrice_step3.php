<?
	include '../header.php';
?>
<style>
	.subWrap02 .joinStepShow li:nth-child(5) {
		padding: 15px 31px;
		background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
		color: #fff;
		box-shadow: 0 3px 5px 0 #dedede;
		-webkit-box-shadow: 0 3px 5px 0 #dedede;
	}
	@media (max-width:1023px){
		.subWrap02 .m_joinStepShow li:nth-child(5) {
			background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
			color: #fff;
			box-shadow: 0 3px 5px 0 #dedede;
			-webkit-box-shadow: 0 3px 5px 0 #dedede;
		}
	}
</style>
<div class="subWrap02 gry01">
	<div class="wht01">
		<h3 class="sub_tit bold2">요금제 가입</h3>
		<!--선불 가입일때 보여져야 함-->
		<?
			include 'prePayBar.php';
		?>

	<!-- 			후불 가입일때 보여져야 함
		<?
			include 'afterPayBar.php';
		?> -->
		<div class="c_center">
			<p class="step_tit">3. 가입 정보</p>
		</div>
	</div>
	<div class="wht01 p-72 p_20 m_28 m-p0">
		<div class="c_center">
			<p class="joinSubTit">가입자 정보</p>
			<div class="inputWrap">
				<label class="minibx" for="name">가입자 이름</label>
				<input id="name" type="text" placeholder="이름(NAME)">
			</div>
			<div class="inputWrap">
				<label class="minibx" for="regiNum">연락가능 전화번호</label>
				<input id="regiNum" type="text">
				<span class="status c_red">※ 번호이동(선 개통 진행시) 고객님은 이동하실 번호 이외에 택배사 연락 받으실 수 있는 추가 연락처로 기재 부탁드립니다.</span>
			</div>
		</div>
	</div>
	<div class="wht01 m_28 p_20 m-p0">
		<div class="c_center">
			<p class="joinSubTit">유심카드 번호를 입력해 주세요.</p>
			<div class="cetifiWrap">
				<p class="minibx bold2">유심 카드 번호</p>
				<div class="inputWrap dp_sb">
					<select name="" id="tab-select">
						<option value="x">유심모델</option>
						<option value="0" id="tab1">kind1</option>
						<option value="1">kind2</option>
					</select>

					<input id="" type="text" placeholder="유심 카드 숫자 입력">
				</div>
			</div>
			<div class="showWayWrap">
                <div id="tab01" class="showWayBox gry04">
                    <div class="showWayTit">※ 유심카드 뒷면에 적힌 숫자를 확인해 주세요.</div>
                    <img src="../images/usimInfo01.png" alt="신용카드">
                </div>
                <div id="tab02" class="showWayBox gry04">
                    <div class="showWayTit">※ 유심카드 뒷면에 적힌 숫자를 확인해 주세요.</div>
                    <img src="../images/usimInfo02.png" alt="계좌번호">
                </div>
            </div>
		</div>
	</div>
	<div class="wht01 p_20 m_28">
		<div class="c_center">
			<p class="joinSubTit">전화 번호를 입력해 주세요.</p>
			<div class="m_45">
				<ul class="dotlist">
					<li>희망하시는 전화번호 뒤 4자리 번호를 입력해 주세요.</li>
					<li>0000, 1111, 1004 등 선호되는 특수한 번호는 불가하며, 희망번호로 개통이 어려운 경우 유사한 번호로 임의 부여됩니다.</li>
				</ul>
			</div>
			<div class="inputWrap">
				<label class="minibx" for="regiNum02">전화 번호</label>
				<input id="regiNum02" type="text" placeholder="번호 이동시 기존 전화 번호 표시">
			</div>
		</div>
	</div>

	<!--선불 가입 일 때 나타나야함-->
	<p style="font-weight: 700; color: #ff0000;">선불 가입 일 때 나타나는 영역(지워질 글입니다.)</p>
	<div class="wht01 p-50 p_50 m_28 m-p50">
		<div class="c_center">
			<div class="prehopeNmBx gry01">
				<p class="joinSubTit">희망 번호를 입력해 주세요.</p>
				<ul class="dotlist m_45">
					<li>희망하시는 전화번호 뒤 4자리 번호를 입력해 주세요.</li>
					<li>0000, 1111, 1004 등 선호되는 특수한 번호는 불가하며, 희망번호로 개통이 어려운 경우 유사한 번호로 임의 부여됩니다.</li>
				</ul>
				<div class="inputWrap">
					<label class="minibx" for="hopeNm">희망 번호</label>
					<input id="hopeNm" type="text" placeholder="희망 전화번호 입력">
				</div>
				<ul class="dotlist">
					<li>희망번호를 입력하지 않은 경우 임의의 번호로 부여됩니다.</li>
				</ul>
			</div>
			<a class="submitBtn gradient c_w" href="./joinPrice_step4.php" title="다음">다음</a>
		</div>
	</div>
	<!--선불 가입 일 때 나타나야함-->

	<!--후불 가입 일 때 나타나야함-->
	<p style="font-weight: 700; color: #ff0000;">후불가입 일 때 나타나는 영역(지워질 글입니다.)</p>
	<div class="wht01 p_50 m_28 m-p0">
		<div class="c_center">
			<p class="joinSubTit">요금을 납부할 방법을 선택하세요.</p>
			<p class="minibx">요금 납부방식</p>
			<div class="kindBtnWrap">
				<ul class="kindBox">
					<li class="dp_sb dp_c">
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_1"><input type="radio" name="c_box3" id="c_box3_1" onclick="c_box3(this.name,0);">신용카드 자동납부</label>
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_2"><input type="radio" name="c_box3" id="c_box3_2" onclick="c_box3(this.name,1);">은행계좌 자동이체</label>
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_3"><input type="radio" name="c_box3" id="c_box3_3" onclick="c_box3(this.name,2);">한패스 자동납부</label>
					</li>
				</ul>
				<ul class="dotlist m_45">
					<li>본인 명의의 카드 또는 계좌 정보를 입력해주세요.<br>타인 명의의 납수수단 정보를 입력하는 경우, 개통 전 명의자 동의 및 신분증 제출 등 추가 확인 절차가 진행됩니다.</li>
				</ul>
				<div class="inputWrap">
					<label class="minibx" for="cardNm">카드 번호</label>
					<input id="cardNm" type="text" placeholder="숫자만 입력">
				</div>
				<div class="inputWrap">
					<label class="minibx" for="regiPer">유효 기간</label>
					<input id="regiPer" type="text" placeholder="MMYY">
				</div>
				<a class="submitBtn gradient c_w" href="./billReceive.php" title="다음">다음</a>
			</div>
		</div>
	</div>
	<!--후불 가입 일 때 나타나야함-->

</div>

<script>
	function c_box3(obj,chk){
		eChk = document.getElementsByName(obj);

		for(var i=0;i<eChk.length;i++){
			var jjj=i+1
			if(i == chk){
				eChk[i].checked = true;
				$('#c_box3_'+jjj).parent().addClass('active');
			}else{
				eChk[i].checked = false;
				$('#c_box3_'+jjj).parent().removeClass('active');
			}
		}
	}
</script>

<script>
    /* select tab function */
        
    var selectTab = document.getElementById("tab-select"); // select 저장
        
    var con = document.getElementsByClassName("showWayBox"); // select 에 대응하는 콘텐츠 요소들 저장
        
    selectTab.addEventListener("change",function(){ // select가 변화할 때 
        
        var val = selectTab.options[selectTab.selectedIndex].value; // option value값
        
        for (var i = 0;i<selectTab.length-1; i++){ // select가 4개, 콘텐츠가 3개이기때문에 length-1 
            
        con[i].style.display = "none" ;    // 콘텐츠 모두 숨김
            
            if(val == i ) { // select에 해당하는 콘텐츠가 보여짐
                
                con[i].style.display = "block" ;
                
            } 
        }
    });    
</script>

<?
	include '../footer.php';
?>