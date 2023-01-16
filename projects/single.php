<?php
get_header();
global $wp;
$current_url = home_url($wp->request);
?>
<?php
if(isset($_GET["blog_page"]) && is_numeric($_GET["blog_page"])){
    $current_page = $_GET["blog_page"];
    if($current_page <= 0){
        $current_page = 1;
    }
}else{
    $current_page = 1;
}
$post_per_page = 2;
//wp_reset_query();
//query_posts('nopaging=true&post_type=post');
//$total_post = wp_count_posts();
//$total_post = $total_post->publish;
//$total_pages = ceil($total_post/$post_per_page);
//if($current_page > $total_pages){
//    $current_page = $total_pages;
//}
$categories = get_categories();
$html = "";
foreach($categories as $c){
    $html.='<a href="'.get_category_link($c->cat_ID).'" id="category1" class="text-style-bold text-style-bold-size-24 category-list category-list-deactive category-list-button" type="submit">'.$c->cat_name.'</a>
    <br>';
}
$html .= '<a href="'.esc_url(site_url('/blog/')).'" id="custom" class="text-style-bold text-style-bold-size-24 category-list category-list-button1 category-list-button" type="submit">Wszystkie Kategorie</a>
<br>';

?>
<div class="d-flex justify-content-start header-margin-left">
    <div>
        <div class="text-style-bold text-style-bold-margin">Blog <span class="top-text-span">SemSeo</span></div>
        <div class="text-style-book top-text-after-bold">Wydajesz duże pieniądze na marketing, a zwrot jest wątpliwy?
            Dostarczamy opłacalne wyniki - bez wymówek.</div>
    </div>
</div>
<div class="d-flex justify-content-start top-margin-left">
    <div>
        <div class="text-style-bold text-style-bold-size-24 text-style-margin-top-50">Wyszukaj na blogu</div>
        <div class="d-flex search-bar">
            <input class="search-bar-input" type="text" placeholder="Wyszukiwane hasło">
            <button class="search-bar-button" type="submit"><img
                        src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/blog-search.svg"></button>
        </div>
        <div class="text-style-bold text-style-bold-size-24 category-text">Kategorie</div>
        <div>
            <?php echo $html?>
        </div>
        <div class="popular-post">
            <?php
            $post_number = 0;
            global $wp_query;
            query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&limit=3');
            $wp_query->post_count;
            if (have_posts()) : while (have_posts()) : the_post();
                $post_number = $post_number + 1;
                ?>
                <div class="text-style-medium text-style-bold-size-24 popular-post-text-list-margin"><a href="<?php the_permalink(); ?>"><?php echo $post_number ?>. <?php the_title(); ?></a></div>
            <?php

            endwhile; endif;
            wp_reset_query();
            ?>
        </div>
        <div>
            <div class="text-style-bold text-style-bold-size-24 mid-section-text">Kalkulator inwestycji</div>
            <div>
                <div class="d-flex flex-column graph-slider-text-area1-blog">
                    <div class="d-flex">
                        <div class="text-style-bold grahp-slider-text-left">Wybierz pakiet</div>
                        <div class="text-style-medium grahp-slider-text-right1"><span class="pakiet-value">790</span>zł</div>
                    </div>
                    <div class="d-flex">
                        <button class="text-center text-style-medium plan1 active-plan-button" value="790">Easy</button>
                        <button class="text-center text-style-medium plan2 deactive-plan-button" value="1967">Strong</button>
                        <button class="text-center text-style-medium plan3 deactive-plan-button" value="3850">Fury</button>
                        <input type="hidden" id="pakiet" value="790">
                    </div>
                </div>
            </div>
            <div>
                <div class="d-flex graph-slider-text-area">
                    <div class="text-style-bold grahp-slider-text-left">Miesięczny budżet</div>
                    <div class="text-style-medium grahp-slider-text-right2"><span class="budzet-value">1000</span>zł</div>
                </div>
                <div id="budzet"></div>
            </div>
            <div>
                <div class="d-flex graph-slider-text-area">
                    <div class="text-style-bold grahp-slider-text-left">Zwrot w czasie</div>
                    <div class="text-style-medium grahp-slider-text-right3"><span class="czas-value">24</span> miesiące</div>
                </div>
                <div id="czas"></div>
            </div>
            <div class="d-flex justify-content-start blog-left-side-margin-top">
                <div>
                    <img class="mid-section-img" src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/Ellipse1.svg">
                </div>
                <div>
                    <div class="text-style-book text-size-20">Zainwestowane w marketing</div>
                    <div class="text-style-bold text-style-bold-size-24"><span class="zainwestowane">19 480</span></div>
                </div>
            </div>
            <div class="d-flex justify-content-start blog-left-side-margin-top2">
                <div>
                    <img class="mid-section-img" src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/Ellipse2.svg">
                </div>
                <div>
                    <div class="text-style-book text-size-20">Wygenerowane przychody</div>
                    <div class="text-style-bold text-style-bold-size-24"><span class="przychody">126 400</span></div>
                </div>
            </div>
            <div class="button-end-left-section"><a class="text-style-medium text-center button-end-left-section-text"
                                                    href="/#sklep">Zaczynamy</a></div>
        </div>
        <div>
            <div class="d-flex align-items-center end-left-consult">
                <div>
                    <img class="consult-image" src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/consu.png">
                </div>
                <div>
                    <div class="text-style-medium">Marek</div>
                    <div class="consult-text-color text-style-medium">Konsultant SEMSEO</div>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center end-consult">
                <div class="text-style-bold text-style-bold-size-24 consult-text-end text-center">Porozmawiajmy o Twojej
                    stronie</div>
                <div class="post-button-end-left-down justify-content-center"> <a class="text-style-medium "
                                                                                  href="/">Skontaktuj sie</a></div>
            </div>
        </div>
    </div>
    <div class="d-flex w-100">
        <div class="container post-margins">
            <div class="row post-container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php setPostViewCount(); ?>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                    <?php echo get_the_date(); ?>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- next-brake -->
