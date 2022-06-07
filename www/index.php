<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

use Sprint\Options\Builder\Builder;
$APPLICATION->SetPageProperty("title", "Главная");
$APPLICATION->SetPageProperty("description", "Главная страница");
$APPLICATION->SetTitle("General");
?>


<script>
    addEventListener("scroll",function(){
        var page=window.pageYOffset;
        var site_header=document.querySelector(".site-header");
        10<page?(site_header.classList.add("shadow")):(
            site_header.classList.remove("shadow"))});
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>