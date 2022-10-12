<!--================ Start Pricing Banner Area =================-->

    <section class="banner_area">
         <?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='34' and tipe='1' ")->result() as $b) { ?>
        <!-- <div class="banner_inner d-flex align-items-center" style="background-image: url(../../../admin/upload/banner/<?=$b->image;?>);" > -->
            <div class="banner_inner d-flex align-items-center" style="background-image: url(<?=base_url()?>assets/img/berita_bg.png);width: 100%;height: 555px;">
              <?php
                }
             ?>
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="<?=base_url()?>">Home</a>
                        <a href="Berita">Berita</a>
                    </div>
                    <!-- <h2>Jelajah Informasi</h2> -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End Pricing Banner Area =================-->

    <!--================Start Features Area =================-->
    <section class="section_gap features_area">

       <div class="container" >
             <div class="row">
            <div class="container-fluid" >
               
            </div>

<div class="top-content"  style="margin-top: -3%;">

        
        <div class="container pad-container" >
    



                <?php 
                            if(($berita->num_rows()) >0){ 
                                        foreach ($berita->result() as $p) {
                ?>
              
                <div class="col-md-4 col-sm-4 col-xs-12" style="float: left" data-aos="fade-right">
                  <div class="service-widget wow fadeIn" style="background-color:transparent; " data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="post-media wow fadeIn">
                            <a href="<?php  echo base_url();?>berita/baca/<?php  echo $p->slug;?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i>
                            <center><img src="/admin/upload/news_post/<?php  echo $p->image;?>" alt="" style="width:180px ;height:130px;" class="img-fluid img-rounded"></center>
                            </a>
                        </div>

                         <h4><a href="<?php  echo base_url();?>berita/baca/<?php  echo $p->slug;?>"><?php  if (@$_GET['lang']=='eng'){ ?><?php  echo $p->Title;?><?php  } else echo $p->Title; ?></a></h4>
                      <p  ><span class="fontsize13"><i class="fa fa-clock-o"></i>&nbsp;<?php  if (@$_GET['lang']=='eng'){ ?><?php  echo date('H:i, d M Y',strtotime($p->created_date));?><?php  } else echo date('H:i, d M Y',strtotime($p->created_date)); ?></p>
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
                    <center>
                     <div class="col-md-12" style="" data-aos="fade-right">
          
                     <?php  echo $pagination;?>
                 </div>
                    </center>
           


                </div>
            </span>
               
                
                
                
                
        </div>
    
</div>
<div class="bottom-content" >


</div>
</div>

        </div>
    </section>
    <!--================End Features Area =================-->
      

    <!--================Srart Pricing Area =================-->
    
    <!--================End Pricing Area =================-->

    <!--================ Srart Brand Area =================-->
   


    <!--================ End Brand Area =================-->
     