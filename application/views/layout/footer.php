<!-- <?
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($url == '/newdesign/') {
            $footer = 'footer_area';
        } else {
            $footer = 'footer_area2';
        }
        ?> -->

<?
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<!--================Footer Area =================-->
<!-- <div class="row" style="background: red; margin-bottom: 70px;">
  <div class="col-lg-12" style="margin-top: 10%;margin-bottom: 10%">
    <div class="container calls">
      <img src="<?= base_url() ?>assets/img/callKami.png" style="width: auto;">
    </div>
  </div>
</div> -->

<?php
$number = $website->phone;
$n1 = substr($number, 0, 3);
$n2 = substr($number, 3, 4);
$n3 = substr($number, 7, 4);
$wa = $n1 . '-' . $n2 . '-' . $n3;
?>
<div class="footer_newsllater">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-12 call-col mt-4">
                <p>Butuh Bantuan? Hubungi Kami di</p>
                <h2><i class="fa fa-phone"></i> <?= $wa; ?></h2>
                <!-- <?= $website->phone; ?> -->
                <div class="call-us mt-2">
                    <a href="">Call Us</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 subs-col mt-5">
                <h2 class="text-center mb-5">Lets Stay In Touch</h2>
                <form action="" method="post">
                    <input type="email" name="email" class="email" placeholder="Enter your email address">
                    <input type="submit" class="bg-submit" value="Subscribe Now">
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 mt-5">
                <div class="newsllater-img">
                    <img src="<?= base_url() ?>assets/img/new-image/MAS 1 7.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer_area2">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <!-- <h3 style="color: #fff">Tentang Kami</h3a> -->
                        <img src="<?= base_url() ?>assets/img/new-image/Logo-footer.png" style="width: auto;">
                    </div>
                    <?= $website->description; ?>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    <ul class="list">
                        <?php foreach ($sosmed as $sosmed) { ?>
                        <li><a class="text-blue" href="<?= $sosmed->link; ?>" target="_blank"><img
                                    src="https://digitalindo.co.id/admin/upload/sosmed/<?= $sosmed->iconAndroid; ?>"
                                    alt="" style="width: 25px;"></a></li>
                        <?php } ?>
                        <!-- <li><a class="text-blue" href="https://www.facebook.com/digitalindoID" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a class="text-blue" href="https://plus.google.com/u/1/116950884619572577122"
                                target="_blank"><i class="fa fa-google"></i></a></li>
                        <li><a class="text-blue" href="" target="_blank"><i class="fa fa-linkedin-square"></i></a></li> -->
                    </ul>


                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </aside>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3 class="text-blue">Link</h3>
                    </div>
                    <ul>
                        <li><a class="text-blue" href="#">Web Development</a></li>
                        <li><a class="text-blue" href="#">System Management </a></li>
                        <li><a class="text-blue" href="#">Mobile Development </a></li>
                        <li><a class="text-blue" href="#">Internet Marketing</a></li>
                        <li><a class="text-blue" href="#">Syarat dan ketentuan kebijakan </a></li>
                    </ul>

                </aside>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3 class="text-blue">Pages</h3>
                    </div>
                    <ul>
                        <li><a class="text-blue" href="<?= base_url(); ?>">> Home</a> </li>
                        <li><a class="text-blue" href="<?= base_url(); ?>fitur">> Feature</a></li>
                        <li><a class="text-blue" href="<?= base_url(); ?>layanan">> Service</a></li>
                        <li><a class="text-blue" href="<?= base_url(); ?>berita">> News</a></li>
                        <li><a class="text-blue" href="<?= base_url(); ?>kontak">> Contact</a></li>
                    </ul>

                </aside>
            </div>

            <div class="col-lg-3">
                <aside class="f_widget social_widget">
                    <div class="f_title">
                        <h3 class="text-blue">Kontak Kami</h3>
                    </div>
                    <div class="contact  slideInRight">
                        <div class="footer-contact">
                            <?= $website->address; ?>
                        </div>
                    </div>
                    <div class="contact  slideInRight">
                        <div class="footer-contact">
                            <?php
                            $numberf = $website->phone;
                            $n1f = substr($numberf, 0, 3);
                            $n2f = substr($numberf, 3, 4);
                            $n3f = substr($numberf, 7, 4);
                            $waf = $n1f . ' ' . $n2f . ' ' . $n3f;
                            ?>
                            <h6 class="text-blue"><span>Phone:</span> <?= $waf; ?></h6>
                            <h6><a href="mailto: info@digitalindo.co.id" class="text-blue"><span>Email:</span>
                                    info@digitalindo.co.id</a></h6>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>

