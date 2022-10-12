
<style type="text/css">
.blog img {
    width: 70% !important;
}
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
    color:#FFF;
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
$url=base_url().'berita/baca/'.$berita->slug;
$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$url;
$twitterURL = 'https://twitter.com/intent/tweet?text='.$berita->Title.' - &amp;url='.$url;
$googleURL = 'https://plus.google.com/share?url='.$url;
$whatsappURL = 'whatsapp://send?text='.$berita->Title . ' ' . $url;
 ?> 
 
         <section class="banner_area">
            <?php foreach($this->db->query("SELECT * FROM tbl_banner where  posisi='34' and tipe='1' ")->result() as $b) { ?>
        <div class="banner_inner d-flex align-items-center" style="background-image: url(../../../../admin/upload/banner/<?=$b->image;?>);" >
              <?php
                }
             ?>
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-left">
                    <div class="page_link">
                        <a href="<?=base_url()?>">Home</a>
                        <a href="Berita">Berita</a>
                    </div>
                    <h2>Pricing Plans</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- intro section -->
    <section class="bg-blue-berita" >
        <div class="container">
            <div class="container-fluid">
               
            </div>

<div class="top-content"  style="margin-top: -3%;">
        
        <div class="container pad-container">
    


            <div class=" text-center" data-aos="flip-up">

                <div class="title-arch wow slideInLeft" data-wow-delay="1s" data-wow-duration="2s"><h2 style="text-align: center;"><b style="text-align: center;"><? if (@$_GET['lang']=='eng'){ ?><?=$berita->Title;?><? } else echo $berita->Title; ?></b></h2></div>
                </div>
                <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                    
                    <p><center><img src="/admin/upload/news_post/<?php  echo $berita->image;?>" ></center><br><? if (@$_GET['lang']=='eng'){ ?><br><i class="fa fa-clock-o"></i>&nbsp;<?=date('H:i, d M Y',strtotime($berita->created_date));?><br><?=$berita->content;?></p> <? } else echo "<br><i class='fa fa-clock-o'></i>&nbsp;".date('H:i, d M Y',strtotime($berita->created_date))."<br><br>".$berita->content; ?></p>

                    <br><br>
                  <a href="#" onclick="history.go(-1)">&larr;Kembali</a>  
                    <br><br>

                    <center>
                       <b>Share this on : </b><br><br>
                       <a href="<?echo $facebookURL?>" target="popup" onclick="window.open('<?php echo $facebookURL?>','popup','width=640,height=360,scrollbars=no,resizable=no'); return false;" class="fa ga fa-facebook facebook" style="text-decoration: none;"></a>
                       <a href="<?echo $twitterURL?>" target="popup" onclick="window.open('<?php echo $twitterURL?>','popup','width=640,height=360,scrollbars=no,resizable=no'); return false;" class="fa ga fa-twitter twitter" style="text-decoration: none;"></a>
                       <a href="<?echo $googleURL?>" target="popup" onclick="window.open('<?php echo $googleURL?>','popup','width=640,height=360,scrollbars=no,resizable=no'); return false;" class="fa ga fa-google google" style="text-decoration: none;"></a>
                    </center>
                </div>
                
                  


                
                
                
                
                
        </div>
    
</div>
<div class="bottom-content" >


</div>


        </div>
    </section>
</div>                
            
<div class="bg-down1">
        </div>          


