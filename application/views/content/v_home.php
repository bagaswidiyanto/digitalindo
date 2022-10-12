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
<?php foreach ($this->db->query("SELECT * FROM tbl_banner where posisi='26' and tipe='2'")->result() as $p) {
    if ($p->aktif == 'Y') {
?>
        <div id="pop" class="pop">
            <div id="popup" class="popup panel panel-primary">
                <img src="https://digitalindo.co.id/admin/upload/banner/<?= $p->image; ?>" alt="popup">
                <div class="panel-footer">
                    <button id="closee" class="close"></button>
                </div>
            </div>
        </div>
<?php
    }
}
?>


<section class="home_banner_area">
    <!-- <div id="slick-slider"> -->
    <?php foreach ($banner as $banner) { ?>
        <img src="https://digitalindo.co.id/admin/upload/banner/<?= $banner->image; ?>" class="img-fluid">
    <?php } ?>
    <!-- <img src="<?= base_url(); ?>assets/img/Frame 16.png" class="img-fluid" style="overflow-x: hidden; background-repeat: no-repeat; background-size: cover;"> -->
    <!-- <img src="<?= base_url(); ?>assets/img/Frame 17.png" class="img-fluid" style="overflow-x: hidden; background-repeat: no-repeat; background-size: cover;"> -->

    <!-- </div> -->
    <!-- <div class="slick-slider-nav"></div>
<div class="slick-slider-dots"></div> -->



    <div class="banner_inner_home d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="banner_content ">
                        <h2>
                            WELCOME to <span>Digitalindo</span>
                        </h2>
                        <p>Bisnis Lebih Nyaman dengan System yang Aman</p>

                    </div>
                    <div class="watch-video d-flex align-items-center">
                        <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=-YKJtvmAsDs" data-fancybox>
                            <span></span>
                        </a>
                        <p>Watch Video</p>
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

<!-- Our Partner -->
<div class=" testimonial_area" style="background-color: #f8f9fc; padding: 20px 0;">
    <div class="container">
        <div class="regular">
            <?php foreach ($this->db->query("SELECT * FROM tbl_client ")->result() as $i) {  ?>
                <div class="boxs" style="margin-left: 15px">
                    <div class="col-md-11 col-sm-11 col-xs-11 box-width">
                        <div style="background-color:transparent; width: 100% !important; color: #000; ">
                            <center><img src="../admin/upload/client/<?= $i->image; ?>"> </center>
                        </div><!-- end service -->
                    </div><!-- end col -->
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- END Our Partner -->



<!--================Profile=================-->
<section class="big_features" style="position: relative;">
    <img class="b_image_profil" src="<?= base_url(); ?>assets/img/b_image_profil.png" alt="" style="    position: absolute; left: 0; max-width: 15%; ">
    <img src="<?= base_url(); ?>assets/img/b_image_profil1.png" alt="" style="    position: absolute;bottom: 0;right: 0;">
    <div class="container emco-container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <h3 class="about-digitalindo line-title">EMCO Digitalindo Profile</h3>
                <div class="title">
                    <h2>Convenience In Business, Can Be Accessed Anywhere And Anytime.</h2>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="desk-digi">
                    <?= $website->metaDescription; ?>
                </div>
            </div>
        </div>
        <div class="price_footer" style="margin-top: 50px">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                            <div class="border-company">
                                <a style="color: black;" href="https://digitalindo.co.id/admin/upload/<?= $company->companyProfile ?>" target="_blank">
                                    <img class="pdf img-fluid img-rounded" src="<?= base_url(); ?>assets/img/doc.png" alt="">
                                    <!-- href="<?= base_url('/admin/upload/' . $company->companyProfile) ?>" -->
                                    <!-- <img class="pdf img-fluid img-rounded" src="<?= base_url(); ?>assets/img/doc_white.png" alt=""> -->
                                    <span class="cp">Company Profile</span>
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-right">
                                    <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=-YKJtvmAsDs" data-fancybox>
                                        <span></span>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                    <h2>Watch Video</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================END Profile=================-->


<section class="what_we_do">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="line text-center">Apa Yang Kami Lakukan?</h2>
                <p class="text-center">EMCO Digitalindo selalu memberikan solusi dan hasil yang terbaik kepada klien
                    kami, Kami selalu mengedepankan 5 tahap pada tiap pekerjaan yang kami lakukan: </p>
            </div>
        </div>

        <style>
            .row-struktur .common_style .struktur::after {
                content: '';
                position: absolute;
                background: #0d438d;
                width: 4px;
                height: 100%;
                top: 12px;
                left: -37px;
                z-index: -2;
            }

            .row-struktur .common_style .struktur:last-child::after {

                display: none;
            }
        </style>

        <div class="row row-struktur">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="big_f_left">
                    <img src="<?= base_url() ?>assets/img/ava_wedo.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="common_style">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_solusi")->result() as   $s) { ?>
                        <div class="struktur">
                            <img class="shape1" src="assets/img/ckck.png" alt="" style="width: 25px">
                            <b><?= $s->title; ?></b>
                            <p><?= $s->deskripsi; ?></p>
                        </div>
                    <?php } ?>
                    <!-- <div class="struktur">
                    <img class="shape1" src="assets/img/ckck.png" alt="" style="width: 25px">
                    <b>Analisa</b>
                    <p>Setelah kami memahami kebutuhan klien, kami akan melakukan analisa, memberikan masukan dan
                        solusi kepada klien tentang sistem dan alur pekerjaan dari tahapan awal hingga tahapan
                        akhir.</p>
                </div>
                <div class="struktur">
                    <img class="shape1" src="assets/img/ckck.png" alt="" style="width: 25px">
                    <b>Desain</b>
                    <p>Desain merupakan tahap terpenting dalam membuat sebuah aplikasi, maka dari itu kami akan
                        menawarkan konsep desain yang terbaik untuk mencapai kepuasan klient kami.</p>
                </div>
                <div class="struktur">
                    <img class="shape1" src="assets/img/ckck.png" alt="" style="width: 25px">
                    <b>Development</b>
                    <p>Tahap development adalah tahap dimana kita memproduksi sebuah aplikasi dan memastikan
                        bahwa aplikasi tersebut dapat berjalan dengan baik dan menginformasikan dan memastikan
                        kepada klien bahwa aplikasi yang kami buat sudah sesuai dengan kebutuhkan klien.</p>
                </div>
                <div class="struktur">
                    <img class="shape1" src="assets/img/ckck.png" alt="" style="width: 25px">
                    <b>Testing & Implementasi</b>
                    <p>Sebelum aplikasi benar-benar siap untuk live pada tahap ini kami akan melakukan testing
                        baik dari sisi kami maupun dari sisi user, sehingga dapat memastikan bahwa aplikasi dapat
                        berjalan dengan baik.</p>
                </div> -->
                </div>
            </div>
            <!-- <div class="border-line"></div> -->
        </div>
    </div>
