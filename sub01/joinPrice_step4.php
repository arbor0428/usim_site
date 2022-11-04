<?
	include '../header.php';
?>
<style>
	.subWrap02 .joinStepShow li:nth-child(7) {
		padding: 15px 31px;
		background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
		color: #fff;
		box-shadow: 0 3px 5px 0 #dedede;
		-webkit-box-shadow: 0 3px 5px 0 #dedede;
	}
	@media (max-width:1023px){
		.subWrap02 .m_joinStepShow li:nth-child(7) {
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
		<?
			include 'prePayBar.php';
		?>
		<div class="c_center">
			<p class="step_tit">4. 결제하기</p>
		</div>
	</div>
	<div class="wht01 p-72 p_50 m_28 m-p0">
		<div class="c_center">
			<p class="joinSubTit">결제 하기</p>
			<p class="perRequest m_36">
				<span class="c_blue nm">한패스 님,</span>
				결제를 진행해 주세요.
			</p>
			<div class="dp_f pricekindTit">
				<div class="priceImgWrap">
					<img src="../images/card1.png" alt="요금제 상세 이미지">
				</div>
				<div class="dp_f dp_c kindtitWrap">
					<div class="kindShowtit">
						<div class="dp_f dp_c dp_cc prepay c_blue m_20">선불</div>
						<p class="pay_tit bold2">요금제명 - 티티고 플러스</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wht01 p-72 p_50 m_28 m-p50">
		<div class="c_center">
			<p class="minibx m_45">결제 내역</p>
			<div class="br_bottom">
				<p class="priceInfoTit dp_sb bold2">
					월 요금 금액
					<span class="c_gry">* 부가세 포함</span>
				</p>
				<div class="items gry01">
					<dl>
						<dt>기본 요금</dt>
						<dd>36,300 원</dd>
					</dl>
					<dl class="mb0">
						<dt class="c_blue">프로모션 할인 금액</dt>
						<dd class="c_blue bold2">-7,300원</dd>
					</dl>
				</div>
			</div>
			<div class="priceTotal txt-r m_45">
				<span>29,000원</span>
			</div>

			<div class="br_bottom">
				<p class="priceInfoTit dp_sb bold2">
					상품 구매 금액
				</p>
				<div class="items">
					<dl>
						<dt>유심 구매</dt>
						<dd>0 원</dd>
					</dl>
					<dl>
						<dt class="c_blue">할인 금액</dt>
						<dd class="c_blue">-7,000원</dd>
					</dl>
					<dl>
						<dt>단말기 구매</dt>
						<dd>10,000원</dd>
					</dl>
					<dl>
						<dt class="c_blue">할인 금액</dt>
						<dd class="c_blue">-10,000원</dd>
					</dl>
					<dl>
						<dt>택배비</dt>
						<dd>0원</dd>
					</dl>
				</div>
			</div>

			<div class="priceTotal dp_sb dp_end">
				<p class="priceInfoTit bold2">최종 결제 금액</p>
				<span class="c_blue m_30">22,000원</span>
			</div>
		</div>
	</div>
	<div class="wht01 p-72 p_50 m_28 m-p50">
		<div class="c_center">
			<p class="minibx m_45">주소 확인</p>
			<table class="subtable subtable02">
				<tbody>
					<tr>
						<th>주소</th>
						<td>서울</td>
					</tr>
					<tr>
						<th>이름</th>
						<td>홍길동</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td>010-xxxx-xxxx</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="wht01 p-72 p_50 m_28 m-p50">
		<div class="c_center">
			<p class="minibx">결제 방식</p>
			<div class="kindBtnWrap">
				<ul class="kindBox wid24 dp_sb dp_c">
					<li>
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_1"><input type="radio" name="c_box3" id="c_box3_1" onclick="c_box3(this.name,0);">신용카드 자동납부</label>
					</li>
					<li>
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_2"><input type="radio" name="c_box3" id="c_box3_2" onclick="c_box3(this.name,1);">은행계좌 자동이체</label>
					</li>
					<li>
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_3"><input type="radio" name="c_box3" id="c_box3_3" onclick="c_box3(this.name,2);">가상계좌 입금</label>
					</li>
					<li>
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_4"><input type="radio" name="c_box3" id="c_box3_4" onclick="c_box3(this.name,3);">한패스 <br class="m_br">결제</label>
					</li>
				</ul>
				<ul class="dotlist m_45">
					<li>본인 명의의 카드 또는 계좌 정보를 입력해주세요.<br>타인 명의의 납수수단 정보를 입력하는 경우, 개통 전 명의자 동의 및 신분증 제출 등 추가 확인 절차가 진행됩니다.</li>
				</ul>
				<div class="payKindContWrap">
					<div class="payKindCont">
						<div class="inputWrap">
							<label class="minibx" for="cardNm">카드 번호</label>
							<input id="cardNm" type="text" placeholder="숫자만 입력">
						</div>
						<div class="inputWrap">
							<label class="minibx" for="regiPer">유효 기간</label>
							<input id="regiPer" type="text" placeholder="MMYY">
						</div>
					</div>
					<div class="payKindCont"></div>
					<div class="payKindCont"></div>
					<div class="payKindCont"></div>
				</div>
			</div>
			<a class="submitBtn gradient c_w" href="./joinPrice_step5.php" title="결제하기">결제하기</a>
		</div>
	</div>
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
			if(chk+1==1){	//tab기능
				$(".payKindContWrap .payKindCont").hide();
				$(".payKindContWrap .payKindCont:nth-child(1)").show(); //내국인 선택했을때
			}else if(chk+1==2){
				$(".payKindContWrap .payKindCont").hide();
				$(".payKindContWrap .payKindCont:nth-child(2)").show(); //외국인 선택했을때
			}else if(chk+1==3){
				$(".payKindContWrap .payKindCont").hide();
				$(".payKindContWrap .payKindCont:nth-child(3)").show(); //외국인 선택했을때
			}else if(chk+1==4){
				$(".payKindContWrap .payKindCont").hide();
				$(".payKindContWrap .payKindCont:nth-child(4)").show(); //외국인 선택했을때
			}
		}
	}
</script>
<?
	include '../footer.php';
?>