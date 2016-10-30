<?php
include "header.php";
?>


<html>
<form class="col-xs-2" method="post" action="add_posts.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="posttitle">Title:</label>
    <input type="text" name="postTitle" placeholder="Post Title" class="form-control">
        <br>
        <label for="postdescription">Description:</label>
        <input type="text" name="postDesc" placeholder="Post Description" class="form-control">
        <br>
        <label for="postcontent">Content:</label>
        <input type="text" name="postCont" placeholder="Post Content" class="form-control">
        <br>
    <input type="file" name="image">
        <hr>
    <input type="submit">
</form>

</html>