<div id="copyright" style="overflow: hidden;line-height: 15px;">
    <div class="container">
        <div class="col-md-12">
            <p class="text-center">&copy; Copyright 2022 - <a href="https://www.digitalindo.co.id"
                    style="color:#fff">Digitalindo</a>. All rights reserved.</p>
            </p>
        </div>
    </div>
</div>

<!--================End Footer Area =================-->

<!-- Whatsapp Chat -->

<div class="whatsapp-chat-section">

    <div class="icon-section">
        <img src="https://digitalindo.co.id/img/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>

    <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">

        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">

            <div class="header-section" style="background:#2056a0;">
                <img class="close-chat-section" src="https://digitalindo.co.id/img/whatsapp/ic_close_btn.png"
                    onclick="closechatWhatsApp();">

                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                    <div class="avatar">
                        <img src="https://digitalindo.co.id/admin/upload/wa_image/<?= $sec1->image; ?>">
                    </div>

                    <? } ?>
                </div>

                <div class="header-desc-section" style="margin-top: 15px;">
                    <p><?= (@$_GET['lang'] != 'eng') ? 'Perlu bantuan? <br>
Silahkan chat dengan Sahabat Digitalindo.' : "We're ready to help you, Please chat our customer service. "; ?> </p>
                </div>

            </div>

            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT a.*,a.user as nama,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec2) { ?>
                <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                    <div class="avatar">
                        <img class="avatar" src="https://digitalindo.co.id/admin/upload/wa_image/<?= $sec2->image; ?>">
                    </div>
                    <div class="profile">
                        <p class="position"><?= strtoupper($sec2->nama); ?></p>
                        <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                        <? if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                        <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span> </small>
                        <? } else { ?>
                        <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                        </small>
                        <? } ?>
                    </div>
                </div>
                <? } ?>
            </div>
        </div>

        <?php foreach ($this->db->query("SELECT a.*,a.user as nama,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec3) { ?>
        <div class="chat-section animated fadeIn" id="customer_chat_<?= $sec3->id; ?>" style="display: none;">

            <div class="header-section" style="background:#2056a0;">

                <img class="back-chat-section" src="https://digitalindo.co.id/img/whatsapp/ic_back_btn.png"
                    onclick="backListChat(<?= $sec3->id; ?>);">

                <div class="header-avatar-section">

                    <div class="avatar">
                        <img src="https://digitalindo.co.id/admin/upload/wa_image/<?= $sec3->image; ?>">
                    </div>

                </div>

                <div class="header-desc-section">

                    <h3><?= $sec3->nama; ?></h3>
                    <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                    <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>

                </div>

            </div>

            <div class="inside-chat-section">

                <div class="chat">
                    <div class="inside-chat">
                        <span><?= (@$_GET['lang'] != 'eng') ? 'Halo sahabat digitalindo, saya ' . ucwords(strtolower($sec3->nama))  : "Hello, I'm " . ucwords(strtolower($sec3->nama)) . ', Customer Service'; ?>
                        </span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="https://digitalindo.co.id/img/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>

                <div class="chat">
                    <div class="inside-chat">
                        <span><?= (@$_GET['lang'] != 'eng') ? 'Ada yang bisa saya bantu ?' : 'May I help you?'; ?></span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="https://digitalindo.co.id/img/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
            </div>

            <div class="box-chat-section">
                <div class="text">
                    <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>"
                        value="<?= $sec3->phone; ?>">
                    <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>"
                        name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onclick="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value=""
                        placeholder="<?= (@$_GET['lang'] != 'eng') ? 'Tulis Pesan' : 'Type a message'; ?>">
                </div>
                <div class="button-send">
                    <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img
                            src="https://digitalindo.co.id/img/whatsapp/ic_send_message.png"></a>
                </div>
            </div>
        </div>
        <? } ?>




    </div>
</div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/stellar.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/isotope/isotope-min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/counter-up/jquery.counterup.min.js"></script>
<script src="<?= base_url(); ?>assets/js/mail-script.js"></script>
<script src="<?= base_url(); ?>assets/js/aos.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="<?= base_url(); ?>assets/js/gmaps.min.js"></script>
<script src="<?= base_url(); ?>assets/js/theme.js"></script>






<script type="text/javascript">
//==========================================================CLIENT SLIDE AT HOME===========================================================//
$(".regular").slick({
    dots: false,
    infinite: true,
    autoplay: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplaySpeed: 1000,
    arrows: false,
    responsive: [{
        breakpoint: 991,
        settings: {
            slidesToShow: 3
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 2
        }
    }, {
        breakpoint: 520,
        settings: {
            slidesToShow: 2
        }
    }]
});

$(".testimoni").slick({
    dots: false,
    infinite: true,
    autoplay: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplaySpeed: 4000,
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
    // arrows: true,
    responsive: [{
        breakpoint: 991,
        settings: {
            slidesToShow: 3
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 1
        }
    }, {
        breakpoint: 520,
        settings: {
            slidesToShow: 1
        }
    }]
});

// $('#slick-slider').slick({
//     autoplay: false,
//     dots: true,
//     arrows: false,
//     appendArrows: $('.slick-slider-nav'),
//     appendDots: $('.slick-slider-dots'),
//     prevArrow: "<button class='slick-prev btn btn-white rounded-circle'><i class='mdi mdi-chevron-left'></i></button>",
//     nextArrow: "<button class='slick-next btn btn-white rounded-circle'><i class='mdi mdi-chevron-right'></i></button>",
// });

$('#slick-sliders').slick({
    autoplay: false,
    infinite: true,
    // centerPadding: '60px',
    dots: true,
    slidesToShow: 6,
    slidesToScroll: 3,
    arrows: true,
    appendDots: $('.slick-sliders-dots'),
    // prevArrow: '<img class="arrow-prev" src="assets/img/arrow_left.png">',
    // nextArrow: '<img class="arrow-next" src="assets/img/arrow_right.png">',
    responsive: [{
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 3,

            }
        }
    ]
});


