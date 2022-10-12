   <style>
       .slider {
        width: 70%;
        margin: 0px auto;
        
    }
    .slider-image img {
     width: 100px;
     height: auto;
     margin-right: 10px;
 }



 @media (max-width: 991px) {
  .slider-image img {
     width: 80px;

 } 
}

@media (max-width: 500px) {
  .slider-image img {
     width: 80px;

 } 
}


#pop {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #00000087;
    z-index: 99999;
}


</style>
<!--================Home Banner Area =================-->
<?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='26' and tipe='2'")->result() as $p) { 
    if ($p->aktif=='Y'){
       ?>
       <div id="pop" class="pop">
          <div id="popup" class="popup panel panel-primary">

            <img src="../admin/upload/banner/<?=$p->image;?>" alt="popup" >

            
            <div class="panel-footer">
               <button id="closee" class="close"></button>
           </div>   
       </div>
   </div>
   <?php
}
}
?>
<?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='26' and tipe='1'")->result() as $b) { ?>
    <!-- <section class="home_banner_area" style="overflow-x:hidden; background: url('../admin/upload/banner/<?=$b->image;?>') no-repeat right center;background-size: cover;"> -->
        <section class="home_banner_area ful" style="overflow-x:hidden; background: url('<?=base_url()?>assets/img/Home_digi.png') no-repeat right center;background-size: cover;">
      <?php
  }
  ?>

  <div class="banner_inner" style="width: 100%;height: 555px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" >
                <div class="banner_content ">
                    <h2 style="color: white">
                        Deliver
                        <br>
                        Your Trust To The Future
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue risus id diam blandit laoreet. Maecenas et metus dapibus, finibus felis a, elementum nunc.

                    </p>
                    <div class="d-flex align-items-center video-you">
                        <a class="primary_btn" href="#daftar" data-toggle="modal" data-target="#theModal" ><span>Join With US</span></a>

                        <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=-YKJtvmAsDs" data-fancybox>
                            <span></span>
                        </a>
                        <div class="watch_video text-uppercase" style="color: white">
                            watch the video
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-7">
               <div class="home_right_img" >
                <img class="img-fluid" width="40%" height="100%" src="<?=base_url();?>assets/img/banner/home-right.png" alt="" hidden="true">
            </div>
        </div>


    </div>
</div>
</div>
</section>



<!--================End Home Banner Area =================-->

<!--================Start Features Area =================-->

<!--================End Features Area =================-->

<!--================Recent Update Area =================-->
<section class="home_gap ful" style="overflow-x:hidden;overflow-y:hidden ">
    <div class="container">
        <div class="recent_update_inner " >
            <ul class="nav nav-tabs justify-content-center product" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="800">

               <li class="nav-item">

                <a class="nav-link produk progilog active " id="contact-tab" data-toggle="tab" href="#digitics" role="tab" aria-controls="digitics"
                aria-selected="false">
                <!-- <span class="lnr lnr-screen"></span> -->
                <!-- <img class="img-fluid" src="assets/img/produk/produk4.png" alt="" > -->
                <div class="progilog"></div>
                <!-- <h6 >ProgiLOG</h6> -->
            </a>


        </li>

        <li class="nav-item">
            <a class="nav-link produk progitrack" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                <!-- <span class="lnr lnr-screen"></span> -->
                <!-- <img class="img-fluid" src="assets/img/produk/produk1.png" alt="" > -->
                <div class="progitrack"></div>
                <!-- <h6 >ProgiTRACK</h6> -->
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link produk progicounting" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">
            <!-- <span class="lnr lnr-screen"></span> -->
            <!-- <img class="img-fluid" src="assets/img/produk/produk2.png" alt="" > -->
            <div class="progicounting"></div>
            <!-- <h6 >ProgiCOUNTING</h6> -->
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link produk progipos" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
        aria-selected="false">
        <!-- <span class="lnr lnr-screen"></span> -->
        <!-- <img class="img-fluid" src="assets/img/produk/produk3.png" alt=""> -->
        <div class="progipos"></div>
        <!-- <h6 >ProgiPOS</h6> -->
    </a>
