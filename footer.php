

    <footer class="footer">
        <div class="c_center">
            <p class="f_comNm">주식회사 한패스인터내셔널</p>
            <div class="f_top dp_f dp_cc">
                <span class="bold2">고객센터 1588 - 2567</span>
                <span>help@hanpassmobile.com</span>
            </div>
            <div class="f_bot">
                <div class="dp_f dp_fc borbot">
                    <ul class="f_menu dp_f dp_wrap">
                        <li><a href="" title="회사소개">회사소개</a></li>
                        <li><a href="" title="웹서비스 이용약관">웹서비스 이용약관</a></li>
                        <li><a href="" title="통신서비스 이용약관">통신서비스 이용약관</a></li>
                        <li><a href="" title="개인정보처리방침">개인정보처리방침</a></li>
                    </ul>
                    <ul class="f_menu f_menu02 dp_f dp_wrap">
                        <li><a href="" title="이메일 무단수집거부">이메일 무단수집거부</a></li>
                        <li><a href="" title="명의도용방지서비스">명의도용방지서비스</a></li>
                        <li><a href="" title="불법스팸대응센터">불법스팸대응센터</a></li>
                        <li><a href="" title="대리점개설문의">대리점개설문의</a></li>
                    </ul>
                </div>
                <div class="dp_f dp_fc borbot_m">
                    <ul class="f_menu dp_f dp_cc">
                        <li><a href="" title="회사소개">회사소개</a></li>
                        <li><a href="" title="웹서비스 이용약관">웹서비스 이용약관</a></li>
                        <li><a href="" title="통신서비스 이용약관">통신서비스 이용약관</a></li>
                    </ul>
                    <ul class="f_menu dp_f dp_cc">
                        <li><a href="" title="개인정보처리방침">개인정보처리방침</a></li>
                        <li><a href="" title="이메일 무단수집거부">이메일 무단수집거부</a></li>
                    </ul>
                    <ul class="f_menu dp_f dp_cc">
                        <li><a href="" title="명의도용방지서비스">명의도용방지서비스</a></li>
                        <li><a href="" title="불법스팸대응센터">불법스팸대응센터</a></li>
                        <li><a href="" title="대리점개설문의">대리점개설문의</a></li>
                    </ul>
                </div>
                <div class="f_comInfo">
                    <p class="f_comNm_m bold2">주식회사 한패스인터내셔널</p>
                    <ul class="f_addr">
                        <li class="dp_f">
                            <span class="firWid">대표이사<span class="m_show">:</span></span>
                            <span>김정상</span>
                        </li>
                        <li class="dp_f">
                            <span class="firWid adr">주소<span class="m_show">:</span></span>
                            <span>서울시 성동구 아차산로 92, STOWER 4층(성수동 2가)</span>
                        </li>
                        <li class="dp_f">
                            <span class="firWid">사업자번호<span class="m_show">:</span></span>
                            <span>531-81-00478</span>
                        </li>
                        <li class="dp_f">
                            <span class="firWid">통신판매업신고번호<span class="m_show">:</span></span>
                            <span>2022-서울성동-0000</span>
                        </li>
                        <li class="dp_f">
                            <span class="firWid">개인정보처리관리책임자<span class="m_show">:</span></span>
                            <span>최진환</span>
                        </li>
                        <li class="dp_f">
                            <span class="firWid">제휴문의<span class="m_show">:</span></span>
                            <span>contact@hanpassmobile.com</span>
                        </li>
                        <li class="dp_f m_none">
                            <span class="firWid">고객센터<span class="m_show">:</span></span>
                            <span>1588-2567 / help@hanpassmobile.com</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
	//메뉴
	var flag = true;
	$(".m-btn").click(function(event){

		event.preventDefault();
		if(flag){
			$("header").addClass("openFull");
			$(".m-navWrap").css({"width":"100%"});
			$(".bBg").stop().fadeIn();
			$(".m-navbox").stop().addClass("on");

			flag= false;
		} else {
			$("header").removeClass("openFull");
			$(".bBg").stop().fadeOut();
			$(".m-navWrap").css({"width":"0"});
			$(".m-navbox").stop().removeClass("on");
			$(".m-depth2").stop().slideUp();
			$(".m-nav > li").removeClass("on");

			flag= true;
		}
	});

	var offsetLeft = $('.wrap').offset().left;
	var offsetRight = $('.wrap').offset().left + $('.wrap').outerWidth();
	centerAlign();
	function centerAlign(){
		$('.m-navWrap').css('left', offsetLeft);
		$('.fixed-bnr').css('left', offsetLeft);
		$('.callBtn').css('left', offsetRight);
		$('.selectContWrap').css('left', offsetLeft);
	};
	
	function isPc(){
	var filter = "win16|win32|win64|mac|macintel";
	if (!navigator.platform) return false;
	if ( filter.indexOf( navigator.platform.toLowerCase() ) < 0 ) {
		return false;
		} else {
		return true;
		}
	}

	$(window).resize(function(){
		let offsetLeft =  $('.wrap').offset().left;
		let offsetRight =  $('.wrap').offset().left + $('.wrap').outerWidth();

		$('.m-navWrap').css('left', offsetLeft);
		$('.fixed-bnr').css('left', offsetLeft);
		$('.fixed-bnr_always').css('left', offsetLeft);
		$('.callBtn').css('left', offsetRight);
		$('.selectContWrap').css('left', offsetLeft);

	});

</script>
<script type="text/javascript">
	function googleTranslateElementInit() {
		new google.translate.TranslateElement({pageLanguage: 'ko', includedLanguages: 'en,id,kk,ko,fil,ru,th,vi,zh-CN,zh-TW,si,ne,uz,my,tl,pt,km,mn,bn,ur', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
	}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
<script>
	$(window).on("scroll",function(){

		let scTop = $(this).scrollTop();

		if(scTop > 90) {

			$(".fixed-bnr").fadeIn();
			$(".callBtn").fadeIn();

		}

		else {

			$(".fixed-bnr").fadeOut();
			$(".callBtn").fadeOut();

		}
	});
</script>

</body>
</html>