<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Proprofs_blog/config.php';
/** @var mysqli $conn */
include BASE_PATH . 'include\header.php';


$slug = $_GET['slug'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM blogs WHERE slug='$slug'"
);

$blog = mysqli_fetch_assoc($query);

?>

<section class="blog-section">
    <div class="container">
        <h1><?= $blog['title'] ?></h1>

        <p><?= $blog['description'] ?></p>

        <img src="<?= BASE_URL ?>assets/images/<?= $blog['image'] ?>">
    </div>
</section>
<?php include BASE_PATH . 'include\footer.php'; ?>