</li>



</ul>
<div class="tab-content" id="myTab" style="margin-left: 100px;margin-top: -105px" data-aos="fade-up" data-aos-duration="800">
  <div class="tab-pane fadeIn isi active show" id="digitics" role="tabpanel" aria-labelledby="digitics-tab">
    <div class="row recent_update_text align-items-center">
        <div class="col-lg-6">
            <div class="chart_img">
                <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Digitics'")->result() as $dg1) { ?>
                    <img class="img-fluid" src="../admin/upload/web_picture/<?=$dg1->image;?>" alt="">
                    <?}?>
                </div>
            </div>
        <div class="col-lg-5 text-left">
            <div class="common_style">
                <!-- <p class="line">ProgiLOG</p> -->
                <h3 class="font-baru">Layanan Logistik <br /> Untuk Sistem Logistik Anda</h3>
                <p class="font-baru">Sebuah aplikasi yang dirancang khusus bagi para penyedia jasa layanan logistics, kurir, cargo dan tracking. Dengan ad anya aplikasi ProgiLOG memudahkan perusahaan logistics untuk memanagement barang-barang kiriman dari customer, baik outbound maupun inbound secara realtime.</p>
                <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Digitics-detail'")->result() as $dt1) { ?>
                   <a class="primary_btn" href="../admin/upload/web_picture/<?=$dt1->image;?>" data-fancybox ><span>Manfaat</span></a>
                   <?}?>
               </div>
           </div>
           
        </div>
    </div>
    <div class="tab-pane fadeIn isi" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row recent_update_text align-items-center">
            <div class="col-lg-6">
                <div class="chart_img">
                 <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Digitrack'")->result() as $dg2) { ?>
                    <img class="img-fluid" src="../admin/upload/web_picture/<?=$dg2->image;?>" alt="">
                    <?}?>
                </div>
            </div>
            <div class="col-lg-5 text-left">
                <div class="common_style">
                    <!-- <p class="line">ProgiTRACK</p> -->
                    <h3 class="font-baru">Layanan Pelacak <br /> Untuk Sistem Tracking Aplikasi Anda</h3>
                    <p class="font-baru">Sebuah aplikasi yang di rancang khusus untuk memonitoring posisi kendaraan secara realtime, dimana pun dan kapan pun. Baik melalui Handphone berbasis android, ios ataupun under komputer/laptop/ Yang memanfaatkan fasilitas tehknologi di zaman yang milineal semua kepraktisan ada di genggaman anda.</p>
                    <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Digitrack-detail'")->result() as $dt2) { ?>
                       <a class="primary_btn" href="../admin/upload/web_picture/<?=$dt2->image;?>" data-fancybox ><span>Manfaat</span></a>
                       <?}?>
                   </div>
               </div>
               
        </div>
    </div>
    <div class="tab-pane fadeIn isi " id="profile" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row recent_update_text align-items-center">
            <div class="col-lg-6">
                <div class="chart_img">
                    <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Digicounting'")->result() as $dg3) { ?>
                        <img class="img-fluid" src="../admin/upload/web_picture/<?=$dg3->image;?>" alt="">
                        <?}?>
                    </div>
                </div>
            <div class="col-lg-5 text-left">
                <div class="common_style">
                    <!-- <p class="line">ProgiCOUNTING</p> -->
                    <h3 class="font-baru">Layanan Akuntan <br /> Untuk Sistem Keuangan Anda</h3>
                    <p class="font-baru">Sebuah aplikasi yang di rancang khusus untuk laporan keuangan perusahaan anda. Perusahaan yang maju berawal dari management keuangan yang sehat. Dengan ada nya aplikasi ProgiCOUNTING pengelolaan keuangan perusahaan diberikan kemudahan secara integrasi dari penjualan perusahaan anda langsung masuk ke kasir management, sehingga diperoleh laporan-laporan dengan tepat sesuai waktu.</p>
                    <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Digicounting-detail'")->result() as $dt3) { ?>
                       <a class="primary_btn" href="../admin/upload/web_picture/<?=$dt3->image;?>" data-fancybox ><span>Manfaat</span></a>
                       <?}?>
                   </div>
               </div>
               
            </div>
        </div>
        <div class="tab-pane fadeIn isi" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row recent_update_text align-items-center">
                <div class="col-lg-6 ">
                    <div class="chart_img">
                        <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Digipos'")->result() as $dg4) { ?>
                            <img class="img-fluid" src="../admin/upload/web_picture/<?=$dg4->image;?>" alt="">
                            <?}?>
                        </div>
                    </div>

                <div class="col-lg-5 text-left">
                    <div class="common_style">
                        <!-- <p class="line">ProgiPOS</p> -->
                        <h3 class="font-baru">Layanan Penjualan <br /> Untuk Sistem Penjualan Anda</h3>
                        <p class="font-baru">Sebuah aplikasi yang dirancang khusus pengelolaan penjualan retail atau point of sales. Memanfaatkan teknologi yang semakin berkembang, kemudahan dalam penjualan barang pun berada di genggaman anda secara realtime dapat diperoleh laporan-laporan yang di harapkan sesuai standarisasi penjualan.</p>
                        <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Digipos-detail'")->result() as $dt4) { ?>
                           <a class="primary_btn" href="../admin/upload/web_picture/<?=$dt4->image;?>" data-fancybox ><span>Manfaat</span></a>
                           <?}?>
                       </div>
                   </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--================ Recent Update Area =================-->

