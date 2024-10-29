<?php
include 'koneksi.php';

function url_dasar(){
    $url_dasar = "https://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}

// Function halaman Home
function imagesHome($id) {
    global $connect;
    $sql = "SELECT * FROM home WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $text = $row['description'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1];
    $gambar = str_replace("../images/", url_dasar()."/images/", $gambar);
    return $gambar;
}

function titleHome($id) {
    global $connect;
    $sql = "SELECT * FROM home WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return $row['namaa'];
}

function quoteHome($id) {
    global $connect;
    $sql = "SELECT * FROM home WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return $row['quote'];
}

function descriptionHome($id) {
    global $connect;
    $sql = "SELECT * FROM home WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return strip_tags($row['tentangsaya']);
}

// Function halaman About
function imagesAbout($id) {
    global $connect;
    $sql = "SELECT * FROM about WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $text = $row['description'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1];
    $gambar = str_replace("../images/", url_dasar()."/images/", $gambar);
    return $gambar;
}

function titleAbout($id) {
    global $connect;
    $sql = "SELECT * FROM about WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return $row['title'];
}

function quoteAbout($id) {
    global $connect;
    $sql = "SELECT * FROM about WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return $row['quote'];
}

function descriptionAbout($id) {
    global $connect;
    $sql = "SELECT * FROM about WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return strip_tags($row['description']);
}

// Function halaman Experience
function imagesExperience($id) {
    global $connect;
    $sql = "SELECT * FROM experience WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $text = $row['description'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1];
    $gambar = str_replace("../images/", url_dasar()."/images/", $gambar);
    return $gambar;
}

function titleExperience($id) {
    global $connect;
    $sql = "SELECT * FROM experience WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return $row['title'];
}

function quoteExperience($id) {
    global $connect;
    $sql = "SELECT * FROM experience WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return $row['quote'];
}

function descriptionExperience($id) {
    global $connect;
    $sql = "SELECT * FROM experience WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return strip_tags($row['description']);
}

// Function halaman hobby
function imagesProject($id) {
    global $connect;
    $sql = "SELECT * FROM hobby WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $text = $row['description'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1];
    $gambar = str_replace("../images/", url_dasar()."/images/", $gambar);
    return $gambar;
}

function titleProject($id) {
    global $connect;
    $sql = "SELECT * FROM hobby WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return $row['title'];
}

function quoteProject($id) {
    global $connect;
    $sql = "SELECT * FROM hobby WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return $row['quote'];
}

function descriptionProject($id) {
    global $connect;
    $sql = "SELECT * FROM hobby WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return strip_tags($row['description']);
}

// Function halaman Contact
function getContact($id) {
    global $connect;
    $sql = "SELECT * FROM contact WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    return array(
        'name' => $row['name'],
        'email' => $row['email'],
        'subject' => $row['subject'],
        'message' => $row['message']
    );
}
?>
