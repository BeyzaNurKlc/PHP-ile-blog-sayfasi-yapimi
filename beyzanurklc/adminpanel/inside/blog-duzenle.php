<?php 

include 'header.php'; 

$blogsor=$db->prepare("SELECT * FROM blog  where blog_id=:blog_id");
$blogsor->execute(array(
'blog_id'=>$_GET['blog_id']
));
 $blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Blok Ayarları <small>

            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../baglantim/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="blog_baslik" value="<?php echo $blogcek['blog_baslik']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div hidden=""><input type="text" name="blog_id" value="<?php echo $blogcek['blog_id']; ?>"></div>


              <!-- Ck Editör Başlangıç -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="blog_icerik"><?php echo $blogcek['blog_icerik']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör Bitiş -->


    <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Görsel Yol <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="blog_gorsel" value="<?php echo $blogcek['blog_gorsel']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


    <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Blog Kategori <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" disabled="" name="blog_tur" value="<?php echo $blogcek['blog_tur']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

<div class="form-group" >
  
<div class="center" style="margin-left: 30%; margin-right: 30%;" >
 <select   class="form-control" name="blog_tur" required="" >
  <option value="">SEÇİNİZ</option>
  <option value="KODLAMA">KODLAMA </option>
  <option value="MOTİVASYON">MOTİVASYON </option>
  <option value="HAYATA DAİR">HAYATA DAİR</option>
  <option value="EĞLENCE">EĞLENCE</option>
  <option value="TARİF">TARİF</option>
  <option value="KİTAP">KİTAP</option>

</select>

</div>
</div> 




            <div class="ln_solid"></div>
            <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="blogduzenle" class="btn btn-success">Güncelle</button>
              </div>
            </div>

          </form>



        </div>
      </div>
    </div>
  </div>



  <hr>
  <hr>
  <hr>



</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
