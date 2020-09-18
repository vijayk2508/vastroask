<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<?php

$id = 0;
$Zodaic = '';
$Basis='';
$PublishDate ='';
$PublishStatus = '';
$Content = '';

if(isset($_GET['id']) && is_numeric($_GET['id'])){
		
    $id = $_GET['id'];  /// Get query String value
	$query = "SELECT * FROM vastroask_horoscope WHERE horoscope_id = $id";
    $select_byID = mysqli_query($connection,$query); 
    if ($row = mysqli_fetch_assoc($select_byID))
    {
        $Id = $row['horoscope_id'];
        $Zodaic = $row['horoscope_zodaic'];
		$Basis= $row['horoscope_Basis'];
        $PublishDate = $row['horoscope_PublishDate'];
		$PublishStatus = $row['horoscope_PublishStatus'];
		$Content = $row['horoscope_Content'];
	 }
	}
	else{
		 //header("Location: manage_horoscope.php");
		 echo "<script>window.href='manage_horoscope.php';</script>";
	}

?>

<?php save();?>



<!-- content -->
<div class="row">
<br/>
<br/>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $id>0 ? "Edit" : "Add" ;?> Horoscope
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                  <form role="form" action="" method="post" enctype="multipart/form-data">
									<div class="form-group col-lg-3">
									<input type="hidden" name="id" value="<?php echo $id; ?>">
                            <label>Zodaic</label>
                            <select class="form-control" name="drpZodaicSign">
							    <option >Select Zodaic</option>
                                <option value="Aries" <?php if($Zodaic=='Aries') {echo "selected";}?>>Aries</option>
                                <option value="Taurus" <?php if($Zodaic=='Taurus') {echo "selected";}?>>Taurus</option>
                                <option value="Gemini" <?php if($Zodaic=='Gemini') {echo "selected";}?>>Gemini</option>
                                <option value="Cancer" <?php if($Zodaic=='Cancer') {echo "selected";}?>>Cancer</option>
                                <option value="Leo" <?php if($Zodaic=='Leo') {echo "selected";}?>>Leo</option>
                                <option value="Virgo" <?php if($Zodaic=='Virgo') {echo "selected";}?>>Virgo</option>
                                <option value="Libra" <?php if($Zodaic=='Libra') {echo "selected";}?>>Libra</option>
                                <option value="Scorpio" <?php if($Zodaic=='Scorpio') {echo "selected";}?>>Scorpio</option>
                                <option value="Sagittarius" <?php if($Zodaic=='Sagittarius') {echo "selected";}?>>Sagittarius</option>
                                <option value="Capricon" <?php if($Zodaic=='Capricon') {echo "selected";}?>>Capricon</option>
                                <option value="Aquarius" <?php if($Zodaic=='Aquarius') {echo "selected";}?>>Aquarius</option>
                                <option value="Pisces" <?php if($Zodaic=='Pisces') {echo "selected";}?>>Pisces</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label>
                                Basis</label>
                            <select class="form-control" name="drpBasis">
							<option value="Select">Select Basis</option>
                                <option value="Daily" <?php if($Basis=='Daily') {echo "selected";}?>>Daily</option>
                                <option value="Weekly" <?php if($Basis=='Weekly') {echo "selected";}?>>Weekly</option>
                                <option value="Monthly" <?php if($Basis=='Monthly') {echo "selected";}?>>Monthly</option>
                                <option value="Yearly" <?php if($Basis=='Yearly') {echo "selected";}?>>Yearly</option>
                            </select>
                        </div>
						<div class="form-group col-lg-3">
                                <label>Publish Status</label>
                                <select name="drpPublishStatus" class="form-control">
									<option value="Select">Select</option>
								   <option value="Publish"  <?php if($PublishStatus=='Publish') {echo "selected";}?>>Publish </option>
                                    <option value="Unpublish"  <?php if($PublishStatus=='Unpublish') {echo "selected";}?>>Unpublish</option>
                                </select>
                            </div>
						<div class="form-group col-lg-3">
                                <label>Publish Date</label>
   						<div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" name="txtPublishDate" type="text" readonly value="<?php echo $PublishDate;?>"/>
                       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                       </div>
                            </div>
					   
					   <div class="form-group col-lg-12">
                        <label>
                            Content</label>
                        <textarea name="txtContent" class="form-control" height="100">
						<?php echo $Content; ?>
						</textarea>
                    </div>
					                   <div class="form-group col-lg-12">
					<input class="btn btn-primary" type="submit" name="save" value="Save">
					</div>
                    		</div>
             		
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

<!-- content -->

<!-- TinyMCE -->
	
	<script type="text/javascript" src="Resources/js/autosize.js"></script>
	
	
	<script>        
	$(document).ready(function(){
		
	 //Datepicker
	  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
		minDate: 0,
dateFormat: 'yy-mm-dd'
  }).datepicker(new Date());
  
  /*
  
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
	 */
	 
     //tinymce
	 tinymce.init({
   selector: 'textarea',
   plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste tinycomments tinydrive tinymcespellchecker',
   toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter insertfile pageembed permanentpen',
   toolbar_drawer: 'floating',
   tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name'
    });
	 
	 //autosize
	 autosize(document.querySelectorAll('textarea'));
	});
	</script>
