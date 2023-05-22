<?php
$servername='localhost';
$username='root';
$password='Products@8754d';
$dbname = "app_live_v1";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	die('Sorry, Could not Connect My Sql:' .mysql_error());
}
$query = mysqli_query($conn,"SELECT AVG(simple_rating_system) as AVGRATE from product_reviews where status=1");
$row = mysqli_fetch_array($query);
$AVGRATE=$row['AVGRATE'];
$query = mysqli_query($conn,"SELECT count(simple_rating_system) as Total from product_reviews where status=1");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];
$query = mysqli_query($conn,"SELECT count(remark) as Totalreview from  product_reviews where status=1");
$row = mysqli_fetch_array($query);
$all_reviews=$row['Totalreview'];
$review = mysqli_query($conn,"SELECT remark,simple_rating_system,email from product_reviews where status=1 order by date_time desc limit 4 ");
$simple_rating_system = mysqli_query($conn,"SELECT count(*) as Total,simple_rating_system from product_reviews group by simple_rating_system order by simple_rating_system desc");
?>