<div class="next-brake1 background-bright-green">
    <div class="d-flex flex-column justify-content-center background-bright-green-first">
        <div class="text-style-bold next-brake-text-bold ">Obsługa klienta oczekuje, aby Ci pomóc</div>
        <div class="text-style-book next-brake-text-book">Pracujemy przez całą dobę, aby Ci pomóc. Napisz do nas
            w
            dowolnym <br> momencie, a jeden z nas z
            przyjemnością szybko się z Tobą skontaktuje!</div>
        <div class="d-flex justify-content-center next-brake-columns-div">
            <div class="next-brake-column1">
                <div class="text-style-bold text-center">24/7</div>
                <div class="text-style-book text-center">Zawsze dostępne</div>
            </div>
            <div class="next-brake-columns next-brake-column2">
                <div class="text-style-bold text-center">97%</div>
                <div class="text-style-book text-center">Wskaźnik zadowolenia</div>
            </div>
            <div class="next-brake-column3">
                <div class="text-style-bold text-center">5 minut</div>
                <div class="text-style-book text-center">śr. czas odpowiedzi na czacie na żywo</div>
            </div>
        </div>
    </div>
</div>
<div class="next-brake2">
    <div class="d-flex flex-column col align-items-center">
        <div class="text-style-bold next-brake2-text-bold text-center next-brake2-text-bold-padding-width">Obsługa
            klienta oczekuje, aby Ci pomóc</div>
        <div class="text-style-book next-brake2-text-book text-center next-brake2-text-book-padding-width">Pracujemy
            przez całą dobę, aby Ci pomóc. Napisz
            do nas w dowolnym momencie, a jeden z nas z przyjemnością szybko się z Tobą skontaktuje!</div>
        <div class="d-flex flex-column col align-items-center next-brake2-border1">
            <div class="text-style-bold next-brake2-text-bold text-center next-brake2-border1-text-bold">24/7</div>
            <div class="text-style-book next-brake2-text-book text-center next-brake2-border1-text-book">Zawsze dostępne
            </div>
        </div>
        <div class="next-brake2-border2 d-flex flex-column col align-items-center">
            <div class="text-style-bold next-brake2-text-bold text-center">97%</div>
            <div class="text-style-book next-brake2-text-book text-center next-brake2-border2-text-book">Wskaźnik
                zadowolenia</div>
        </div>
        <div class="next-brake2-border3 d-flex flex-column col align-items-center">
            <div class="text-style-bold next-brake2-text-bold text-center">5 minut</div>
            <div
                    class="text-style-book next-brake2-text-book next-brake2-border3-text-book text-center next-brake2-border3-text-book">
                śr. czas odpowiedzi na czacie na żywo</div>
        </div>
    </div>
