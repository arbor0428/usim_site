<?
	include '../header.php';
?>

<div class="subWrap02 mypageWrap">
   <div class="c_center">

      <h3 class="sub_tit bold2">나의 정보</h3>
      
      <p class="joinSubTit"><span>한패스</span>님 의 정보 수정</p>

      <div class="row dp_f dp_c">
         <div class="row_tit">
            아이디
         </div>
         <div class="row_det">
            <div class="inputWrap">
               <input type="text" placeholder="이메일 주소">
            </div>
         </div>
      </div>
      <div class="row dp_f dp_c">
         <div class="row_tit">
            비밀번호
         </div>
         <div class="row_det">
            <div class="passInputWrap dp_sb dp_c">
               <div class="inputWrap">
                  <input type="password">
               </div>
               <a class="passChk dp_f dp_c dp_cc gradient c_w" href="" title="비밀번호 확인">비밀번호 확인</a>
            </div>
         </div>
      </div>
      <div class="row dp_f dp_c">
         <div class="row_tit">
            이름
         </div>
         <div class="row_det">
            <div class="inputWrap">
               <input type="text" placeholder="">
            </div>
         </div>
      </div>
      <div class="row dp_f dp_c">
         <div class="row_tit">
            <span class="c_red">*</span>휴대폰 번호
         </div>
         <div class="row_det">
            <div class="inputWrap">
               <div class="phoneInputWrap dp_sb dp_c">
                  <div class="phoneInputBox dp_sb dp_c">
                     <input class="wid31" id="" type="text" name="phone01" value="010" readonly="" autocomplete="off">
                     &nbsp;-&nbsp;
                     <input class="wid31" id="" type="text" name="phone02" value="1234" readonly="" autocomplete="off">
                     &nbsp;-&nbsp;
                     <input class="wid31" id="" type="text" name="phone03" value="5678" readonly="" autocomplete="off">
                  </div>
                  <a class="passChk dp_f dp_c dp_cc gradient c_w" href="" title="본인 인증">본인 인증</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row dp_f dp_c">
         <div class="row_tit">
            <span class="c_red">*</span>이메일
         </div>
         <div class="row_det">
            <div class="inputWrap">
               <input id="id" type="text" name="userid" placeholder="아이디(이메일)" onkeypress="" autocomplete="off">
            </div>
         </div>
      </div>
      <div class="row dp_f dp_c">
         <div class="row_tit">
         <span class="c_red">*</span>주소
         </div>
         <div class="row_det">
            <div class="inputWrap">
               <input type="text" placeholder="주소 검색">
            </div>
         </div>
      </div>

      <p class="mypage_info gry02">※ 고객님의 회원정보를 변경하실 수 있습니다.  <br class="m_br">단, <span class="c_red">*</span> 표시는 필수 입력 사항이니 반드시 입력해 주세요.</p>
   
      <div class="mypageTwoBtn dp_sb dp_c">
         <a class="dp_f dp_c dp_cc mypageBtn gry05" href="./memberInfo_view.php" title="취소">취소</a>
         <a class="dp_f dp_c dp_cc mypageBtn gradient c_w" href="./sub01.php" title="확인">확인</a>
      </div>
   </div>
   
</div>


<?
	include '../footer.php';
?>

