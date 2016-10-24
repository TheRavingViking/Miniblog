<?php
require_once "header.php";
$con = new Connection();
$con = $con->connect();
//$sql = "SELECT postID, postDesc, postTitle, postDate FROM posts ORDER BY postDate DESC";
$query = ("SELECT * FROM posts"); //Counting total number of rows in the table 'data',

$result = mysqli_query($con, $query);

$total_rows = mysqli_num_rows($result);

$base_url = 'overview.php';    //Provide location of you index file
$per_page = 10;                           //number of results to shown per page
$num_links = 8;                           // how many links you want to show
$cur_page = 1;                           // set default current page to 1

if(isset($_GET['page']))
{
    $cur_page = $_GET['page'];
    $cur_page = ($cur_page < 1)? 1 : $cur_page;            //if page no. in url is less then 1 or -ve
}

$offset = ($cur_page-1)*$per_page;                //setting offset

$pages = ceil($total_rows/$per_page);              // no of page to be created

$start = (($cur_page - $num_links) > 0) ? ($cur_page - ($num_links - 1)) : 1;
$end   = (($cur_page + $num_links) < $pages) ? ($cur_page + $num_links) : $pages;

$sql = ("SELECT * FROM posts LIMIT ".$per_page." OFFSET ".$offset);

$result = mysqli_query($con, $sql);
?>

