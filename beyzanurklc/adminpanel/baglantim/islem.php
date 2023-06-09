<?php 


ob_start();
session_start();
error_reporting();

include 'baglan.php';
include '../inside/fonksiyon.php';



//adminpanel baglanti giris ~ login for admin

if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_sifre=($_POST['kullanici_sifre']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_sifre=:sifre and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'sifre' => ($kullanici_sifre),
		'yetki' => 27
		));

	echo $say=$kullanicisor->rowCount();

	if ($say>=1) {
				
		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../inside/index.php");
		exit;



	} else {

		header("Location:../inside/login.php?durum=no");
		exit;
	}
	

}




//blog ekleme ~ add blog

if(isset($_POST['blogkaydet']))
{

	$blogukaydet=$db->prepare("INSERT INTO blog SET 
		blog_id=:blog_id,
		blog_baslik=:blog_baslik,
		blog_icerik=:blog_icerik,
		blog_gorsel=:blog_gorsel,
		blog_tur=:blog_tur
		");

$insert=$blogukaydet->execute(array(
'blog_id'=>$_POST['blog_id'],
'blog_baslik'=> $_POST['blog_baslik'],
'blog_icerik'=> $_POST['blog_icerik'],
'blog_gorsel'=> $_POST['blog_gorsel'],
'blog_tur'=> $_POST['blog_tur']
));


if($insert)
{
	header("Location:../inside/bloglar.php?durum=ok");
}
else
	
	{header("Location:../inside/bloglar.php?durum=no");}}


//blok duzenleme ~ update blog


if (isset($_POST['blogduzenle'])) {

	$blog_id=$_POST['blog_id'];
	
	
	$kaydet=$db->prepare("UPDATE blog SET
		blog_baslik=:blog_baslik,
		blog_icerik=:blog_icerik,
		blog_gorsel=:blog_gorsel,
		blog_tur=:blog_tur
		WHERE blog_id={$_POST['blog_id']}");
	$update=$kaydet->execute(array(
		'blog_baslik' => $_POST['blog_baslik'],
		'blog_icerik' => $_POST['blog_icerik'],
		'blog_gorsel'=> $_POST['blog_gorsel'],
		'blog_tur'=> $_POST['blog_tur']	
		));

	if ($update) {

		Header("Location:../inside/bloglar.php?durum=ok");

	} else {

		Header("Location:../inside/bloglar.php?durum=no");
	}

}



//blog silme ~ blog delete

if ($_GET['blogsil']=="ok") {

	$sil=$db->prepare("DELETE from blog where blog_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['blog_id']
		));


	if ($kontrol) {


		header("location:../inside/bloglar.php?sil=ok");


	} else {

		header("location:../inside/bloglar.php?sil=no");

	}


}


//İletişim sayfasından bana gelen mesajlar için oluşturduğum kod 
// The code I created for the messages that came to me from the contact page.

if(isset($_POST['iletisimbutonu']))
{

	$iletisimkaydet=$db->prepare("INSERT INTO iletisim SET 
		
		
		iletisim_ad=:iletisim_ad,
		iletisim_mail=:iletisim_mail,
		iletisim_baslik=:iletisim_baslik,
		iletisim_mesaj=:iletisim_mesaj");

$insert=$iletisimkaydet->execute(array(


'iletisim_ad'=>$_POST['iletisim_ad'],
'iletisim_mail'=> $_POST['iletisim_mail'],
'iletisim_baslik'=> $_POST['iletisim_baslik'],
'iletisim_mesaj'=> $_POST['iletisim_mesaj'],

));


if($insert)
{
	header("Location:../../iletisim.php?durum=ok");
}
else
	
	{header("Location:../../iletisim.php?durum=no");}}








 ?>