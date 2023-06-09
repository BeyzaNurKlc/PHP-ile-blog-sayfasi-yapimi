
<?php include "header.php"; 

$blogsor=$db->prepare("SELECT * FROM blog  order by blog_id DESC");
$blogsor->execute(); 
 



?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/tasarim_1.png)" >
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/tasarim_2.png)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/tasarim_3.png)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

   



<section id="members" class="members">
      <div class="container">
 <div class="section-title">
          <h2>Son Eklenenler</h2>
        </div>
        <div class="row">






 <?php 

                $say=0;

                while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) { $say++?>





          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo $blogcek['blog_gorsel']; ?>" class="img-fluid" alt="">
                <div class="social">
                  
                  <a href="blog-detay.php?blog_id=<?php echo $blogcek['blog_id']; ?>" class="btn-learn-more">Devamını Oku</a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $blogcek['blog_baslik']; ?></h4>
                <span><?php 

                  $tarih=substr($blogcek['blog_tarih'],0,10);
                  $trtarih=date("d-m-Y",strtotime($tarih));


                echo $trtarih; ?></span>

                <p><?php echo substr($blogcek['blog_icerik'],0,150); ?>...</p>

              </div>
            </div>
          </div>




<?php } ?>






        </div>

      </div>
    </section><!-- End Members Section -->



 <!-- ======= Recent Photos Section ======= -->
    <section id="recent-photos" class="recent-photos">
      <div class="container">

        <div class="section-title">
          <h2>Kadrajımdan</h2>
          <p>Aşağıda görmüş olduğunuz fotoğraflar gezdiğim yerlerde ölümsüzleştirdiğim, şahsıma ait fotoğraflardır. Lütfen izinsiz kullanmayınız .</p>
        </div>

        <div class="owl-carousel recent-photos-carousel">

<!-- Buraya admin panelden bir alan yapıcam kadrajıma ekle diye ordan veri tabanına eklediğim fotoğrafları sırayla buraya çekicem-->
          <img src="assets/img/kadrajım/bolu.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/burdur.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/kusadasi.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/orman.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/mersin2.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/izmir.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/sile.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/kumsal.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/sky.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/sirince.jpg" alt="kadrajımdan">

          <img src="assets/img/kadrajım/van.jpg" alt="kadrajımdan">



        </div>

      </div>
    </section><!-- End Recent Photos Section -->







  </main><!-- End #main -->

 
<?php include "footer.php"; ?>