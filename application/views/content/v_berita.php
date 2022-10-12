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
        <div class="banner_inner d-flex align-items-center" style="background-image: url(http://digitalindo.co.id/admin/upload/banner/<?= $b->image ?>);">
        <?php
    }
        ?>
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-7 col-md-9 col-sm-12 col-12">
                    <div class="banner_content">
                        <div class="page_link">
                            <a href="<?= base_url() ?>">Home</a>
                            <a href="#">Berita</a>
                        </div>
                        <!-- <h2>Jelajah Informasi</h2> -->
                    </div>
                    <div class="text-hero">
                        <div class="title">
                            <h1>Jelajahi & Dapatkan Informasi Terbaru.</h1>
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
<!--================ End Pricing Banner Area =================-->

<!--================Start Features Area =================-->
<style>
    .line-breadcrumbs {
        background: #1D4876;

    }
</style>
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url(); ?>">Home</a></li>
            <li>Blog</li>
            <div class="line-breadcrumbs"></div>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<section class="slider-post">
    <div class="container">
        <div class="slick-post-slider">
            <?php foreach ($this->db->query("SELECT * FROM tbl_posts a LEFT JOIN sys_users b ON a.createUserId=b.id  ORDER BY a.created_date ASC LIMIT 5")->result() as $p) { ?>
                <article class="slider-post-item">
                    <div class="box-post">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="entry-img">
                                    <a href="<?= base_url(); ?>berita/baca/<?= $p->slug; ?>" title="<?= $p->Title; ?>">
                                        <img src="/admin/upload/news_post/<?= $p->image; ?>" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-content-slider">
                                <div class="post-left">
                                    <div class="entry-title">
                                        <a href="<?= base_url(); ?>berita/baca/<?= $p->slug; ?>" title="<?= $p->Title; ?>"><?= $p->Title; ?></a>
                                    </div>
                                    <div class="entry-content">
                                        <p><?= substr(strip_tags($p->content), 0, 150); ?>....<a href="<?= base_url(); ?>berita/baca/<?= $p->slug; ?>">Read More</a> </p>
                                    </div>
                                    <div class="entry-meta">
                                        <i class="fa fa-clock-o mr-2"></i> <a href="blog-single.html" class="mr-4"><?= date('F d, Y', strtotime($p->created_date)); ?></a>
                                        <i class="fa fa-commenting-o mr-2"></i> <a href="blog-single.html">10
                                            Comment</a><br>
                                        <p class="mt-2">Post by:
                                            <?= $p->createUserId == 0 ? 'Hafid NR Hidayat' : $p->first_name . ' ' . $p->last_name; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>
        <img class="prevs" src="assets/img/new-image/arrow-news-next.png">
        <img class="nexts" src="assets/img/new-image/arrow-news-prev.png">


    </div>
</section>




<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container blog-container">

        <div class="row">

            <div class="col-lg-8 col-md-8 entries">
                <?php
                if (($berita->num_rows()) > 0) {
                    foreach ($berita->result() as $p) {

                ?>
                        <article class="entry">

                            <div class="entry-img">
                                <a href="<?= base_url(); ?>berita/baca/<?= $p->slug; ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius" title="<?= $p->Title; ?>"><i class="flaticon-unlink"></i>
                                    <img src="/admin/upload/news_post/<?= $p->image; ?>" alt="" class="img-fluid">
                                </a>
                            </div>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="fa fa-clock-o "></i> <time datetime="2020-01-01"><?= date('F d, Y', strtotime($p->created_date)); ?></time>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="fa fa-user"></i>
                                        <?= $p->createUserId == 0 ? 'Hafid NR Hidayat' : $p->first_name . ' ' . $p->last_name; ?>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="fa fa-commenting-o"></i> 12 Comments</li>
                                </ul>
                            </div>

                            <h2 class="entry-title">
                                <a class="underline" href="<?= base_url(); ?>berita/baca/<?= $p->slug; ?>" title="<?= $p->Title; ?>"><?= $p->Title; ?></a>
                            </h2>

                            <div class="entry-content">
                                <p><?= substr(strip_tags($p->content), 0, 150); ?>....</p>
                                <div class="read-more">
                                    <a href="<?= base_url(); ?>berita/baca/<?= $p->slug; ?>">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                <?php
                    }
                }
                ?>

                <div class="blog-pagination">
                    <?= $pagination; ?>
                </div>

            </div><!-- End blog entries list -->

            <div class="col-lg-4 col-md-4 col-side-res">

                <div class="sidebar-post">
                    <div class="box-shadow">
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text" name="search" placeholder="Search here...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->



                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_posts ORDER BY created_date ASC LIMIT 5")->result() as $p) { ?>
                                <div class="post-item clearfix">
                                    <a href="<?= base_url(); ?>berita/baca/<?= $p->slug; ?>" title="<?= $p->Title; ?>">
                                        <img src="/admin/upload/news_post/<?= $p->image; ?>" alt="">
                                    </a>
                                    <h4><a class="underline" href="<?= base_url(); ?>berita/baca/<?= $p->slug; ?>" title="<?= $p->Title; ?>"><?= $p->Title; ?></a></h4>
                                </div>
                            <?php } ?>

                        </div><!-- End sidebar recent posts-->
                    </div>
                    <div class="box-shadow">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php foreach ($this->db->query("SELECT * FROM tbl_kategori_berita")->result() as $kategori) { ?>
                                    <?php $cek = $this->db->query("SELECT COUNT(a.idKategori) as jml from tbl_posts a LEFT JOIN tbl_kategori_berita b ON a.idKategori=b.idKategori WHERE a.idKategori = '" . $kategori->idKategori . "' ")->row(); ?>
                                    <li><a class="underline" onclick="getCategory(<?= $kategori->idKategori; ?>, '<?= $kategori->namaKategori; ?>')" title="<?= $kategori->namaKategori; ?>"><?= $kategori->namaKategori; ?></a><span><?= $cek->jml; ?></span>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div><!-- End sidebar categories-->
                    </div>
                    <div class="box-shadow">
                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <?php foreach ($this->db->query("SELECT * FROM tbl_tag")->result() as $tag) { ?>
                                    <li><a onclick="getTag(<?= $tag->id ?>, '<?= $tag->tag_name ?>')" title="<?= $tag->tag_name; ?>"><?= $tag->tag_name; ?></a></li>
                                <?php } ?>

                            </ul>
                        </div><!-- End sidebar tags-->
                    </div>

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Section -->


<script>
    function getCategory(idKategori, name) {
        base_url = '<?php echo base_url(); ?>';
        $.ajax({
            type: "GET",
            url: base_url + "Berita",
            data: {
                'idKategori': idKategori,
                'nama': name
            },
            success: function(html) {
                window.location = base_url + 'berita/category/?idKategori=' + idKategori;
            },
            error: function() {}
        });
    }

    function getTag(id, name) {
        base_url = '<?php echo base_url(); ?>';
        $.ajax({
            type: "GET",
            url: base_url + "Berita",
            data: {
                'id': id,
                'nama': name
            },
            success: function(html) {
                window.location = base_url + 'berita/tag/?id=' + id;
            },
            error: function() {}
        });
    }
</script>