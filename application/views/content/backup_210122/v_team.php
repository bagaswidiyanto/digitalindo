 <!--================ Start Element Banner Area =================-->
 <style type="text/css">
     .w3-circle{
        border-radius:50%
    }
    .w3-hover-opacity:hover{
        opacity:0.60;
    }
    .w3-opacity-off,.w3-hover-opacity-off:hover{
        opacity:1
    }
 </style>
      
        
        
        <!-- Start Sample Area -->
            <section class="sample-text-area"  style="background-image: url(../../../admin/upload/team/bg-team.png);">
                <div class="container">
               
             

                     <center>
                               <div class="heading" data-aos="flip-up"  data-aos-duration="1000">
                                  <h3 style="font-size:36px;padding-bottom: 30px;">Our Team</h3>
                                  <div data-animate="fadeInUp">  
                                </div>
                                </div>

                                <div class="row" data-aos="fade-right"  data-aos-duration="1500"><br>

                                    <?php foreach($this->db->query("SELECT * FROM tbl_team order by urutan asc")->result() as $team) { ?>

                                    <div class="col-md-3">
                                    <a href="<?php echo base_url();?>team/detail/<?php echo $team->slug;?>">
                                      <img src="https://digitalindo.co.id/admin/upload/team/<?=$team->image;?>" alt="Boss" style="width:150px;height: 150px;" class="w3-circle w3-hover-opacity">
                                
                                      <h3><?php echo $team->nama;?></h3>
                                          </a>
                                      <p><?php echo $team->posisi;?></p>
                                    </div>

                                     <?php }?>

                                   

                                    </div>
                               
                                                               
                        </center>
           

                                

                    </div>
                    <!-- /.container -->


            
            </section>
            <!-- End Sample Area -->
            <!-- Start Button -->
          