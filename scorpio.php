<?php include('header.php');?>
						 <div class="panel panel-default" style="height: 510px;border-radius: 0;border-top: none;">
                            <div class="panel-heading">
                            
				<h>Daily Horoscope  : Scorpio </h>  
				<span class="col-md-4 mb-3" style="float: right;">
				Date : <?php $today = date("d-m-Y"); echo $today; ?>
				</span>

                            </div>
							
                            <div class="panel-body" id="slider" style="text-align: justify;padding: 15px;height: 454px;overflow: hidden;overflow-y: auto;">
<img src="Admin/template_setup/Resources/Images/scorpio.png" alt="Image" height="150"width="150" style="float: left;padding: 0 12px 2px 0;" />
                            	
<?php 
include "Admin/template_setup/Includes/db.php"; 
include "Admin/template_setup/Includes/functions.php";

GetHoroscopeByZodaic('Scorpio');

?>

</p>
				             </div>
                        </div>
						<?php include('footer.php');?>