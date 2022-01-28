<?php

$numberOfPosts = 0;
$conn = mysqli_connect("localhost", "root", "", "newsdb");

if (!$conn) {
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}

$sql = "SELECT * FROM alisson_newspost";
$query = mysqli_query($conn, $sql);

if (isset($_REQUEST['new_news'])) {
    $title = $_REQUEST['post_title'];
    $slug = $_REQUEST['post_slug'];
    $description = $_REQUEST['post_description'];
    $keyword = $_REQUEST['post_keyword'];
    $content = $_REQUEST['post_content'];

    $sql = "INSERT INTO alisson_newspost(post_title, post_slug, post_description, post_keyword, post_content) VALUES('$title', '$slug', '$description', '$keyword', '$content')";
    mysqli_query($conn, $sql);

    echo $sql;

    header("Location: index.php?news=added");
    exit();
}


if (isset($_REQUEST['post_slug'])) {

    $slug = $_REQUEST['post_slug'];
    $sql = "SELECT * FROM alisson_newspost WHERE post_slug = '$slug'";
    $query = mysqli_query($conn, $sql);
}


if (isset($_REQUEST['delete'])) {
    $slug = $_REQUEST['post_slug'];

    $sql = "DELETE FROM alisson_newspost WHERE post_slug = '$slug'";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}

if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['post_id'];
    $title = $_REQUEST['post_title'];
    $slug = $_REQUEST['post_slug'];
    $description = $_REQUEST['post_description'];
    $keyword = $_REQUEST['post_keyword'];
    $content = $_REQUEST['post_content'];

    $sql = "UPDATE alisson_newspost SET post_title = '$title', post_slug = '$slug', post_description = '$description', post_keyword = '$keyword', post_content = '$content'  WHERE post_id = '$id'";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}

?>
