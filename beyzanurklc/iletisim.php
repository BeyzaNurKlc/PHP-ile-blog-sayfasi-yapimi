

<?php include "header.php"; ?>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>İletişim</h2>
          <ol>
            <li><a href="index.php">Anasayfa</a></li>
            <li>İletişim</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact-us" class="contact-us">
      <div class="container">

        <div hidden="">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bx bxl-instagram"></i>
                <h4>İnstagram:</h4>
                <p>byznurklc</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>nurbyzaklc@gmail.com</p>
              </div>

              <div hidden="" class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
                      

            <?php 

            if ($_GET['durum']=="ok") {?>

            <script type="text/javascript">
              alert("Mesajınız bizlere başarılı bir şekilde iletildi.");
            </script>

            <?php }
            ?>
    



               <?php 
             if ($_GET['durum']=="no") {?>

        <div style="display: inline-block;" class="alert alert-danger">
          <strong>Hata! </strong> Mesajınız bizlere iletilemedi, daha sonra tekrar deneyiniz.
        </div>
          

                    <?php }
                    ?>






            <form  action="adminpanel/baglantim/islem.php" method="POST" role="form" class="">
             
              <div class="form-row">

                <div class="col-md-6 form-group">
                  <input type="text" name="iletisim_ad" required="" class="form-control"  placeholder="Adınız" data-rule="minlen:4" data-msg="Lütfen adınızı doğru ve eksiksiz giriniz." />
                  <div class="validate"></div>
                </div>

                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="iletisim_mail" required=""  placeholder="Mail Adresiniz" data-rule="email" data-msg="Lütfen aktif kullandığınız mail adresinizi doğru ve eksiksiz giriniz." />
                  <div class="validate"></div>
                </div>

              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="iletisim_baslik" required="" placeholder="Konu Başlığınız" data-rule="minlen:4" data-msg="Lütfen bizi haberdar etmek istediğiniz konuya uygun bir başlık yazınız." />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="iletisim_mesaj" required="" rows="5" data-rule="required" data-msg="Lütfen bizi haberdar etmek istediğiniz konuyu açıklayıcı bir şekilde yazınız." placeholder="Mesajınız"></textarea>
                <div class="validate"></div>
              </div>

   

              <div class="text-center"><button class="btn-primary" name="iletisimbutonu" type="submit">GÖNDER</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  
  
<?php include "footer.php"; ?>