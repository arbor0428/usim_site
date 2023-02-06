<?
	include 'header.php';
?>

<!--구글 웹사이트 번역 플러그인 [s] -->
<style type="text/css">
iframe.goog-te-banner-frame { display: none !important; } /* 상단 플로팅 바 옵션 가리기 */
body { position: static !important; top:0px !important; }
.goog-logo-link { display:none !important; }
.goog-te-gadget { color: transparent !important; }
</style>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,ja,ko,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false, multilanguagePage: true}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
$(window).load(function () {
    $('.translation-icons').css('visibility', 'visible');
        $('.translation-icons a').click(function(e) {
            e.preventDefault();
            var placement = $(this).data('placement');
            var lang_num = $('.translation-icons a').length;
            var $frame = $('.goog-te-menu-frame:first');
            if (!$frame.size()) {
                alert("Error: Could not find Google translate frame.");
                return false;
            }
            var langs = $('.goog-te-menu-frame:first').contents().find('a span.text');
            if(langs.length != lang_num) placement = placement+1;
            langs.eq(placement).click();
            return false;
        });
});
</script>
<div id="google_translate_element" style="visibility: hidden; position: absolute; top: 0px;"></div>
<div class="translation-icons" style="visibility: hidden; position: relative; text-align: right; margin:0 auto; padding-right: 15px; width: 970px; zoom:1">
    <img src="<?php echo G5_IMG_URL?>/google_translate_logo.png" alt='구글 번역 api'/>
    <a href="#" class="ko" data-placement="0"> <img src="../images/favicon.png" alt='한국'/></a>
    <a href="#" class="gm" data-placement="1"> <img src="../images/favicon.png" alt='독일'/></a>
    <a href="#" class="us" data-placement="2"> <img src="../images/favicon.png" alt='미국'/></a>
    <a href="#" class="jp" data-placement="3"> <img src="../images/favicon.png" alt='일본'/></a>
    <a href="#" class="cn" data-placement="4"> <img src="../images/favicon.png" alt='중국'/></a> 
</div>