</section>
<!--================End Big Features Area =================-->

<section class="home_gap" style="overflow-x:hidden;overflow-y:hidden; ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="main_title">
                    <h3 class="about-digitalindo line-title">OUR SERVICES</h3>
                    <h2 style="color: black; font-weight: 600;">Nikmati Layanan - Layanan yang Kami Berikan.</h2>
                </div>
            </div>
        </div>
        <div class="recent_update_inner">
            <ul class="nav nav-tabs justify-content-center product mx-auto" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="800">
                <?php foreach ($this->db->query("SELECT * FROM tbl_layanan")->result() as $l) { ?>
                    <li class="nav-item">
                        <a class="nav-link produk  <?php
                                                    if ($l->id != "") {
                                                        if ($l->id == 1) {
                                                            echo "active";
                                                        }
                                                    } else {
                                                        if ($l->id == "") {
                                                            echo "active";
                                                        }
                                                    }
                                                    ?> " id="<?= $l->slug ?>-tab" data-toggle="tab" href="#<?= $l->slug ?>" role="tab" aria-controls="<?= $l->slug ?>" aria-selected="false">
                            <h3><?= $l->nama ?></h3>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="tab-content" id="myTab" data-aos=" fade-up" data-aos-duration="800">
                <?php foreach ($this->db->query("SELECT * FROM tbl_layanan")->result() as $lc) { ?>

                    <div class="tab-pane fadeIn isi <?php
                                                    if ($lc->id != "") {
                                                        if ($lc->id == 1) {
                                                            echo "active show";
                                                        }
                                                    } else {
                                                        if ($lc->id == "") {
                                                            echo "active show";
                                                        }
                                                    }
                                                    ?>" id="<?= $lc->slug ?>" role="tabpanel" aria-labelledby="<?= $lc->slug ?>-tab">
                        <div class="row recent_update_text align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="chart_img">
                                    <img class="img-fluid" src="../admin/upload/layanan/<?= $lc->image; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 text-left">
                                <div class="common_style">
                                    <!-- <p class="line">ProgiLOG</p> -->
                                    <h3 class="font-baru"><?= $lc->title; ?></h3>
                                    <p class="font-baru"><?= $lc->deskripsi; ?></p>
                                    <a class="primary_btn" href="<?= $lc->link; ?>" target="_blank"><span class="manfaat">Selengkapnya</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--================ Recent Update Area =================-->
<img src="<?= base_url(); ?>assets/img/b_image_profil2.png" alt="" style="    position: absolute; right: 0; ">
<div class=" testimonial_area">
    <div class=" container" data-aos="flip-up" data-aos-duration="800">
        <div class="row  justify-content-center">
            <div class="col-lg-5 col-md-8 col-sm-12">
                <h3 class="about-digitalindo line-title text-center">Keunggulan</h3>
                <h2 class=" text-center" style="color: #000; font-weight: 600;">Logistic Management System Untuk
                    perusahaan anda</h2>
            </div>
        </div>
    </div>

    <section class="benefit">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-6  mt-5 mb-5">
                    <div class="img-col-6 text-right">
                        <img class="img-fluid" src="<?= base_url() ?>assets/img/Frame 158.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6  mt-5 mb-5">
                    <div class="text-col-6 align-items-center">
                        <p id="desk-advantage">Monitoring dengan mudah dimana dan kapan saja dapat dimonitoring melalui computer, tablet, android & IOS</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 " style="float: left;" data-aos="fade-right">
                    <div id="slick-sliders" class="advantage-slider">
                        <?php foreach ($this->db->query("SELECT * FROM tbl_keunggulan_perusahaan")->result() as $kp) { ?>
                            <a>
                                <div class="icons-box wow fadeIn">
                                    <div class="icons">
                                        <img src="https://digitalindo.co.id/admin/upload/keunggulan/<?= $kp->image; ?>" class="img-fluid img-rounded">
                                    </div>
                                    <p hidden><?= $kp->deskripsi; ?></p>
                                </div>
                            </a>
                        <?php } ?>

                    </div>
                    <div class="slick-sliders-dots"></div>
                    <div class="slick-sliders-nav"></div>
                </div><!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
</div>

<style>
    .benefit .advantage-slider a.active .icons-box .icons img {
        box-shadow: 0px 4px 4px #0D5DA2;
        background: linear-gradient(360deg, #1D4876 0%, #2965B7 100%);
        ;
    }

    .clients .client-box-icon a.active .box-icon .icon img {
        box-shadow: 0px 4px 4px #0D5DA2;
        background: linear-gradient(360deg, #1D4876 0%, #2965B7 100%);
    }
</style>


<div class="clients">
    <div class="container" data-aos="flip-up" data-aos-duration="800">
        <div class="row  justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-12">
                <h3 class="about-digitalindo line-title text-center">Keunggulan</h3>
                <h2 class=" text-center" style="color: #000; font-weight: 600;">Logistic Management System Untuk
                    pelanggan CLIENT</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="text-col-6">
                            <p id="desk-client">Fitur member area memberikan kemudahan untuk pelanggan anda dalam mengontrol ataupun melihat laporan secara langsung</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-col-6">
                            <img src="<?= base_url(); ?>assets/img/new-image/client.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="client-box-icon">
                            <div class="row text-center">
                                <?php foreach ($this->db->query("SELECT * FROM tbl_keunggulan_client")->result() as $kc) { ?>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                        <a>
                                            <div class="box-icon">
                                                <div class="icon">
                                                    <img src="https://digitalindo.co.id/admin/upload/keunggulan_client/<?= $kc->image; ?>" class="img-fluid" alt="">
                                                </div>
                                                <p hidden><?= $kc->deskripsi; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--================ Start Testimonial Area =================-->
<div class="testimonial_area" style="padding-left: 25px;" data-aos="flip-up" data-aos-duration="800">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-9 col-sm-7">
                <h3 class="about-digitalindo">Testimonial</h3>
                <h2 style="color: #000;">Apa Kata Mereka?</h2>
            </div>
            <!-- <div class="col-lg-4"></div> -->
            <div class="col-lg-2 col-md-3 col-sm-5 arw">
                <img class="prevs" src="assets/img/panah_nonaktif.png">
                <img class="nexts" src="assets/img/panah_aktif1.png">
            </div>
        </div>

        <div class="testimoni-slider">
            <?php foreach ($this->db->query("SELECT * FROM tbl_testimonial2 where status='Y'")->result() as $i) {  ?>
                <div class="testimonial-item">
                    <a href="<?= base_url(); ?>testimoni/detail/<?= $i->id; ?>">
                        <div class="img-top-write d-flex align-items-center mb-2">
                            <img src="https://www.digitalindo.co.id/upload/testimoni/<?= $i->foto; ?>" class="testimonial-img" alt="">
                            <div class="profile">
                                <h3><?= $i->nama ?></h3>
                                <h4><?= $i->namaPerusahaan ?></h4>
                            </div>
                        </div>
                        <div class="stars">
                            <img class="star" src="<?= base_url(); ?>assets/img/star_testimoni.png" alt="">
                        </div>
                        <p><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $i->hasil))) ?></p>
                    </a>
                </div>
            <?php } ?>

        </div>
        <!-- <div class="testimoni-slider">
        <?php foreach ($this->db->query("SELECT * FROM tbl_testimonial2 where status='Y'")->result() as $i) {  ?>
        <div class="testimonial-item">
            <a href="<?= base_url(); ?>testimoni/detail/testimoni<?= $i->id; ?>">
                <div class="img-top-write d-flex align-items-center mb-2">
                    <img src="https://www.digitalindo.co.id/upload/testimoni/<?= $i->foto; ?>"
                        class="testimonial-img" alt="">
                    <div class="profile">
                        <h3><?= $i->nama ?></h3>
                        <h4><?= $i->namaPerusahaan ?></h4>
                    </div>
                </div>
                <div class="stars">
                    <img class="star" src="<?= base_url(); ?>assets/img/star_testimoni.png" alt="">
                </div>
                <p><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $i->hasil))) ?></p>
            </a>
        </div>
        <?php } ?>

    </div> -->
    </div>
