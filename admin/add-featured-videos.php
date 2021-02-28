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
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add featured videos page</li>
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
                    <form action="database/add-featured-videos.php" method="post">
                        <div class="form-group">
                            <label for="heading">Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter video heading">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail-img-link">Video Thumbnail Image</label>
                            <input type="text" class="form-control" id="thumbnail-img-link" name="thumbnail_link" placeholder="Video thumbnail link">
                        </div>
                        <div class="form-group">
                            <label for="video-link">Video Link</label>
                            <input type="text" class="form-control" id="video-link" name="video-link" placeholder="Video link">
                        </div>

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
