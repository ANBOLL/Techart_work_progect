<?php

if ($numPages == 1) {
    return false;
}

$begin = $currentPage - intval(2 / 2);

if (($begin >= 1) && ($numPages - 2 >= 1)) {
    ?>
    <a class="pagination_list_1" href="<?= sprintf($url, 1) ?>"><div class="arrow_first_page"></div></a>
    <?php
}

for ($j = 0; $j <= 2; $j++) {
    $i = $begin + $j;
    
    if ($i < 1) {
        continue;
    }
    
    if ($i > $numPages) {
        break;
    }
    
    if ($i == $currentPage) {
        ?>
        <a class="pagination_list active"><?= $i ?></a>
        <?php
    } else {
        ?>
        <a class="pagination_list" href="<?= sprintf($url, $i) ?>"><?= $i ?></a>
        <?php
    }
}

if ($begin + 2 <= $numPages) {
    ?>
    <a class="pagination_list_1" href="<?= sprintf($url, $numPages) ?>"><div class="arrow_last_page"></div></a>
    <?php
}




