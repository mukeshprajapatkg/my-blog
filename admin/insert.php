<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Proprofs_blog/config.php';

/** @var mysqli $conn */

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $slug = strtolower(
        str_replace(' ', '-', $title)
    );
    $description = $_POST['description'];
    // Image Upload
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file(
        $tmp_name,
        BASE_PATH . 'assets/images/' . $image
    );
    // Insert Query
    $sql = " INSERT INTO blogs (title,description,image,slug) VALUES ('$title','$description','$image','$slug') ";
    mysqli_query($conn, $sql);
    echo "Blog Added Successfully";
}

?>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Blog Title">
    <br><br>
    <textarea name="description" placeholder="Description"></textarea>
    <br><br>
    <input type="file" name="image">
    <br><br>
    <button name="submit">Add Blog</button>
</form>