</div>
<!--================ End Testimonial Area =================-->


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

<div class="testimonial_area">
    <div class="container" data-aos="flip-up" data-aos-duration="800">
        <div class="row justify-content-center text-center features_content bottom-features">
            <div class="col-lg-6">
                <h3 class="about-digitalindo line-title">Hot News</h3>
                <h2>Dapatkan Informasi Terbaru Seputar Teknologi dan Berita Lainnya.</h2>
            </div>
            <div class="col-lg-9">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis lacus non orci euismod
                    vestibulum vitae ut ex. Quisque ut arcu at lectus tristique auctor sit amet at turpis.</p>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <?php
            if (($berita->num_rows()) > 0) {
                foreach ($berita->result() as $p) {
            ?>
                    <div class="col-md-4 col-sm-6 col-xs-12" style="float: left" data-aos="fade-right">
                        <div class="home-news wow fadeIn" style="background-color:transparent; " data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="post-media pb-2 wow fadeIn">
                                <a href="<?php echo base_url(); ?>berita/baca/<?php echo $p->slug; ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i>
                                    <center><img src="/admin/upload/news_post/<?php echo $p->image; ?>" alt="" style="width:100% ;height:31vh; border-radius: 10px;" class="img-fluid img-rounded"></center>
                                </a>
                            </div>

                            <h4><a style="color: #000" href="<?php echo base_url(); ?>berita/baca/<?php echo $p->slug; ?>"><?php if (@$_GET['lang'] == 'eng') { ?><?php echo $p->Title; ?><?php  } else echo $p->Title; ?></a>
                            </h4>
                            <p><span class="fontsize13"><i class="fa fa-clock-o"></i>&nbsp;Posted&nbsp;<?= time_ago($p->created_date); ?></p>
                            <p>
                                <?php if (@$_GET['lang'] == 'eng') { ?><?php echo substr(strip_tags($p->content), 0, 150); ?><?php  } else echo substr(strip_tags($p->content), 0, 150); ?>
                                .... <a href="<?php echo base_url(); ?>berita/baca/<?php echo $p->slug; ?>"> Baca
                                    selengkapnya </a>
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
        </div>
    </div>
</div>


<!--================ End Brand Area =================-->

<!--================Impress Area =================-->
<!-- <section class="impress_area">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="<?= base_url() ?>assets/img/callKami.png" style="width: 100%;">
        </div>
    </div>
</div>
</section> -->
<!--================End Impress Area =================-->

<script>
    $('.advantage-slider a').click(function() {
        var this_desk = $(this).find("p").text();
        $('#desk-advantage').html(this_desk);

        if ($(this).hasClass("active")) {
            $(".advantage-slider a").removeClass("active");
        } else {
            $(".advantage-slider a").removeClass("active");
            $(this).addClass("active");
        }
        return false;
    });

    $('.client-box-icon a').click(function() {
        var this_desk = $(this).find("p").text();
        $('#desk-client').html(this_desk);

        if ($(this).hasClass("active")) {
            $(".client-box-icon a").removeClass("active");
        } else {
            $(".client-box-icon a").removeClass("active");
            $(this).addClass("active");
        }
        return false;
    });
</script>