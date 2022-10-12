<!--================ Start Features Banner Area =================-->
    <section class="banner_area">
        <?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='29' and tipe='1' ")->result() as $b) { ?>
        <div class="banner_inner d-flex align-items-center" style="background-image: url(../admin/upload/banner/<?=$b->image;?>);width: 100%;height: 555px;">
              <?php
                }
             ?>
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-left">
                    <div class="page_link">
                        <a href="<?=base_url()?>">Home</a>
                        <a href="Layanan">Service</a>
                    </div>
                    <h2>Layanan</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Banner Area =================-->

    <!--================Start Big Features Area =================-->
    <section class=" big_features">
        <div class="container">
            
<div class="row">
<div class="top-content"  >
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 project project-1 wow animated animated3 " data-aos="zoom-in" data-aos-duration="1000">
                <div class="project-hover">
                    <h2>7 x 24 Jam IT Support</h2>
                    <p>Kami memiliki tim pengembang / programmer yang berpengalaman dibidangnya yang akan memberikan layanan professional.</p>
                </div>
            </div>
            
                        
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 project project-2 wow animated animated2 " data-aos="zoom-in" data-aos-duration="1000">
                <div class="project-hover">
                    <h2>Responsive Webpage</h2>
                    <p>Memungkinkan pengguna untuk melihat kinerja melalui Android dan IOS dimana saja dan kapan saja dengan lebih mudah.</p>
                </div>
            </div>
                
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 project project-3 wow animated animated2 " data-aos="zoom-in" data-aos-duration="1000">
            <div class="project-hover">
                    <h2>Up to Date</h2>
                    <p>Kami akan terus mengikuti perkembangan zaman dan permintaan pasar dalam pengembangan kedepan.</p>
                </div>
            </div>
</div>



<div class="bottom-content" data-aos="zoom-in" data-aos-duration="1000">


            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 project project-4 wow animated animated3 " style="margin-top: -15%;" >
            
            </div>


            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 project wow animated animated3 " style="color: #000;margin-top: -4%;font-weight: normal;" >
                
                    <h2 style="font-weight: bold;">Excellence</h2>
                    <p>Logistic Management System merupakan pilihan yang tepat</br>karena memiliki beberapa keunggulan seperti :</p>

                    <p>1. Berpengalaman dalam bidang logistik, kurir dan kargo. Baik darat, laut ataupun udara</p>
                    <p>2. Memiliki berbagai pilihan produk yang dapat disesuaikan dengan kebutuhan Anda</p>
            
            </div>
            
                        
        
                
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 project wow animated animated2 productt" style="color: #000;font-weight: normal;" >
    
                    <p>3. Dapat dengan mudah di-integrasikan dengan sistem <i>backend office</i> yang sudah ada</p>
                    <p>4. Dapat disesuaikan dengan kebutuhan perusahaan Anda</p>
                    <p>5. Biaya operasional rendah</p>
            
            </div>
</div>
</div>

        </div>
    </section>
   
    <!--================End Big Features Area =================-->

    <!--================Impress Area =================-->

    <!--================End Impress Area =================-->

    

   