<div class="fileUpload">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Upload Medicines from Excel
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="database/file-upload-action.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input name="uploadfile" id="file" type="file" class="form-control-file" >
                        </div>
                        <div class="form-group">
                            <button id="closeBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="uploadBtn" type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">


                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var closeBtn = document.getElementById('closeBtn');
    closeBtn.addEventListener('click',function () {
        document.getElementById("file").value = "";
    });
    var uploadBtn = document.getElementById('uploadBtn');

    uploadBtn.addEventListener('click',function (e) {
        var hasFile = document.getElementById("file").value;
        if (hasFile == ""){
            alert('No file Chosen!!');
            uploadBtn.setAttribute('type','button');
        }else {
            uploadBtn.setAttribute('type','submit');
        }
    });
</script>
