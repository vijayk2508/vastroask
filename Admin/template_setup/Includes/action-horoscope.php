<?php include "db.php"; ?>
<?php include "functions.php"; ?>


<? ob_start(); ?>
<?php 

if(isset($_POST['save'])) {

    $horoscope_zodaic = str_replace("'","&#39;",$_POST['drpZodaicSign']);
	$horoscope_Basis = str_replace("'","&#39;",$_POST['drpBasis']);
	$horoscope_PublishDate = date('d-m-y');//str_replace("'","&#39;",$_POST['txtPublishDate']);
	$horoscope_PublishStatus = str_replace("'","&#39;",$_POST['drpPublishStatus']);
	$horoscope_Content = str_replace("'","&#39;",$_POST['txtContent']);
	$horoscope_CreatedDateTime = date('d-m-y');
    $horoscope_RecordStatus = 1;

	//$query = "INSERT INTO posts (post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status) VALUES({$post_category_id},'{$post_title}','{$post_author}', now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}')";

    $query ="INSERT INTO vastroask_horoscope(horoscope_zodaic,horoscope_Basis,horoscope_PublishDate,horoscope_PublishStatus,horoscope_Content,horoscope_CreatedDateTime,horoscope_RecordStatus) Values('{$horoscope_zodaic}','{$horoscope_Basis}','{$horoscope_PublishDate}','{$horoscope_PublishStatus}','{$horoscope_Content}','{$horoscope_CreatedDateTime}',{$horoscope_RecordStatus})";
	$create_post_query = mysqli_query($connection, $query);
 	confirmQuery($create_post_query);
    
	echo "success";
	//$the_post_id = mysqli_insert_id($connection);
    header("Location: manage_horoscope.php");

 	 //echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php?source=add_post'>Add More Posts</a></p>";
}
/*
INSERT INTO `vastroask`.`vastroask_horoscope`
(`horoscope_id`,
`horoscope_zodaic`,
`horoscope_Basis`,
`horoscope_PublishDate`,
`horoscope_PublishStatus`,
`horoscope_Content`,
`horoscope_CreatedDateTime`,
`horoscope_CreatedBy`,
`horoscope_LastUpdatedDateTime`,
`horoscope_RecordStatus`)
VALUES
(<{horoscope_id: }>,
<{horoscope_zodaic: }>,
<{horoscope_Basis: }>,
<{horoscope_PublishDate: }>,
<{horoscope_PublishStatus: }>,
<{horoscope_Content: }>,
<{horoscope_CreatedDateTime: }>,
<{horoscope_CreatedBy: }>,
<{horoscope_LastUpdatedDateTime: }>,
<{horoscope_RecordStatus: }>);

*/

?>
<? ob_flush(); ?>


