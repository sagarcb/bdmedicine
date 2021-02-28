<?php include_once "common/header.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Featured News</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add featured news page</li>
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
                    <form action="database/add-featured-news.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="heading">Heading</label>
                            <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter news heading">
                        </div>
                        <div class="form-group">
                            <label for="cover-image">Select Cover Image</label>
                            <input type="file" name="cover-image" class="form-control-file" id="cover-image">
                        </div>
                        <div class="form-group">
                            <label for="news-description">News Description</label>
                            <textarea class="form-control" name="news-description" id="news-description" cols="30" rows="10" placeholder="News Description"></textarea>
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
