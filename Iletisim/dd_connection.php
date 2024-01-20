<?php
// Veritabanı sunucu bilgileri
$servername = "localhost";  // Sunucu adı veya IP adresi
$username = "root";         // Veritabanı kullanıcı adı
$password = "";             // Veritabanı şifresi
$database = "otogaleri";   // Kullanılacak veritabanı adı

// MySQL veritabanına bağlantı oluşturuluyor
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

// Eğer bağlantı başarılı ise, burada başka işlemler yapılabilir.

// Bağlantıyı kapatma (işlem tamamlandıktan sonra bağlantının kapatılması iyi bir uygulama pratiğidir)
$conn->close();
?>