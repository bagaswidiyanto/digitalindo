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

<style type="text/css">
.ga {
    padding: 10px;
    font-size: 15px;
    width: 40px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 8px;
}

.ga:hover {
    opacity: 0.6;
    color: #FFF;
}

.facebook {
    background: #3B5998;
    color: white;
}

.twitter {
    background: #55ACEE;
    color: white;
}

.google {
    background: #dd4b39;
    color: white;
}
</style>
<?php
$url = base_url() . 'berita/baca/' . $berita->slug;
$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
$twitterURL = 'https://twitter.com/intent/tweet?text=' . $berita->Title . ' - &amp;url=' . $url;
$googleURL = 'https://plus.google.com/share?url=' . $url;
$whatsappURL = 'whatsapp://send?text=' . $berita->Title . ' ' . $url;
?>

<section class="banner_area">
    <?php foreach ($this->db->query("SELECT * FROM tbl_banner where posisi='34' and tipe='1' ")->result() as $b) { ?>
    <!-- <div class="banner_inner d-flex align-items-center" style="background-image: url(../../../admin/upload/banner/<?= $b->image; ?>);" > -->
    <div class="banner_inner d-flex align-items-center"
        style="background-image: url(http://digitalindo.co.id/admin/upload/banner/<?= $b->image ?>);">
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
                            <a href="<?= base_url('berita') ?>">Berita</a>
                            <a href="">Detail</a>
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
<!-- intro section -->


<section class="breadcrumbs">
    <div class="container">

        <ol id="breadcrumbs-line">
            <li><a href="<?= base_url(); ?>">Home</a></li>
            <li><a href="<?= base_url('berita'); ?>">Blog</a></li>
            <li>Detail</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<section class="blog-single">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <article class="entry entry-single">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <h2 class="entry-title">
                                <p><?= $berita->Title; ?></p>
                            </h2>
                        </div>
                    </div>

                    <div class="entry-img">
                        <img src="/admin/upload/news_post/<?= $berita->image; ?>" alt="" class="img-fluid">
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="coll-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><?= time_ago($berita->created_date); ?></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p><?= $berita->content; ?></p>
                                </div>
                                <div class="entry-link">
                                    <p>Sumber : <a href="<?= $berita->metaLink; ?>"
                                            target="_blank"><?= $berita->metaLink; ?></a></p>
                                </div>

                                <div class="entry-footer">
                                    <?php foreach ($kategori as $kategori) { ?>
                                    <ul class="cats">
                                        <li><a onclick="getCategory(<?= $kategori->idKategori; ?>, '<?= $kategori->namaKategori; ?>')"
                                                title="<?= $kategori->namaKategori; ?>"><?= $kategori->namaKategori; ?></a>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                </div>

                                <div class="row row-meta-footer">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="entry-meta-footer">
                                            <button onclick="getLike2(<?= $berita->id; ?>)" class="like_btn mr-4">
                                                <?php
                        $like_single = $this->db->query("SELECT COUNT(beritaID) as totLike, beritaID, ip as ipHttp FROM tbl_posts_counter WHERE beritaID='" . $berita->id . "'")->row();
                        $jml_single = 0;
                        foreach ($this->db->query("SELECT * FROM tbl_posts_counter WHERE beritaID='" . $berita->id . "'")->result() as $counter_single) {
                          if ($counter_single->ip == $ip) {
                            $jml_single++;
                          }
                        }
                        ?>
                                                <?php if ($jml_single > 0) { ?>
                                                <span id="icon<?= $berita->id; ?>"><img class="mr-2"
                                                        src="<?= base_url(); ?>assets/img/new-image/like-red-icon.png"
                                                        alt=""></span>
                                                <?php } else { ?>
                                                <span id="icon<?= $berita->id; ?>"><img class="mr-2"
                                                        src="<?= base_url(); ?>assets/img/new-image/like-icon.png"
                                                        alt=""></span>
                                                <?php } ?>
                                                <span id="count<?= $berita->id; ?>"><?= $like_single->totLike; ?></span>
                                            </button>
                                            <span data-numposts="5"><img class="mr-2"
                                                    src="<?= base_url(); ?>assets/img/new-image/comment-icon.png"
                                                    alt=""></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                                        <div class="entry-meta-footer">
                                            <span class="mr-4"><img class="mr-1"
                                                    src="<?= base_url(); ?>assets/img/new-image/upload-icon.png"
                                                    alt="">72</span>
                                            <span class="mr-4"><a href="#"><img class="mr-2"
                                                        src="<?= base_url(); ?>assets/img/new-image/bookmark-icon.png"
                                                        alt=""></a></span>
                                            <span><img class="mr-2"
                                                    src="<?= base_url(); ?>assets/img/new-image/ellipses-icon.png"
                                                    alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="line-top-batas"></div>
                            <br>
                            <div id="fb-root"></div>
                            <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0" nonce="Bv6xlRWu"></script> -->

                            <div class="fb-comments"
                                data-href="https://digitalindo.co.id/newwebsite/berita/baca/<?= $berita->id ?>"
                                data-width="" data-numposts="5"></div>
                        </div>
                        <div class="col-lg-4">
                            <?php foreach ($this->db->query("SELECT a.image, a.slug, a.Title, COUNT(a.idKategori) as jml FROM tbl_posts a LEFT JOIN tbl_kategori_berita b ON a.idKategori=b.idKategori WHERE a.idKategori = '" . $berita->idKategori . "' ORDER BY a.created_date DESC LIMIT 1  ")->result() as $recomen) { ?>
                            <div class="post-single-side-top">
                                <h3 class="sidebar-title">Recommended for you</h3>
                                <?php if ($recomen->jml > 0) { ?>
                                <div class="sidebar-image">
                                    <a href="<?= base_url(); ?>berita/baca/<?= $recomen->slug; ?>"
                                        title="<?= $recomen->Title; ?>">
                                        <img class="img-fluid" src="/admin/upload/news_post/<?= $recomen->image; ?>"
                                            alt="">
                                    </a>
                                </div>
                                <div class="sidebar-content">
                                    <a class="underline" href="<?= base_url(); ?>berita/baca/<?= $recomen->slug; ?>"
                                        title="<?= $recomen->Title; ?>"><?= $recomen->Title; ?></p></a>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                            <?php foreach ($this->db->query("SELECT a.*, COUNT(b.beritaID) as jml FROM tbl_posts a LEFT JOIN tbl_posts_counter b ON a.id=b.beritaID GROUP BY b.beritaID ORDER BY jml DESC limit 1 ")->result() as $based) { ?>

                            <div class="post-single-side-top">
                                <h3 class="sidebar-title">Based on Like</h3>
                                <div class="sidebar-image">
                                    <a href="<?= base_url(); ?>berita/baca/<?= $based->slug; ?>"
                                        title="<?= $based->Title; ?>">
                                        <img class=" img-fluid" src="/admin/upload/news_post/<?= $based->image; ?>"
                                            alt="">
                                    </a>
                                </div>
                                <div class="sidebar-content">
                                    <a class="underline" href="<?= base_url(); ?>berita/baca/<?= $based->slug; ?>"
                                        title="<?= $based->Title; ?>"><?= $based->Title; ?></p></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>



                </article>

            </div>
        </div>




    </div>
</section>
<section class="relate-topics">
    <div class="container">
        <div class="heading-text">
            <h4>Relate Topics</h4>
        </div>
        <?php
    foreach ($this->db->query("SELECT * FROM tbl_posts ORDER BY id DESC LIMIT 5")->result() as $topics) {
      $like = $this->db->query("SELECT COUNT(beritaID) as totLike, beritaID, ip as ipHttp FROM tbl_posts_counter WHERE beritaID='" . $topics->id . "'")->row();
    ?>
        <div class="topics-section">
            <div class="content-section">
                <div class="topics-section-image">
                    <a href="<?= base_url(); ?>berita/baca/<?= $topics->slug; ?>" title="<?= $topics->Title; ?>">
                        <img src="/admin/upload/news_post/<?= $topics->image; ?>" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="topics-section-title">
                    <a class="underline" href="<?= base_url(); ?>berita/baca/<?= $topics->slug; ?>"
                        title="<?= $topics->Title; ?>"><?= $topics->Title; ?></a>
                </div>
                <div class="topics-section-meta">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-justify">
                            <div class="entry-meta-topics">
                                <button onclick="getLike(<?= $topics->id; ?>)" class="like_btn_f">
                                    <?php
                    $jml = 0;
                    foreach ($this->db->query("SELECT * FROM tbl_posts_counter WHERE beritaID='" . $topics->id . "'")->result() as $counter) {
                      if ($counter->ip == $ip) {
                        $jml++;
                      }
                    }
                    ?>
                                    <?php if ($jml > 0) { ?>
                                    <span id="icon_f<?= $topics->id; ?>"><img class="mr-2"
                                            src="<?= base_url(); ?>assets/img/new-image/like-red-icon-f.png"
                                            alt=""></span>
                                    <?php } else { ?>
                                    <span id="icon_f<?= $topics->id; ?>"><img class="mr-2"
                                            src="<?= base_url(); ?>assets/img/new-image/like-icon-f.png" alt=""></span>
                                    <?php } ?>
                                    <span id="count_f<?= $topics->id; ?>"><?= $like->totLike; ?></span>
                                </button>
                                <span><img class="mr-1" src="<?= base_url(); ?>assets/img/new-image/upload-icon-f.png"
                                        alt="">72</span>
                                <span><a href="#"><img class="mr-2"
                                            src="<?= base_url(); ?>assets/img/new-image/bookmark-icon-f.png"
                                            alt=""></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</section>

<script>
// Detail Berita like
// const likeBtn = document.querySelector(".like_btn");
// let likeIcon = document.querySelector("#icon");
// let count = document.querySelector("#count");


// let clicked = false;
// likeBtn.addEventListener("click", () => {
//   if (!clicked) {
//     clicked = true;
//     likeIcon.innerHTML = `<img class="mr-2" src="<?= base_url(); ?>assets/img/new-image/like-red-icon.png" alt="">`;
//     count.textContent++;
//   } else {
//     clicked = false;
//     likeIcon.innerHTML = `<img class="mr-2" src="<?= base_url(); ?>assets/img/new-image/like-icon.png" alt="">`;
//     count.textContent--;
//   }
// });

// Relate Topics

function getLike2(id) {
    base_url = '<?= base_url(); ?>';
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "Berita/like2",
        data: {
            'id': id
        },
        success: function(response) {
            // $("#icon_f" + id).html('<img class="mr-2" src="<?= base_url(); ?>assets/img/new-image/like-red-icon-f.png" alt="">');
            if (response.msg == "good") {
                $("#icon" + id).html(
                    '<img class="mr-2" src="<?= base_url(); ?>assets/img/new-image/like-red-icon.png" alt="">'
                );
                $("#count" + id).html(response.jml);
            } else {
                $("#icon" + id).html(
                    '<img class="mr-2" src="<?= base_url(); ?>assets/img/new-image/like-icon.png" alt="">'
                );
                $("#count" + id).html(response.jml);
            }
        },
        error: function() {}
    });
}



function getLike(id) {
    base_url = '<?= base_url(); ?>';
    $.ajax({
        type: "GET",
        dataType: "JSON",
        url: base_url + "Berita/like",
        data: {
            'id': id
        },
        success: function(response) {
            // $("#icon_f" + id).html('<img class="mr-2" src="<?= base_url(); ?>assets/img/new-image/like-red-icon-f.png" alt="">');
            if (response.msg == "good") {
                $("#icon_f" + id).html(
                    '<img class="mr-2" src="<?= base_url(); ?>assets/img/new-image/like-red-icon-f.png" alt="">'
                );
                $("#count_f" + id).html(response.jml);
            } else {
                $("#icon_f" + id).html(
                    '<img class="mr-2" src="<?= base_url(); ?>assets/img/new-image/like-icon-f.png" alt="">'
                );
                $("#count_f" + id).html(response.jml);
            }
        },
        error: function() {}
    });
}


function getCategory(idKategori, name) {
    base_url = '<?= base_url(); ?>';
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
</script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0"
    nonce="Bv6xlRWu"></script>