$('#slick-sliders2').slick({
    autoplay: true,
    dots: false,
    prevArrow: false,
    nextArrow: false,
    // appendArrows: $('.slick-sliders2-nav'),
    // appendDots: $('.slick-sliders2-dots'),
    // prevArrow: "<button class='slick-prev btn btn-white rounded-circle'><i class='mdi mdi-chevron-left'></i></button>",
    // nextArrow: "<button class='slick-next btn btn-white rounded-circle'><i class='mdi mdi-chevron-right'></i></button>",
});


$('.testimoni-slider').slick({

    dots: true,
    infinite: true,
    autoplay: false,
    speed: 300,
    centerPadding: '60px',
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: $(".prevs"),
    nextArrow: $(".nexts"),
    responsive: [{
            breakpoint: 520,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,

            }
        }
    ]


});

$('.slick-post-slider').slick({

    dots: true,
    infinite: true,
    autoplay: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $(".prevs"),
    nextArrow: $(".nexts"),
    responsive: [{
            breakpoint: 520,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,

            }
        }
    ]


});



//=======================================================================================================================================//


//==========================================================POPUP BANNER===========================================================//
$(document).ready(function() {
    chatWhatsApp();


    //select the POPUP FRAME and show it
    $("#popup").hide().fadeIn(1000);

    //close the POPUP if the button with id="close" is clicked
    $("#pop").on("click", function(e) {
        e.preventDefault();
        $("#pop").fadeOut(1000);
    });

});

//=======================================================================================================================================//

