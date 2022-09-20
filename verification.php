<?php include "master.php"?>
<?php include "header.php"?>

<div class="container vh-100">
    <div class="row border mt-3">
        <div class="col-md-12 p-2 d-flex">
            <div class="image-preview">
                <img src="###" alt="Preview Image" id="preview-img" class="img-fluid">
            </div>
            <div class="image-btn p-3">
                <form action="#" method="post">
                    <label for="id-image">Upload ID Card</label>
                    <input type="file" name="image" id="id-image" hidden><br>
                    <div class="mt-2" id="image-details">File details will be shown here.</div>

                    <input type="submit" Value="Save" class="btn btn-secondary mt-3">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>