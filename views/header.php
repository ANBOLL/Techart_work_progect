<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/indexmobile.css">
    <link rel="stylesheet" href="/css/headermobile.css">
    <link rel="stylesheet" href="/css/footermobile.css">
    <link rel="stylesheet" href="/css/page.css">
    <link rel="stylesheet" href="/css/pagemobile.css">
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=-1">
    <title>HERALD</title>
</head>
<body>
<header>
    <a href="/news/" class="header_a">
        <div class="logotype">
            <img src="/img/logo.svg" alt="logo" class="logo_image">
            <p class="text_logo">Галактический<br>вестник</p>
        </div>
    </a>
    <div class="navigation">
        <ul class="header_item">
            <?php 
            include_once("menu.php");
            foreach ($arr as $key => $value) {
                $pageName = $value["title"];
                $urlHeader = $value["url"];
                if ($key == $code) { ?> 
                    <li class="header_list active">
                        <a href="<?= $urlHeader ?>" class="header_a">
                            <h4><?= $pageName ?></h4>
                        </a>
                    </li>
                <?php 
                } else { 
                ?>
                    <?php 
                    if($pageName != "Новости") { 
                    ?>
                    <li class="header_list">
                        <a href="<?= $urlHeader ?>" class="header_a">
                            <h4>
                                <?php if($pageName != "Новости") {echo $pageName; } ?>
                            </h4>
                        </a>
                    </li>
                    <?php 
                    } 
                } 
            }
            ?>
        </ul>
    </div>
</header>