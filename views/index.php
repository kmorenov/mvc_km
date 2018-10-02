<html>
<head>
    <title>Hillel MVC</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
<?php if (!empty($arr['news'])) { ?>
    <table class="table">
        <?php foreach ($arr['news'] as $value) { ?>
            <td><a href=" <?php echo $vh->myLink($value['news_id'], $vh->route) ?> ">
                    <img src=" <?php echo $value['news_image'] ?> " title="<?php echo $value['category_id'] ?>"
                         height=200>
                </a><br/>
                <a href="<?php echo $vh->myLink($value['news_id'], $vh->route) ?>"><?php echo $value['news_name'] ?> :
                    <?php echo $value['short_description'] ?>
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