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

<?php
$articleId = isset($_GET['id']) ? (int)$_GET['id'] : null;

$article = getArticle($articleId);

if ($article) {
    $href = $article['href'];
    if (file_exists($href)) {
        header("Location: $href");
        exit();
    } else {
        http_response_code(404);
        ?>
        <main class="some-selector">
            <p>Вибачаємось, але цієї публікації ще немає на нашому сайті.</p>
        </main>
        <?php
        exit(); 
    }
} 
?>

<?php require 'footer.php'; ?>



