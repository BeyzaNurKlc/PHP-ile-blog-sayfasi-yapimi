
      <?php include "header.php"; 


      ob_start();
      error_reporting();



          if ( isset( $_GET["blog_id"] ) )
         {

          
      $blogsor=$db->prepare("SELECT * FROM blog WHERE blog_id=:blog_id");
          $blogsor->execute(array(
          'blog_id'=>$_GET['blog_id'])); 
          $blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);
        }
       

      ?>
   
    <main style="margin-top: 30px;" id="main">

      <!-- ======= My & Family Section ======= -->
    <section  id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $blogcek['blog_baslik']; ?></h2>
          <p>
                <?php 

                  $tarih=substr($blogcek['blog_tarih'],0,10);
                  $trtarih=date("d-m-Y",strtotime($tarih));


                echo $trtarih; ?></p>
        </div>




        <div class="row content">
          <div class="col-lg-6">
          	<!-- Blog görsel buraya gelecek ve kod ekleme alanıda yapmalıyım buraya-->
            <img src="<?php echo $blogcek['blog_gorsel']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              <?php echo $blogcek['blog_icerik']; ?>
            </p>
            
          
            </div>
        </div>

      </div>
    </section><!-- End My & Family Section -->


<?php include "footer.php"; ?>