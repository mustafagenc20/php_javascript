<?php 
$hostadresi        =	"localhost";
$kullaniciadi      =	"ctnr_ctnr";
$sifre             =	"ctnrctnr";
$veritabani        =	"ctnr_hatim";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
    echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
}


$sql="SELECT * FROM Users";
$sorgu=mysqli_query($baglanti,$sql);

while( $sonuc=mysqli_fetch_row($sorgu) ){
    echo $sonuc[0];    // ogrID kolonu
    echo $sonuc[1];    // ogrAd kolonu 
    echo $sonuc[2];    // ogrSoyad kolonu
    echo $sonuc[3];    // ogrNo kolonu
}

?>