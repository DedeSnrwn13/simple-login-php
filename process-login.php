<?php
$pageTitle = "Proses Login - Dede Sunarwan";
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    if (!empty($name) && !empty($email)) {
        echo "<div>";
        echo "<h2>Selamat datang, $name!</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Jam: " . date("H:i:s") . "</p>";
        echo "<p>Hari dan Tanggal: " . date("l, d F Y") . "</p>";
        echo "<a href='index.php' class='btn btn-primary'>Kembali</a>";
        echo "</div>";
    } else {
        header("Location: error-page.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

include 'footer.php';
?>
