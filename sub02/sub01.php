<?
	include '../header.php';
?>
<div class="subWrap02 gry01">
   <div class="wht01 p_20 m_28">
      <h3 class="sub_tit bold2">유심 구매</h3>
      <div class="c_center">
         <p class="joinSubTit">구매자 정보를 입력해 주세요.</p>
         <div class="kindBtnWrap">
            <ul class="kindBox">
               <li class="dp_sb dp_c">
                  <span>유심선택</span>
                  <label class="dp_sb dp_c dp_cc active" for="c_box1_1"><input type="radio" name="c_box1" id="c_box1_1" onclick="c_box1(this.name,0);">일반 유심<br>4,400원</label>
                  <label class="dp_sb dp_c dp_cc" for="c_box1_2"><input type="radio" name="c_box1" id="c_box1_2" onclick="c_box1(this.name,1);">NFC 유심<br>7,700원</label>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="wht01 m_28 p-20 p_20">
      <div class="c_center">
         <div class="inputWrap">
            <label class="minibx" for="name">구매자 이름</label>
            <input id="name" type="text" placeholder="이름(NAME)">
         </div>
         <div class="inputWrap phoneInputWrap">
            <label class="minibx" for="">휴대폰 번호</label>
            <div class="phoneInput dp_sb wid100">
               <input type="text" placeholder="010">
               <input type="text" placeholder="">
               <input type="text" placeholder="">
            </div>
         </div>
         <div class="inputWrap">
            <label class="minibx" for="name">배송지 주소</label>
            <input id="name" type="text" placeholder="주소 검색">
         </div>
      </div>
   </div>
   <div class="wht01 p-20 m_28">
      <div class="c_center">
         <div class="br_bottom">
				<p class="priceInfoTit dp_sb bold2">
					결제 내역
					<span class="c_gry">* 부가세 포함</span>
				</p>
				<div class="items gry01">
					<dl>
						<dt>유심구매</dt>
						<dd>4,400 원</dd>
					</dl>
					<dl class="mb0">
						<dt class="c_blue">택배비</dt>
						<dd class="c_blue bold2">2,600원</dd>
					</dl>
				</div>
			</div>
         <div class="priceTotal dp_sb dp_end">
				<p class="priceInfoTit bold2">최종 결제 금액</p>
				<span class="c_blue m_30">7,000원</span>
			</div>
      </div>
   </div>
   <div class="wht01 p_20 m_28">
      <div class="c_center">
         <p class="joinSubTit">한패스 모바일  구매 이용약관에 동의 해주세요.</p>
         <div class="joinWrap02 wid100">
               <div class="chkAll">
                  <input id="chkAll01" type="checkbox" autocomplete="off">
                  <label for="chkAll01" class="bold2">(확인) 전체 약관에 모두 동의합니다.</label>
                  <p class="chkAllDet">(일괄동의) 주식회사 한패스인터내셔널의 통신가입 서비스 이용약관 및 개인정보 취급 방침, 정보광고전송 및 제33자 제공을 위한 이용. 취급위탁, 제공 및 정보광고 수신동의에 대하여 일괄적으로 동의합니다.</p>
               </div>
               <div class="yesChkWrap">
                  <div class="dp_sb dp_wrap">
                     <div class="yesChk blackChk">
                           <input id="yesChk01" type="checkbox" autocomplete="off">
                           <label for="yesChk01" class="medium c_gry03"><span class="c_red medium">*(필수)</span>통신서비스 이용약관</label>
                     </div>
                     <a class="yesLnk" href="" title="">
                           <span class="showCon c_gry03">내용보기</span>
                           <span class="lnr lnr-chevron-up c_gry03"></span>
                           <span class="lnr lnr-chevron-down c_gry03"></span>
                     </a>
                  </div>
                  <div class="yesFulldwn">
                     <!--약관동의내용보기---->	
                  </div>
               </div>
               <div class="yesChkWrap">
                  <div class="dp_sb dp_wrap">
                     <div class="yesChk blackChk">
                           <input id="yesChk02" type="checkbox" autocomplete="off">
                           <label for="yesChk02" class="medium c_gry03"><span class="c_red medium">*(필수)</span>개인정보 수집 및 이용 동의</label>
                     </div>
                     <a class="yesLnk" href="" title="">
                           <span class="showCon c_gry03">내용보기</span>
                           <span class="lnr lnr-chevron-up c_gry03"></span>
                           <span class="lnr lnr-chevron-down c_gry03"></span>
                     </a>
                  </div>
                  <div class="yesFulldwn">
                     <!--약관동의내용보기---->	
                  </div>
               </div>
               <div class="yesChkWrap">
                  <div class="dp_sb dp_wrap">
                     <div class="yesChk blackChk">
                           <input id="yesChk04" type="checkbox" autocomplete="off">
                           <label for="yesChk04" class="medium c_gry03"><span class="c_red medium">*(필수)</span>개인정보 제3자 제공 동의</label>
                     </div>
                     <a class="yesLnk" href="" title="">
                           <span class="showCon c_gry03">내용보기</span>
                           <span class="lnr lnr-chevron-up c_gry03"></span>
                           <span class="lnr lnr-chevron-down c_gry03"></span>
                     </a>
                  </div>
                  <div class="yesFulldwn">
                     <!--약관동의내용보기---->	
                  </div>
               </div>
               <div class="yesChkWrap">
                  <div class="dp_sb dp_wrap">
                     <div class="yesChk blackChk">
                           <input id="yesChk05" type="checkbox" autocomplete="off">
                           <label for="yesChk05" class="medium c_gry03"><span class="medium">(선택)</span>마케팅 정보 수신 동의</label>
                     </div>
                     <a class="yesLnk" href="" title="">
                           <span class="showCon c_gry03">내용보기</span>
                           <span class="lnr lnr-chevron-up c_gry03"></span>
                           <span class="lnr lnr-chevron-down c_gry03"></span>
                     </a>
                  </div>
                  <div class="yesFulldwn">
                     <!--약관동의내용보기---->	
                  </div>
               </div>
         </div>
      </div>
   </div>
   <div class="wht01 p-20 p_20 m_28">
      <div class="c_center">
         <p class="minibx">결제 방식</p>
         <div class="kindBtnWrap">
				<ul class="kindBox wid25">
					<li class="dp_sb dp_c">
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_1"><input type="radio" name="c_box3" id="c_box3_1" onclick="c_box3(this.name,0);">신용카드 자동납부</label>
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_2"><input type="radio" name="c_box3" id="c_box3_2" onclick="c_box3(this.name,1);">은행계좌 자동이체</label>
						<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_3"><input type="radio" name="c_box3" id="c_box3_3" onclick="c_box3(this.name,2);">가상계좌 입금</label>
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
         <a class="submitBtn gradient c_w" href="" title="결제하기">결제하기</a>
      </div>
   </div>
