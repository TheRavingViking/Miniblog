<?php
include "header.php";

$con = new Connection();
$con = $con->connect();
$sql = "SELECT postID, postDesc, postTitle, postDate FROM posts ORDER BY postDate DESC";

$result = mysqli_query($con, $sql);


?>


<html>
<form method="post" action="delete.php">
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Delete</th>
        <th>more info</th>
        <th>Edit Post</th>
        <th>Add/Edit photo</th>
    </tr>

    <?php foreach ($result as $rows) : ?>
        <div
        <tr>
            <td> <?php echo $rows['postTitle']; ?></td>
            <td> <?php echo $rows['postDesc']; ?></td>
            <td> <?php echo $rows['postDate']; ?></td>
            <td> <input type="checkbox" name="<?php echo $rows['postID']; ?>"></td>
            <td> <a href="viewpost.php?id=<?php echo $rows['postID'];?>" >Read More</a> </td>
            <td> <a href="edit_post_form.php?id=<?php echo $rows['postID'];?>" >Edit Post</a> </td>
            <td> <a href="edit_photo_form.php?id=<?php echo $rows['postID'];?>" >Add/Edit Photo</a> </td>
        </tr>
    <?php endforeach; ?>

</table>
    <button>submit</button>
</form>

<html>
<body>
<div id="pagination">
    <div id="pagiCount">
        <?php
        if(isset($pages))
        {
            if($pages > 1)
            {    if($cur_page > $num_links)     // for taking to page 1 //
            {   $dir = "first";
                echo '<span id="prev"> <a href="'.$_SERVER['PHP_SELF'].'?page='.(1).'">'.$dir.'</a> </span>';
            }
                if($cur_page > 1)
                {
                    $dir = "prev";
                    echo '<span id="prev"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page-1).'">'.$dir.'</a> </span>';
                }

                for($x=$start ; $x<=$end ;$x++)
                {

                    echo ($x == $cur_page) ? '<strong>'.$x.'</strong> ':'<a href="'.$_SERVER['PHP_SELF'].'?page='.$x.'">'.$x.'</a> ';
                }
                if($cur_page < $pages )
                {   $dir = "next";
                    echo '<span id="next"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page+1).'">'.$dir.'</a> </span>';
                }
                if($cur_page < ($pages-$num_links) )
                {   $dir = "last";

                    echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$pages.'">'.$dir.'</a> ';
                }
            }
        }
        ?>
    </div>
</div>

</body>
</html>