</div>
<!-- end-section -->
<div class="end-section1">
    <div class="d-flex justify-content-center">
        <div class="end-main-left">
            <div class="text-style-bold end-main-first-left">Klient na I miejscu</div>
            <div class="text-style-book end-main-second-left">Pracujemy przez całą dobę, aby Ci pomóc. Napisz do nas w
                dowolnym momencie, a jeden z nas z przyjemnością szybko się z Tobą skontaktuje!</div>
            <div class="text-style-book end-main-last-left">Lorem ipsum dolor lorem ipsum >>></div>
        </div>
        <div class="end-main-right">
            <div class="end-main-first-right">
                <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi - bez zarzutu. Zostaję
                    na dłużej.</div>
                <div>
                    <div class="end-main-first-right-inside-star">
                        <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                    </div>
                </div>
                <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
            </div>
            <div class="end-main-second-right">
                <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi - bez zarzutu. Zostaję
                    na dłużej.</div>
                <div>
                    <div class="end-main-first-right-inside-star">
                        <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                    </div>
                </div>
                <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
            </div>
        </div>
        <div class="end-main-right2">
            <div class="end-main-first-right2">
                <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi - bez zarzutu. Zostaję
                    na dłużej.</div>
                <div>
                    <div class="end-main-first-right-inside-star">
                        <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                    </div>
                </div>
                <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
            </div>
            <div class="end-main-second-right">
                <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi - bez zarzutu. Zostaję
                    na dłużej.</div>
                <div>
                    <div class="end-main-first-right-inside-star">
                        <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                    </div>
                </div>
                <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
            </div>
        </div>
        <div class="end-main-right2">
            <div class="end-main-first-right3">
                <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi - bez zarzutu. Zostaję
                    na dłużej. Cena jak i jakość usługi - bez zarzutu. Zostaję na dłużej.</div>
                <div>
                    <div class="end-main-first-right-inside-star">
                        <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                class="end-main-first-right-inside-star-spacing"
                                src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                    </div>
                </div>
                <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
            </div>
        </div>
    </div>
</div>
<div class="end-section2">
    <div class="d-flex flex-column col align-items-center">
        <div class="text-style-bold end-section2-text-style-bold text-center">Klient na I miejscu</div>
        <div class="text-style-book end-section2-text-style-book-top text-center">Pracujemy przez całą dobę, aby Ci
            pomóc. Napisz do nas w dowolnym momencie, a jeden z nas z przyjemnością szybko się z Tobą skontaktuje!</div>
        <div class="text-style-book end-section2-text-style-book-end text-center">Lorem ipsum dolor lorem ipsum >>>
        </div>
        <div class="container">
            <div class="swiper mobile-post-front-page d-md-none">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex flex-column aling-items-center justify-content-center">
                            <div class="end-main-right m-auto">
                                <div class="end-main-first-right">
                                    <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi -
                                        bez zarzutu. Zostaję
                                        na dłużej.</div>
                                    <div>
                                        <div class="end-main-first-right-inside-star">
                                            <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                                        </div>
                                    </div>
                                    <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
                                </div>
                                <div class="end-main-second-right">
                                    <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi -
                                        bez zarzutu. Zostaję
                                        na dłużej.</div>
                                    <div>
                                        <div class="end-main-first-right-inside-star">
                                            <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                                        </div>
                                    </div>
                                    <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex flex-column aling-items-center justify-content-center">
                            <div class="end-main-right2 m-auto">
                                <div class="end-main-first-right2">
                                    <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi -
                                        bez zarzutu. Zostaję
                                        na dłużej.</div>
                                    <div>
                                        <div class="end-main-first-right-inside-star">
                                            <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                                        </div>
                                    </div>
                                    <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
                                </div>
                                <div class="end-main-second-right">
                                    <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi -
                                        bez zarzutu. Zostaję
                                        na dłużej.</div>
                                    <div>
                                        <div class="end-main-first-right-inside-star">
                                            <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                                        </div>
                                    </div>
                                    <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex flex-column aling-items-center justify-content-center">
                            <div class="end-main-right2 m-auto">
                                <div class="end-main-first-right3">
                                    <div class="text-style-bold end-main-first-right-inside">Cena jak i jakość usługi -
                                        bez zarzutu. Zostaję
                                        na dłużej. Cena jak i jakość usługi - bez zarzutu. Zostaję na dłużej.</div>
                                    <div>
                                        <div class="end-main-first-right-inside-star">
                                            <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg"><img
                                                    class="end-main-first-right-inside-star-spacing"
                                                    src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/star.svg">
                                        </div>
                                    </div>
                                    <div class="end-main-last-right-inside">Rafał, Biuronimo.pl</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/left_arrow.svg">
                </div>
                <div class="swiper-button-next">
                    <img src="<?php echo (wp_upload_dir())['baseurl']; ?>/2022/11/right_arrow.svg">
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    const current_url = '<?php echo $current_url ?>'
</script>
<?php get_footer();?>
