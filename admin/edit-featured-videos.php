<?php
include_once 'db-config.php';
$id = $_GET['id'];
$result = mysqli_query($link,"select * from featured_videos where id = $id");
$data = mysqli_fetch_assoc($result);
?>

<?php include_once "common/header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Featured Videos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit featured video</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="database/edit-featured-videos.php" method="post">
                        <div class="form-group">
                            <label for="heading">Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter video heading" value="<?=$data['heading']?>">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail-img-link">Video Thumbnail Image</label>
                            <input type="text" class="form-control" id="thumbnail-img-link" name="thumbnail_link" placeholder="Video thumbnail link" value="<?=$data['thumbnail_link']?>">
                        </div>
                        <div class="form-group">
                            <label for="video-link">Video Link</label>
                            <input type="text" class="form-control" id="video-link" name="video-link" placeholder="Video link" value="<?=$data['video_link']?>">
                        </div>

                        <input type="hidden" name="id" value="<?=$data['id']?>">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="featured-videos-list.php">
                            <button type="submit" class="btn btn-success">Back To List</button>
                        </a>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once "common/footer.php" ?>
