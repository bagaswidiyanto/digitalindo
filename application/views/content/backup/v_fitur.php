


<!--================ Start Features Banner Area =================-->
    <section class="banner_area">
        <?php foreach($this->db->query("SELECT * FROM tbl_banner where posisi='28' and tipe='1' ")->result() as $b) { ?>
        <div class="banner_inner d-flex align-items-center" style="background-image: url(../../admin/upload/banner/<?=$b->image;?>);width: 100%;height: 555px;">
              <?php
                }
             ?>
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-left">
                    <div class="page_link">
                        <a href="<?=base_url()?>">Home</a>
                        <a href="Layanan">Features</a>
                    </div>
                    <h2>Fitur</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Banner Area =================-->





    <!--================Start Big Features Area =================-->
<div class="wrapper">

    <div class="sidebar">
            <h3 style="color: #f8b600">Fitur - Fitur Kami</h3>
            <div class="list-type6">
                <nav id="side">
             <ul>
                <?foreach($this->db->query("SELECT * FROM tbl_navigation where parent='28' and status='1' order by sort")->result() as $f) { 
                 echo " <li><a href='$f->slug'>$f->title</a></li>"; }?>
              <!--   <li><a href="#Dashboard">Dashboard</a></li>
                <li><a href="#Menu-Offices">Menu Offices</a></li>
                <li><a href="#Master">Master</a></li>
                <li><a href="#Module">Module</a></li>
                <li><a href="#Operational">Operational</a></li>
                <li><a href="#Finance">Finance</a></li>
                <li><a href="#Reports">Reports</a></li>
                <li><a href="#System-Setting">System Setting</a></li>
                <li><a href="#Report-Customer">Report Customer</a></li>
                <li><a href="#Support-Mobile">Support Mobile</a></li>
                <li><a href="#Tracking-System">Tracking System</a></li>
                <li><a href="#Database-Web">Basis Data Web</a></li> -->
              </ul>
              </nav>
            </div>
    </div>


<div class="main">	
<section class=" big_features">
    <div class="container">
        <div class="row">
        	<div class=" text-center" >
              

                <section id="Dashboard">
        		<div class="container pad-container fitur">
        			<div class="text-center" data-aos="flip-up">
        				<div><h2 style="text-align: center;"><b style="text-align: center;">Dashboard</b></h2></div>
                	</div>
                    	<div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Menampilkan control panel menarik yang mudah digunakan untuk mengatur seluruh kegiatan di sistem logistik dan juga laporan singkat dari logistik yang real-time serta grafik-grafik laporan transaksi seusai keinginan anda.
                        	</p>

                            <br><br>
                        </div>
                    <hr class="separator">
            	</div>
                </section>

                <section id="Menu-Offices">
            	<div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Menu Offices</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Anda dapat mengatur informasi profil dari perusahaan, cabang-cabang perusahaan yang anda miliki, bahkan mitra atau agent yang bekerjasama dengan perusahaan anda.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Master">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Master</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Terdapat dua fitur master yang kami berikan, yang pertama Master Logistics, pada fitur ini menyajikan Logistic Area yang dapat mengolah are-area yang tersedia di perusahaan logistik anda dan cabang-cabangnya. Logistic Vehicle untuk megolah data driver dan kurir yang ada pada logistik anda. Logistic Service untuk mengatur moda, service delivery, dan billing type yang tersedia pada logistik anda.Yang kedua Master Vendors, fitur ini membuat anda dapat mengolah data para vendors yang bekerjasama dengan perusahaan logistik anda. 
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Module">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Module</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Sistem module yang disediakan oleh digitalindo dapat mempermudah proses penginputan data dan pengolahan data di logistik anda. Seperti marketing untuk mengolah customer price, Customer Service untuk transaksi Data Entry, Print Airwaybill, Shipment Status untuk mengetahui history dari data Airwaybill dan Tracking Nomor Airwaybill, serta mengelolah data complain customer.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Operational">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Operational</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Anda dapat dengan mudah memanajemen operasional logistik anda. Dengan adanya sistem ini dapat membantu untuk pembuatan Manifest, melakukan Check Transit, Check Inbound, dan Print Manifest serta pembuatan Delivery Sheet atau Surat Jalan.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Finance">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Finance</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Fitur ini dapat membantu perusahaan logistik anda untuk mengatur keuangan, penerimaan, pembayaran, Account Receiveable seperti Invoice, Account Payable.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Reports">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Reports</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Menyediakan berbagai jenis Report yang memudahkan perusahaan logistik anda yang dapat di export ke excel. Seperti Report Branch yang memberikan data laporan dari detail transaksi dan manifest yang inbound maupun outbound, dan pembuatan rekap untuk transaksi, manifest, dan city courier. Report Finance untuk Daily Report Cashier, Report Account Receiveable, dan Report Account Payable.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="System-Setting">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">System Setting</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Anda dapat mengatur sistem untuk penambahan halaman menu, manajemen user seperti pembuatan akun-akun baru, group user untuk membagi akun ke berbagai jenis kategori , dan menu management untuk memberikan hak akses menu apa saja yang dapat dilihat oleh masing-masing user berdasarkan kategorinya.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Report-Customer">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Halaman Report Customer Member</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Customer yang sudah menjadi member di logistik anda dapat diberikan akses untuk melihat report seperti pengiriman, POD Return, Invoices, dan All Status sesuai transaksi dari masing-masing customer.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Support-Mobile">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Support Web Mobile / Android / IOS</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Anda dapat dengan mudah mengakses sistem hanya dengan menggunakan telepon genggam anda dimanapun dan kapanpun.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Tracking-System">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Tracking System</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Fitur ini membuat anda dan calon pelanggan dapat melacak status dan keberadaan dari barang kirimannya sercara real-time hanya menggunakan nomor Airwaybill yang diberikan sehingga menekan resiko kehilangan barang.
                            </p>

                            <br><br>
                        </div>
                    <hr class="separator">
                </div>
                </section>

                <section id="Database-Web">
                <div class="container pad-container fitur" >
                    <div class="text-center" data-aos="flip-up">
                        <div><h2 style="text-align: center;"><b style="text-align: center;">Basis Data Web</b></h2></div>
                    </div>
                        <div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
                        
                            <center><img src="<?=base_url();?>assets/img/chart.png" ></center><br><br><br>
                            <p>
                            Dapat dengan mudah melakukan manajemen dan pengolahan data transaksi logistik, juga menjamin keamanan dan kerahasiaan data customer anda.
                            </p>

                            <br><br>
                        </div>
                    
                </div>
                </section>

        	</div>
		</div>
	</div>
</section>
</div>

</div>


   
    <!--================End Big Features Area =================-->

    <!--================Impress Area =================-->

    <!--================End Impress Area =================-->
 





   