//==========================================================WHATSAPP ICON==============================================================//
// (function () {
//     var options = {
//         whatsapp: "*6285946103030", // WhatsApp number
//         call_to_action: "Message us", // Call to action
//         position: "right", // Position may be 'right' or 'left'
//     };
//     var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
//     var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
//     s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
//     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
// })();

//=======NEW

function chatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');

    if (cek_class.classList.contains('bounceOutDown')) {
        cek_class.classList.remove("bounceOutDown");
        cek_class.classList.add("bounceInUp");
        cek_class.style.display = "block";
    } else {
        cek_class.classList.remove("bounceInUp");
        cek_class.classList.add("bounceOutDown");

    }

}

function chatCustomer(id) {

    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);

    if (id != 0 && id != '') {
        list_chat.style.display = "none";
        chat.style.display = "block";
    }
}

function closechatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');

    if (cek_class.classList.contains('bounceInUp')) {
        cek_class.classList.remove("bounceInUp");
        cek_class.classList.add("bounceOutDown");
    }
}


function backListChat(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);
    if (id != 0 && id != '') {
        chat.style.display = "none";
        list_chat.style.display = "block";
        $("#chat_wa_" + id).val('');
    }
}

function textChatWhatsapp(id) {
    var link_wa = 'https://web.whatsapp.com/send?';
    if (id != 0 && id != '') {
        var telp = $("#telp_wa_" + id).val();
        var chat = $("#chat_wa_" + id).val();
        var link = 'https://web.whatsapp.com/send?phone=62' + telp + '&text=' + chat;

        var btn = document.getElementById("btn_wa_" + id);
        btn.setAttribute("href", link);
    }
}



//=======================================================================================================================================//

//==========================================================SPINNER LOADER==============================================================//
$(document).ready(function() {
    //Preloader
    $(window).on("load", function() {
        preloaderFadeOutTime = 500;

        function hidePreloader() {
            var preloader = $('.spinner-wrapper');
            preloader.fadeOut(preloaderFadeOutTime);
        }
        hidePreloader();
    });
});

AOS.init();

//=======================================================================================================================================//

//======================================================SLIDE PRODUCT AT HOME==================================================================//

$(function() {
    var i = 0;
    var $target = $('.product a');

    setInterval(function() {
        $target.removeClass('active');
        $target.eq(i).addClass('active');
        if (i == $target.length - 1) i = 0;
        else i++;
    }, 10000);


});

$(function() {
    var i = 0;
    var $target = $('.tab-content .isi');

    setInterval(function() {
        $target.removeClass('active show');
        $target.eq(i).addClass('active show');
        if (i == $target.length - 1) i = 0;
        else i++;
    }, 10000);


});

$(function() {
    var i = 0;
    var $target = $('.client a');

    setInterval(function() {
        $target.removeClass('active');
        $target.eq(i).addClass('active');
        if (i == $target.length - 1) i = 0;
        else i++;
    }, 10000);


});

$(function() {
    var i = 0;
    var $target = $('.tab-content .isi-fitur-client');

    setInterval(function() {
        $target.removeClass('active show');
        $target.eq(i).addClass('active show');
        if (i == $target.length - 1) i = 0;
        else i++;
    }, 10000);
});

$(function() {
    var i = 0;
    var $target = $('.bnefit a');

    setInterval(function() {
        $target.removeClass('active');
        $target.eq(i).addClass('active');
        if (i == $target.length - 1) i = 0;
        else i++;
    }, 10000);


});

$(function() {
    var i = 0;
    var $target = $('.tab-content .isi-fitur-bnefit');

    setInterval(function() {
        $target.removeClass('active show');
        $target.eq(i).addClass('active show');
        if (i == $target.length - 1) i = 0;
        else i++;
    }, 10000);
});




//=======================================================================================================================================//


//==========================================================NAVBAR SIDE  AT FITUR==============================================================//
// Select all links with hashes
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });

//=======================================================================================================================================//

//==========================================================SCROLL AT FITUR==============================================================//

var sections = $('section'),
    nav = $('.sidebar nav'),
    nav_height = nav.outerHeight();

