<!--================ Start Features Banner Area =================-->
<section class="banner_area">
    <?php foreach ($this->db->query("SELECT * FROM tbl_banner where posisi='28' and tipe='1' ")->result() as $b) { ?>
    <!-- <div class="banner_inner d-flex align-items-center" style="background-image: url(../../admin/upload/banner/<?= $b->image; ?>);width: 100%;height: 555px;"> -->
    <div class="banner_inner d-flex align-items-center"
        style="background-image: url(<?= base_url() ?>assets/img/fitur_bg.png);width: 100%;height: 555px;">
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
                            <a href="<?= base_url() ?>">Home</a>
                            <a href="#">Features</a>
                        </div>
                        <!-- <h2>Fitur Apa Saja yang Saya Dapatkan?</h2> -->
                    </div>
                    <div class="text-hero">
                        <div class="title">
                            <h1>Fitur Apa Saja yang Saya Dapatkan?</h1>
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
<!--================ End Features Banner Area =================-->





<!--================Start Big Features Area =================-->
<div class="wrapper">

    <div class="sidebar">
        <h3 style="color: black">Fitur - Fitur Kami</h3>
        <div class="list-type6">
            <nav id="side">
                <ul>
                    <? foreach ($this->db->query("SELECT * FROM tbl_fitur order by sort")->result() as $f) {
                        echo " <li><a href=#$f->slug>$f->nama_tab</a></li>";
                    } ?>
                </ul>
            </nav>
        </div>
    </div>


    <div class="main">
        <section class=" big_features">
            <div class="container">
                <div class="row">
                    <div class=" text-center">

                        <?php foreach ($this->db->query("SELECT * FROM tbl_fitur order by sort")->result() as $fitur) {
                        ?>
                        <section id="<?= $fitur->slug ?>">
                            <div class="container pad-container fitur">
                                <div class="text-center" data-aos="flip-up">
                                    <div>
                                        <h2 style="text-align: center;"><b
                                                style="text-align: center;color: black;"><?= $fitur->nama ?></b></h2>
                                    </div>
                                </div>
                                <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up"
                                    data-aos-duration="2000">

                                    <center>
                                        <a href="https://digitalindo.co.id/admin/upload/fitur/<?= $fitur->image; ?>"
                                            data-fancybox="gallery"><img
                                                src="https://digitalindo.co.id/admin/upload/fitur/<?= $fitur->image ?>"
                                                class="img-fluid"></a>
                                    </center><br><br><br>
                                    <?= $fitur->content ?>

                                    <br><br>
                                </div>

                                <hr class="separator" style="display: none;">
                            </div>
                        </section>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
    </div>

</div>



<!--================End Big Features Area =================-->

<!--================Impress Area =================-->

<!--================End Impress Area =================-->