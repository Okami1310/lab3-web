<?php
require_once 'function.php';
?>

<?php
$pageTitle = "Кулінарні пригоди";
require 'head.php';
?>

<?php
$currentPage = 'index';
require 'header.php';
?>

<main class="some-selector">
    <h2>Останні публікації</h2>
    <?php foreach (getPublications() as $publication): ?>
        <article class="site-article">
            <header>
            <h3><a class="clr" href="post.php?id=<?php echo $publication['id']; ?>"><?php echo $publication['title']; ?></a></h3>
                <img src="<?php echo $publication['image']; ?>" alt="<?php echo $publication['title']; ?>" class="img" width="300" height="200">
            </header>
            <p><?php echo $publication['content']; ?></p>
            <footer>
                <p>Дата публікації: <?php echo $publication['created']; ?></p>
                <p>Автор: <?php echo $publication['author']; ?></p>
            </footer>
        </article>
    <?php endforeach; ?>
</main>

<?php require 'footer.php';?>


