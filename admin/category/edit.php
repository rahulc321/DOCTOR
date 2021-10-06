<?php
ob_start();
 require_once('../header.php');

if(isset($_POST['submit'])){


	 // Update data
	$sql = "UPDATE category SET catName='".$_POST['catName']."',status='".$_POST['status']."' WHERE id=".$_GET['id'];

	if ($conn->query($sql) === TRUE) {
		header("location:list.php?success=4");
	} else {
		header("location:list.php?success=2");
	} 



	}

	// Edit data from blog
	$sql1 = "SELECT * FROM category where id=".$_GET['id'];
	$result1 = $conn->query($sql1); 
	$row = $result1->fetch_assoc();

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
					<input type="text" class="form-control" id="email" placeholder="Enter text" name="catName" required="" value="<?=$row['catName']?>">
					</div>

					 

					<div class="form-group">
					<label for="text">Status</label>
					<select name="status" class="form-control">
						<option value="1" <?php if($row['status']==1){ echo 'selected'; } ?>>Active</option>
						<option value="0" <?php if($row['status']==0){ echo 'selected'; } ?>>In-Active</option>
					</select>
					</div>
					 
					<button type="submit" name="submit" class="btn btn-primary">Update</button>
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
a.btn.btn-danger {
    margin-left: -79px;
    margin-top: -106px;
    width: 67px;
}
</style>
 
<?php require_once('../footer.php');?>

 