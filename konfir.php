<?php require_once ("koleksi.php"); 
?>

<?php
//cek apakah tidak ada data di $_GET
if( !isset($_POST["nama"]) ||
    !isset($_POST["nim"]) ||
    !isset($_POST["email"]) ||
    !isset($_POST["selected"]) ) {
    //redirect ke
    header("Location: beranda.php");
    exit;
}


?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>E Libra</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    </head>

<body>
    <div class="container-konfir">
        <form action=" ">
            <h1 class= "logo">E-Libra</h1>
            <div class="card">
                <div class="card-header">
                    <h3> Resi Peminjaman E-Libra</h3>
                </div>
        
                <div class="card-body">
                    <div class="tanggal">
                        <h4> Kode Pinjam : <?php echo random_int( 1000,  9000); echo "<br>"?> </h4>
                        <hr>
                        <h5><?php 
                        date_default_timezone_set("Asia/Jakarta");
                        echo "Tanggal peminjaman : " .date ("l, d-m-Y");
                        echo "<br>";
                        echo "Tanggal pengembalian : " .date ("l, d-m-Y", time() + 60*60*24*5);
                        ?> </h5>
                    </div>

                    <div class="identitas">

                        <h4>Data Peminjam :  </h4>
                        <hr>
                            <li>Nama :<?php echo $_POST["nama"]; echo "<br>" ?></li>
                            <li>NIM : <?php echo $_POST["nim"]; echo "<br>" ?></li>
                            <li>E-mail: <?php echo $_POST["email"]; echo "<br>" ?></li>
                    </div>

                    <div class="dipinjam"> 
                        <h4>Buku yang akan dipinjam :</h4> <hr>
                        <?php foreach ($_POST["selected"] as $dipinjam): ?>
                            <li>
                            <?php echo  $dipinjam . "<br>"?>
                            </li>

                        <?php endforeach ?>
                    </div>

                    <hr>
                </div>
                    <div class="sk-konfir">
                        <label> Kirim resi via e-mail!</label>
                        <input type="checkbox"  name="kirim email" value="yes" required/>
                        <br>
                        <label>Saya mematuhi segala syarat & ketentuan yang berlaku di E-Libra.</label>
                        <input type="checkbox"  name="patuh" value="yes" required/>
                    </div>

                    <div class="selesai">
                    <input type="submit" value="Selesai" name="selesai" onclick="myalert()">
                    <script> 
                        function myalert() { 
                        alert("Resi berhasil dikirim ke email kamu! \nHarap patuhi segala syarat dan ketentuan yang berlaku. \nSelamat membaca!" )
                        } 
                    </script> 
                    </div>
                
            </div>
            <h1 class= "logo">E-Libra</h1>
        </form>
    </div>

</body>
</html>