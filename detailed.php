<?php if( !isset($_GET["infokoleksi"]) ) {
    //redirect ke
    header("Location: beranda.php");
    exit;
} ?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    <title>E-Libra-Detail Buku</title>
    </head>
    <body>
        <div class="container-detail">
            <h2> Detail Koleksi</h2>
            
            
            <?php echo $_GET["infokoleksi"]; ?>

        </div>
        <div class="back">
            <a href="beranda.php"><h3>Kembali ke beranda.</h3> </a>
        </div>
    </body>
</html>

