<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>




<?php
include G5_THEME_PATH.'/doc/sub.tail.php';
?>

<footer id="footer" class="d_bg">
            <address>
                부산광역시 북구 만덕2로 14 상가동 제314호
            </address>
            <ul class="f_con f_inner">
                <li>대표자 : 전정선</li>
                <li>사업자등록번호 : 606-11-45081</li>
                <li>Tel : <a href="tel:051-331-3354">051-331-3354</a></li>
                <li>e-mail : <a href="mailto:jjs3354@naver.com">jjs3354@naver.com</a></li>
            </ul>
            <span class="copy">
                &copy; 부산 아파트입주청소 이사청소 금맥 All Rights Reserved.
            </span>
        </footer>


    </div>




<script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>







<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>





<?php
include_once(G5_THEME_PATH."/tail.sub.php");