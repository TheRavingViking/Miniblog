<?php
include "header.php";
$id = $_GET['id'];

$con = new Connection();
$con = $con->connect();
$sql = "SELECT  postTitle, postDesc, postCont, image FROM posts where PostID = '$id' ";

$result = mysqli_query($con, $sql);
$data = $result->fetch_array(MYSQLI_ASSOC);

$title = $data['postTitle'];
$desc = $data['postDesc'];
$cont = $data['postCont'];
$image = '<img src="data:image;base64,' . base64_encode($data['image']) . '" class="img-thumbnail" width="720"/>';

?>


<html>
<form class="col-xs-2" method="post" action="edit_post.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="posttitle">Title:</label>
        <input type="text" name="postTitle" placeholder="Post Title" class="form-control" value="<?php echo $title; ?>">
        <br>
        <label for="postdescription">Description:</label>
        <input type="text" name="postDesc" placeholder="Post Description" class="form-control" value="<?php echo $desc; ?>">
        <br>
        <label for="postcontent">Content:</label>
        <input type="text" name="postCont" placeholder="Post Content" class="form-control" value="<?php echo $cont; ?>">
        <br>
        <label for="image">Current Image:</label>
        <?php echo $image ?>
        <input type="file" name="image" value="<?php $image; ?>">
        <hr>
    <input type="hidden" name="postID" value="<?php echo $id; ?>">
    <input type="submit">
</form>

</html>

