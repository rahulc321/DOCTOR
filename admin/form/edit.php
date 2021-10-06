<?php
ob_start();
 require_once('../header.php');

if(isset($_POST['submit'])){

	 
	 // Update data
	$sql = "UPDATE form SET title='".$_POST['title']."',description='".$_POST['description']."',created_at='".date('Y-m-d H:i:s')."' , catId = '".$_POST['catId']."' WHERE id=".$_GET['id'];

	if ($conn->query($sql) === TRUE) {
	header("location:list.php?success=4");
	} else {
	header("location:list.php?success=2");
	} 

	}

	// Edit data from blog
	$sql1 = "SELECT * FROM form where id=".$_GET['id'];
	$result1 = $conn->query($sql1); 
	$row = $result1->fetch_assoc();

	//echo '<pre>';print_r($row['title']);die;


?>


  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
             
              <div class="card">
                
                <div class="card-body">
					<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
					<label for="text">Title</label>
					<input type="text" class="form-control" id="email" placeholder="Enter text" name="title" required="" value="<?=$row['title']?>">
					</div>

					<div class="form-group">
					<label for="text">Description</label>
					<textarea cols="80" rows="10" id="sample-editor" name="description"><?=$row['description']?></textarea>
					</div>

				 

					<div class="form-group">
					<label for="text">Category Name</label>
					<select name="catId" class="form-control">

						<?php 

						$sql = "SELECT * FROM form_cat";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
            			$i=1;
						while($row4 = $result->fetch_assoc()) {	?>
						<option value="<?=$row4['id']?>" <?php if($row4['id']==$row['catId']){ echo 'selected'; }?>><?=$row4['catName']?></option>
						<?php }

						 } ?>
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
</style>
<?php require_once('../footer.php');?>

 <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
  

    CKEDITOR.replace('sample-editor');
  </script>