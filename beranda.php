<?php
require_once ("koleksi.php");

?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>E-Libra</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="beranda-wrapper container">
            <h1 class= "logo">E-Libra</h1>
            <h2>Hai, Selamat datang di E-Libra!</h2>
            <h3>Mau baca apa hari ini?</h3>

            <form action="konfir.php" method="post">
                <div class="beranda-items">
                    <?php foreach ($koleksis as $koleksi ):?>
                        <div class="beranda-item">
                        <img src="img/<?php echo $koleksi->getGambar() ?>" class="beranda-item-gambar">
                        <h3 class="beranda-item-judul">

                            <a href="detailed.php?infokoleksi= <?php echo $koleksi->getInfoKoleksi() ?>
                            "> 
                            
                            <?php echo $koleksi->getJudul() ?></a>
                        </h3>
                        
                        <label>Baca sekarang! </label>
                        <span class="checkbox">
                        <input type="checkbox"  name="selected[]" value="<?php echo $koleksi->getJudul() ?> "/>
                        </span>
                        </div>
                    <?php endforeach ?>
                </div>
                
                <div class="user-field">
                <h2>Masukkan identitas: </h2>
	    		    <input type="text" class="user-input" placeholder="Nama lengkap" name="nama" required> <br>

                    
				    <input type="number" class="user-input" placeholder="NIM" name="nim" required> <br>
                    

        		    <input type="email" class="user-input" placeholder="E-mail" name="email" required> <br>
                    
                </div>
                
                <input type="submit" value="Pinjam" name="submit">

                
            </form>
        </div>
    </body>
</html>