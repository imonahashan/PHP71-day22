<?php
require_once "vendor/autoload.php";
use App\classes\Blog;
$massage="";
if(isset($_POST['btn'])){
$massage=Blog::saveBlogInfo($_POST);
}

?>

<html>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>

    <style>
        .viewInfo a{color:white;text-decoration: none;}
    </style>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <div class="col-md-4 m-auto viewInfo">
            <button class="btn btn-success btn-block"><a href="view.php">View Students</a></button>
        </div>
        <hr/>
        <hr/>
        <div class="col-md-4 m-auto">
            <h1>Add Information</h1>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="blog_title" class="form-control" placeholder="Blog Title">
                </div>
                <div class="form-group">
                    <input type="text" name="author_name" class="form-control" placeholder="Author Name">
                </div>



                <div class="form-group">
                    <textarea name="address" class="form-control" placeholder="Present Address"></textarea>
                </div>

                <div class="form-group">
                    <input type="radio" name="status" value="1" Published>Published
                    <input type="radio" name="status" value="0" Unpublished>Unpublished
                </div>

                <button type="submit" name="btn" class="btn btn-success btn-block">Save</button>

            </form>
            <hr/>
            <h3 style="color:green;"><?php echo $massage; ?></h3>
            <hr/>
        </div>
        <hr>
        <hr>
    </div>
</div>
</body>
</html>
