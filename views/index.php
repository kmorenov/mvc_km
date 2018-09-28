<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25/09/18
 * Time: 5:01 AM
 */

if (!empty($arr["news"])) {
    echo '<table class="table">';
    foreach ($arr["news"] as $key => $value) {
        echo '<td><a href="' . $vh->myLink( $value['news_id'], $vh->route) . '">' . '<img src="' . $value["news_image"] .
            '" title=' . $value['category_id'] . ' height=200></a><br/>' .
            '<a href="' . $vh->myLink( $value['news_id'], $vh->route) . '">' . $value['news_name'] . ': ' . $value['short_description'] . '</a></td>';
    }
    echo '</table>';
} else {
    echo "The 'news' table is empty";
}


/*if ($arr["num_pages"] > 1) {
    for ($i = 1; $i <= $arr["num_pages"]; $i++) {
        echo '<a href="' . $vh->myLink('', $i) . '">Page ' . $i . '</a>    ';
    }
}*/