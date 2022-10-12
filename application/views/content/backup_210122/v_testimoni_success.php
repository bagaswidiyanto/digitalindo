 <!--================ Start Element Banner Area =================-->
        <section class="banner_area" hidden="">
             <?php 
             // foreach($this->db->query("SELECT * FROM tbl_banner where posisi='42' and tipe='1' ")->result() as $b) { ?>
            <div class="banner_inner d-flex align-items-center" style="background-image: url(../admin/upload/banner/<?=$b->image;?>);width: 100%;height: 555px;">
                   <?php
                        // }
                     ?>
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-left">
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="elements.html">Testimonial</a>
                        </div>
                        <h2>Testimonial</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Element Banner Area =================-->
        
        
        <!-- Start Sample Area -->
            <section style="margin-top: 5%">
                <div class="container">
                     <?php
            // if ($this->session->flashdata('msg')) {
              ?>
             
              <?php
            // }
            ?>
                <div class="heading">
                                  <h3>Testimoni</h3>
                                </div>
             

                        <div data-aos="flip-up">
                              <h4>Testimoni sudah terkirim.</h4>
                              <br>
                        <a href="<?=base_url();?>">Home</a>
                        </div>

                                

                    </div>
                    <!-- /.container -->


            
            </section>
            <!-- End Sample Area -->
            <!-- Start Button -->
          