$(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop();

    sections.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('li').removeClass('active');
            sections.removeClass('active');

            $(this).addClass('active');
            nav.find('a[href="#' + $(this).attr('id') + '"]').parent("li").addClass('active');
        }
    });
});

nav.find('a').on('click', function() {
    var $el = $(this),
        id = $el.attr('href');

    $('html, body').animate({
        scrollTop: $(id).offset().top - nav_height + 400
    }, 500);

    return false;
});

//=======================================================================================================================================//
</script>
<style type="text/css">
.whatsapp-chat-section {
    display: flex;
    justify-content: right;
}

.whatsapp-chat-section>.icon-section {
    background: #2056a0;
    z-index: 999999;
    bottom: 10px;
    right: 20px;
    border-radius: 100px;
    position: fixed;
    z-index: 999;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    user-select: none;
    line-height: 1;
    overflow: hidden;
    min-width: 40px;
    max-width: 325px;
}

.whatsapp-chat-section>.icon-section>img {
    padding: 14px;
    height: 60px;
    width: 60px;
    background: rgba(0, 0, 0, 0);
    filter: brightness(0) invert(1);
}

#whatsapp-chat-popup {
    position: fixed;
    z-index: 999;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);
    right: 15px;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    max-width: 325px;
    max-height: 400px;
    font-family: "Rajdhani", sans-serif;
    font-size: 14px;
    line-height: 1.4;
    bottom: 80px;
    font-weight: 600;
    /*margin-left: 20px;*/
}

#whatsapp-chat-popup .list-chat-section>.header-section {
    width: 325px;
    height: 140px;
    padding: 10px;
}

#whatsapp-chat-popup .chat-section>.header-section {
    width: 325px;
    height: 150px;
    padding: 10px;
}

#whatsapp-chat-popup .list-chat-section>.header-section>.close-chat-section {
    position: absolute;
    left: 10px;
    top: 10px;
    border-radius: 8px;
    width: 35px;
    height: 35px;
    padding: 8px;
    cursor: pointer;
}

#whatsapp-chat-popup .list-chat-section>.header-section>.close-chat-section:hover {
    background-color: #696e95;
}

#whatsapp-chat-popup .chat-section>.header-section>.back-chat-section {
    position: absolute;
    left: 10px;
    top: 10px;
    border-radius: 8px;
    width: 35px;
    height: 35px;
    padding: 8px;
    cursor: pointer;
}

#whatsapp-chat-popup .chat-section>.header-section>.back-chat-section:hover {
    background-color: #696e95;
}

#whatsapp-chat-popup .list-chat-section>.header-section>.header-avatar-section {
    display: flex;
    vertical-align: middle;
    align-items: center;
    text-align: center;
    justify-content: center;
}

#whatsapp-chat-popup .list-chat-section>.header-section>.header-avatar-section>.avatar>img {
    position: relative;
    margin-left: -40px;
    left: 20px;
    border: 1px solid #fff;
    border-radius: 60px;
    vertical-align: middle;
    height: 60px;
    width: 60px;
    border-radius: 60px;
    display: inline-block;
    background-color: #fff;
    max-width: 60px;
}

#whatsapp-chat-popup .list-chat-section>.header-section>.header-desc-section {
    text-align: center;
    font-size: 14px;
    color: #fff;
    padding: 10px;
}

#whatsapp-chat-popup .list-chat-section>.header-section>.header-desc-section>p {
    color: #fff;
    font-size: 14px;
}

#whatsapp-chat-popup .chat-section>.header-section>.header-avatar-section {
    display: flex;
    vertical-align: middle;
    align-items: center;
    text-align: center;
    justify-content: center;
}

#whatsapp-chat-popup .chat-section>.header-section>.header-avatar-section>.avatar>img {
    position: relative;
    margin-left: -50px;
    left: 20px;
    border: 2px solid #fff;
    border-radius: 60px;
    vertical-align: middle;
    height: 75px;
    width: 75px;
    border-radius: 60px;
    display: inline-block;
    background-color: #fff;
    max-width: 75px;
}