<!--================Start Big Features Area =================-->
<section class="big_features ful" style="overflow-x:hidden; background: url('<?=base_url()?>assets/img/profile_bg.png') no-repeat right center;background-size: cover;">
    <div class="container" >
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="800">
            <div class="col-lg-8 text-center" style="margin-top:8%;">
                <div class="main_title" >
                    <p style="color: white;margin-top:30px;" class="top_title">EMCO Digitalindo Profile</p>
                    <h2 style="color: white">Convenience In Business, Can Be Accessed Anywhere And Anytime.</h2>
                    <p style="color: white">EMCO Digitalindo bergerak dalam bidang  Hardware dan Software Development yang mengkhususkan diri dalam menciptakan dan mengembangkan aplikasi web, aplikasi mobile, serta aplikasi  lainnya yang berbasis web, berdiri sejak 2009, kami menawarkan solusi dan layanan terbaik untuk kelancaran usaha perusahaan yang menjadi Client kami.
                    Kami memiliki tim pengembang / programmer yang berpengalaman dibidangnya, kami akan memberikan layanan profesional. Kami akan terus mengikuti perkembangan jaman dan permintaan pasar dalam pengembangan ke depan.</p>
                    <div class="price_footer" style="margin-top: 50px">
                        <center> 
                            <a style="color: black;" class="primary_btn" href="<?=base_url('/admin/upload/'.$company->companyProfile)?>" target="_blank"><span>Company Profile</span></a>
                            <!-- <a class="primary_btn" href="<?=base_url('upload/COMPANY PROFILE EMCO DIGITALINDO 2019.pdf')?>" target="_blank"><span>Company Profile</span></a> -->
                        </center>
                    </div>

                </div>



            </div>

        </div>
    </div>
</section>

