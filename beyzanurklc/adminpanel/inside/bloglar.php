<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi


$blogsor=$db->prepare("SELECT * FROM blog  order by blog_id DESC");
$blogsor->execute(); 
 

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Blog Yazıları Listeleme <small>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="blog-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Blog İd</th>
                  <th>Blog Başlık</th>
                  <th>Blog İçerik</th>
                  <th>Blog Zaman</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
        
                 <td><?php echo $blogcek['blog_id']; ?></td>
                 <td><?php echo $blogcek['blog_baslik']; ?></td>
                 <td><?php echo substr( $blogcek['blog_icerik'],0,30); ?></td>
                 <td><?php echo $blogcek['blog_tarih']; ?></td>

                 


            <td><center><a href="blog-duzenle.php?blog_id=<?php echo $blogcek['blog_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
            <td><center><a href="../baglantim/islem.php?blog_id=<?php echo $blogcek['blog_id']; ?>&blogsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
