<html>
<head>
    <title>Hillel MVC</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
<?php extract($arr); if (!empty($news)) { ?>
    <table class="table">
        <?php foreach ($news as $value) {extract($value) ?>
            <td><a href=" <?php echo ViewHelper::myLink($news_id, 'post') ?> ">
                    <img src=" <?php echo $news_image ?> " title="<?php echo $category_id ?>"
                         height=200>
                </a><br/>
                <a href="<?php echo ViewHelper::myLink($news_id, 'post') ?>"><?php echo $news_name ?> :
                    <?php echo $short_description ?>
                </a>
            </td>
        <?php } ?>
    </table>
<?php } else { ?>
    <b>The 'news' table is empty</b>
<?php } ?>
</body>
</html>

<!--if ($arr["num_pages"] > 1) {-->
<!--    for ($i = 1; $i <= $arr["num_pages"]; $i++) {-->
<!--        echo '<a href="' . $vh->myLink('', $i) . '">Page ' . $i . '</a>    ';-->
<!--    }-->
<!--}-->