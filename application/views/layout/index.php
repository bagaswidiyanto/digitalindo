<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE status = 1")->result() as $n) { ?>
    <?php if ($this->uri->segment(1) == $n->slug) {
      $segment1 = $n->title . ' | ' . $n->metaTitle;
      $metaKey = $n->metaKeywords;
      $metaDes = $n->metaDescription;
    } ?>
    <?php } ?>

    <?php if ($this->uri->segment(1) == 'prices') {
    $segment1 = 'Price | ' . $website->metaTitle;
    $metaKey = $website->metaKeywords;
    $metaDes = $website->metaDescription;
  } else if ($this->uri->segment(1) == 'tracking') {
    $segment1 = 'Tracking | ' . $website->metaTitle;
    $metaKey = $website->metaKeywords;
    $metaDes = $website->metaDescription;
  } else if ($this->uri->segment(1) == 'lokasi') {
    $segment1 = 'Lokasi | ' . $website->metaTitle;
    $metaKey = $website->metaKeywords;
    $metaDes = $website->metaDescription;
  } ?>

    <!-- Site Metas -->
    <?php if ($this->uri->segment(2) != 'baca' && $this->uri->segment(2) != 'read') { ?>
    <title><?= $segment1; ?> </title>
    <meta name="keywords" content="<?= $metaKey; ?>">
    <meta name="description" content="<?= $metaDes; ?>">
    <?php } ?>

    <?php
  if ($this->uri->segment(2) == 'read') {
    $metaKarir = $this->db->query("SELECT * FROM tbl_karir")->row();
  ?>
    <title><?= 'Karir | ' . $metaKarir->title; ?></title>
    <meta name="keywords" content="<?= $metaKarir->slug; ?>">
    <meta name="description" content="<?= $metaKarir->deskripsi; ?>">
    <?php }
  ?>


    <?php
  if ($this->uri->segment(2) == 'baca') {
    $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row();
    echo '<title>' . strtoupper($meta->Title) . ' | ' . $website->metaTitle . '</title>
    <meta name="keywords" content="' . $meta->metaKeywords . $website->metaKeywords . '">
    <meta name="description" content="' . $meta->metaDescription . $website->metaDescription . '">
    <meta property="og:title" content="' . $meta->Title . '" />
    <meta property="og:description" content="' . $meta->metaDescription . $website->metaDescription . '" />
    <meta property="og:image" content="https://starcargo.digitalindo.co.id/upload/berita/' . $meta->image . '" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="' . base_url() . 'Berita/baca/' . $meta->slug . '">
    <meta name="twitter:title" content="' . $meta->Title . '">
    <meta name="twitter:description" content="' . $meta->metaDescription . $website->metaDescription . '">
    <meta name="twitter:image" content="https://starcargo.digitalindo.co.id/upload/berita/' . $meta->image . '">';
  }
  ?>

    <!-- CSS FILES -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    <!--  <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-1.10.2.min.js"></script> -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- //font dgt -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-dgt.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/Poppins.css"> -->


    <!-- // -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flexslider.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css" media="screen"
        data-name="skins">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css" />

    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/whatsapp_chat.css" />

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/switcher.css" media="screen" />

    <!-- //fancy -->
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
    <?php if ($header) echo $header; ?>
    <?php //if($left) echo $left ;
  ?>
    <?php if ($middle) echo $middle; ?>
    <?php if ($footer) echo $footer; ?>
</body>

</html>