<section class="big_features" style="overflow-x:hidden; ">
    <div class="container">

        <div class="row features_content" data-aos="fade-left" data-aos-duration="800" hidden="">
            <div class="col-lg-4 offset-lg-1" >
                <div class="big_f_left">
                    <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Home1'")->result() as $h1) { ?>
                        <img class="img-fluid" src="../admin/upload/web_picture/<?=$h1->image;?>" alt="">
                        <?}?>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="common_style">
                        <h3 class="line">Visi & Misi</h3>
                        <!--    <h3>We Believe that <br /> Inner beauty Lasts Long</h3> -->
                        <p><b>VISI</b> kami adalah menjadi konsultan yang terdepan dalam bidang IT (Information & Technology) dan telekomunikasi dengan selalu memberikan solusi yang inovatif sehingga setiap mitra kami mampu bersaing dalam skala nasional maupun internasional.</br> <b>MISI</b> kami adalah memberikan jasa IT (Information & Technology) dan telekomunikasi terbaik dengan nilai tambah kepada setiap mitra yang menjalin kerja sama dengan kami berdasarkan prinsip-prinsip sebagai berikut :</p></br>
                        <p>1. Berorientasi kemitraan</p>
                        <p>2. Efektifitas dan efisiensi atas solusi</p>
                        <p>3. Inovasi yang berkesinambungan</p>
                        <p>4. Kualitas dan profesionalisme kerja yang tinggi</p>
                        <p>5. Komitmen dalam setiap pelayanan</p>
                        <!--            <a class="primary_btn" href="#"><span>Learn More</span></a> -->
                    </div>
                </div>
                <div class="border-line"></div>
                <img class="shape1"src="assets/img/shape1.png" alt="">     
                <img class="shape2"src="assets/img/shape2.png" alt="">     
                <img class="shape3"src="assets/img/shape1.png" alt="">     
            </div>

            <div class="row features_content bottom-features" data-aos="fade-right" data-aos-duration="800">
                <div class="col-lg-12 text-center">
                   <h2 class="line" style="color:#000">Apa Yang Kami Lakukan?</h2>
                   <p>EMCO Digitalindo selalu memberikan solusi dan hasil yang terbaik kepada klien kami, </p>
                   <p>Kami selalu mengedepankan 5 tahap pada tiap pekerjaan yang kami lakukan:</p> 
                </div>
                
            </div>
            <div class="row features_content bottom-features" data-aos="fade-right" data-aos-duration="800" style="margin-top: 19px;">
                
                
                <div class="col-lg-5 ">
                    <div class="big_f_left">
                        <?php foreach($this->db->query("SELECT * FROM tbl_picture where posisi='Home2'")->result() as $h2) { ?>
                            <!-- <img class="img-fluid" src="../admin/upload/web_picture/<?=$h2->image;?>" alt=""> -->
                            <img class="img-fluid" src="<?=base_url()?>assets/img/ava_wedo.png" alt="">
                            <?}?>
                        </div>
                </div>

                <div class="col-lg-5 offset-lg-2">
                    <div class="common_style">
                         <!-- <h3 class="line">Apa Yang Kami Lakukan?</h3> -->

                         <!-- <h3>We Believe that <br /> Inner beauty Lasts Long</h3> -->

                        <!-- <p>EMCO Digitalindo selalu memberikan solusi dan hasil yang terbaik kepada klien kami, Kami selalu mengedepankan 5 tahap pada tiap pekerjaan yang kami lakukan:</p></br> -->
                        <p><b>Perencanaan</b></br>Kami akan mendengarkan dan memahami setiap kebutuhan klien.</p>
                        <br>
                        <p><b>Analisa</b></br>Setelah kami memahami kebutuhan klien, kami akan melakukan analisa, memberikan masukan dan solusi kepada klien tentang sistem dan alur pekerjaan dari tahapan awal hingga tahapan akhir.</p>
                        <br>
                        <p><b>Desain</b></br>Desain merupakan tahap terpenting dalam membuat sebuah aplikasi, maka dari itu kami akan menawarkan konsep desain yang terbaik untuk mencapai kepuasan klient kami.</p>
                        <br>
                        <p><b>Development</b></br>Tahap development adalah tahap dimana kita memproduksi sebuah aplikasi dan memastikan bahwa aplikasi tersebut dapat berjalan dengan baik dan menginformasikan dan memastikan kepada klien bahwa aplikasi yang kami buat sudah sesuai dengan kebutuhkan klien.</p>
                        <br>
                        <p><b>Testing & Implementasi</b></br>Sebelum aplikasi benar-benar siap untuk live pada tahap ini kami akan melakukan testing baik dari sisi kami maupun dari sisi user, sehingga dapat memastikan bahwa aplikasi dapat berjalan dengan baik.</p>
                        <!--         <a class="primary_btn" href="#"><span>Learn More</span></a> -->
                    </div>
                </div>

                    <div class="border-line"></div>
                    <div class="besar">
                    <img class="shape1"src="assets/img/ckck.png" alt="" style="width: 25px">     
                    <img class="shape2"src="assets/img/ckck.png" alt="" style="width: 25px">     
                    <img class="shape3"src="assets/img/ckck.png" alt="" style="width: 25px">
                    <img class="shape4"src="assets/img/ckck.png" alt="" style="width: 25px">
                    <img class="shape5"src="assets/img/ckck.png" alt="" style="width: 25px">
                    </div>     
                </div>
            </div>
        </section>
        <!--================End Big Features Area =================-->

          <!--================ Start Testimonial Area =================-->
  <div class=" testimonial_area" style="padding-top: 100px">
    <div class="container" data-aos="flip-up" data-aos-duration="800">
        <div class="row">
            <div class="col-lg-8">
                <div class="main_title">
                    <!-- <p class="top_title">User Feedback</p> -->
                    <!-- <p class="line text-left">Testimonial</p> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p class="line text-left">Testimonial</p>
                <h3 style="color: #000">Apa Yang Meraka katakan?</h3>
            </div>
        </div>


    </div>
