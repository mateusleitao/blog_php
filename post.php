<?php
include_once("templates/header.php");
if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main class="post-container">
    <div id="content-container">
        <h1 class="main-title"><?= $currentPost['title'] ?></h1>
        <p class="post-description"><?= $currentPost['description'] ?></p>
    </div>
    <div id="img-container">
        <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p id="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mauris ex, sagittis at diam vel, consectetur dictum sem. Fusce faucibus mollis purus, sit amet sollicitudin diam scelerisque eget. Proin eget erat sem. Nullam ut tempor dolor. In sed dolor neque. Duis pharetra a nisl id feugiat. Cras viverra ornare ante, et aliquet ipsum. Ut nec faucibus mi. Quisque molestie mattis blandit. Pellentesque ultricies hendrerit eros eu fermentum. Donec facilisis neque non mi dignissim posuere. Vivamus varius imperdiet justo et ultricies. Donec condimentum ex sit amet lorem commodo congue. Nam at imperdiet augue, sit amet efficitur arcu.

        Praesent sagittis, elit porttitor dapibus porttitor, lacus enim varius turpis, ut laoreet sem lorem et ligula. Etiam lorem massa, ultricies ut est in, gravida fermentum ex. Morbi pellentesque augue libero, ut vestibulum elit convallis non. In euismod dui eu ante ultrices varius. Praesent a justo quis nisi lobortis laoreet. Integer hendrerit leo neque, nec vehicula odio eleifend et. Nam auctor metus massa, suscipit consequat leo facilisis at. Nunc condimentum sapien nisi, ut fringilla ligula condimentum quis.

        Nam dignissim placerat finibus. Integer viverra nunc felis, eget finibus metus maximus a. In sed interdum lorem. Nullam vel orci convallis nulla mollis vehicula eget in lacus. Nullam dignissim purus augue, at ullamcorper nunc mollis vitae. Sed pellentesque pulvinar enim, non facilisis sapien. Nulla id nunc id mauris porttitor rutrum. Vivamus turpis risus, blandit sed purus vel, vestibulum feugiat arcu. Nunc consequat vitae purus sit amet iaculis. Nulla et mollis nisi. Ut et felis suscipit, pellentesque lorem mollis, volutpat turpis. Donec sed libero pellentesque, hendrerit turpis quis, ullamcorper est. Nam efficitur elit sed purus tempus egestas. Donec mollis enim quam, sed scelerisque lacus rutrum nec. Sed rhoncus nisi nisl, vitae viverra felis euismod nec. Nunc sodales quam velit, placerat consequat elit hendrerit nec.

        Fusce ut nisl et ligula luctus posuere dictum efficitur sem. In hac habitasse platea dictumst. Ut nec faucibus dui. Nunc efficitur lacus tincidunt consectetur suscipit. Curabitur facilisis, magna ac suscipit luctus, nulla leo elementum nibh, nec lobortis nisi arcu sit amet eros. Donec ante eros, posuere id tempor sit amet, gravida eget libero. Fusce eu nibh nibh. Morbi quam sem, malesuada id aliquam ac, interdum sit amet est. Phasellus scelerisque ligula sed quam lacinia auctor.

        Duis quis molestie orci. Pellentesque dui lacus, feugiat non ipsum ut, facilisis venenatis sem. Aenean posuere id nisi sit amet venenatis. Mauris porttitor auctor est quis varius. Sed blandit, ante non aliquet egestas, purus mi volutpat tortor, id cursus metus ipsum eu eros. Aenean ipsum nunc, dignissim sed blandit non, fermentum in leo. Donec ornare rhoncus ullamcorper. Proin rutrum, odio et consequat ornare, lectus ante dignissim orci, id molestie tellus ipsum quis neque. Praesent laoreet, ipsum vel consectetur bibendum, felis tellus luctus diam, at blandit nulla erat nec ligula. Sed porttitor vitae magna in fermentum. Donec nisl mi, lobortis nec orci non, ullamcorper porttitor purus. Curabitur eu odio ac massa euismod ornare. Suspendisse vel placerat velit. Sed nibh felis, finibus sit amet ipsum non, vestibulum rutrum elit. Aliquam sed diam a nunc semper porttitor ac porttitor felis.</p>
        <aside id="nav-container">
            <ul id="tags-list">
                <?php foreach ($currentPost['tags'] as $tag) : ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 class="categories-title">Categorias</h3>
            <ul class="categories-list">
            <?php foreach ($categories as $category) : ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
</main>

<?php
include_once("templates/footer.php"); ?>