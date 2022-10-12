<!--================ Start Pricing Banner Area =================-->
        <section class="banner_area">
             <?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='35' and tipe='1' ")->result() as $b) { ?>
            <div class="banner_inner d-flex align-items-center" style="background-image: url(../admin/upload/banner/<?=$b->image;?>);width: 100%;height: 555px;">
                 <?php
                }
             ?>
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-left">
                        <div class="page_link">
                            <a href="<?=base_url()?>">Home</a>
                            <a href="Kontak">Contact</a>
                        </div>
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Pricing Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
        <!--         <div id="mapBox" class="mapBox" 
                    data-lat="-6.331009 " 
                    data-lon="106.898339" 
                    data-zoom="13" 
                    data-info="Jl. Cilangkap Raya No.56, RT.6/RW.3, Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13840"
                    data-mlat="-6.331009"
                    data-mlon="106.898339">
                </div> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4858920803863!2d106.89616131424876!3d-6.3310356637080965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eddb698f0313%3A0x74b7e445a4539383!2sCV+EMCO+DIGITALINDO!5e0!3m2!1sen!2sid!4v1542211728546" frameborder="0" class="mapBox" style="height: 420px;width: 100%"  ></iframe>
<!--                 <?=$maps->frame;?> -->
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-3" >
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6><?=$website->address;?></h6>
                                <!-- <p>Santa monica bullevard</p> -->
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#"><?=$website->phone;?></a></h6>
                                <!-- <p>Mon to Fri 9am to 6 pm</p> -->
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="mailto:<?=$website->email;?>"><?=$website->email?></a></h6>
                                <!-- <p>Send us your query anytime!</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" method="post" id="contact">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama" id="inputName" class="form-control input-md marginbot-10" required placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" id="inputEmail" class="form-control input-md marginbot-10" required placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="inputMessage" rows="1" placeholder="Enter Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="primary_btn"><span>Send Message</span></button>
                            </div>
                        </form>
                        <div class="success" style="display:none; color:white;"></div>

                            <div class="error" style="display:none; color:red;">Terjadi Error...!</div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
         <script>



$( document ).ready(function() {

    base_url = '<?php echo base_url();?>';

    $("#contact").submit(function() {

    $("#contact .btn").attr("disabled", true);

    var data = {

    name: $("#inputName").val(),

    email: $("#inputEmail").val(),

    message: $("#inputMessage").val()

    };

    $.ajax({

        type: "POST",

        url: base_url+"sendmail",

        data: data,

        success: function(){

            $('.success').fadeIn(1000);

            $("#contact .btn").attr("disabled", false);

            setInterval(function(){ window.location=base_url+'thank_you'; }, 3000);

        },

        error: function(){

            $('.error').fadeIn(1000);

            $("#contact .btn").attr("disabled", false);

        }

    });

     return false;

;    });

});

</script>