</div>
<!--================ End Testimonial Area =================-->
<div class="besar" style="background: url('<?=base_url()?>assets/img/Maps_bg.png') no-repeat right center;background-size: contain;">
    
<section class="testimoni slider slider-image" data-aos="flip-up" data-aos-duration="800" style="height: auto !important;padding-bottom: 3%;padding-top: 3%" hidden="">
    
    <?php foreach($this->db->query("SELECT * FROM tbl_testimonial2 where status='Y'")->result() as $i) {  ?>  
        <div class="inner-slider">
            <a href="<?php echo base_url();?>testimoni/detail/testimoni<?php echo $i->id;?>">
                        <div class="col-md-9 col-sm-9 col-xs-9" style="margin-top: 42px;background-color: #fff;border-radius: 20px;background: #FFFFFF;box-shadow: 0px 4px 10px 5px rgba(0, 0, 0, 0.05);padding-bottom: 4%;margin-left: 4%" data-aos="fade-right">
                          <div style="background-color:transparent; width: 100% !important; ">
                           <div class="row justify-content-center post-media wow fadeIn" style="position: relative;">
                            <!-- <center> -->
                              <div class="col-lg-4" style="position: relative;
                              overflow: hidden;
                              /*border-radius: 50%;*/
                              width: 80px;height: 80px;
                              top:-30px;">
                              <img src="https://www.digitalindo.co.id/upload/testimoni/<?php  echo $i->foto;?>" style="width: auto;height: 80px;margin: 0 auto;border-radius: 50%;border: 6px solid #fff;">
                              </div>

                              <div class="col-lg-8 text-left" style="margin-top:20px">
                                <h5><?=$i->nama?></h5>
                                <p style="font-size: 10px"><?=$i->namaPerusahaan?><br></p>  
                              </div>

                              
                            <!-- </center> -->
                          </div>
                          <!-- <center> -->
                            <!-- <h3><?=$i->nama?></h3> -->
                          <!-- </center> -->
                          <!-- <center> -->
                            <!-- <h6><?=$i->namaPerusahaan?><br></h6> -->
                          <!-- </center> -->
                          
                          
                           <i class="text-left">
                            "<?=ucfirst(strtolower(str_replace(array('<p>','</p>'),array('','' ),$i->hasil))) ?>"
                           </i>
                          


                         </div><!-- end service -->
                        </div><!-- end col -->
            </a>

        </div>

<?php
}
?>

