 <section class="banner_area">
       <?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='35' and tipe='1' ")->result() as $b) { ?>
            <div class="banner_inner d-flex align-items-center" style="background-image: url(../admin/upload/banner/<?=$b->image;?>);width: 100%;height: 555px;">
                  <?php
                        }
                     ?>
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-left">
                        <div class="page_link">
                            <a href="<?=base_url()?>">Home</a>
                            <a href="Kontak">Contact</a>
                        </div>
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </section>

    <!-- intro section -->
    <section class="bg-blue-kontak"  data-aos="flip-up" data-aos-duration="800">
        <div class="container">
            <div class="container-fluid">
               
            </div>
            <br>
          

    	<center><h2 >Sukses Mengirim Pesan </h2></center>
      <center><h4 >Terima Kasih, kami akan merespon anda secepatnya.</h4><br>      
        <a class="primary_btn" href="<?=base_url()?>" style="line-height: 37px;"><span>Kembali</span></a></center>


    <div class="value" data-animate="fadeInDown" data-wow-delay="0.8s">
      <p></p>
    </div>
         


<div class="bottom-content" >


</div>


        </div>
    </section>
</div>
  <div class="bg-down1">
        </div>          
              
            
            <!--/ intro section -->   
