<?php
/*
Template Name: Наша история
*/
?>

<?php
    get_header();
?>

<div class="aboutus" id="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('zagolovok_vse_nachalos');?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('opisanie_vse_nachalos');?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('izobrazhenie_vse_nachalos');?>" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url');?>/assets/img/about_2.jpg" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    Главное - качество
                </div>
                <div class="aboutus__text">
                    Мы делали их вручную, из лучших материалов и не жалея времени. Но мы росли и наш ассортимент расширился и фабричными изделиями.
                    <br><br>
                    Выбирая нас, вы можете быть уверены, что мы всегда следим за качеством закупок и никогда не предоставим вам опасный или некачественный товар.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    Современные технологии
                </div>
                <div class="aboutus__text">
                    И даже спустя столько лет мы продолжаем создавать игрушки вручную. Как самые простые, так и те, что идут в ногу со временем. Добавляя электроники и оживляя лучших друзей ребятишек, мы всегда следим за качеством и безопасностью. Каждая отдельная игрушка проходит индивидуальный контроль по всем необходимым стандартам.
                    <br><br>
                    Ведь счастливое лицо ребенка - это лучшая награда для нас!
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php echo bloginfo('template_url');?>/assets/img/about_3.jpg" alt="мир детства">
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>