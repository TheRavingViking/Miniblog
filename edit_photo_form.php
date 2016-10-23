<?php
$id = $_GET['id'];
?>


<html>
<h1> Upload new photo </h1>
<form method="post" action="edit_photo.php" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="hidden" name="postID" value="<?php echo $id; ?>">
    <input type="submit">
</form>

</html>

