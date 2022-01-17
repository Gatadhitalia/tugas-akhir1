<!DOTYPE html>
<html>
    <head>
        <title>Buku Tamu Scoff</title>
        <link rel="stylesheet" href="style-php.css">
    </head>
    <body>
        <div class="data">
            <h2>BUKU TAMU</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div>
                    <label>Nama :</label>
                    <input type="text" name= "fnama">
                </div>
                <div>
                    <label>Email :</label>
                    <input type="email" name= "femail">
                </div>
                <div>
                    <label>No Telepon :</label>
                    <input type="number" name="ftlp" id="tlp">
                </div>
                <div>
                    <label>Pesan :</label>
                    <textarea cols="40" rows="5" name="fpesan" id="pesan"></textarea>
                </div><br>
                <div class="submit">
                    <input type="submit" class="tombol">
                </div>
            </form> 
        </div><br><br>
        <div class="hasil">
            <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    $email = $_POST['femail'];
                    $number = $_POST['ftlp'];
                    $pesan = $_POST['fpesan'];

                    echo "Nama: $nama <br>
                    <br>Email: $email <br><br>No Telepon: $number <br><br>Pesan: $pesan";
                }
            ?>
        </div><br><br>
        <div class="back"><a href="index.html">Back</div>
    </body>
</html>