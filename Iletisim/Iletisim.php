<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Iletisim.css"> <!-- İletişim sayfasına özel CSS dosyası -->
</head>
<body>

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
                <li>
                    <a href="#">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- İletişim sayfasının içeriği -->
    <div class="iletisim-container">
        <h1 id="h3iletisim">İLETİŞİM</h1>
        <div id="iletisimopak">
            <form action="Iletisim.php" method="post">
                
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sağform">
                        <input type="text" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>
                    <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>

                    <input type="submit" value="Gönder">
                    <?php
                    // Veritabanı bağlantı dosyasından bağlantıyı açma
                    include('dd_connection.php');

                    // HTTP POST isteği kontrolü
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $isim = $_POST["isim"];
                        $tel = $_POST["tel"];
                        $mail = $_POST["mail"];
                        $konu = $_POST["konu"];
                        $mesaj = $_POST["mesaj"];

                        // Veritabanına ekleme için SQL sorgusu oluşturma
                        $sql = "INSERT INTO i̇letisim (adsoyad, telefon, email, konu, mesaj) VALUES ('$isim', '$tel', '$mail', '$konu', '$mesaj')";

                        // SQL sorgusunu çalıştır ve başarı kontrolü yaptırma
                        if ($conn->query($sql) === TRUE) {
                            echo " Kaydınız Başarıyla Oluşturulmuştur.";
                            echo"<br>";
                             echo "En Kısa Sürede Geri Dönüş Yapacağız..";
                        } else {
                            // Eğer bir hata oluşursa, hatayı ekrana yazdırma(bu sayede hata alırsak düzeltmemiz daha kolay olucak)
                            echo "Hata: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();
                    }

                    
                    ?>
                     <div class="ikon" style="display: flex;">
 
        
                </div>

            </form>
        </div>
    </div>
</body>
</html>
