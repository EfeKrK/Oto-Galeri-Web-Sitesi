<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="hakkinda.css"> 
<body>
    <video id="ArkaPlanVideo" autoplay="true" loop muted>
        <source src="ArkaPlanVideosu.mp4" type="video/mp4">
    </video>
    
    


    <div class="navbar">
        <a href="http://localhost/OtoGaleri1/AnaSayfa/AnaSayfa.html">
            <img src="./Logo.png" alt="logo" class="logo" />
        </a>
                
        <nav>
            <ul>
                <li><a href="http://localhost/OtoGaleri1/AnaSayfa/AnaSayfa.html">Ana Sayfa</a></li>
                <li><a href="http://localhost/OtoGaleri1/Araclar/Araclar.php">Araçlar</a></li>
                <li><a href="http://localhost/OtoGaleri1/Iletisim/Iletisim.php">İletişim</a></li>
                <li><a href="http://localhost/OtoGaleri1/Hakkinda/hakkinda.php">Hakkımızda</a></li>
                <li><a href="#"><i class="fa-solid fa-bars"></i></a></li>
            </ul>
        </nav>
    </div>';

    <?php
    include("db_connection.php");

    $sql = "SELECT icerik FROM hakkimizda WHERE id = 1";  
    $result = $conn->query($sql);  /*$result(sonuç) değişkeni, belirtilen SQL sorgusunu veritabanında çalıştırarak elde edilen sonuç kümesini temsil eder ve bu sonuçları işlemek için kullanılır.*/

    echo '<div class="hakkinda-container">
        <h1>Hakkımızda</h1>';



    /*Eğer veritabanında hakkında bilgisi bulunuyorsa, bu bilgileri çeker, HTML içindeki paragraf elementiyle formatlar ve görüntülerüntüler; aksi halde "Hakkımızda bilgisi bulunamadı" mesajını görüntüler.*/
    if ($result->num_rows > 0) {      
        $row = $result->fetch_assoc();
        echo '<p>' . nl2br($row["icerik"]) . '</p>';                
    } else {
        echo '<p>Hakkımızda bilgisi bulunamadı.</p>';
    }



    echo '<div class="ikon" style="display: flex;">
        <a href="https://www.instagram.com/cereezersin">
            <i class="fa-brands fa-instagram fa-lg" style="color: red;display: inline-block; margin-right: 20px;"></i>
        </a>
        <a href="https://www.instagram.com/efekrk_fr">
            <i class="fa-brands fa-instagram fa-lg" style="color: red;"></i>
        </a>
    </div>
    </div>';

    $conn->close();
    ?>

    <footer>
    <div class="footer-content">
        <br> <br>
        <div class="footer-info">
            <p><font color="white">&copy; 2023, FastOto Galeri Resmi Web Sitesidir. Tüm Hakları Saklıdır.</font></p>
        </div>

       
    </div>
</footer>

</body>
</html>
