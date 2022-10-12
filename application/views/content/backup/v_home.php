   <style>
     .slider {
        width: 70%;
        margin: 0px auto;
    }
   .slider-image img {
       width: 100px;
       height: auto;
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
 
      

   </style>
    <!--================Home Banner Area =================-->
         <?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='26' and tipe='2'")->result() as $p) { 
            if ($p->aktif=='Y'){
         ?>
      <div id="popup" class="popup panel panel-primary">

            <img src="../admin/upload/banner/<?=$p->image;?>" alt="popup" >

            
       <div class="panel-footer">
                         <button id="closee" class="close"></button>
            </div>   
    </div>
       <?php
   }
                }
             ?>
    <?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='26' and tipe='1'")->result() as $b) { ?>
        <section class="home_banner_area" style="overflow-x:hidden; background: url(../admin/upload/banner/<?=$b->image;?>) no-repeat right center;">
              <?php
                }
             ?>
              
        <div class="banner_inner" style="width: 100%;height: 555px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" >
                        <div class="banner_content ">
                            <h2>
                                Deliver
                                <br>
                                 Your Trust To The Future
                            </h2>
                            <p>

                            </p>
                            <div class="d-flex align-items-center video-you">
                                <a class="primary_btn" href="#daftar" data-toggle="modal" data-target="#theModal" ><span>Join With US</span></a>
                                <a class="video-play-button" href="#">
                     <!--            <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=5xoBnew3bhQ"> -->
                                    <span></span>
                                </a>
                                <div class="watch_video text-uppercase" >
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
    <section class="home_gap" style="overflow-x:hidden ">
        <div class="container">
            <div class="recent_update_inner " >
                <ul class="nav nav-tabs justify-content-center product" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="800">
                   
                     <li class="nav-item">
                     
                        <a class="nav-link produk active " id="contact-tab" data-toggle="tab" href="#digitics" role="tab" aria-controls="digitics"
                         aria-selected="false">
                         <!-- <span class="lnr lnr-screen"></span> --><img class="img-fluid" src="assets/img/produk/produk4.png" alt="" >
                         <h6 >DigiTICS</h6>
                        </a>
                
           
                    </li>

                    <li class="nav-item">
                        <a class="nav-link produk" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            <!-- <span class="lnr lnr-screen"></span> --><img class="img-fluid" src="assets/img/produk/produk1.png" alt="" >
                            <h6 >DigiTRACK</h6>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link produk" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                         aria-selected="false">
                         <!-- <span class="lnr lnr-screen"></span> --><img class="img-fluid" src="assets/img/produk/produk2.png" alt="" >
                         <h6 >DigiCOUNTING</h6>
                        </a>
                    </li>
        
                    <li class="nav-item">
                        <a class="nav-link produk" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                         aria-selected="false">
                         <!-- <span class="lnr lnr-screen"></span> --><img class="img-fluid" src="assets/img/produk/produk3.png" alt="">
                         <h6 >DigiPOS</h6>
                        </a>
                    </li>

                     
                   
                </ul>
                <div class="tab-content" id="myTab" style="margin-left: 100px;" data-aos="fade-up" data-aos-duration="800">
                      <div class="tab-pane fadeIn isi active show" id="digitics" role="tabpanel" aria-labelledby="digitics-tab">
                        <div class="row recent_update_text align-items-center">
                            <div class="col-lg-5">
                                <div class="common_style">
                                    <p class="line">DigiTICS</p>
                                    <h3>Layanan Logistik <br /> Untuk Sistem Logistik Anda</h3>
                                    <p>Sebuah aplikasi yang dirancang khusus bagi para penyedia jasa layanan logistics, kurir, cargo dan tracking. Dengan ad anya aplikasi DigiTics memudahkan perusahaan logistics untuk memanagement barang-barang kiriman dari customer, baik outbound maupun inbound secara realtime.</p>
                                 <a class="primary_btn" href="<?=base_url();?>assets/img/digi_tic.jpeg" data-fancybox ><span>Manfaat</span></a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <div class="chart_img">
                                    <img class="img-fluid" src="assets/img/produk/digi4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fadeIn isi" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row recent_update_text align-items-center">
                            <div class="col-lg-5">
                                <div class="common_style">
                                    <p class="line">DigiTRACK</p>
                                    <h3>Layanan Pelacak <br /> Untuk Sistem Tracking Aplikasi Anda</h3>
                                    <p>Sebuah aplikasi yang di rancang khusus untuk memonitoring posisi kendaraan secara realtime, dimana pun dan kapan pun. Baik melalui Handphone berbasis android, ios ataupun under komputer/laptop/ Yang memanfaatkan fasilitas tehknologi di zaman yang milineal semua kepraktisan ada di genggaman anda.</p>
                                    <a class="primary_btn" href="<?=base_url();?>assets/img/digi_track.jpeg" data-fancybox ><span>Manfaat</span></a>
                       
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <div class="chart_img">
                                    <img class="img-fluid" src="assets/img/produk/digi1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fadeIn isi " id="profile" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row recent_update_text align-items-center">
                            <div class="col-lg-5">
                                <div class="common_style">
                                    <p class="line">DigiCOUNTING</p>
                                    <h3>Layanan Akuntan <br /> Untuk Sistem Keuangan Anda</h3>
                                    <p>Sebuah aplikasi yang di rancang khusus untuk laporan keuangan perusahaan anda. Perusahaan yang maju berawal dari management keuangan yang sehat. Dengan ada nya aplikasi DigiCounting pengelolaan keuangan perusahaan diberikan kemudahan secara integrasi dari penjualan perusahaan anda langsung masuk ke kasir management, sehingga diperoleh laporan-laporan dengan tepat sesuai waktu.</p>
                                    <a class="primary_btn" href="<?=base_url();?>assets/img/digi_counting.jpeg" data-fancybox ><span>Manfaat</span></a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <div class="chart_img">
                                    <img class="img-fluid" src="assets/img/produk/digi2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fadeIn isi" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row recent_update_text align-items-center">
                            <div class="col-lg-5">
                                <div class="common_style">
                                    <p class="line">DigiPOS</p>
                                    <h3>Layanan Penjualan <br /> Untuk Sistem Penjualan Anda</h3>
                                    <p>Sebuah aplikasi yang dirancang khusus pengelolaan penjualan retail atau point of sales. Memanfaatkan teknologi yang semakin berkembang, kemudahan dalam penjualan barang pun berada di genggaman anda secara realtime dapat diperoleh laporan-laporan yang di harapkan sesuai standarisasi penjualan.</p>
                                     <a class="primary_btn" href="<?=base_url();?>assets/img/digi_pos.jpeg" data-fancybox ><span>Manfaat</span></a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <div class="chart_img">
                                    <img class="img-fluid" src="assets/img/produk/digi3.png" alt="">
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
    <section class="big_features" style="overflow-x:hidden ">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="800">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <p class="top_title">EMCO Digitalindo Profile</p>
                        <h2>Convenience In Business, Can Be Accessed Anywhere And Anytime.</h2>
                        <p>EMCO Digitalindo bergerak dalam bidang  Hardware dan Software Development yang mengkhususkan diri dalam menciptakan dan mengembangkan aplikasi web, aplikasi mobile, serta aplikasi  lainnya yang berbasis web, berdiri sejak 2009, kami menawarkan solusi dan layanan terbaik untuk kelancaran usaha perusahaan yang menjadi Client kami.
                        Kami memiliki tim pengembang / programmer yang berpengalaman dibidangnya, kami akan memberikan layanan profesional. Kami akan terus mengikuti perkembangan jaman dan permintaan pasar dalam pengembangan ke depan.</p>
                        <div class="price_footer" style="margin-top: 50px">
                                    <center>
                                    <a class="primary_btn" href="<?=base_url('upload/COMPANY PROFILE EMCO DIGITALINDO 2019.pdf')?>" target="_blank"><span>Company Profile</span></a>
                                    </center>
                                </div>

                    </div>

                                
                        
                </div>

            </div>

            <div class="row features_content" data-aos="fade-left" data-aos-duration="800">
                <div class="col-lg-4 offset-lg-1">
                    <div class="big_f_left">
                        <img class="img-fluid" src="assets/img/f-img1.png" alt="">
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
                <div class="col-lg-5">
                    <div class="common_style">
                        <h3 class="line">Apa Yang Kami Lakukan?</h3>
                    <!--     <h3>We Believe that <br /> Inner beauty Lasts Long</h3> -->
                        <p>EMCO Digitalindo selalu memberikan solusi dan hasil yang terbaik kepada klien kami, Kami selalu mengedepankan 5 tahap pada tiap pekerjaan yang kami lakukan:</p></br>
                        <p>1. <b>Perencanaan</b></br>Kami akan mendengarkan dan memahami setiap kebutuhan klien.</p>
                        <p>2. <b>Analisa</b></br>Setelah kami memahami kebutuhan klien, kami akan melakukan analisa, memberikan masukan dan sulusi kepada klien tentang sistem dan alur pekerjaan dari tahapan awal hingga tahapan akhir.</p>
                        <p>3. <b>Desain</b></br>Desain merupakan tahap terpenting dalam membuat sebuah aplikasi, maka dari itu kami akan menawarkan konsep desain yang terbaik untuk mencapai kepuasan klient kami.</p>
                        <p>4. <b>Development</b></br>Tahap development adalah tahap dimana kita memproduksi sebuah aplikasi dan memastikan bahwa aplikasi tersebut dapat berjalan dengan baik dan menginformasikan dan memastikan kepada klien bahwa aplikasi yang kami buat sudah sesuai dengan kebutuhkan klien.</p>
                        <p>5. <b>Testing & Implementasi</b></br>Sebelum aplikasi benar-benar siap untuk live pada tahap ini kami akan melakukan testing baik dari sisi kami maupun dari sisi user, sehingga dapat memastikan bahwa aplikasi dapat berjalan dengan baik.</p>
                <!--         <a class="primary_btn" href="#"><span>Learn More</span></a> -->
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="big_f_left">
                        <img class="img-fluid" src="assets/img/f-img2.png" alt="">
                    </div>
                </div>
                <div class="border-line"></div>
                <img class="shape1"src="assets/img/shape1.png" alt="">     
                <img class="shape2"src="assets/img/shape2.png" alt="">     
                <img class="shape3"src="assets/img/shape1.png" alt="">     
            </div>
        </div>
    </section>
    <!--================End Big Features Area =================-->
    
    <!--================Srart Pricing Area =================-->
   

    <!--================ Start Testimonial Area =================-->
    <div class=" testimonial_area" style="padding-top: 100px">
        <div class="container" data-aos="flip-up" data-aos-duration="800">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <!-- <p class="top_title">User Feedback</p> -->
                        <h2>Klien Kami</h2>
                        <p>Berikut ini klien-klien terbaik yang telah bekerjasama dengan kami</p>
                    </div>
                </div>
            </div>
           
          
        </div>
    </div>
    <!--================ End Testimonial Area =================-->
                                    <section class="regular slider slider-image" data-aos="flip-up" data-aos-duration="800" style="overflow-x:hidden ">
                                    <?php foreach($this->db->query("SELECT * FROM tbl_client ")->result() as $i) {  ?>    
                                    <div>
                                      <img src="../admin/upload/client/<?=$i->image;?>">
                                    </div>
                                     
                                     <?php
                                        }
                                        ?>
                                  </section>
   
    <!--================ End Brand Area =================-->

    <!--================Impress Area =================-->
    <section class="impress_area" style="overflow-x:hidden ">
        <div class="container">
            <div class="impress_inner" data-aos="fade-up" data-aos-duration="800">
                <h2 style="color:#000;">Hubungi Kami 021 2867 4849</h2>
                <p style="color:#777777;">Untuk pelayanan lebih lanjut silahkan hubungi customer service kami</p>
                <a class="primary_btn"  href="<?=base_url()?>kontak"><span>Call Us</span></a>
            </div>
        </div>
    </section>
    <!--================End Impress Area =================-->