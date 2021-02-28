<?php

$link = mysqli_connect('localhost','root','','medistore');

$limit = 6;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$result = mysqli_query($link,"select * from admin limit $start,$limit");
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

$result1 = mysqli_query($link, "select count(id) as id from admin");
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
                    <h1 class="m-0 text-dark">Admin List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Admin List</li>
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
                    <a href="add-admin.php">
                        <button type="submit" class="btn btn-primary">Add New Admin</button>
                    </a>
                </div>

                <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $row): ?>
                            <tr>
                                <td><?= $row['name'] ?></td>
                                <td><?=$row['email']?></td>
                                <td><?=$row['number'] ?></td>
                                <td>
                                    <a href="admin-reset-password.php?id=<?= $row['id']?>"><button class="btn btn-primary">Reset Password</button></a>
                                    <a href="delete.php?id=<?= $row['id']?>"><button class="btn btn-danger delete" onclick="confirmDelete()" type="submit">Delete</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>

                    <!--Pagination Starts-->
                    <div class="pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="admin-list.php?page=<?= $previous; ?>">Previous</a></li>
                                <?php for($i = 1; $i <= $pages; $i++):?>
                                    <li class="page-item"><a class="page-link" href="admin-list.php?page=<?= $i; ?>"><?=$i?></a></li>
                                <?php endfor; ?>
                                <li class="page-item"><a class="page-link" href="admin-list.php?page=<?= $next; ?>">Next</a></li>
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
