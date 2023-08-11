<?php
class Pagination
{
    public static function Navigation($page, $numPage, $showCount, $link)
    {
        if ($numPage == 1) {
            return false;
        }
        $sperator = ' ';
        $begin = $page - intval($showCount / 2);
        if (($begin >= 1) && ($numPage - $showCount >= 1)) {
            ?> <a class="pagination_list_1" href="<?= $link; ?>1/"> <div class="arrow_first_page"></div> </a> <?php
        }
        for ($j = 0; $j <= $showCount; $j++) {
            $i = $begin + $j;
            if ($i < 1) {
                continue;
            }
            if ($i > $numPage) {
                break;
            }
            if ($i == $page) {
                ?> <a class="pagination_list active" ><b><?= $i; ?></b></a> <?php
            } else {
                ?> <a class="pagination_list" href="<?= $link; ?><?= $i; ?>/"><?= $i; ?></a> <?php
            }
        }
        if ($begin + $showCount <= $numPage) {
            ?> <a class="pagination_list_1" href="<?= $link; ?><?= $numPage; ?>/"> <div class="arrow_last_page"></div> </a> <?php
        }
        return true;
    }
}