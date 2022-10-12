 <!--================ Start Element Banner Area =================-->
 <section class="banner_area">
     <?php foreach ($this->db->query("SELECT * FROM tbl_banner where posisi='42' and tipe='1' ")->result() as $b) { ?>
     <!-- <div class="banner_inner d-flex align-items-center" style="background-image: url(../admin/upload/banner/<?= $b->image; ?>);width: 100%;height: 555px;"> -->
     <div class="banner_inner d-flex align-items-center"
         style="background-image: url(<?= base_url() ?>assets/img/karir_bg.png);width: 100%;height: 555px;">
         <?php
        }
            ?>
         <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
         </div>
         <div class="container">
             <div class="row justify-content-center text-center">
                 <div class="col-xl-6 col-lg-7 col-md-9">
                     <div class="banner_content text-center">
                         <div class="page_link">
                             <a href="index.html">Home</a>
                             <a href="elements.html">Karir</a>
                         </div>
                         <!-- <h2>Bergabung Bersama Kami</h2> -->
                     </div>
                     <div class="text-hero">
                         <div class="title">
                             <h1>Butuh Bantuan? Hubungi kami.</h1>
                         </div>
                         <div class="desk">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue risus id diam
                                 blandit laoreet. Maecenas et metus dapibus, finibus felis a, elementum nunc.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================ End Element Banner Area =================-->


 <!-- Start Sample Area -->
 <section class="sample-text-area" hidden="">
     <div class="container">



         <div data-aos="flip-up">
             <center>
                 <div class="heading">
                     <h3>Carrer</h3>
                     <div data-animate="fadeInUp">
                     </div>
                 </div>
                 <table class="table" style="width: 75%">
                     <tr style="background:linear-gradient(90deg, #0B418B 0%, #3491d2 100%);color:#fff;">
                         <th width="50%">Position</th>
                         <th width="20%">City</th>
                         <th width="20%">Post Date</th>
                         <th width="10%"></th>
                     </tr>
                     <?php foreach ($this->db->query("SELECT * FROM tbl_career ")->result() as $c) {
                        ?>
                     <tr>
                         <td><?= $c->name; ?></td>
                         <td><?= $c->kota; ?></td>
                         <td><?= $c->postDate; ?></td>
                         <td><a href="../admin/upload/career/<?= $c->image; ?>" data-fancybox>Poster</a></td>
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

 <section class="section_gap features_area">

     <div class="container">
         <div class="row">
             <div class="container-fluid">

             </div>

             <div class="top-content" style="margin-top: -3%;">


                 <div class="container pad-container">




                     <?php
                        if (($karir->num_rows()) > 0) {
                            foreach ($karir->result() as $p) {
                        ?>

                     <div class="col-md-4 col-sm-6 col-xs-12" style="float: left" data-aos="fade-right">
                         <div class="service-widget wow fadeIn" style="background-color:transparent; "
                             data-wow-duration="1s" data-wow-delay="0.3s">
                             <div class="post-media wow fadeIn">
                                 <a href="../admin/upload/career/<?= $p->image; ?>" data-fancybox
                                     data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i
                                         class="flaticon-unlink"></i>
                                     <center><img src="../admin/upload/career/<?= $p->image; ?>" alt=""
                                             class="img-fluid img-rounded"></center>
                                 </a>
                             </div>

                             <h4 class="mt-4">
                                 <!-- <a href="<?php echo base_url(); ?>karir/baca/<?php echo $p->slug; ?>"><?php if (@$_GET['lang'] == 'eng') { ?><?php echo $p->name; ?><?php  } else echo $p->name; ?></a> -->
                                 <a href="../admin/upload/career/<?= $p->image; ?>"
                                     data-fancybox><?php echo $p->name; ?></a>
                             </h4>
                             <p><span class="fontsize13"><i
                                         class="fa fa-clock-o"></i>&nbsp;<?php if (@$_GET['lang'] == 'eng') { ?><?php echo date('H:i, d M Y', strtotime($p->postDate)); ?><?php  } else echo date('H:i, d M Y', strtotime($p->postDate)); ?>
                             </p>

                             <p><span class="fontsize13"><i
                                         class="fa fa-clock-o"></i>&nbsp;<?php if (@$_GET['lang'] == 'eng') { ?><?php echo $p->kota; ?><?php  } else echo $p->kota; ?>
                             </p>
                             <!-- <p >
                            <?php if (@$_GET['lang'] == 'eng') { ?><?php echo substr(strip_tags($p->content), 0, 150); ?><?php  } else echo substr(strip_tags($p->content), 0, 150); ?> .... <a href="<?php echo base_url(); ?>karir/baca/<?php echo $p->slug; ?>"> Baca selengkapnya </a>
                        </p> -->
                         </div><!-- end service -->
                     </div><!-- end col -->

                     <?php
                            }
                        } else {
                            ?>
                     <div class="col-md-4">
                         <div class="wow fadeInUp" data-wow-delay="0.2s">
                             <div class="box text-center">
                                 <?php
                                        echo "Maaf karir tidak ditemukan";
                                        ?>
                             </div>
                         </div>
                     </div>
                     <?php
                        }
                        ?>
                     <!-- <center>
                     <div class="col-md-12" style="" data-aos="fade-right">
          
                     <?php echo $pagination; ?>
                 </div>
                    </center> -->



                 </div>
                 </span>





             </div>

         </div>
         <div class="bottom-content">


         </div>
     </div>

     </div>
 </section>
 <!-- End Sample Area -->
 <!-- Start Button -->