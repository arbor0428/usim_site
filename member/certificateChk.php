<?
	include '../header.php';
?>

<div class="subWrap02 gry01">
    <div class="wht01 p-45 m_p40">
        <div class="c_center">
            <p class="cetifiTit bold2">번호 이동(이 번호 그대로 가입합니다)</p>
            <p class="cetifiCont c_gry">기존에 사용하던 휴대폰 번호 그대로 사용하고 싶은 경우 선택해 주세요</p>
            <div class="cetifiWrap">
                <p class="cetifiTit bold2">기존 통신사</p>
                <div class="kindBtnWrap mb_20">
                    <ul class="kindBox">
                        <li class="dp_sb dp_c dp_wrap">
                            <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_1"><input type="radio" name="c_box4" id="c_box4_1" onclick="c_box4(this.name,0);">SKT</label>
                            <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_2"><input type="radio" name="c_box4" id="c_box4_2" onclick="c_box4(this.name,1);">KT</label>
                            <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_3"><input type="radio" name="c_box4" id="c_box4_3" onclick="c_box4(this.name,2);">LGU+</label>
                            <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_4"><input type="radio" name="c_box4" id="c_box4_4" onclick="c_box4(this.name,3);">SKT알뜰폰</label>
                            <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_5"><input type="radio" name="c_box4" id="c_box4_5" onclick="c_box4(this.name,4);">KT알뜰폰</label>
                            <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_6"><input type="radio" name="c_box4" id="c_box4_6" onclick="c_box4(this.name,5);">LGU+알뜰폰</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wht01 p-45 m-28 p_20">
        <div class="c_center">
            <div class="cetifiWrap">
                <p class="cetifiTit bold2">기존 통신사</p>
                <div class="inputWrap dp_sb">
                    <select name="" id="tab-select">
                        <option value="x">인증 방법 선택</option>
                        <option value="0" id="tab1">신용카드번호</option>
                        <option value="1">계좌번호</option>
                        <option value="2">지로 납부 영수증</option>
                        <option value="3">유심 일련번호</option>
                    </select>

                    <input id="" type="text" placeholder="마지막 4자리">
                </div>
            </div>
            <div class="showWayWrap">
                <div id="tab01" class="showWayBox gry04">
                    <div class="showWayTit">※ 현재 사용 중인 통신사와 요금납부 신용카드번호 마지막 4자리를 입력해 주세요.</div>
                    <img src="../images/cd_card.png" alt="신용카드">
                </div>
                <div id="tab02" class="showWayBox gry04">
                    <div class="showWayTit">※ 현재 사용 중인 통신사와 요금납부 계좌번호 마지막 4자리를 입력해 주세요.</div>
                    <img src="../images/bankbook.png" alt="계좌번호">
                </div>
                <div id="tab03" class="showWayBox gry04">
                    <div class="showWayTit">※ 현재 사용 중인 통신사와 요금납부 지로납부영수증 마지막 4자리를 입력해 주세요.</div>
                    <img src="" alt="지로 납부 영수증">
                </div>
                <div id="tab04" class="showWayBox gry04">
                    <div class="showWayTit">※ 현재 사용 중인 통신사와 요금납부 유심 일련번호 마지막 4자리를 입력해 주세요.</div>
                    <img src="../images/usimChk.png" alt="유심 일련번호">
                </div>
            </div>
            <a class="submitBtn gradient c_w" href="./certiChkFinish.php" title="번호 이동 인증 입력">번호 이동 인증 입력</a>
        </div>
    </div>

</div>
<script>
    function c_box4(obj,chk){
        eChk = document.getElementsByName(obj);

        for(var i=0;i<eChk.length;i++){
            var jjjj=i+1
            if(i == chk){
                eChk[i].checked = true;
                $('#c_box4_'+jjjj).parent().addClass('active');
            }else{
                eChk[i].checked = false;
                $('#c_box4_'+jjjj).parent().removeClass('active');
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
        
        for (var i = 0;i<selectTab.length-1; i++){
            
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