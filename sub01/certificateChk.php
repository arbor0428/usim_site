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
                    <ul class="kindBox dp_sb dp_c dp_wrap wid24">
                        <li>
                            <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_1"><input type="radio" name="c_box4" id="c_box4_1" onclick="c_box4(this.name,0);">SKT</label>
                        </li>
						<li>
						    <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_2"><input type="radio" name="c_box4" id="c_box4_2" onclick="c_box4(this.name,1);">KT</label>
						</li>
						<li>
						    <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_3"><input type="radio" name="c_box4" id="c_box4_3" onclick="c_box4(this.name,2);">LGU+</label>
						</li>
						<li>
						     <label class="dp_sb dp_c dp_cc txt-c" for="c_box4_4"><input type="radio" name="c_box4" id="c_box4_4" onclick="c_box4(this.name,3);">알뜰폰</label>
							 <div class="alddeulSelWrap">
								<ul class="alddeulSel">
									<li class="alddeulTit">선택</li>
									<li><a href="" title="">SK텔링크-SKT</a></li>
									<li><a href="" title="">LG헬로비전-SKT</a></li>
									<li><a href="" title="">에스원-SKT</a></li>
									<li><a href="" title="">아이즈비전-SKT</a></li>
									<li><a href="" title="">큰사람-SKT</a></li>
									<li><a href="" title="">프리텔레콤-SKT</a></li>
									<li><a href="" title="">에넥스텔레콤-SKT</a></li>
									<li><a href="" title="">한국케이블텔레콤-SKT</a></li>
									<li><a href="" title="">유니컴즈-SKT</a></li>
									<li><a href="" title="">스마텔-SKT</a></li>
									<li><a href="" title="">머천드코리아-SKT</a></li>
									<li><a href="" title="">KCTV제주방송-SKT</a></li>
									<li><a href="" title="">남인천방송-SKT</a></li>
									<li><a href="" title="">광주방송-SKT</a></li>
									<li><a href="" title="">JCN 울산중앙방송-SKT</a></li>
									<li><a href="" title="">KT M 모바일-KT</a></li>
									<li><a href="" title="">LG헬로비전-KT</a></li>
									<li><a href="" title="">에스원-KT</a></li>
									<li><a href="" title="">아이즈비전-KT</a></li>
									<li><a href="" title="">코드모바일-KT</a></li>
									<li><a href="" title="">프리텔레콤-KT</a></li>
									<li><a href="" title="">큰사람-KT</a></li>
									<li><a href="" title="">에넥스텔레콤-KT</a></li>
									<li><a href="" title="">한국케이블텔레콤-KT</a></li>
									<li><a href="" title="">유니컴즈-KT</a></li>
									<li><a href="" title="">ACN코리아-KT</a></li>
									<li><a href="" title="">세종텔레콤-KT</a></li>
									<li><a href="" title="">머천드코리아-KT</a></li>
									<li><a href="" title="">아이원-KT</a></li>
									<li><a href="" title="">미니게이트-KT</a></li>
									<li><a href="" title="">핀플레이-KT</a></li>
									<li><a href="" title="">드림모바일-KT</a></li>
									<li><a href="" title="">YL랜드-KT</a></li>
									<li><a href="" title="">미디어로그-LGU+</a></li>
									<li><a href="" title="">LG헬로비전-LGU+</a></li>
									<li><a href="" title="">국민은행-LGU+</a></li>
									<li><a href="" title="">에스원-LGU+</a></li>
									<li><a href="" title="">아이즈비전-LGU+</a></li>
									<li><a href="" title="">코드모바일-LGU+</a></li>
									<li><a href="" title="">인스코비-LGU+</a></li>
									<li><a href="" title="">큰사람-LGU+</a></li>
									<li><a href="" title="">에넥스텔레콤-LGU+</a></li>
									<li><a href="" title="">유니컴즈-LGU+</a></li>
									<li><a href="" title="">스마텔-LGU+</a></li>
									<li><a href="" title="">ACN코리아-LGU+</a></li>
									<li><a href="" title="">머천드코리아-LGU+</a></li>
									<li><a href="" title="">서경방송-LGU+</a></li>
									<li><a href="" title="">남인천방송-LGU+</a></li>
									<li><a href="" title="">KCTV제주방송-LGU+</a></li>
									<li><a href="" title="">레그원-LGU+</a></li>
								</ul>
							 </div>
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
			if(chk+1==4){	//4번째 항목일때 alddeulSelWrap 펼쳐짐
				$(".alddeulSelWrap").fadeIn()
			}else{
				$(".alddeulSelWrap").fadeOut()
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