<?php include('header.php');?>
<style>
@media (min-width: 1200px)
.col-lg-3 {
    width: 20% !important;
}

.custom-btn{
	width: 100%;
    background-color: #006aa8 !important;
    color: white !important;
}
</style>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color: white !important;padding-left: 18px;">Vastroask</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
            </nav>
            <!-- Navigation -->
			<!---menu------>
			<div id="" class="row" style="margin: 0 !important; padding: 6px 0 9px 0; border-bottom: 1px solid #dddddd;">
			   <div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="width: 19.7% !important">
			  
			   <button class="btn btn-sm btn-outline-secondary custom-btn" type="button" data-toggle="modal" data-target="#modalAstrologyInPhone">Astrology on phone</button>
			   </div>
			   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"  style="width: 19.7% !important">
			   <button class="btn btn-sm btn-outline-secondary custom-btn" type="button" data-toggle="modal" data-target="#modalAstrologyInPhone">Personal meet</button>
			   </div>
			   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="width: 19.7% !important">
			   <button class="btn btn-sm btn-outline-secondary custom-btn" type="button" data-toggle="modal" data-target="#modalAstrologyInPhone">Modes of payment</button>
			   </div>
			   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="width: 19.7% !important">
			   <button class="btn btn-sm btn-outline-secondary custom-btn" type="button" data-toggle="modal" data-target="#modalAstrologyInPhone">Details required</button>
			   </div>
			   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="width: 19.7% !important">
			   <button class="btn btn-sm btn-outline-secondary custom-btn" type="button"data-toggle="modal" data-target="#modalAstrologyInPhone">Term & condition</button>
			   </div>
			</div>
  <!--form class="form-inline" style="width:100%">
    <button class="btn btn-sm btn-outline-secondary" type="button" style="width:19.7%">Astrology on phone</button>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="width:19.7%">Personal meet</button>
	<button class="btn btn-sm btn-outline-secondary" type="button" style="width:19.7%">Modes of payment</button>
	<button class="btn btn-sm btn-outline-secondary" type="button" style="width:19.7%">Details required</button>
	<button class="btn btn-sm btn-outline-secondary" type="button" style="width:19.7%">Term & condition</button>
  </form-->


			<!---menu------>

            <!--Content -->
            <div id="container">
                <div id="row1" class="row ml-mr-0">
                    <div class="col-lg-2 col-md-2 col-sm-2" style="padding: 0;">
                        <div class="sidebar-nav navbar-collapse" style="padding: 0;">
                             <ul class="nav" id="side-menu">
                                <li style="background: #f5f5f5;height: 42px;color: #006aa8 !important;padding: 0;border: 1px solid #ddd;border-right: 0;border-top: 0;border-left: 0;">
                                    <a href="#" style="color: black !important;font: bolder;font-size: 20px !important;margin: 0;">Zodiac</a>
								</li>
								<li>
                                    <a href="aries.php" target="myFrame">Aries (Mar 21 -Apr 19)</a>
								</li>
                                <li>
                                    <a href="taurus.php" target="myFrame">Taurus (Apr 20-may 20)</a>
                                </li>
                                <li>
                                    <a href="gemini.php" target="myFrame">Gemini (May 21-jun 20)</a>
                                </li>
                                <li>
                                    <a href="cancer.php" target="myFrame">Cancer (Jun 21-Jul 22)</a>
                                </li>
                                <li>
                                    <a href="leo.php" target="myFrame">Leo (Jul 23-Aug 22)</a>
                                </li>
                                <li>
                                    <a href="virgo.php" target="myFrame">Virgo (Aug 23-Sep 22)</a>
                                </li>
                                <li>
                                    <a href="libra.php" target="myFrame">Libra (Sep 23-Oct 22)</a>
                                </li>
                                <li>
                                    <a href="scorpio.php" target="myFrame">Scorpio (Oct 23-Nov 21)</a>
                                </li>
                                <li>
                                    <a href="sagittarius.php" target="myFrame">Sagittarius (Nov 22-Dec 21)</a>
                                </li>
                                <li>
                                    <a href="capricon.php" target="myFrame">Capricorn (Dec 22-Jan 19)</a>
                                </li>
                                <li>
                                    <a href="aquarius.php" target="myFrame">Aquarius (Jan 20-Feb 18)</a>
                                </li>
                                <li>
                                    <a href="pisces.php" target="myFrame">Pisces (Feb 19-Mar 20)</a>
                                </li>
                            </ul>
                        
						 </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-8" id="show-daily-horoscope" style="padding: 0">
                      <iframe src="aries.php" name="myFrame" col="12" rows="6" scrolling="no" style="width: 100%;height:514px;border: none;"></iframe>
    			    </div>
                    <div class="col-lg-3 col-md-2 col-sm-2" id="show-about-us" style="padding: 0px; padding-left: 2px;">
                        <div class="panel panel-default" style="height: 510px;border-radius: 0;border-top: none;">                        
                                <!-- Tab panes -->
								<div class="panel-heading" style="text-align:center;">
							<h6 style="text-align: center !important; padding: 0; margin: 0 !important; font-weight: bold;font-size: 19px !important;">Services</h6>
                               <div class="col-md-12 my-5" style="margin-top:12px;padding: 0;">
							   <div>
							   <i class="fas fa-rings-wedding"></i>
							   </div>
                                        <h4>Marriage(All problem & solution)</h4>
										<h4>Profession (Job & Business)</h4>
										<h4>Financial</h4>
										<h4>Health</h4>
										<h4>Education</h4>
										<h4>Career</h4>
										<h4>Etc(Problems Related to life)</h4>
										
                                        </div>
                                        <!----div class="col-md-12 my-5"style="margin-top:48px;">
                                            <div class="card border-0">
                                                <div class="card-body text-center">
                                                    <a class="modalbutton col-lg-12 col-md-12 col-sm-12 col-xs-12" data-toggle="modal" data-target="#modalPersonMeet">Personal meet</a>
												</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-5"style="margin-top:48px;">
                                            <div class="card border-0">
                                                <div class="card-body text-center">
												     <a class="modalbutton col-lg-12 col-md-12 col-sm-12 col-xs-12" data-toggle="modal" data-target="#modalPaymentMode">Mode's of Payment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-5"style="margin-top:48px;">
                                            <div class="card border-0">
                                                <div class="card-body text-center">
                                                      <a class="modalbutton col-lg-12 col-md-12 col-sm-12 col-xs-12" data-toggle="modal" data-target="#modalReqDetailsForPrediction">Details required for a prediction</a>
		                                        </div>
                                            </div>
                                        </div>
                                                                       
                                       <div class="col-md-12 my-5"style="margin-top:48px;">
                                            <div class="card border-0">
                                                <div class="card-body text-center">
                                                     <a class="modalbutton col-lg-12 col-md-12 col-sm-12 col-xs-12" data-toggle="modal" data-target="#modalTandC">Term & Condition</a>
												</div>
                                            </div>
                                        </div---->
                                    
								   </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
                <div id="row2" class="row ml-mr-0" style="background: #006aa8!important;display:none !important">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Horoscope
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#Daily" data-toggle="tab">Daily</a>
                                    </li>
                                    <li><a href="#Weekly" data-toggle="tab">Weekly</a>
                                    </li>
                                    <li><a href="#Monthly" data-toggle="tab">Monthly</a>
                                    </li>
                                    <li><a href="#Yearly" data-toggle="tab">Yearly</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content" style="height: 286px; overflow: hidden; overflow-y: auto;padding: 10px 0 0 0;">
                                    <div class="tab-pane fade in active" id="Daily">
                                        <h4>Aries:</h4>
                                        <p class="lead">Today you may find that you have a lot to do but not enough time on your hands to do it. However, there is no need to panic; just prioritize your work and this will calm you down immediately. You may find that your seniors are supportive today, so use their assistance to sort out all your long-pending problems. Seek guidance from your seniors to find solutions for professional problems.</p>

                                    </div>
                                    <div class="tab-pane fade" id="Weekly">
                                        <h4>Aries:</h4>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="Monthly">
                                        <h4>Aries:</h4>
                                        <p class="lead">Today you may find that you have a lot to do but not enough time on your hands to do it. However, there is no need to panic; just prioritize your work and this will calm you down immediately. You may find that your seniors are supportive today, so use their assistance to sort out all your long-pending problems. Seek guidance from your seniors to find solutions for professional problems.</p>

                                    </div>
                                    <div class="tab-pane fade" id="Yearly">
                                        <h4>Aries:</h4>
                                        <p class="lead">Today you may find that you have a lot to do but not enough time on your hands to do it. However, there is no need to panic; just prioritize your work and this will calm you down immediately. You may find that your seniors are supportive today, so use their assistance to sort out all your long-pending problems. Seek guidance from your seniors to find solutions for professional problems.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default" style="height: 400px;">
                            <div class="panel-body" style="height: 398px;">
                                <!--image-->
                                <img src="Admin/template_setup/Resources/images/Image7.jpg" style="width: 100%; height: 100%" />
                                <!--image-->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="row3" class="row ml-mr-0">
                    <!--Contact us -->
                    <section id="contact">
                        <div class="container">
                            <!--h1 class="text-center text-uppercase" style="color: #006aa8 !important;">Reach us</h1-->
							<h1 class="text-center text-uppercase" style="">Reach us</h1>
							<span style="background:white !important" class="section-line"></span>
                            <div class="row" style="padding: 30px 0 !important;">
                                <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                    <div class="card border-0">
                                        <div class="card-body text-center">
                                            <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                                            <h4 class="text-uppercase mb-5" style="text-align:center !important;">Call us</h4>
                                            <p style="text-align: center !important;">+91 9760242360</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                    <div class="card border-0">
                                        <div class="card-body text-center">
                                            <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                            <h4 class="text-uppercase mb-5" style="text-align:center !important;">Person meet</h4>
                                            <address>  ISBT , Dehradun ,248001 </address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                    <div class="card border-0">
                                        <div class="card-body text-center">
                                            <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                            <h4 class="text-uppercase mb-5" style="text-align:center !important;">Office location</h4>
                                            <address> ISBT , Dehradun ,248001 </address>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                                    <div class="card border-0">
                                        <div class="card-body text-center">
                                            <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                                            <h4 class="text-uppercase mb-5" style="text-align:center !important;">Email</h4>
                                            <p style="text-align:center !important;">phoartyabhishek@gmail.com</p>
                                        </div>
                                    </div>
									
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Contact us -->
                </div>
            </div>
            <!--Content -->
			
        
            <!-- footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <p style="text-align: center !important; padding: 10px !important">Copyright © 2019 <a href="#" style="color: white !important;">Vasrtoask.com</a></p>
                </div>
            </footer>
            <!-- footer -->
			
														<!-- Modal Astrology In Phone -->
														<div class="modal fade" id="modalAstrologyInPhone" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
														  <div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
															  <div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle"></h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																  <span aria-hidden="true">&times;</span>
																</button>
															  </div>
															  <div class="modal-body">
																 Marriage (All problem)
																 Professional ()
																 Financial
																 Health
																 Education Problems
																 Loan
																 Career
																Nation and Internation Client
															  </div>
															</div>
														  </div>
														</div>
														<!-- Modal -->	
			
														<!-- Modal Persont Meet-->
														<div class="modal fade" id="modalPersonMeet" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
															  <div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
															  <div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle"></h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																  <span aria-hidden="true">&times;</span>
																</button>
															  </div>
															  <div class="modal-body">
																 coming soon !!
															  </div>
															</div>
														  </div>
													</div>
														<!-- Modal -->
														
														<!-- Modal Payment Mode -->
														<div class="modal fade" id="modalPaymentMode" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
																  <div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
															  <div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle"></h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																  <span aria-hidden="true">&times;</span>
																</button>
															  </div>
															  <div class="modal-body">
																 coming soon !!
															  </div>
															</div>
														  </div>
												
														</div>
														<!-- Modal -->	

														<!-- Modal Required Detials for Pridiction -->
														<div class="modal fade" id="modalReqDetailsForPrediction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
																  <div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
															  <div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle"></h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																  <span aria-hidden="true">&times;</span>
																</button>
															  </div>
															  <div class="modal-body">
																 coming soon !!
															  </div>
															</div>
														  </div>
												
														</div>
														<!-- Modal -->

														<!-- Modal T & C -->
														<div class="modal fade" id="modalTandC" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
																  <div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
															  <div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle"></h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																  <span aria-hidden="true">&times;</span>
																</button>
															  </div>
															  <div class="modal-body">
																 coming soon !!
															  </div>
															</div>
														  </div>
												
														</div>
														<!-- Modal -->														
														
														
														
        </div>
<?php include('footer.php');?>



