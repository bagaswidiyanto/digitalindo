
<style type="text/css">
.w3-circle{
        border-radius:50%
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

.instagram {
  background: #d6249f;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
  color: white;
}

.team-detail{
  padding: 0px 150px ;
}
.team-detail h4{
  font-size:18px ;
  text-align: left;
}
.image-team img{
  width: 25%;
}
@media (max-width: 991px) {
.team-detail{
  padding: 0px 20px ;
}

.team-detail h4{
  font-size:16px ;
}
.image-team img{
  width: 30%;
}
  }
@media (max-width: 767px) {
.team-detail{
  padding: 0px 20px ;
}
.team-detail h4{
  font-size:15px ;
}
.image-team img{
  width: 40%;
}
  }

  @media (max-width: 500px) {

.image-team img{
  width: 50%;
}
  }
</style>

 
 
    <!-- intro section -->
    <section class="bg-blue-berita" style="background-image: url(../../../../admin/upload/team/bg-team.png);">
        <div class="container">
            <div class="container-fluid">
               
            </div>

<div class="top-content"  style="margin-top: -3%;">
        
        <div class="container pad-container">
    


            <div class=" text-center" data-aos="flip-up">

                <div class="title-arch wow slideInLeft" data-wow-delay="1s" data-wow-duration="2s">
                  <h2 style="text-align: center;"><b style="text-align: center;color: #0b418b;"><?=$team->nama;?></b></h2>
                  <h3 style="text-align: center;"><b style="text-align: center;"><?=$team->posisi;?></b></h3>

                </div>
                </div>
                <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                    <div class="image-team">
                    <center>
                      <img src="https://digitalindo.co.id/admin/upload/team/<?=$team->image;?>"  class="w3-circle">
                    </center>
                  </div>
                    <br><br>
                     
                    <div class="team-detail" >
                        <h4><i class="fa fa-building"></i>&nbsp;&nbsp;<?=$team->company;?></h4>
                        <h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?=$team->alamat;?></h4>
                            <h4><i class="fa fa-flag"></i>&nbsp;&nbsp;<?=$team->kota;?>, <?=$team->negara;?></h4>
                           <h4><i class="fa fa-phone"></i>&nbsp;&nbsp;<?=$team->phone;?> / <?=$team->phone2;?></h4>
                    
                        <br>
                        <h4><i class="fa fa-envelope"></i>&nbsp;&nbsp;<?=$team->email;?></h4>
                        <h4><i class="fa fa-globe"></i>&nbsp;&nbsp;<?=$team->website;?></h4>
                    </div>
        
                        <center>
                       <b>Social Media : </b><br><br>
                       <a href="<?=$team->facebook;?>" target="_blank"  class="fa ga fa-facebook facebook" style="text-decoration: none;"></a>
                       <a href="<?=$team->twitter;?>" target="_blank"  class="fa ga fa-twitter twitter" style="text-decoration: none;"></a>
                       <a href="<?=$team->instagram;?>" target="_blank" class="fa ga fa-instagram instagram" style="text-decoration: none;"></a>
                    </center>
                           <br><br>
                  <a href="<?=base_url();?>team" >&larr;Back</a>  
             

                
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


