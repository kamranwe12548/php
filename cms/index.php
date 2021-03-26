<?php 
// home_page
include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;
$articles = $article->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>cms</title>
        <link rel="stylesheet" type="text/css" href="assets/styles.css">
    </head>

    <body>
        <div class="container">

            <a href="index.php" id="logo">CMS</a>
            <!-- article -->
            <ol>
            <?php foreach ($articles as $article) { ?>
                <li>
                    <a href="article.php?id=<?php echo $article['article_id']; ?>">
                        <?php echo $article['article_title']?>
                    </a>
                     - <small>
                     posted <?php echo date('l jS',$article['article_timestamp']); ?>
                     </small>
                    </li>
                    <?php } ?>
            </ol>
            <br />
            <small><a href="admin">admin</a></small>
        </div>
    </body>

</html>