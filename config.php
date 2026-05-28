<?php

// define('BASE_URL', 'http://localhost/Proprofs_blog/');
// define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/Proprofs_blog/');


// $conn =  mysqli_connect ('localhost', 'root', '', 'proprofs_blog');

// if (!$conn) {
//     die("Connection failed");
// }
?>  

<?php

if ($_SERVER['HTTP_HOST'] == 'localhost') {

    define('BASE_URL', 'http://localhost/Proprofs_blog/');
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/Proprofs_blog/');

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'proprofs_blog'
    );

} else {

    define('BASE_URL', 'https://proprofsblog.infinityfreeapp.com/');
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/');

    $conn = mysqli_connect(
        'sql309.infinityfree.com',
        'if0_42036743',
        'YOUR_VPANEL_PASSWORD',
        'if0_42036743_proprofs_blog'
    );

}

?>