<?php
include_once 'db-config.php';

$limit = 6;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$result = mysqli_query($link,"select * from featured_news limit $start,$limit");
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

$result1 = mysqli_query($link, "select count(id) as id from featured_news");
$custCount = mysqli_fetch_all($result1,MYSQLI_ASSOC);
$total = $custCount[0]['id'];
$pages = ceil($total / $limit);
$count = $pages;

$previous = $page - 1;
$next = $page + 1;
if($previous <1){
    $previous = 1;
}
if($next > $pages){
    $next = $pages;
}

?>

<?php include_once "common/header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Featured News List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Featured News List</li>
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
                    <a href="add-featured-news.php">
                        <button type="submit" class="btn btn-primary">Add Featured News</button>
                    </a>
                </div>

                <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Heading</th>
                            <th>Cover Image</th>
                            <th>Created At</th>
                            <th>Featured</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $row): ?>
                            <tr>
                                <td><?= $row['heading'] ?></td>
                                <td>
                                    <img width="100px" id="newsImg" src="resources/newsCoverImages/<?= $row['cover_image'] ?>" alt="cover image">
                                </td>
                                <td><?= date('d M Y',strtotime($row['date'])) ?></td>
                                <td>
                                    <div class="form-check">
                                        <input data-id="<?=$row['id']?>" class="isFeatured" type="checkbox" <?=$row['featured'] ? 'checked' : '' ?>>
                                    </div>
                                </td>
                                <td>
                                    <!--<button type="submit"><a href="edit-featured-news.php?id=<?/*=$row['id']*/?>">Edit</a></button>-->
                                    <a href="database/delete.php?newsId=<?= $row['id']?>"><button class="btn btn-danger delete" onclick="confirmDelete()" type="submit">Delete</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <script type="text/javascript">
                        $(function () {
                            $('.isFeatured').change(function() {
                                var status = $(this).prop('checked') == true ? 1 : 0;
                                var id = $(this).data('id');
                                $.ajax({
                                    type: "GET",
                                    dataType: "json",
                                    url: 'database/featuredUpdate.php',
                                    data: {newsStatus : status, newsId: id},
                                    success: function(data){
                                        console.log(data.success)
                                    },
                                    error: function () {
                                        alert("Failed to update");
                                    }
                                });
                            });

                        });
                    </script>
                    <!--Pagination Starts-->
                    <div class="pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="featured-news-list.php?page=<?= $previous; ?>">Previous</a></li>
                                <?php for($i = 1; $i <= $pages; $i++):?>
                                    <li class="page-item"><a class="page-link" href="featured-news-list.php?page=<?= $i; ?>"><?=$i?></a></li>
                                <?php endfor; ?>
                                <li class="page-item"><a class="page-link" href="featured-news-list.php?page=<?= $next; ?>">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--Pagination ends-->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    function confirmDelete() {
        var v = confirm('Are you sure want to delete this medicine information?');
        if (v == false){
            event.preventDefault();
        }
    }
</script>
<?php include_once "common/footer.php" ?>
