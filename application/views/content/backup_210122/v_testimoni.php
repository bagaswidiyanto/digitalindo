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
                
             

        <center>
     <div data-aos="flip-up" style="border: solid 2px #2056a0 !important;border-radius: 5px;width: 80%">
             <div class="heading" style="text-align: left;padding-left: 2%;margin-top:2%">
                                  <h2>Testimoni</h2>
                                </div>
                                <form name="formTestimoni" class="form-horizontal" method="post" action="<?php echo base_url(). 'Testimoni/Add'; ?>" enctype="multipart/form-data" style="width: auto;">
                <div>

                                <div class="form-group">
                                    <div class="row">
                                         <div class="col-lg-6" >
                                        <label class="control-label col-lg-10" style="text-align: left;">Nama Perusahaan* </label>
                                        <div class="col-lg-10">
                                            <input type="text" name="namaPerusahaan" class="form-control" style="text-align: left;" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" >
                                        <label class="control-label col-lg-10" style="text-align: left;">Jabatan* </label>
                                        <div class="col-lg-10">
                                            <input type="text" name="jabatan" class="form-control" required>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6" >
                                             <label class="control-label col-lg-10" style="text-align: left;">Nama Lengkap*</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                        </div>
                                        <div class="col-lg-6" >
                                            <label class="control-label col-lg-10" style="text-align: left;">Foto* </label><br>
                                        <div class="col-lg-10">
                                           <input type="file" name="foto" class="form-control" required>
                                        </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <!-- <div class="form-group">
                                    <label class="control-label col-lg-8" style="text-align: left;">Jabatan : </label>
                                        <div class="col-lg-8">
                                            <input type="text" name="jabatan" class="form-control" required="">
                                        </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="control-label col-lg-10" style="text-align: left;">Apa yang menjadi pertimbangan Anda memilih untuk memakai Aplikasi Digitalindo?*</label><br>
                                    <div class="col-lg-10"> 
                                        <textarea name="pertimbangan" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-10" style="text-align: left;">Apa hasil yang Anda dapatkan dari memakai Aplikasi Digitalindo?*</label><br>
                                    <div class="col-lg-10">
                                        <textarea name="hasil" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-10" style="text-align: left;">Fitur spesifik apa yang paling Anda sukai dari Aplikasi Digitalindo?*</label><br>
                                    <div class="col-lg-10">
                                        <textarea name="fitur" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-10" style="text-align: left;">Sebutkan 3 manfaat lain dari Aplikasi Digitalindo?*</label><br>
                                    <div class="col-lg-10">
                                        <textarea name="manfaat" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-10" style="text-align: left;">Apakah Anda merekomendasikan Aplikasi Digitalindo? Jika ya, mengapa?*</label><br>
                                    <div class="col-lg-10">
                                        <textarea name="rekomendasi" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-10" style="text-align: left;">Bagaimana pelayanan Digitalindo?*</label><br>
                                    <div class="col-lg-10">
                                        <textarea name="pelayanan" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-10" style="text-align: left;">Bagaimana penilaian anda terhadap pengalaman anda memakai Aplikasi Digitalindo?* </label><br>
                                    <div class="col-lg-10">
                                        <textarea name="penilaian" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-10" style="text-align: left;">Adakah yang ingin Anda sampaikan?*</label><br>
                                    <div class="col-lg-10">
                                        <textarea name="pesan" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <!-- <div class="form-group">                            
                                    <label class="control-label col-lg-10" style="text-align: left;">9. Foto</label><br>
                                        <div class="col-lg-10">
                                           <input type="file" name="foto" class="form-control">
                                        </div>
                                </div> -->
                                <div class="form-group">
                                        <div class="col-lg-10" style="text-align: left;">
                                           <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                </div>
                                </div>
                            </form>
                           
                        </div>
        </center>
                       

                                

                    </div>
                    <!-- /.container -->


            
            </section>
            <!-- End Sample Area -->
            <!-- Start Button -->
          