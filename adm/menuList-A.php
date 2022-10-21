<script>
function pointConfig(){
	$("#multiBox").css({"width":"90%","max-width":"550px"});
	$('#multi_ttl').text('포인트 설정');
	$('#multiFrame').html("<iframe src='/adm/shop/pointConfig.php' name='configFrame' style='width:100%;height:400px;' frameborder='0' scrolling='auto'></iframe>");
	$('.multiBox_open').click();
}

function DeliveryConfig(){
	$("#multiBox").css({"width":"90%","max-width":"550px"});
	$('#multi_ttl').text('택배사 관리');
	$('#multiFrame').html("<iframe src='/adm/shop/DeliveryConfig.php' name='configFrame' style='width:100%;height:460px;' frameborder='0' scrolling='auto'></iframe>");
	$('.multiBox_open').click();
}

function PrivacyConfig(){
	$("#multiBox").css({"width":"90%","max-width":"550px"});
	$('#multi_ttl').text('개인정보유효기간제 설정');
	$('#multiFrame').html("<iframe src='/adm/shop/PrivacyConfig.php' name='configFrame' style='width:100%;height:200px;' frameborder='0' scrolling='auto'></iframe>");
	$('.multiBox_open').click();
}
</script>







	<li class="nav-item  <?=$sideArr[1]?>">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subList1" aria-expanded="true" aria-controls="subList1">
			<span class="lnr lnr-users"> 이용자관리</span>
		</a>
		<div id="subList1" class="collapse <?=$showArr[1]?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item <?=$subArr['user']?>" href="/adm/user/">일반회원</a>
				<a class="collapse-item <?=$subArr['stylist']?>" href="/adm/stylist/">스타일리스트</a>
			</div>
		</div>
	</li>

	<li class="nav-item  <?=$sideArr[2]?>">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subList2" aria-expanded="true" aria-controls="subList2">
			<span class="lnr lnr-shirt"> 상품관리</span>
		</a>
		<div id="subList2" class="collapse <?=$showArr[2]?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item <?=$subArr['product']?>" href="/adm/product/">상품관리</a>
				<a class="collapse-item <?=$subArr['itemCode']?>" href="/adm/itemCode/">상품분류</a>
				<a class="collapse-item <?=$subArr['inven']?>" href="/adm/inven/">재고관리</a>
			</div>
		</div>
	</li>

	<li class="nav-item <?=$sideArr[3]?>">
		<a class="nav-link" href="/adm/orderList/">
			<span class="lnr lnr-select"> 주문관리</span>
		</a>
	</li>

	<li class="nav-item <?=$sideArr[4]?>">
		<a class="nav-link" href="/adm/payment/">
			<span class="lnr lnr-layers"> 결제관리</span>
		</a>
	</li>

	<li class="nav-item <?=$sideArr[5]?>">
		<a class="nav-link" href="/adm/pointList/">
			<span class="lnr lnr-database"> 포인트 내역</span>
		</a>
	</li>

	<li class="nav-item <?=$sideArr[6]?>">
		<a class="nav-link" href="/adm/coupon/">
			<span class="lnr lnr-book"> 쿠폰관리</span>
		</a>
	</li>

	<li class="nav-item <?=$sideArr[7]?>">
		<a class="nav-link" href="/adm/alimtalk/">
			<span class="lnr lnr-bubble"> 알림톡 내역</span>
		</a>
	</li>

	<li class="nav-item  <?=$sideArr[8]?>">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subList6" aria-expanded="true" aria-controls="subList6">
			<span class="lnr lnr-cog"> 상점관리</span>
		</a>
		<div id="subList6" class="collapse <?=$showArr[8]?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item <?=$subArr['popup']?>" href="/adm/popup/">팝업관리</a>
				<a class="collapse-item" href="javascript:pointConfig();">포인트 설정</a>
				<a class="collapse-item" href="javascript:DeliveryConfig();">택배사 관리</a>
				<a class="collapse-item" href="javascript:PrivacyConfig();">개인정보유효기간제 설정</a>
			</div>
		</div>
	</li>

	<li class="nav-item  <?=$sideArr[9]?>">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subList7" aria-expanded="true" aria-controls="subList7">
			<span class="lnr lnr-phone-handset"> 고객센터</span>
		</a>
		<div id="subList7" class="collapse <?=$showArr[9]?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item <?=$subArr['contact']?>" href="/adm/contact/">제휴문의</a>
				<a class="collapse-item <?=$subArr['review']?>" href="/adm/review/">리뷰관리</a>
				<a class="collapse-item <?=$subArr['faq']?>" href="/adm/faq/">FAQ관리</a>
				<a class="collapse-item" href="https://admin8.kcp.co.kr/" target="_blank">KCP 상점관리자</a>				
			</div>
		</div>
	</li>