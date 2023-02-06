<?
	include '../header.php';
?>

<div class="subWrap02 mypageWrap">
   <div class="c_center">

      <h3 class="sub_tit bold2">나의 정보</h3>

      <p class="joinSubTit"><span>한패스</span>님 의 정보 조회</p>

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
               <div class="dp_sb dp_c">
						<input class="" id="" type="text" name="phone01" value="010" readonly="" autocomplete="off">
						&nbsp;-&nbsp;
						<input class="" id="" type="text" name="phone02" value="1234" readonly="" autocomplete="off">
						&nbsp;-&nbsp;
						<input class="" id="" type="text" name="phone03" value="5678" readonly="" autocomplete="off">
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
      <div class="row dp_f">
         <div class="row_tit">
         <span class="c_red">*</span>주소
         </div>
         <div class="row_det">
            <div class="inputWrap">
               <input class="m_10" type="text" placeholder="주소">
               <input class="m_10" type="text" placeholder="주소">
               <input class="m_10" type="text" placeholder="주소">
            </div>
         </div>
      </div>

      <div class="mypageTwoBtn dp_sb dp_c">
         <a class="dp_f dp_c dp_cc mypageBtn gry05" href="./sub01.php" title="취소">취소</a>
         <a class="dp_f dp_c dp_cc mypageBtn gradient c_w" href="./memberInfo_edit.php" title="정보수정">정보수정</a>
      </div>
   </div>
   
</div>


<?
	include '../footer.php';
?>

