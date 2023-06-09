<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi


$iletisimsor=$db->prepare("SELECT * FROM iletisim  order by iletisim_id DESC");
$iletisimsor->execute(); 
 

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>İletişim Mesajlarını Listeleme <small>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>İletisim İd</th>
                  <th>İletisim Ad-Soyad</th>
                  <th>İletisim Mail</th>
                  <th>İletisim Başlık</th>
                  <th>İletisim Mesaj</th>
                  

  
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
             <div style="width: 80%;">                
                 <td><?php echo $iletisimcek['iletisim_id']; ?><br></td>
                 <td><?php echo substr($iletisimcek['iletisim_ad'],0,30); ?><br></td>
                 <td><?php echo substr( $iletisimcek['iletisim_mail'],0,30); ?><br></td>
                 <td><?php echo substr($iletisimcek['iletisim_baslik'],0,30);; ?><br></td>
                 <td>
                  <?php echo substr($iletisimcek['iletisim_mesaj'],0,30); ?> <br>
                   <a  href="iletisim-detay.php?iletisim_id=<?php echo $iletisimcek['iletisim_id']; ?>" class="btn-primary" >Devamını Oku</a>

                 </td>

               
                </td> 


             </div>
          </tr>


          <?php  }

          ?>


        </tbody>
      </table>



    </div>
  </div>
</div>
</div>




</div>
</div>


<?php include 'footer.php'; ?>
