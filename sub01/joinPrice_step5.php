<?
	include '../header.php';
?>
<style>
	.subWrap02 .joinStepShow li:last-child {
		padding: 15px 31px;
		background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
		color: #fff;
		box-shadow: 0 3px 5px 0 #dedede;
		-webkit-box-shadow: 0 3px 5px 0 #dedede;
	}
	@media (max-width:1023px){
		.subWrap02 .m_joinStepShow li:last-child {
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
		<div class="c_center">
			<p class="step_tit">5. 신청서 확인</p>
		</div>

		
	<!-- 			후불 가입일때 보여져야 함
		<?
			include 'afterPayBar.php';
		?> -->

		<div class="c_center">
			<p class="step_tit">4. 신청서 확인</p>
		</div>
	</div>
	<div class="wht01 p-72 p_50 m_28">
		<div class="c_center">
			<p class="perRequest m_36">
				<span class="c_blue nm">한패스 님,</span>
				신청서를 확인해 주세요.
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
			<p class="minibx">가입 정보</p>
			<table class="subtable subtable02">
				<tbody>
					<tr>
						<th>요금제 구분</th>
						<td>선불</td>
					</tr>
					<tr>
						<th>가입 유형</th>
						<td>번호 이동</td>
					</tr>
					<tr>
						<th>유심보유</th>
						<td>기존 유심 사용</td>
					</tr>
					<tr>
						<th>제휴 혜택</th>
						<td>선택 안함</td>
					</tr>
					<tr>
						<th>희망번호</th>
						<td>기존 번호</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="wht01 p-72 p_50 m_28 m-p50">
		<div class="c_center">
			<p class="minibx">월 요금 금액</p>
			<p class="priceInfoTit dp_sb bold2 dp_end">
				<span class="c_blue priceT">29,000 원</span>
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
			<p>* 제휴 카드 납부 시 전월 사용 실적에 따라 월 요금에서 추가 할인됩니다.</p>
		</div>
	</div>
	
	<!--후불 가입 일 때 나타나야함-->
	<p style="font-weight: 700; color: #ff0000;">후불가입 일 때 나타나는 영역(지워질 글입니다.)</p>
	<div class="wht01 p-72 p_50 m_28 m-p50">
		<div class="c_center">
			<p class="minibx">명세서 유형/납부방법</p>
			<table class="subtable subtable02">
				<tbody>
					<tr>
						<th>명세서 유형</th>
						<td>이메일 명세서</td>
					</tr>
					<tr>
						<th>납부방법</th>
						<td>신용카드 자동납부</td>
					</tr>
					<tr>
						<th>카드번호</th>
						<td>1234 - ****</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!--후불 가입 일 때 나타나야함-->

	<div class="wht01 p-72 p_50 m_28 m-p50">
		<div class="c_center">
			<p class="minibx">유의 사항</p>
			<ul class="dotlist m_45">
				<li>신청이 집중되는 경우 개통처리에 영업일 기준 1 ~ 2일이 소요될 수 있습니다. 고객님의 양해를 부탁드립니다.</li>
				<li>개통 신청을 완료하시면 한패스모바일 개통센터 운영기간 내에 순차적으로 개통 처리됩니다.</li>
				<li>
					개통 센터 운영 시간 : 월 ~ 토 : 10:00 ~ 19:00<br>
					(점심시간 : 13:00 ~ 14:00, 일요일/공휴일 휴무)
				</li>
			</ul>
			<div class="dp_sb dp_c">
				<a class="submitBtn02 gry03 c_w" href="" title="">임시저장</a>
				<a class="submitBtn02 gradient c_w" href="./joinPrice_step_final.php" title="가입신청완료/개통 요청">가입신청완료/개통 요청</a>
			</div>
		</div>
	</div>

	

</div>
<?
	include '../footer.php';
?>