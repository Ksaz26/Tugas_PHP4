<?php 
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Boga Rasa</title>
</head>
<body>
    <h1 align="center" style="color: #FFC94A;">Boga Rasa</h1>

    <div style="text-align: center; background-color: khaki; color:blue">
        <!-- Home | Produk | Pesan | Galeri | Gasbuk -->
        <?php 
            foreach($menu_atas as $key => $value) {
                echo "<a href='index.php?hal=$key'>$value</a> | ";
            }
        ?>
    </div>

