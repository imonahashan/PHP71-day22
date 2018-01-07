<?php
require_once "vendor/autoload.php";
use App\classes\Blog;
$result = Blog::viewblogInfo();

?>

<html>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        .viewInfo a{color:white;text-decoration: none;}
    </style>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="col-md-4 m-auto viewInfo">
            <button class="btn btn-success btn-block"><a  href="add.php">Add New Student</a></button>
        </div>
        <table class="table">
            <h1 class="text-center font-weight-bold text-center">Blog Information</h1>
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Blog Title</th>
                <th scope="col">Author Name</th>
                <th scope="col">Blog Description</th>
                <th scope="col">Status</th>
                <th scope="col" colspan="2">Action</th>

            </tr>
            </thead>
            <?php while ($blog = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $blog['id']; ?></td>
                    <td><?php echo $blog['blog_title']; ?></td>
                    <td><?php echo $blog['author_name']; ?></td>
                    <td><?php echo $blog['blog_description']; ?></td>
                    <td><?php echo $blog['status']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $blog['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="?delete=true&id=<?php echo $blog['id']; ?>" onclick="return confirm('Are you sure to delete this??')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>

</div>
</body>
</html>

