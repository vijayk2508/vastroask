

<?php

function confirmQuery($result) {
	global $connection;

	if(!$result ) {
		die("QUERY FAILED ." . mysqli_error($connection));
	}
} 


function Save() {
	global $connection;
if(isset($_POST['save'])) {


    $horoscope_id = str_replace("'","&#39;",$_POST['id']);
    $horoscope_zodaic = str_replace("'","&#39;",$_POST['drpZodaicSign']);
	$horoscope_Basis = str_replace("'","&#39;",$_POST['drpBasis']);
	$horoscope_PublishDate =  date("Y-m-d",strtotime($_POST['txtPublishDate']));
    $horoscope_PublishStatus = str_replace("'","&#39;",$_POST['drpPublishStatus']);
	$horoscope_Content = str_replace("'","&#39;",$_POST['txtContent']);
	$horoscope_CreatedDateTime = date('Y-m-d');
	$horoscope_LastUpdatedDateTime = date('Y-m-d');
    $horoscope_RecordStatus = 1;
    $id=0;
	
	$query = "SELECT * FROM vastroask_horoscope where horoscope_PublishDate='{$horoscope_PublishDate}' and horoscope_zodaic='{$horoscope_zodaic}'";
	$InsertQuery="INSERT INTO vastroask_horoscope(horoscope_zodaic,horoscope_Basis,horoscope_PublishDate,horoscope_PublishStatus,horoscope_Content,horoscope_CreatedDateTime,horoscope_RecordStatus) Values('{$horoscope_zodaic}','{$horoscope_Basis}','{$horoscope_PublishDate}','{$horoscope_PublishStatus}','{$horoscope_Content}','{$horoscope_CreatedDateTime}',{$horoscope_RecordStatus})";
			
	$UpdateQuery="UPDATE vastroask_horoscope SET horoscope_zodaic='{$horoscope_zodaic}',horoscope_Basis='{$horoscope_Basis}',horoscope_PublishDate='{$horoscope_PublishDate}',horoscope_PublishStatus='{$horoscope_PublishStatus}',horoscope_Content='{$horoscope_Content}',horoscope_LastUpdatedDateTime= '{$horoscope_LastUpdatedDateTime}' where horoscope_id='{$horoscope_id}'";
			
			
	$select_horoscope = mysqli_query($connection,$query); 
    if ($row = mysqli_fetch_assoc($select_horoscope))
    {
		if($horoscope_id > 0)
			    {
				    $execute_query = mysqli_query($connection,$UpdateQuery);
			        echo  $execute_query === TRUE ? '<script> window.setTimeout(function(){ window.location="manage_horoscope.php"; }, 100);</script>' : "<p class='bg-danger'>Error</p>";	
				}else{
					echo "<p class='bg-danger' style='padding:18px'>Horoscope already created on Zodaic <b>.'{$horoscope_zodaic}'</b> for '{$horoscope_PublishDate}'. Please check this {$row['horoscope_id']}.</p>";
				}
		 	}else{
				 $execute_query = mysqli_query($connection,$InsertQuery);
				 echo  $execute_query === TRUE ? '<script> window.setTimeout(function(){ window.location="manage_horoscope.php"; }, 100);</script>' : "<p class='bg-danger'>Error</p>";
			}
		}
     
	//header("Location:vastroask/Admin/manage_horoscope.php"); not working yet
    $connection->close();

}

function GetHoroscopeByZodaic($strZodaic) {
    
	global $connection;
 
	$today = date("Y-m-d");
	$query = "SELECT * FROM vastroask_horoscope where horoscope_PublishStatus='Publish' and horoscope_PublishDate='{$today}' and horoscope_zodaic='{$strZodaic}'";
	$select_horoscope = mysqli_query($connection,$query); 
    if ($row = mysqli_fetch_assoc($select_horoscope))
    {
    	$Id = $row['horoscope_id'];
        $Zodaic = $row['horoscope_zodaic'];
		$Basis= $row['horoscope_Basis'];
        $PublishDate = $row['horoscope_PublishDate'];
		$PublishStatus = $row['horoscope_PublishStatus'];
		$Content = $row['horoscope_Content'];
    
		echo $Content;
	 }else{
		 echo "Coming Soon !!";
		 
	 }
}

function GetAllHoroscope() {
    
	global $connection;
	$query = "SELECT * FROM vastroask_horoscope ORDER BY horoscope_id DESC";
	
    $select_horoscope = mysqli_query($connection,$query); 

    while ($row = mysqli_fetch_assoc($select_horoscope))
    {
    	$Id = $row['horoscope_id'];
        $Zodaic = $row['horoscope_zodaic'];
		$Basis= $row['horoscope_Basis'];
        $PublishDate = date("d-m-Y", strtotime($row['horoscope_PublishDate']));
		$PublishStatus = $row['horoscope_PublishStatus'];
		$Content = substr($row['horoscope_Content'],0,40);
			   
        echo "<tr>";
        echo "<td>{$Id}</td>";
        echo "<td>{$Zodaic}</td>";
		echo "<td>{$Basis}</td>";
		echo "<td>{$PublishDate}</td>";
		echo "<td>{$PublishStatus}</td>";
		echo "<td>{$Content}... </td>";
        echo "<td><a class='btn btn-success' href='horoscope.php?id={$Id}'>Edit</a>  <a class='btn btn-danger' href='manage_horoscope.php?id={$Id}'>Delete</a></td>";
        echo "</tr>";
    }
}


function Delete(){
	global $connection;
	if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			$query = "DELETE FROM vastroask_horoscope WHERE horoscope_id = {$id} ";
            $delete_query = mysqli_query($connection,$query);
            //header("Location: manage_horoscope.php");
			echo '<script> window.location="manage_horoscope.php";</script>';
        }
}

function GetHoroscopeByID()
{
    global $connection;
	
	if(isset($_GET['id'])){
		
		$id = $_GET['id'];
	    //echo $id;
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
		 header("location: manage_horoscope.php");
	}
}


function Login()
{
    global $connection;

  
   ob_start();
   session_start();
if(isset($_SESSION['username']) & !empty($_SESSION['username']))
{
	header('location:manage_horoscope.php' );
}
  
   //  if($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST) & !empty($_POST)) 
		   {     
	
     $myusername = $_POST['username'];//mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = $_POST['password'];//mysqli_real_escape_string($db,$_POST['password']); 
      
      $query = "SELECT * FROM vastroask_admin WHERE admin_username = '$myusername' and admin_password = '$mypassword'";
      
	  $select_admin = mysqli_query($connection,$query); 
      $row = mysqli_fetch_array($select_admin,MYSQLI_ASSOC);
	  $count = mysqli_num_rows($select_admin);       
	  if($count == 1) {
    		$_SESSION['username']= $myusername;
			header("location:manage_horoscope.php");
		}else {
           echo "<p class='bg-success'>Not Success.</p>";
      }
   }

 
 
 
}


function Logout()
{
session_start();
header("Location:../login.php");
session_destroy(); 
}

?>
