<?php
include "header.php";


//user input
$page = isset($_GET['page']) ? (int)$_GET['page'] :1;
$perpage = isset($_GET['per-page']) && $_GET['per-page'] ? (int)$_GET['per-page'] : 5;

//postitioning
$start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

//query
$con = new Connection();
$con = $con->connect();
$sql = "SELECT postID, postDesc, postTitle, postDate FROM posts limit $start, $perpage";
$result = mysqli_query($con, $sql);
$fetch = $result->fetch_assoc();

// pages
$sql_total = "SELECT * FROM posts";
$result_total = mysqli_query($con, $sql_total);
$fetch_total = $result_total->fetch_all();
$total = count($fetch_total);
$pages = ceil ($total / $perpage)

?>



<html>
<form method="post" action="delete.php">
<table class="table table-hover">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>More info</th>
        <th>Edit Post</th>
        <th>Delete</th>
    </tr>
</thead>

    <tbody>
    <?php foreach ($result as $rows) : ?>
        <tr>
            <td> <?php echo $rows['postTitle']; ?></td>
            <td> <?php echo $rows['postDesc']; ?></td>
            <td> <?php echo $rows['postDate']; ?></td>
            <td> <a href="viewpost.php?id=<?php echo $rows['postID'];?>" >Read More</a> </td>
            <td> <a href="edit_post_form.php?id=<?php echo $rows['postID'];?>" >Edit Post</a> </td>
            <td> <a href="delete.php?id=<?php echo $rows['postID'];?>" >Delete</a> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</form>

<ul class = "pagination">

    <?php for ($x = 1; $x <= $pages; $x++): ?>
        <li><a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage?>"><?php echo $x?></a></li>
    <?php endfor; ?>

</ul>

<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Show items
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="overview.php?page=1&per-page=2">2</a></li>
        <li><a href="overview.php?page=1&per-page=5">5</a></li>
        <li><a href="overview.php?page=1&per-page=10">10</a></li>
    </ul>
</div>