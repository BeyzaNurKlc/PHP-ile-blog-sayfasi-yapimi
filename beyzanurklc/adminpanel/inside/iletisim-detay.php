<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
	  ob_start();
      error_reporting();



			$iletisimsor=$db->prepare("SELECT * FROM iletisim  WHERE iletisim_id=:iletisim_id");
			$iletisimsor->execute(array(
			'iletisim_id'=>$_GET['iletisim_id'])); 
			$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>İletişim Mesajı <small>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">

            </div>
          </div>
          <div class="x_content">

      <p> <b>KİŞİ ADI: </b><br> <br> <?php echo $iletisimcek['iletisim_ad']; ?></p> <hr>
      <p> <b>KİŞİ MAİL: </b><br> <br> <?php echo $iletisimcek['iletisim_mail']; ?></p> <hr>
      <p> <b>MESAJ BAŞLIK: </b><br> <br> <?php echo $iletisimcek['iletisim_baslik']; ?></p> <hr>
      <p><b>KİŞİ MESAJI:</b></p>
      <p><?php echo $iletisimcek['iletisim_mesaj']; ?></p> <hr>
      <p> <b>MAİL TARİHİ: </b><br> <br> <?php echo $iletisimcek['iletisim_tarih']; ?></p> <hr>

    </div>
  </div>
</div>
</div>




</div>
</div>


<?php include 'footer.php'; ?>