</section>

<section class="ful" data-aos="flip-up" data-aos-duration="800" style="padding-top: 3%;padding-bottom: 3%">

    <div class="row">
        <div class="col-lg-10"></div>
        <div class="col-lg-1 prevs"><img src="assets/img/panah_nonaktif.png" style="width: 40px"></div>
        <div class="col-lg-1 nexts"><img src="assets/img/panah_aktif.png" style="width: 40px"></div>
    </div>
    <!-- <div class="prevs">
         <img src="assets/img/panah_nonaktif.png">
     </div>
     <div class="nexts">
         <img src="assets/img/panah_aktif.png">
     </div> -->

    <div class="your-class">
         <?php foreach($this->db->query("SELECT * FROM tbl_testimonial2 where status='Y'")->result() as $i) {  ?>
            <div style="margin-left: 4%">
               <a href="<?php echo base_url();?>testimoni/detail/testimoni<?php echo $i->id;?>">
                        <div class="col-md-9 col-sm-9 col-xs-9" style="margin-top: 42px;background-color: #fff;border-radius: 20px;background: #FFFFFF;box-shadow: 0px 4px 10px 5px rgba(0, 0, 0, 0.05);padding-bottom: 4%" data-aos="fade-right">
                          <div style="background-color:transparent; width: 100% !important; ">
                           <div class="row justify-content-center post-media wow fadeIn" style="position: relative;">
                            <!-- <center> -->
                              <div class="col-lg-4" style="position: relative;
                              overflow: hidden;
                              /*border-radius: 50%;*/
                              width: 80px;height: 80px;
                              top:-30px;">
                              <img src="https://www.digitalindo.co.id/upload/testimoni/<?php  echo $i->foto;?>" style="width: auto;height: 80px;margin: 0 auto;border-radius: 50%;border: 6px solid #fff;">
                              </div>

                              <div class="col-lg-8 text-left" style="margin-top:20px">
                                <h5><?=$i->nama?></h5>
                                <p style="font-size: 10px"><?=$i->namaPerusahaan?><br></p>  
                              </div>

                              
                            <!-- </center> -->
                          </div>
                          <!-- <center> -->
                            <!-- <h3><?=$i->nama?></h3> -->
                          <!-- </center> -->
                          <!-- <center> -->
                            <!-- <h6><?=$i->namaPerusahaan?><br></h6> -->
                          <!-- </center> -->
                          
                          
                           <i class="text-left">
                            "<?=ucfirst(strtolower(str_replace(array('<p>','</p>'),array('','' ),$i->hasil))) ?>"
                           </i>
                          


                         </div><!-- end service -->
                        </div><!-- end col -->
            </a> 
            </div> 
         <?php } ?>

    </div>

</section>

</div>
<!-- .besar -->


<div class="mvLayanan">

<section class="testimoni slider slider-image" data-aos="flip-up" data-aos-duration="800" style="overflow-x:hidden;height: auto !important;">
    <?php foreach($this->db->query("SELECT * FROM tbl_testimonial2 where status='Y'")->result() as $i) {  ?>  
        <div class="inner-slider">
    <a href="<?php echo base_url();?>testimoni/detail/testimoni<?php echo $i->id;?>">
            <div class="col-md-12 col-sm-12 col-xs-12" style="float: left;" data-aos="fade-right">
              <div style="background-color:transparent; width: 100% !important; ">
               <div class="post-media wow fadeIn">
                <center>
                  <div style="position: relative;
                  overflow: hidden;
                  border-radius: 50%;
                  width: 170px;height: 170px;">
                  <img src="https://www.digitalindo.co.id/upload/testimoni/<?php  echo $i->foto;?>" style="width: auto;height: 170px;margin: 0 auto;">
              </div>
          </center>
      </div>
      <center><h3><?=$i->nama?></h3></center>
      <center><h6><?=$i->namaPerusahaan?><br></h6></center>
      <br>
      <center>
       <i>
        "<?=ucfirst(strtolower(str_replace(array('<p>','</p>'),array('','' ),$i->hasil))) ?>"
    </i>
</center>


</div><!-- end service -->
</div><!-- end col -->
</a>

</div>

<?php
}
?>
    

