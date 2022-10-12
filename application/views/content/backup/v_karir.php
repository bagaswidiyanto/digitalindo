 <!--================ Start Element Banner Area =================-->
        <section class="banner_area">
             <?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='42' and tipe='1' ")->result() as $b) { ?>
            <div class="banner_inner d-flex align-items-center" style="background-image: url(../admin/upload/banner/<?=$b->image;?>);width: 100%;height: 555px;">
                   <?php
                        }
                     ?>
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-left">
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="elements.html">Karir</a>
                        </div>
                        <h2>Bergabung Bersama Kami</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Element Banner Area =================-->
        
        
        <!-- Start Sample Area -->
            <section class="sample-text-area">
                <div class="container">
               
             

                        <div data-aos="flip-up"><center>
                               <div class="heading">
                                  <h3>Carrer</h3>
                                  <div data-animate="fadeInUp">  
                                </div>
                                </div>
                            <table class="table" style="width: 75%">
                            <tr style="background:linear-gradient(90deg, #0B418B 0%, #3491d2 100%);color:#fff;">
                            <th width="50%">Position</th>
                            <th  width="20%">City</th>
                            <th  width="20%">Post Date</th>  
                            <th  width="10%"></th>  
                            </tr> 
                            <?php foreach($this->db->query("SELECT * FROM tbl_career ")->result() as $c) { 
                                ?>    
                            <tr>
                            <td><?=$c->name;?></td>
                            <td><?=$c->kota;?></td>
                            <td><?=$c->postDate;?></td>
                            <td><a href="../admin/upload/career/<?=$c->image;?>" data-fancybox>Poster</a></td>
                            </tr>

                            <?php
                            }
                            ?>
                            </table>
                        </center>
                        </div>

                                

                    </div>
                    <!-- /.container -->


            
            </section>
            <!-- End Sample Area -->
            <!-- Start Button -->
          