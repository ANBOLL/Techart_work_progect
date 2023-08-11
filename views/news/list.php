<?php
session_start();
$code = "Index";
include_once("views/header.php");
$pagesession = $page;
$_SESSION['pagesession'] = $pagesession;
$_GET['pagenow'] = $page;
?>
<main class="main_index">
    <section class="hero_section">
        <?php while($rowi = $resi->fetch()) { ?>
        <div class="hero_image">
            <img src="/image/<?= $rowi['image']; ?>" alt="hero_image">
        </div>
        <div class="hero_text">
            <h1 class="hero_h1"><?= $rowi['title']; ?></h1>
            <p class="hero_p"><?= $rowi['announce']; ?></p>
        </div>
        <?php } ?>
    </section>
    <section class="news_title">
        <h2 class="news_title_h2">
            Новости
        </h2>
    </section>
    <section class="news_block">
        <?php while($article = $query->fetch()) { ?>
        <div class="news">
            <div class="data_news"><?= $article["dt"]; ?></div>
            <div class="title_news"><?= $article["title"]; ?></div>
            <div class="announce_news"><?= $article["announce"]; ?></div>
            <a href="/news/<?= $article['id']; ?>/" class="a_style_button">
                <div class="button_news">
                    Подробнее<div class="arrow_button"></div>
                </div>
            </a>
        </div>
        <?php } ?>
    </section>
    <section class="pagination">
        <ul class="pagination_item">
            <?php 
            include('App/Controllers/Pagination.php');
            $link = "/news/page-";
            Pagination::Navigation($page, $numPage, 2, $link);
            ?>       
        </ul>
    </section>
</main>
<?php
include_once("views/footer.php");
?>