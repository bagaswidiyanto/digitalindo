<!--================ Start Features Banner Area =================-->
<section class="banner_area">
    <?php foreach ($this->db->query("SELECT * FROM tbl_banner where posisi='29' and tipe='1' ")->result() as $b) { ?>
    <!-- <div class="banner_inner d-flex align-items-center" style="background-image: url(../admin/upload/banner/<?= $b->image; ?>);width: 100%;height: 555px;"> -->
    <div class="banner_inner d-flex align-items-center"
        style="background-image: url(<?= base_url() ?>assets/img/service_bg.png);width: 100%;height: 555px;">
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
                            <a href="#">Service</a>
                        </div>
                        <!-- <h2>Layanan</h2> -->
                    </div>
                    <div class="text-hero">
                        <div class="title">
                            <h1>Nikmati Layanan yang Kami Berikan.</h1>
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
<section class=" big_features">
    <div class="container">

        <div class="row justify-content-center align-items-center">
            <?php
            $i = 1;
            foreach ($this->db->query("SELECT * FROM tbl_services ORDER BY id ASC")->result() as $services) {
            ?>
            <?php if ($i % 2 == 0) { ?>
            <div class="col-lg-6 d-flex justify-content-center align-items-center my-5">
                <div class="service-img">
                    <img src="https://digitalindo.co.id/admin/upload/services/<?= $services->image; ?>" alt=""
                        class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 my-5">
                <div class="service-title">
                    <h2><?= $services->title; ?></h2>
                    <?= $services->deskripsi; ?>
                </div>
            </div>
            <?php } else { ?>
            <div class="col-lg-6 my-5">
                <div class="service-title">
                    <h2><?= $services->title; ?></h2>
                    <?= $services->deskripsi; ?>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center my-5">
                <div class="service-img">
                    <img src="https://digitalindo.co.id/admin/upload/services/<?= $services->image; ?>" alt=""
                        class="img-fluid">
                </div>
            </div>
            <?php } ?>
            <?php
                $i++;
            }
            ?>
        </div>

        <div class="pengalaman mt-5">
            <p>1. Berpengalaman dalam bidang logistik, kurir dan kargo. Baik darat, laut ataupun udara</p>
            <p>2. Memiliki berbagai pilihan produk yang dapat disesuaikan dengan kebutuhan Anda</p>
            <p>3. Dapat dengan mudah di-integrasikan dengan sistem <i>backend office</i> yang sudah ada</p>
            <p>4. Dapat disesuaikan dengan kebutuhan perusahaan Anda</p>
            <p>5. Biaya operasional rendah</p>
        </div>

    </div>
</section>

<!--================End Big Features Area =================-->

<!--================Impress Area =================-->

<!--================End Impress Area =================-->