<?php
function time_ago($timestamp)
{
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;
    $minutes      = round($seconds / 60);        // value 60 is seconds  
    $hours        = round($seconds / 3600);       //value 3600 is 60 minutes * 60 sec  
    $days         = round($seconds / 86400);      //86400 = 24 * 60 * 60;  
    $weeks        = round($seconds / 604800);     // 7*24*60*60;  
    $months       = round($seconds / 2629440);    //((365+365+365+365+366)/5/12)*24*60*60  
    $years        = round($seconds / 31553280);   //(365+365+365+365+366)/5 * 24 * 60 * 60  
    if ($seconds <= 60) {
        return "Sekarang";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "1 menit lalu";
        } else {
            return "$minutes menit lalu";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "1 jam lalu";
        } else {
            return "$hours jam lalu";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "Kemarin";
        } else {
            return "$days hari lalu";
        }
    } else if ($weeks <= 4.3) {  //4.3 == 52/12
        if ($weeks == 1) {
            return "1 minggu lalu";
        } else {
            return "$weeks minggu lalu";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "1 bulan lalu";
        } else {
            return "$months bulan lalu";
        }
    } else {
        if ($years == 1) {
            return "1 tahun lalu";
        } else {
            return "$years tahun lalu";
        }
    }
}
?>

<!--================ Start Pricing Banner Area =================-->

<section class="banner_area">
    <?php foreach ($this->db->query("SELECT * FROM tbl_banner where posisi='34' and tipe='1' ")->result() as $b) { ?>
        <!-- <div class="banner_inner d-flex align-items-center" style="background-image: url(../../../admin/upload/banner/<?= $b->image; ?>);" > -->
        <div class="banner_inner d-flex align-items-center" style="background-image: url(<?= base_url() ?>assets/img/berita_bg.png);width: 100%;height: 555px;">
        <?php
    }
        ?>
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <div class="page_link">
                    <a href="<?= base_url() ?>">Home</a>
                    <a href="Berita">Berita</a>
                </div>
                <!-- <h2>Jelajah Informasi</h2> -->
            </div>
        </div>
        </div>
</section>
<!--================ End Pricing Banner Area =================-->

<!--================Start Features Area =================-->

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url(); ?>">Home</a></li>
            <li>Blog</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<section class="section_gap features_area">

    <div class="container">
        <div class="row">
            <div class="container-fluid">

            </div>

            <div class="top-content" style="margin-top: -3%;">


                <div class="container pad-container">




                    <?php
                    if (($berita->num_rows()) > 0) {
                        foreach ($berita->result() as $p) {
                    ?>

                            <div class="col-md-4 col-sm-4 col-xs-12" style="float: left" data-aos="fade-right">
                                <div class="service-widget wow fadeIn" style="background-color:transparent; " data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="post-media wow fadeIn">
                                        <a href="<?php echo base_url(); ?>berita/baca/<?php echo $p->slug; ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i>
                                            <center><img src="/admin/upload/news_post/<?php echo $p->image; ?>" alt="" style="width:100% ;height:130px; border-radius: 10px;" class="img-fluid img-rounded"></center>
                                        </a>
                                    </div>

                                    <h4 style="padding-top: 15px;"><a href="<?php echo base_url(); ?>berita/baca/<?php echo $p->slug; ?>"><?php if (@$_GET['lang'] == 'eng') { ?><?php echo $p->Title; ?><?php  } else echo $p->Title; ?></a></h4>
                                    <p><span class="fontsize13"><i class="fa fa-clock-o"></i>&nbsp;Posted&nbsp;<?= time_ago($p->created_date); ?></p>
                                    <p>
                                        <?php if (@$_GET['lang'] == 'eng') { ?><?php echo substr(strip_tags($p->content), 0, 150); ?><?php  } else echo substr(strip_tags($p->content), 0, 150); ?> .... <a href="<?php echo base_url(); ?>berita/baca/<?php echo $p->slug; ?>" style="color: #0D438D;"> Baca selengkapnya </a>
                                    </p>
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

                            <?php echo $pagination; ?>
                        </div>
                    </center>



                </div>
                </span>





            </div>

        </div>
        <div class="bottom-content">


        </div>
    </div>

    </div>
</section>
<!--================End Features Area =================-->


<!--================Srart Pricing Area =================-->

<!--================End Pricing Area =================-->

<!--================ Srart Brand Area =================-->



<!--================ End Brand Area =================-->