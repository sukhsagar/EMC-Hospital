<!DOCTYPE html>
<html lang="en">
   <head>
      <script src="js/jquery.min.js"></script>    
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel=icon href="assets/images/favicon.png" sizes=32x32 />
      <title>Department of Pathology</title>
      <link href="css/customnew.css" rel="stylesheet" type="text/css">
      <link href="css/app-index.css" rel="stylesheet" type="text/css">
      <link href="css/mystylehomeview.css" rel="stylesheet" type="text/css">
      <link href="css/home.css" rel="stylesheet" type="text/css">
      <link href="css/new-speciality.css" rel="stylesheet" type="text/css">
      <link href="css/specility-listing.css" rel="stylesheet" type="text/css">
      <link href="css/blog-page.css" rel="stylesheet" type="text/css">
      <link href="css/main-custom.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/all.css">
      <link href="css/aos.css" rel="stylesheet">
      <link href="css/emc.css" rel="stylesheet">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
      <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <style>        @media (max-width:480px){            .dc-bringcarecontent .dc-btnarea .dc-btn{width: 100%;}    .dc-bringcarecontent .dc-btnarea .dc-btn + .dc-btn{margin: 10px 0 0;}    .section-doctor {    background-color: #f8f9fa;    padding: 29px 0;}        }        @media (max-width:992px){.dc-bringimg-holder{padding: 30px 0 0;}}        @media (max-width:1280px){    .dc-usernav{        right: 0;        left: auto;    }    .dc-doccareimg figcaption{right: 0;}    .dc-appbgimg figure img{        margin: 0;        height: auto;        max-width: 100%;    }}    .our-spe {        height: 100%;        width: 0;        position: fixed;        z-index: 1;        top: 0;        right: 0;        background-color: #fff;        overflow-x: hidden;        transition: 0.5s;        padding-top: 30px;    }    .list-of-center-ex a {        transition: 0.3s;        text-align: justify;        color: #0479dc;        display: block;        padding: 5px 0px 5px 25px;        font-size: 15px;    }    .list-of-center-ex a:hover {        transition: 0s;        color: #6c86b2;    }    .our-spe .closebtn {        position: absolute;        top: 20px;        right: 33px;        font-size: 35px;        text-align: right;        color: #c5ccd2;    }    .our-center-ex {        padding: 6px 8px 6px 16px;        text-decoration: none;        font-size: 18px;        color: #114398;        font-weight: 700;        display: block;        border: none;        background: 0 0;        width: 100%;        text-align: left;        cursor: pointer;        outline: 0;    }    .ex-our-txt {        font-size: 18px;        color: #0C141D;        cursor: pointer;        font-family: Titillium Web;        font-weight: 600;        padding-left: 10px;    }    @media screen and (max-height: 450px) {        .our-spe {            padding-top: 15px;        }        .our-spe a {            font-size: 18px;        }    }    </style>
   </head>
   <body>
      <?php include "include/header.php"; ?>
      <div class="container-fluid padding-0 margin-0">
         <div class="container-fluid bread">
            <div class="container p-0">
               <ul class="breadcrumb blog_breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li>                <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="pathology.php"> Department of Pathology</a></li>
               </ul>
            </div>
         </div>
         <div class="spec-banner">
            <div class="banner-gredient"></div>
            <img src="assets/web-banners/pathology.jpg">    <!-- <div class="container">        <h1> Department of Pathology</h1>    </div> -->
         </div>
         <!--  <section class="speciality-nav">    <div class="container">    <div class="row">    <div id="navbar">    <a href="#overview">OVERVIEW</a>    <a href="#doctors">DOCTORS</a>    <a href="#services">SERVICES</a>    <a href="#blog">BLOGS</a>    <a href="#doc-vdeo">VIDEOS</a>    </div>    </div>    </div>    </section> --> 
         <div class="container">
            <div class="row padding-35 m-0" style="margin:0;">
               <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12">

                    <div class="row">

                    <div class="col-lg-12">

                        <div class="doc-cardx">

                            <div class="doc_image_doctorlist">
                               <img class="img-responsive" width="100%" src="doctors/dr-naina.jpg">
                               <a data-toggle="modal" data-target="#exampleModalCenter" data-id="Dr. Naina vij" data-speciality="PATHOLOGIST" data-hospital="Hospital EMC" href="#" target="_blank">
                               <button>Book an appointment</button>
                               </a>    
                            </div>

                             <div class="doc-details">
                                  <h5>Dr.Naina vij</h5>
                                  <p>MD , PATHOLOGIST</p>
                                   <p><a href="mailto:emc.treatment@gmail.com"> <i class="fa fa-envelope" aria-hidden="true"></i> emc.treatment@gmail.com</a></p>
                            </div>

                             <div class="clearfix"></div>
                        </div>

                     </div>
            </div>


            <style type="text/css">
                  .doc_image_doctorlist 
                      {
                        position: relative;
                        float: left;width: 42%;
                    }    
                  .doc-cardx {
                      background: rgb(249,252,247);
                      background: -moz-linear-gradient(-45deg, rgba(249,252,247,1) 0%, rgba(245,249,240,1) 100%);
                      background: -webkit-linear-gradient(-45deg, rgba(249,252,247,1) 0%,rgba(245,249,240,1) 100%);
                      background: linear-gradient(135deg, rgba(249,252,247,1) 0%,rgba(245,249,240,1) 100%);
                      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9fcf7', endColorstr='#f5f9f0',GradientType=1 );
                        border: 1px solid #e8e8e8;
                      border-radius: 4px;
                      margin-bottom: 20px;
                    }
                     .doc-details h5 {padding: 0;}
                      .doc-details {float: right;width: 57%;padding: 2px;margin: 30px 0px 0px 2px;}
                    .doc-details p {color: #414b56;font-weight: 500;font-size: 12px;}    
             </style>
                  <div class="overview" id="about_doclistingpage">
                     <p>EMC group of hospitals are specialized in providing high-quality pathology services. The department of pathology is concerned with investigating the causes and effects of any disease or injury prevailing in the body. </p>
                     <p>Our expert team of doctors and assistant staff, under the enlightenment of Dr. Naina Vij (MD), are using their findings to diagnose and treat the illness in patients. </p>
                     <p>Our hospitals are fully equipped with all the modern technologies and laboratories for accurately performing the analysis of the human samples of blood, tissue and other fluids.</p>
                     <p>Our hospitals are fully equipped with all the modern technologies and laboratories for accurately performing the analysis of the human samples of blood, tissue and other fluids.</p>
                     <p>EMC group of hospitals and team strive hard and selflessly take care of every and any patient.</p>
                     <div class="row department-of">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 col-6">
                           <!--  <h2 class="text-center btn-m3">Scope of Services </h2> -->    <img src="images/scope-01.png" class="img-responsive" alt="">    <br>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                           <a href="#">
                              <div class="home-specility-section cardiology-four">
                                 <div class="home-speciality-img services-Cardiology">                            <img src="icons-scope/pathology/biochemistry.png" alt="">                        </div>
                                 <h4 style="color: #48c5f8;">Biochemistry</h4>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                           <a href="#">
                              <div class="home-specility-section cardiology-four">
                                 <div class="home-speciality-img services-Cardiology">                            <img src="icons-scope/pathology/haemotology.png" alt="">                        </div>
                                 <h4 style="color: #474f5f;">Haemotology</h4>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                           <a href="#">
                              <div class="home-specility-section cardiology-four">
                                 <div class="home-speciality-img services-Cardiology">                            <img src="icons-scope/pathology/micro-biology.png" alt="">                        </div>
                                 <h4 style="color: #e23736;">Micro Biology</h4>
                              </div>
                           </a>
                        </div>
                        <div class="clearfix"></div>
                        <br>                      
                        <div class="col-md-4 col-sm-4 col-6">
                           <a href="#">
                              <div class="home-specility-section cardiology-four">
                                 <div class="home-speciality-img services-Cardiology">                            <img src="icons-scope/pathology/pathology.png" alt="">                        </div>
                                 <h4 style="color: #74c043;">Pathology                        </h4>
                              </div>
                           </a>
                        </div>
                        <div class="clearfix"></div>
                        <br>        
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                  <div class="form-pages_contact">
                     <h3>Request Call Back </h3>
                     <form class="mt-5" method="post" action="request-callback-form.php" onsubmit="return validateForm()">
                        <input id="discipline" name="department" type="hidden" value="Pathology">							  
                        <div class="form-row">
                           <div class="form-group col-md-12">				  <label for="name">Name</label>				  <input type="text" class="form-control" id="name" name="firstname" required="">				</div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-12">				  <label for="inputEmail4">Email</label>				  <input type="email" class="form-control" id="inputEmail4" name="email" required="">				</div>
                           <div class="form-group col-md-12">				  <label for="inputPassword4">Phone Number</label>				  <input type="text" class="form-control" id="inputPassword4" name="phone" required="">				</div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="send">Submit</button>			
                     </form>
                  </div>
                  <br>
                  
                  <style type="text/css">
                   
                  .widget-categories ul li a {
                         display: block;
                        position: relative;
                         padding: 14px 10px 14px 50px !important;
                         color: #F7941D;
                         font-size: 14px;
                         font-weight: 600;
                         text-transform: capitalize;
                         margin-bottom: 2px;
                         border-radius: 3px;
                        background-color: #ffffff;
                         -webkit-box-shadow: 0 5px 83px 0 rgba(40, 40, 40, 0.04);
                         box-shadow: 0 5px 83px 0 rgba(40, 40, 40, 0.04);
                         -webkit-transition: all 0.3s linear;
                         transition: all 0.3s linear;
                     }

                     .widget-categories ul li a:hover{
                        -webkit-transform: scale(1.1);
                        -ms-transform: scale(1.1);
                         transform: scale(1.1);
                     }

               </style>


               <!-- <div class="col-sm-12 col-md-12 col-lg-4"> -->
            <aside class="d-sm-none sidebar mb-30 ">
              <div class="widget widget-categories d-sm-none">
                <h5 class="widget__title text-center" style="color:#0c141d;font-size:18px;font-family:Titillium Web;font-weight:600;">Our Departments</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">

                      <li><a href="cardiologist.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Cardiothoracic Surgery</a></li>
                      <li><a href="ortho-joint-replacement-surgeon.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Orthopedic & Joint Replacement Surgery</a></li>
                      <li><a href="laparoscopic-surgery.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;General & Laparoscopic Surgery</a></li>
                      <li><a href="cardiology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Cardiology</a></li>
                      <li><a href="neuro-surgeon.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Neuro Surgery</a></li>
                      <li><a href="urology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Urology</a></li>
                      <li><a href="nephrology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Nephrology & Dialysis</a></li>
                      <li><a href="neurology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Neurology</a></li>
                      <li><a href="pulmonology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Pulmonology</a></li>
                      <li><a href="vascular-surgery.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Plastic & Reconstructive  Surgery</a></li>
                      <li><a href="anaesthesia.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Critical Care & Anaesthesia</a></li>
                      <li><a href="general-medicine.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Medicine & Endocrinology</a></li>
                      <li><a href="gynecologist.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Obstetrics & Gynecology</a></li>
                      <li><a href="gastroenterology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Gastroenterology & Hepatology</a></li>
                      <li><a href="critical-trauma-care.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Emergency & Trauma Care</a></li>
                      <li><a href="psychiatry.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Psychiatry & De-addiction</a></li>
                      <li><a href="oncology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Medical & Surgical Oncology</a></li>
                      <li><a href="ent-oncology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Ent / Ent Oncology</a></li>
                      <li><a href="colon-rectal-surgery.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Colon & Rectal Surgery</a></li>
                      <li><a href="physiotherapy.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Physiotheraphy & Rehabilitation</a></li>
                      <li><a href="radiology-imaging.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Radiology & Imaging</a></li>
                      <li><a href="transfusion-services.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Services ( Blood Bank )</a></li>
                      <li><a href="nutrition.php"><i class="fas fa-arrow-circle-right">&nbsp;&nbsp;Dietician & Nutrition </i></a></li>
                      <li><a href="oral-and-maxillofacial-surgery.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;Oral & Maxillofacial Surgery</a></li>
                       <li><a href="pathology.php"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp; Pathology</a></li>
                      

                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->

            </aside><!-- /.sidebar -->
          <!-- </div> --><!-- /.col-lg-4 -->


               </div>
               
            </div>
            <!-- <div class="row">			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">				 <div class="doc_image_doctorlist">                <img class="img-responsive" width="100%" style="border-radius: 3px;" src="doctors/dr-naina-vij.jpg">                                <a data-toggle="modal" data-target="#exampleModalCenter" data-id="Dr.Naina vij" data-speciality="Cardiologist" data-hospital="Hospital EMC" href="#" target="_blank">                    <button>Book an Appointment</button>                </a>                <h1>Dr.Naina vij </h1>                <p class="doctor_degree">MD , PATHOLOGIST </p>                                <p class="doctor_degree hdeading"> <i style="font-size: 20px;" class="fa fa-envelope" aria-hidden="true"></i> emc.treatment@gmail.com</p>            </div>			</div>		</div> --> 
         </div>
         <section class="advance-tecnology">
            <div class="container">
               <div class="row">
                  <h2>Advanced Medical Technologies </h2>
                  <p>EMC  Hospital has the most advanced technology which assists our doctors to reach an accurate                diagnosis and carry out precise, safe and cutting edge minimally invasive surgical/interventional                procedures.</p>
                  <div class="owl-carousel owl-theme bcon" id="advance-tecnology">
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/front-office.jpg" class="img-responsive" border="0" alt="">                             
                              <h4>FRONT OFFICE </h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-22s.jpg" class="img-responsive" border="0" alt="">                             
                              <h4>IPD WAITING HALL </h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-24s.jpg" class="img-responsive" border="0" alt="">                             
                              <h4>OPD CHAMBER</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-12s.jpg" class="img-responsive" border="0" alt="">                            
                              <h4>CONFERENCE HALL</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-15s.jpg" class="img-responsive" border="0" alt="">                             
                              <h4>EMERGENCY</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-18s.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>ICU</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-20s.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>ICU</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-19s.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>ICU</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="internal-external/icu.jpg" alt="" title=""                                class="img-responsive">                            
                              <h4>ICU</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/cardiac-recovery.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>CARDIAC CRITICAL CARE</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-23s.jpg"        class="img-responsive" border="0" alt="">                             
                              <h4>MODULAR  OT</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-17s.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>GENERAL WARD</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-13s.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>DIALYSIS</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-16s.jpg"        class="img-responsive" border="0" alt="">                             
                              <h4>GASTROENTEROLOGY AND HEPATOLOGY</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-11s.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>CATH LAB</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-9s.jpg"        class="img-responsive" border="0" alt="">                             
                              <h4>EEG</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-14s.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>ECO</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/gaelly-25s.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>PHYSIOTHERAPHY</h4>
                           </div>
                        </a>
                     </div>
                     <div class="item-holder">
                        <a>
                           <div class="item-holder">
                              <img src="infrastructure/private-room.jpg"        class="img-responsive" border="0" alt="">                            
                              <h4>PRIVATE ROO</h4>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <style>#ls_theLayer .raised .b2 {    background: #00B48D;}</style>
      <!----------------------modal----------------------->
   <!--   <div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
              
            <div class="modal-content">
               <div class="modal-header">        <button type="button" class="close doccallclosesss" data-dismiss="modal">&times;</button>              </div>
               <div class="modal-body">
                  <h4 class="modal-title formss">Request Call Back</h4>
                  <form class="mt-5 callmodalss" method="post" action="request-callback-form-department.php" onsubmit="return validateForm()">
                     <input id="discipline" name="department" type="hidden" value="Cardiology">            
                     <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">            <label for="name">Name</label>            <input type="text" class="form-control" id="name" name="firstname" required="">            </div>
                        <div class="form-group col-md-6 col-xs-12">            <label for="inputEmail4">Email</label>            <input type="email" class="form-control" id="inputEmail4" name="email" required="">            </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">            <label for="inputPassword4">Phone Number</label>            <input type="text" class="form-control" id="inputPassword4" name="phone" required="">            </div>
                        <div class="form-group col-md-6 col-xs-12">            <label for="">Department</label>            <input type="text" class="form-control" id="departments" name="department" value="Pathology" required="">            </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-12">            <label for="">Message</label>            <textarea class="form-control" name="message" id="pe5" placeholder="Message"></textarea>            </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-12 text-center">            <button type="submit" class="btn btn-primary" name="send">Submit</button>            </div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer bdr-noness">
                  <!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>       
               </div>
            </div>
         </div>
      </div> -->
      <script>    $(document).ready(function(){          $('#myModal').modal('show');    }); </script><!----------------------modal-end----------------------> <?php include "include/footer.php"; ?><!-- <script src="js/jquery-3.2.1.min.js"></script> --><script type="text/javascript" src="js/jquery-3.2.1.min.js"></script><script type="text/javascript" src="js/app.js"></script><script type="text/javascript" src="js/owl.carousel.min.js"></script><script type="text/javascript" src="js/webslidemenu.js"></script><script src="js/additional-methods.min.js" type="text/javascript"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script><script src="js/slick.js"></script><script>$('#exampleModalCenter').on('show.bs.modal', function (event) {  var button = $(event.relatedTarget) // Button that triggered the modal  var doctor = button.data('id')var speciality =button.data('speciality')var hospital=button.data('hospital')  var modal = $(this)  modal.find('.modal-body #doctor').val(doctor)  modal.find('.modal-body #speciality').val(speciality)  modal.find('.modal-body #hospital').val(hospital)})</script><script type="text/javascript">        // Slick Slider        if($('.specialities-slider').length > 0) {        $('.specialities-slider').slick({            dots: true,            autoplay:false,            infinite: true,            variableWidth: true,            prevArrow: false,            nextArrow: false        });    }        if($('.doctor-slider').length > 0) {        $('.doctor-slider').slick({            dots: false,            autoplay:false,            infinite: true,            variableWidth: true,        });    }    if($('.features-slider').length > 0) {        $('.features-slider').slick({            dots: true,            infinite: true,            centerMode: true,            slidesToShow: 3,            speed: 500,            variableWidth: true,            arrows: false,            autoplay:false,            responsive: [{                  breakpoint: 992,                  settings: {                    slidesToShow: 1                  }            }]        });    }    </script><script>$(document).ready(function() {    (function($) {        $('a[href*=#]:not([href=#])').click(function() {            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||                location.hostname == this.hostname) {                var target = $(this.hash),                    headerHeight = $(".primary-header").height() + 170; // Get fixed header height                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');                if (target.length) {                    $('html,body').animate({                        scrollTop: target.offset().top - headerHeight                    }, 1000);                    return false;                }            }        });    })(jQuery);});</script><script>$(".hover-more").click(function() {    var expandFlag = $($(this).parent().find(".fc")).hasClass("expand");    $(".fc").removeClass("expand");    if (!expandFlag) {        $(this).parent().find(".fc").toggleClass("expand");        $(this).html('Close');    }});$(".counter").counterUp({    delay: 10,    time: 2000});$(".counter-116").counterUp({    delay: 11,    time: 2000});</script><script>$(document).ready(function() {      $(window).scroll(function(){         if ($(this).scrollTop() > 100) {             $('#topb').fadeIn();         } else {             $('#topb').fadeOut();         }     });     $('#topb').click(function(){         $("html, body").animate({ scrollTop: 0 }, 600);         return false;     }); });</script><script>$(window).load(function() {    $(".se-pre-con").fadeOut("fast");});$(document).ready(function() {    $('#spec-testimonials').owlCarousel({        loop: true,        margin: 10,        autoplay: true,        lazyLoad: true,        nav: true,        autoplayTimeout: 3000,        autoplayHoverPause: true,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        dots: false,        responsive: {            0: {                items: 1            },            600: {                items: 2            },            1000: {                items: 3            }        }    })    var owl2_1 = $("#owl2-demo-1");    owl2_1.owlCarousel({        items: 1,        lazyLoad: true,        loop: true,        margin: 10,        dots: false,        autoplay: true,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        autoplayTimeout: 5000,        autoplayHoverPause: true,        responsive: {            0: {                items: 1,                nav: true            },            600: {                items: 1,                nav: true            },            1000: {                items: 1,                nav: false            }        }    });    var homenew = $("#homenew-demo-1");    homenew.owlCarousel({        items: 1,        lazyLoad: true,        loop: true,        margin: 10,        dots: false,        autoplay: true,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        autoplayTimeout: 5000,        autoplayHoverPause: true,        responsive: {            0: {                items: 1,                nav: true            },            600: {                items: 1,                nav: true            },            1000: {                items: 1,                nav: false            }        }    });    var our_expert = $("#our-expert");    our_expert.owlCarousel({        items: 1,        lazyLoad: true,        loop: true,        margin: 10,        dots: true,        autoplay: true,        // navText: ["<span class='prev'></span>", "<span class='next'></span>"],        autoplayTimeout: 5000,        autoplayHoverPause: true,        responsive: {            0: {                items: 1,                nav: true            },            600: {                items: 2,                nav: true            },            1000: {                items: 3,                nav: false            }        }    });    var advance_tecnology = $("#advance-tecnology");    advance_tecnology.owlCarousel({        items: 1,        lazyLoad: true,        loop: true,        margin: 10,        dots: true,        autoplay: true,        // navText: ["<span class='prev'></span>", "<span class='next'></span>"],        autoplayTimeout: 5000,        autoplayHoverPause: true,        responsive: {            0: {                items: 1,                nav: true            },            600: {                items: 2,                nav: true            },            1000: {                items: 3,                nav: false            }        }    });    var homepage_testimonial = $("#homepage-testimonial");    homepage_testimonial.owlCarousel({        items: 1,        lazyLoad: true,        loop: true,        margin: 10,        dots: true,        autoplay: true,        // navText: ["<span class='prev'></span>", "<span class='next'></span>"],        autoplayTimeout: 5000,        autoplayHoverPause: false,        responsive: {            0: {                items: 1,                nav: true            },            600: {                items: 2,                nav: true            },            1000: {                items: 3,                nav: true            }        }    });    var homepage_news = $("#homepage-news");    homepage_news.owlCarousel({        items: 1,        lazyLoad: true,        loop: true,        margin: 10,        dots: true,        autoplay: false,        mouseDrag: false,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        autoplayTimeout: 5000,        autoplayHoverPause: true,        responsive: {            0: {                items: 1,                nav: true            },            600: {                items: 2,                nav: true            },            1000: {                items: 3,                nav: false            }        }    });    var homenew_specilities = $("#homenew-specilities");    homenew_specilities.owlCarousel({        items: 1,        lazyLoad: true,        loop: true,        margin: 10,        dots: true,        autoplay: false,        mouseDrag: false,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        autoplayTimeout: 5000,        autoplayHoverPause: true,        responsive: {            0: {                items: 1,                nav: true            },            600: {                items: 3,                nav: true            },            1000: {                items: 3,                nav: false            }        }    });    var owl2_2 = $("#owl2-demo-2");    owl2_2.owlCarousel({        lazyLoad: true,        // center: true,        loop: true,        autoplay: true,        // autoWidth:305,        autoplayTimeout: 2000,        autoplayHoverPause: true,        margin: 25,        dots: false,        nav: true,        slideBy: 1,        // itemsDesktop : [1000,4],        items: 4,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        responsive: {            0: {                items: 1,                nav: false,            },            600: {                items: 2,                nav: false,            },            1000: {                items: 3            },            1100: {                items: 4            }        }    });    $('#owl-video .owl-nav').removeClass('disabled');    var owl2_6_2 = $("#owl2-demo-6-2");    owl2_6_2.owlCarousel({        lazyLoad: true,        loop: true,        autoplay: true,        autoplayTimeout: 3000,        autoplayHoverPause: true,        margin: 30,        responsiveClass: true,        dots: true,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        responsive: {            0: {                items: 1,                nav: false,                dots: true,            },            600: {                items: 1,                nav: false,                dots: true,            },            1000: {                items: 1,                nav: true,                dots: false,            },            1100: {                items: 1,                nav: true,                dots: false,            }        }    });    $('#owl2-demo-4').owlCarousel({        autoplay: true,        center: true,        loop: true,        autoplayHoverPause: true,        nav: true,        autoplayTimeout: 3000,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        responsive: {            0: {                items: 1,                nav: false,            },            600: {                items: 1,                nav: false,            },            1000: {                items: 3,                nav: true,            },            1100: {                items: 3,                nav: true,            }        }    });    var owl2_3 = $("#owl2-demo-3");    owl2_3.owlCarousel({        items: 4,        autoplay: true,        autoplayTimeout: 2000,        lazyLoad: true,        loop: true,        autoplayHoverPause: true,        margin: 10,        dots: true,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        responsive: {            0: {                items: 1,                dots: false,                nav: true            },            600: {                items: 3,                dots: false,                nav: true            },            1000: {                items: 4,                dots: true,                nav: true,            }        }    });    var owl2_5 = $("#owl2-demo-5");    owl2_5.owlCarousel({        lazyLoad: true,        // center: true,        loop: true,        autoplay: true,        // autoWidth:305,        autoplayTimeout: 2000,        autoplayHoverPause: true,        margin: 25,        dots: false,        nav: true,        slideBy: 1,        // itemsDesktop : [1000,4],        items: 4,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        responsive: {            0: {                items: 1,                nav: false,            },            480: {                items: 1,                nav: false,            },            600: {                items: 3,                nav: false,            },            1000: {                items: 3            },            1100: {                items: 3            }        }    });    // $(".btn-scrollUp").hide();    $(".btn-scrollUp").on('click', function() {        $("html, body").animate({            scrollTop: 0        }, 600);    });    $(window).scroll(function() {        //scroll to top button show when user has scrolled down 500px atleast        if ($(window).scrollTop() > 500) {            $(".btn-scrollUp").show();        }        //scroll to top button hide        if ($(window).scrollTop() < 500) {            $(".btn-scrollUp").hide();        }        // if ($(window).scrollTop() > 300) {        //             $(".bookAppntFixed").show();        //         }        //         //scroll to top button hide        //         if ($(window).scrollTop() < 500) {        //             $(".bookAppntFixed").hide();        //         }        //stick book appointment button to the footer whenthe viewport is at bottom        if ($(window).scrollTop() > $("body").height() - $(window).height() - 100) {            $("#floatButton").css({                "border-radius": "5px"            });            $("#floatButton").css({                "width": "100%"            });            $("#floatButton").removeClass("bookAppntFixed");            $(".btn-scrollUp").css({                "bottom": "172px"            })            $(".btn-scrollUp").css({                "z-index": "99999999999"            })        }        //make appointment buttom stick to the bottom of the viewport        if ($(window).scrollTop() < $("body").height() - $(window).height() - 100) {            $("#floatButton").css({                "border-radius": "0px"            });            $("#floatButton").addClass("bookAppntFixed");            $(".btn-scrollUp").css({                "bottom": "120px"            })        }        //initial opacity of scroll to top button        $(".btn-scrollUp").css({            "opacity": ".5"        });        //make scroll to top button visible when user stops scrolling        clearTimeout($.data(this, 'scrollTimer'));        $.data(this, 'scrollTimer', setTimeout(function() {            $(".btn-scrollUp").css({                "opacity": "1"            })        }, 500));    });    $('.datepicker').datetimepicker({        startDate: new Date(),        orientation: " auto",        format: "dd MM yyyy - HH:ii P",        showMeridian: true,        weekStart: 1,        todayBtn: 1,        autoclose: true,        todayHighlight: 1,        startView: 2,        forceParse: 1    });    $(".back-arrow").click(function() {        $(".overlapblackbg").click();    });            $(".events_load_more").on("click", function(e) {        var no_of_items = 3;        var limit = $(this).attr("data-limit");        if (limit !== "") {            $(".loading-spinner").show();            var start = (parseInt(limit) + parseInt(no_of_items))            var new_limit = start + "," + no_of_items;            var js = {                limit: new_limit            }            $.post(url + "events/get_events", js, function(data) {                $(".eventarea:last").append(data.result);                $(".events_load_more").attr("data-limit", new_limit);                if (data.total <= start + 3) {                    $(".events_load_more").attr("data-limit", "");                    $(".events_load_more").hide();                }                $(".loading-spinner").hide();            }, "json");        }        e.preventDefault();    });    $(".news_load_more").on("click", function(e) {        var no_of_items = 3;        var limit = $(this).attr("data-limit");        if (limit !== "") {            $(".loading-spinner").show();            var start = (parseInt(limit) + parseInt(no_of_items))            var new_limit = start + "," + no_of_items;            var js = {                limit: new_limit            }            $.post(url + "news/get_news", js, function(data) {                $(".newsarea:last").append(data.result);                $(".news_load_more").attr("data-limit", new_limit);                if (data.total <= start + 3) {                    $(".news_load_more").attr("data-limit", "");                    $(".news_load_more").hide();                }                $(".loading-spinner").hide();            }, "json");        }        e.preventDefault();    });    var total = $('.example-image-link').attr("count");    if (total < 5) {        $('.gallery_load_more').hide();    }    $(".gallery_load_more").on("click", function(e) {        var no_of_items = 5;        var limit = $(this).attr("data-limit");        if (limit !== "") {            $(".loading-spinner").show();            var start = (parseInt(limit) + parseInt(no_of_items))            var new_limit = start + "," + no_of_items;            var js = {                limit: new_limit            }            $.post(url + "gallery/get_gallery", js, function(data) {                $(".gallerylh").append(data.result);                $(".gallery_load_more").attr("data-limit", new_limit);                if (data.total <= start + 5) {                    $(".gallery_load_more").attr("data-limit", "");                    $(".gallery_load_more").hide();                }                $(".loading-spinner").hide();            }, "json");        }        e.preventDefault();    });    $(".myModale").on('hidden.bs.modal', function(e) {        $(this).find("iframe").attr("src", $(this).find("iframe").attr("src"));    });    (function() {        $('.carousel-showmanymoveone .item').each(function() {            var itemToClone = $(this);            for (var i = 1; i < 4; i++) {                itemToClone = itemToClone.next();                if (!itemToClone.length) {                    itemToClone = $(this).siblings(':first');                }                itemToClone.children(':first-child').clone()                    .addClass("cloneditem-" + (i))                    .appendTo($(this));            }        });    }());    $(document).on('click', '.appoint-btn', function() {        $("#ls_theLayer").css({            "right": "-00px",            "transition": "ease 1s"        });        $(".appoint-btn").fadeOut("slow");        $(".appoint-btn").addClass("hide");        $(".appoint-btn-hide").fadeIn("slow");        $(".appoint-btn-hide").addClass("show");        $(".appoint-btn-hide").css("top", "100px");    });    $(document).on('click', '.appoint-btn-hide', function() {        $(".appoint-btn-hide").fadeIn("slow");        $(".appoint-btn-hide").removeClass("show");        $(".appoint-btn-hide").addClass("hide");        $(".appoint-btn").removeClass("hide");        $(".appoint-btn").fadeIn("slow");        $(".appoint-btn").addClass("show");        $("#ls_theLayer").css("right", "-300px");    });    $(".abcd").click(function() {        $('#bs-example-modal-lg').modal('show');        $('.video-iframe').html(data[0].mediaURL);    });    $(".testimonials").click(function() {        var id = $(this).attr("rel");        var url = "/";        $.post(url + "testimonials/get_testimonials", {                id: id            })            .done(function(data) {                var data = JSON.parse(data);                if (data) {                    console.log(data);                    $('#bs-example-modal-lg').modal('show');                    $('.video-iframe').html(data[0].mediaURL);                }            });    });    $(".close").click(function() {        $('#mobile').find('iframe')[0].src += "&autoplay=0";    });    $(".fade").click(function() {        $('#mobile').find('iframe')[0].src += "&autoplay=0";    });});$(document).ready(function() {    $('#doccarr').owlCarousel({        loop: true,        margin: 10,        nav: true,        responsive: {            0: {                items: 1            },            600: {                items: 3            },            1000: {                items: 4            }        }    })    var owl2_6 = $("#owl2-demo-6");    owl2_6.owlCarousel({        lazyLoad: true,        loop: true,        autoplay: true,        autoplayTimeout: 5000,        margin: 30,        responsiveClass: true,        dots: false,        navText: ["<span class='prev'></span>", "<span class='next'></span>"],        responsive: {            0: {                items: 1,                nav: true            },            600: {                items: 1,                nav: true            },            1000: {                items: 1,                nav: true,            },            1100: {                items: 1,                nav: true,            }        }    });    var owl2_5 = $("#owl2-demo-5");    owl2_5.owlCarousel({        items: 1,        lazyLoad: true,        loop: true,        margin: 10,        autoplay: true,        autoplayTimeout: 5000,        autoplayHoverPause: true    });    $('#owl-video').owlCarousel({        loop: true,        center: true,        nav: true,        video: true,        responsive: {            480: {                items: 2            },            600: {                items: 3            }        }    });    $(window).load(function() {        // if( $(window).width() < 769 ){        //     $('.newcontentholder').css({"height":"20vw"});        //     $(".newimgholder img").css({"height":"20vw"});        // }        // if( $(window).width() < 426 ){        //     $('.newcontentholder').css({"height":"40vw"});        //     $(".newimgholder img").css({"height":"40vw"});        // }        // if( $(window).width() < 376 ){        //     $('.newcontentholder').css({"height":"50vw"});        //     $(".newimgholder img").css({"height":"50vw"});        // }    });    console.log($(".newimgholder img").outerHeight());    console.log("window width", $(window).width());    // $('.newcontentholder').css({"height":"20vw"});    // $(".newimgholder img").css({"height":"20vw"});    $(window).resize(function() {        //     if( $(window).width() < 376 ){        //         $('.newcontentholder').css({"height":"50vw"});        //         $(".newimgholder img").css({"height":"50vw"})        //    }        //    if( $(window).width() < 426 ){        //         $('.newcontentholder').css({"height":"30vw"});        //         $(".newimgholder img").css({"height":"30vw"})        //    }        //    if( $(window).width() < 769 ){        //         $('.newcontentholder').css({"height":"20vw"});        //         $(".newimgholder img").css({"height":"20vw"});        //     }    });});function openNav() {    document.getElementById("mySidenav").style.width = "300px";}function closeNav() {    document.getElementById("mySidenav").style.width = "0";    // document.getElementById("mySidenav").style.marginRight = "15px";}var dropdown = document.getElementsByClassName("dropdown-btn");var i;for (i = 0; i < dropdown.length; i++) {    dropdown[i].addEventListener("click", function() {        this.classList.toggle("active");        var dropdownContent = this.nextElementSibling;        if (dropdownContent.style.display === "block") {            dropdownContent.style.display = "none";        } else {            dropdownContent.style.display = "block";        }    });}$(document).ready(function() {    //sidenav show    $('.sidenav').hide();    $('.caretMenuHamburger').on('click', function() {        $('.sidenav').show();        $('.sidenav').animate({            right: '-22px'        });        // $('html').css({ "overflow": "hidden" });    });    //sidenav hide    $(".closebtn").on('click', function() {        $('.sidenav').animate({            right: '-450px'        });        $('.sidenav').hide();        $('html').css({            "overflow": "visible"        });    });});$(document).ready(function() {    $(window).scroll(function() {        if ($(this).scrollTop() > 20) {            $('#mainNavbar').addClass('header-animate');        } else {            $('#mainNavbar').removeClass('header-animate');        }    });    $(".destopmenuonly").on('click', function() {        $(".destopmenu").fadeIn();        $("body").css("overflow", "hidden");    });    $(".menu_close_btn").on('click', function() {        $(".destopmenu").fadeOut();        $("body").css("overflow", "auto");    });});$(document).ready(function() {    $(window).scroll(function() {        if ($(this).scrollTop() > 450) {            $('.sticky-right-buttos').addClass('slideVisable');        } else {            $('.sticky-right-buttos').removeClass('slideVisable');        }    });});function get_active() {    $(".changetoactive").addClass("active");    $(".triggers").css("display", "block");}function removeblock() {    $(".triggers").css("display", "none");}$(".buts").click(function() {    $("#ls_theLayer").css("display", "block");});</script>
      <style>.intro {    display: block !important;}</style>
      <script></script><script src="js/aos.js"></script><script>AOS.init();</script><script>/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */</script><script>$(".blog_social").hide();$(".social_blog").click(function() {    $(".blog_social", this).toggle();});$(document).ready(function() {    $(".menu-search").click(function() {        $("input").toggle();        $(".header-search-box").css("display", "block");    });});</script><script>var option = [];var key = [];var url = "#";$('input.typeahead').typeahead({    source: function(query, process) {        return process(key);    },    updater: function(item) {        if (option[0][item] !== '') {            console.log(option[0][item]);            window.location = option[0][item];        }        return item;    },});function selection() {    var a = document.getElementById("mySelect");    var opt = a.options[a.selectedIndex];    var n = opt.text;    if (n.length > 12) {        document.getElementById("mySelect").style.width = "250px";    } else {        document.getElementById("mySelect").style.width = "100px";    }}$(window).scroll(function() {    if ($(this).scrollTop() > 320) {        $('.scrollbutton:hidden').stop(true, true).fadeIn();    } else {        $('.scrollbutton').stop(true, true).fadeOut();    }});</script><script>function openNav() {    document.getElementById("our-specialities-menu").style.width = "320px";}function closeNav() {    document.getElementById("our-specialities-menu").style.width = "0";}</script>
   </body>
</html>