</section>
</div>
<!-- .mvLayanan -->
<!--================ End Brand Area =================-->


<div class=" testimonial_area" style="padding-top: 100px">
    <div class="container" data-aos="flip-up" data-aos-duration="800">
        

        <div class="row">
            <div class="col-lg-12">
                <h3 class="line text-center">Hot News</h3>
                <h2 class=" text-center" style="color: #000">Dapatkan Informasi Terbaru Seputar Teknologi dan Berita Lainnya.</h2>
                <p class=" text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis lacus non orci euismod vestibulum vitae ut ex. Quisque ut arcu at lectus tristique auctor sit amet at turpis.</p>
            </div>
        </div>


    </div>


<section class="ful">
    <div class="row">
    <div class="container pad-container" >
    



                <?php 
                            if(($berita->num_rows()) >0){ 
                                        foreach ($berita->result() as $p) {
                ?>
              
                <div class="col-md-4 col-sm-4 col-xs-12" style="float: left" data-aos="fade-right">
                  <div class="home-news wow fadeIn" style="background-color:transparent; " data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="post-media wow fadeIn">
                            <a href="<?php  echo base_url();?>berita/baca/<?php  echo $p->slug;?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i>
                            <center><img src="/admin/upload/news_post/<?php  echo $p->image;?>" alt="" style="width:100% ;height:130px;" class="img-fluid img-rounded"></center>
                            </a>
                        </div>

                         <h4><a style="color: #000" href="<?php  echo base_url();?>berita/baca/<?php  echo $p->slug;?>"><?php  if (@$_GET['lang']=='eng'){ ?><?php  echo $p->Title;?><?php  } else echo $p->Title; ?></a></h4>
                      <p  ><span class="fontsize13"><i class="fa fa-clock-o"></i>&nbsp;Posted&nbsp;<?php  if (@$_GET['lang']=='eng'){ ?><?php  echo date('d M Y',strtotime($p->created_date));?><?php  } else echo date('d M Y',strtotime($p->created_date)); ?></p>
                        <p >
                            <?php  if (@$_GET['lang']=='eng'){ ?><?php  echo substr(strip_tags($p->content),0,150);?><?php  } else echo substr(strip_tags($p->content),0,150); ?> .... <a href="<?php  echo base_url();?>berita/baca/<?php  echo $p->slug;?>"> Baca selengkapnya </a>
                        </p>
                    </div><!-- end service -->
                </div><!-- end col -->

                 <?php 
                    }
                    }else{
                    ?>
                    <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                    <?php 
                    echo "Maaf Berita tidak ditemukan";
                    ?>
                        </div>
                    </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
</section>
</div>


        <!--================ Start Testimonial Area =================-->
        <div class=" testimonial_area" style="padding-top: 100px;background-color: #f8f9fc">
            <div class="container" data-aos="flip-up" data-aos-duration="800">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="main_title">
                            <!-- <p class="top_title">User Feedback</p> -->
                            <h2>OUR PARTNER</h2>
                            <!-- <p>Berikut ini klien-klien terbaik yang telah bekerjasama dengan kami</p> -->
                        </div>
                    </div>
                </div>


            </div>
        
        <!--================ End Testimonial Area =================-->
        <section class="regular slider slider-image" data-aos="flip-up" data-aos-duration="800" style="overflow-x:hidden;background-color: #f8f9fc;margin-top: -5%; ">
            <?php foreach($this->db->query("SELECT * FROM tbl_client ")->result() as $i) {  ?>  
                <div>
                 <div class="inner-slider">
                    <div class="col-md-6 col-sm-2 col-xs-2">
                        <center>
                 <div style="width: 150px;height: 120px;margin: 20px;background: #FFFFFF;box-shadow: 0px 4px 10px 5px rgba(0, 0, 0, 0.05);border-radius: 20px;">
                  <center><img src="../admin/upload/client/<?=$i->image;?>" style="width: 100px;object-fit: cover;position: relative;margin-top: 50px;padding-top: 20px;"> </center>
                  </div>
                  </center>
              </div>
              </div>
          </div>

          <?php
      }
      ?> 
  </section>
  </div>

  <!--================ End Brand Area =================-->

<!-- services start -->
            <section class="about-us-advantage-wrap section-padding" id="process" style="background: #0d438d;padding-bottom: 3%;padding-top: 3%">
              <div class="container ">
                <div class="row justify-content-center">

                                 
                  <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12 content-service">
                      <div class="row border-content-service">
                      <div class="col-md-3">
                        <h1><i class="fa fa-calendar" style="color:#119f53"></i></h1>
                                   
                      </div>
                      <div class="col-md-3" style="margin-top:5% ">
                             <h3><?php echo date('d');?></h3>
                      </div>
                       <div class="col-md-4" style="margin-top:9% ">
                           <h5 style="font-size: 12px;"><?php echo date('F Y');?></h5>
                      </div>
                    </div>
                    </div>
                    
                  </div> -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12 content-service">
                      <div class="row border-content-service">
                      <div class="col-md-3">
                        <img src="assets/img/onlinev.png">
                                   
                      </div>
                      <div class="col-md-4" style="margin-top: 8%;margin-left: 15%; ">
                             <h3 style="color:#fff"><?php echo $online->jml;?></h3>
                             <h5 style="font-size: 12px;color:#fff">Online Visitor Today</h5>
                      </div>
                       <!-- <div class="col-md-3" style="margin-top:3% ">
                           <h5 style="font-size: 12px;color:#fff">Online Visitor Today</h5>
                      </div> -->
                    </div>
                    </div>
                    
                  </div>
                   <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12 content-service">
                      <div class="row border-content-service">
                      <div class="col-md-3">
                        <img src="assets/img/todayv.png">
                                   
                      </div>
                      <div class="col-md-4" style="margin-top: 8%;margin-left: 15%; ">
                             <h3 style="color:#fff"><?php echo $today->jml;?></h3>
                             <h5 style="font-size: 12px;color:#fff">Visitor Today</h5>
                      </div>
                       <!-- <div class="col-md-3" style="margin-top:9% ">
                           <h5 style="font-size: 12px;color:#fff">Visitor Today</h5>
                      </div> -->
                    </div>
                    </div>
                    
                  </div>
                   <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12 content-service">
                      <div class="row border-content-service">
                      <div class="col-md-4">
                        <img src="assets/img/visitor.png">
                                   
                      </div>
                      <div class="col-md-4" style="margin-top: 8%;margin-left: 15%; ">
                             <h3 style="color:#fff"><?php echo $all->jml;?></h3>
                             <h5 style="font-size: 12px;color:#fff">Total Visitor</h5>
                      </div>
                       <!-- <div class="col-md-3" style="margin-top:9% ">
                           <h5 style="font-size: 12px;color:#fff">Total Visitor</h5>
                      </div> -->
                    </div>
                    </div>
                    
                  </div>

                 
                 
             

                </div><!-- /.row -->
                
              </div><!-- /.container -->
            </section>   <!-- services end -->



<!--================Impress Area =================-->
<section class="impress_area" style="overflow-x:hidden " hidden="">
    <div class="container">
        <div class="impress_inner" data-aos="fade-up" data-aos-duration="800">
            <h2 style="color:#000;">Hubungi Kami 021 2867 4849</h2>
            <p style="color:#777777;">Untuk pelayanan lebih lanjut silahkan hubungi customer service kami</p>
            <a class="primary_btn"  href="<?=base_url()?>kontak"><span>Call Us</span></a>
        </div>
    </div>
</section>
    <!--================End Impress Area =================-->