</div>

<script>
    //동의 상세 펼치기 접기
    $(".yesLnk").on("click",function(event){
        event.preventDefault();

        if($(this).hasClass("on")){

            $(this).removeClass("on");
            $(this).parent().siblings(".yesFulldwn").slideUp();
            $(this).children(".showCon").text("내용보기");

        } else {

            $(this).addClass("on");
            $(this).parent().siblings(".yesFulldwn").slideDown();
            $(this).children(".showCon").text("내용닫기");
        }
    });
    // 체크박스 전체 선택
    $(".joinWrap02").on("click", "#chkAll01", function () {
        var checked = $(this).is(":checked");

        if(checked){
            $(this).parents().parents(".joinWrap02").children(".yesChkWrap").children().children().find('input').prop("checked", true);
        } else {
            $(this).parents().parents(".joinWrap02").children(".yesChkWrap").children().children().find('input').prop("checked", false);
        }
    });

    function c_box1(obj,chk){
			eChk = document.getElementsByName(obj);

			for(var i=0;i<eChk.length;i++){
				var j=i+1
				if(i == chk){
					eChk[i].checked = true;
					$('#c_box1_'+j).parent().addClass('active');
				}else{
					eChk[i].checked = false;
					$('#c_box1_'+j).parent().removeClass('active');
				}
			}

		}

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

