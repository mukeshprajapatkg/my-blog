<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Proprofs_blog/config.php';
/** @var mysqli $conn */
include BASE_PATH . 'include/header.php';

?>

<?php
$query = "SELECT * FROM blogs order by id DESC";
$result = mysqli_query($conn, $query);


?>

<section class="blog-section">

    <div class="container">

        <div class="blog">

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="blog-card">

                    <h1><a href="<?= BASE_URL ?>pages/details_page.php?slug=<?= $row['slug'] ?>"><?= substr($row['title'], 0, 50) ?>...</a></h1>
                    <p><?= substr($row['description'], 0, 100) ?>...</p>
                    <img
                        src="<?= BASE_URL ?>assets/images/<?= $row['image'] ?>"
                        alt="Blog Image">
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include BASE_PATH . 'include/footer.php'; ?>