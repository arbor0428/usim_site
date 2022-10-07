<?
	include '../header.php';
?>

<div class="subWrap03 gry01">
    <div class="wht01 p-45 p_60">
        <div class="c_center dp_sb dp_fc cetifiFin">
            <div>
                <p class="cetifiTit bold2">청구서 수령 방법을 입력해 주세요.</p>
                <div class="inputWrap m-36">
                    <label class="minibx" for="regiNum02">E-MAIL 명세서</label>
                    <input id="regiNum02" type="text" placeholder="E-MAIL 주소 입력">
                </div>
            </div>
            <a class="submitBtn gradient c_w" href="./joinPrice_step5.php" title="다음">다음</a>
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