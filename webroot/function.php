<?php
function getPublications() {
    return array(
        array(
            'id' => 1,
            'title' => 'Курячі рулетики з грибами',
            'content' => 'Курячі рулетики з грибами прикрасять будь-який святковий стіл, що вже казати, про звичайному вечері. Рулетики виходять м\'які, ніжні, а всередині сюрприз: смажені шампіньйони з цибулею ідеально доповнюють все це блюдо. Таке необхідно спробувати кожному, хоч раз у житті – смакота!',
            'author' => 'cookery',
            'image' => '1.jpg',
            'created' => '20 березня 2024',
            'href' => 'article.php'
        ),
        array(
            'id' => 2,
            'title' => 'Помідори по-корейськи',
            'content' => 'Ви любите пікантні овочеві страви – закуски? Тоді помідори по-корейськи можуть стати родзинкою вашого святкового або повсякденного столу. Ніжний, в міру гостре і дуже насичене страва підкорить вас своїм ароматом і смаком!',
            'author' => 'cookery',
            'image' => '6.jpg',
            'created' => '19 березня 2024',
            'href' => 'post2.php'
        )
    );
}

function getArticle(int $articleId): ?array {
    $articles = getPublications();
    foreach ($articles as $article) {
        if ($article['id'] === $articleId) {
            return $article;
        }
    }
    return null; 
}
?>
