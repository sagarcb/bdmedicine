
<?php include_once "common/header.php"?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add New Medicine</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add Medicine</li>
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

                <div class="col-md-12" style="margin-bottom: 20px">
                    <?php include_once 'database/excel-upload.php'?>
                </div>


                <div class="col-md-12">
                    <form method="post" action="database/store-medicine.php">
                        <div class="form-group">
                            <label for="name">Medicine Name</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Medicine name...">
                        </div>
                        <div class="form-group">
                            <label for="generic-name">Generic name</label>
                            <input name="generic-name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Generic name...">
                        </div>
                        <div class="form-group">
                            <label for="unit-price">Unit Price</label>
                            <input name="unit-price" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Unit price...">
                        </div>
                        <div class="form-group">
                            <label for="pharmaceutical">Pharmaceutical Company</label>
                            <input name="pharmaceutical" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pharmaceutical company name...">
                        </div>
                        <div class="form-group">
                            <label for="pharmacology">Pharmacology</label>
                            <textarea name="pharmacology" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pharmacology"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="indication">Indication</label>
                            <textarea name="indication" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Indication"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dosage-administration">Dosage & Administration</label>
                            <textarea name="dosage-administration" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Dosage & Administration"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="contraindication">Contraindication</label>
                            <textarea name="contraindication" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Contraindications..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precaution">Precaution</label>
                            <textarea name="precaution" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Precautions..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="side-effect">Side Effects</label>
                            <textarea name="side-effect" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Side effects..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pregnancy-lactation">Pregnancy & Lactation</label>
                            <textarea name="pregnancy-lactation" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pregnancy & Lactation..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="drug-interaction">Drug Interaction</label>
                            <textarea name="drug-interaction" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Drug Interaction..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="overdose">Overdose</label>
                            <textarea name="overdose" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Overdose effects..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="storage">Storage</label>
                            <textarea name="storage" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Storage system..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="packing">Packing</label>
                            <textarea name="packing" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Packing size..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add to Database</button>
                            <input type="button" class="btn-success" value="Go back!" onclick="history.back()">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once "common/footer.php"?>