#whatsapp-chat-popup .chat-section>.header-section>.header-desc-section {
    text-align: center;
    font-size: 14px;
    color: #fff;
    padding: 8px;
}

#whatsapp-chat-popup .chat-section>.header-section>.header-desc-section>h3 {
    font-size: 18px;
    color: #fff;
    margin-bottom: 0px;
    line-height: 1.6;
}

#whatsapp-chat-popup .chat-section>.header-section>.header-desc-section>p {
    font-size: 15px;
    color: #fff;
    font-weight: normal;
}

#whatsapp-chat-popup .chat-section>.header-section>.header-desc-section>p>i {
    font-size: 12px;
    color: #fff;
}

#whatsapp-chat-popup .list-chat-section>.chat-section {
    padding: 0;
    background: #fff;
    max-height: 225px;
    overflow-y: auto;
    overflow-x: hidden;
}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section:hover {
    background: rgba(0, 0, 0, 0.09);
    cursor: pointer;
}


#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section {
    height: 75px;
    width: 325px;
    max-width: 325px;
    padding: 5px
}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section>.avatar {
    width: 25%;
    display: flex;
    vertical-align: middle;
    align-items: center;
    text-align: center;
    justify-content: center;
    height: 100%;
    float: left;
}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section>.avatar>img {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    height: 60px;
    width: 60px;
    border-radius: 60px;

}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section>.profile {
    width: 75%;
    display: flex;
    text-align: left;
    height: 100%;
    display: inline-block;
    line-height: 1;
}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section>.profile>.position {
    font-size: 13px;
    line-height: 1.6;
}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section>.profile>.name {
    font-size: 18px;
    /*line-height: 1.6;*/
    margin-bottom: 0px;
    margin-top: -20px;
}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section>.profile>.status {
    font-size: 10px;
}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section>.profile>.status>.online {
    font-size: 8px;
    color: #0dc152;
}

#whatsapp-chat-popup .list-chat-section>.chat-section>.cs-section>.profile>.status>.offline {
    font-size: 8px;
    color: #fd1515;
}

#whatsapp-chat-popup .chat-section>.inside-chat-section {
    width: 325px;
    height: 150px;
    padding: 20px 15px;
    background-image: url('../img/whatsapp/bg_chat_whatsapp.jpg');
    background-size: cover;
}

#whatsapp-chat-popup .chat-section>.inside-chat-section>.chat {
    width: 250px;
    background-color: #e0fac4;
    margin-bottom: 15px;
    max-height: 75px;
    padding: 5px 10px;
    border-radius: 5px;
    color: #2d2d2d;
}

#whatsapp-chat-popup .chat-section>.inside-chat-section>.chat>.inside-chat {
    max-width: 215px;
    font-size: 13px;
    margin-bottom: 5px;
}

#whatsapp-chat-popup .chat-section>.inside-chat-section>.chat>.time {
    width: 35px;
    height: 10px;
    float: right;
    margin-top: -7px;
    font-size: 9px;
    color: #aaa;
    margin-right: -7px;

}

#whatsapp-chat-popup .chat-section>.inside-chat-section>.chat>.time>span>img {
    width: 10px;
    height: 10px;
    float: right;
    margin-top: 1px;
    margin-right: -1px;
}

#whatsapp-chat-popup .chat-section>.box-chat-section {
    width: 325px;
    height: 50px;
    padding: 10px 10px 10px 20px;
}

#whatsapp-chat-popup .chat-section>.box-chat-section>.text {
    width: 90%;
    height: 30px;
    float: left;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: left;
}

#whatsapp-chat-popup .chat-section>.box-chat-section>.button-send {
    width: 10%;
    height: 30px;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
}

#whatsapp-chat-popup .chat-section>.box-chat-section>.button-send>a>img {
    width: 15px;
    height: 15px;
}

#whatsapp-chat-popup .chat-section>.box-chat-section>.text>input.input-message-whatsapp {
    font-size: 14px;
    color: #666;
    width: 90%;
    font-weight: 600;
    border: 0px;
}
</style>
</body>

</html>