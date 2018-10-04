<html>
<head>
    <title>Hillel MVC</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="update_news.php" method="post" class="form-horizontal col-md-10 col-md-offset-2">
                <?php extract($arr) ?>
                <h1> <?= $news_name ?> State Motto</h1>
                <div class="form-group">
                <label class="col-md-2">Post ID</label><div class="col-md-10">
                    <input type="text" readonly name="news_id" value="<?php echo $news_id; ?>" /></div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Post Name</label><div class="col-md-10">
                    <input type="text" name="news_name" value="<?php echo $news_name; ?>" /></div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Short Description</label><div class="col-md-10">
                    <input type="text" name="short_description" value="<?php echo $short_description; ?>" /></div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Description</label><div class="col-md-10">
                    <input type="text" name="description" value="<?php echo $description; ?>" /></div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Date</label><div class="col-md-10">
                    <input type="date" name="date" value="<?php echo $date; ?>" /></div>
            </div>
                <input type="file" name="news_image" value="<?php echo $news_image ?>" />
                <img src="./<?php echo $arr["news_image"] ?>">

            <div class="form-group">
                <label class="col-md-2">Category ID</label>
                    <div class="col-md-10">
                        <select name="category_id">
                            <?php
                            echo '<br/>$_SESSION[category_id]';// . $_SESSION['category_id'];
//                            for($i=0; $i<count($arr[$i]["category_id"]); $i++){?>

                                <option value="<?php echo $category_id; ?>"
                                    <?php echo !empty($_SESSION['category_id']) && $_SESSION['category_id'] == $category_id
                                        ? 'selected' : ''; ?> ><?php echo $category_id; ?>
                                </option>

<!--                            --><?php //} ?>

                        </select>
                    </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary col-md-2 col-md-offset-100" value="Update" />
            </div>
            </form>
        </div>
    </div>
</body>
</html>