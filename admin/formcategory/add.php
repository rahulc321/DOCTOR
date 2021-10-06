<?php
ob_start();
 require_once('../header.php');

if(isset($_POST['submit'])){

	//echo '<pre>';print_r($_FILES['file']['name']);die;
	

	 

	$sql = "INSERT INTO form_cat (catName,status)
	VALUES ('".$_POST['catName']."','".$_POST['status']."')";

	if ($conn->query($sql) === TRUE) {
	header("location:list.php?success=1");
	} else {
	header("location:list.php?success=2");
	}  
}

?>


  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
             
              <div class="card">
                
                <div class="card-body">
					<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
					<label for="text">Category Name</label>
					<input type="text" class="form-control" id="email" placeholder="Enter text" name="catName" required="">
					</div>

					<!-- <div class="form-group">
					<label for="text">Description</label>
					<textarea cols="80" rows="10" id="sample-editor" name="description"></textarea>
					</div> -->

					<div class="form-group">
					<label for="text">Status</label>
					<select name="status" class="form-control">
						<option value="1">Active</option>
						<option value="2">In-Active</option>
					</select>
					</div>
					 
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
<style type="text/css">
	.form-group input[type=file] {
    opacity: 7 !important;
    position: initial !important;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
} 
</style>
<?php require_once('../footer.php');?>

 <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
  

    CKEDITOR.replace('sample-editor');
  </script>