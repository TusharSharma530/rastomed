<?php include 'config.php';
	$title = 'Create Banner';
if(!isset($_SESSION['username'])){
		echo "<script>window.location.href='{$path}manager'</script>";
	}
	
	if(isset($_POST['addRecord'])){
		$order = trim(mysqli_real_escape_string($con,$_POST['order']));
		$category_id = trim(mysqli_real_escape_string($con,$_POST['category_id']));
		$imagepath = '';
		$videopath = '';

		if(!empty($_FILES['img']['name'])){
			$imagepath = createImgWebp("img", "banner");
		}

		if(!empty($_FILES['video']['name'])){
			if(!isValidVideoUpload($_FILES['video'])){
				echo "<script>swal('Invalid Video', 'Only MP4, WebM, MOV, AVI allowed. Max size 40MB.', 'warning'); $('#submitForm').show();</script>";
				exit();
			}
			$videopath = createVideoUpload("video", "banner");
			if($videopath === ''){
				echo "<script>swal('Video Upload Failed', 'Click `OK` to try Again', 'error'); $('#submitForm').show();</script>";
				exit();
			}
		}

		if($imagepath === '' && $videopath === ''){
			echo "<script>swal('Image or Video Required', 'Please upload a Banner Image or Video.', 'warning'); $('#submitForm').show();</script>";
			exit();
		}

		$sqlcheck = mysqli_query($con,"SELECT * FROM web_banner WHERE `wb_order` = '$order'");
		if(mysqli_num_rows($sqlcheck)){
			echo "<script>swal('Order no Already in Record', 'Click `OK` to try Again', 'warning'); $('#submitForm').show();  </script>";
		}else{
			$sqlins = mysqli_query($con,"INSERT INTO web_banner (id, wb_order, wb_img, wb_video, category_id, status) VALUES (NULL, '$order', '$imagepath', '$videopath', '$category_id', 1)");
			
			if($sqlins){
				echo "<script>swal('Added Successfully', 'Click `OK` to Close', 'success'); $('#submitForm').remove();  </script>";
				echo "<div class='col-md-12 padd0 text-center'><a href='createbanner.php' class='btn btn-primary'>Create New</a></div>";
			}else{
				echo "<script>swal('Failed', 'Click `OK` to try Again', 'error'); $('#submitForm').show();</script>";
			}
		}
		exit();
	}





	include 'include/header.php';
	include 'include/sidebar.php';

 ?>


<section class="main-dashboard">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
	<div class="page-title">						
		<div class="title">
			<h3>Create Banner</h3>
		</div>
		<div class="createbtn">
			<a href="banner.php"> List</a>
		</div>
	</div>
</div>

		

<div class="col-md-12">
	<div class="page-content">
		<div class="msgbox">
			<!-- <div class="loading-fetch">
				
			</div> -->
		</div>
		<form method="POST" enctype="multipart/form-data" id="submitForm" class="row">
			<div class="mb-3 col-md-3">
				<label for="category_id" class="form-label">Category</label>
				<select name="category_id" class="form-control" id="category_id" required>
					<option value="">- Select Category -</option>
<?php $sqlcat = mysqli_query($con, "SELECT * FROM category WHERE c_type = 1 AND id NOT IN ('25', '32') ORDER BY `order` ASC");
if(mysqli_num_rows($sqlcat)){
while($rwcat = mysqli_fetch_array($sqlcat)){
echo "<option value='{$rwcat['id']}'>{$rwcat['c_name']}</option>";	}
}
?>
				</select>
			</div>

			<div class="mb-2 col-md-3">
			  	<label for="formFile" class="form-label">Main Image</label>
			  	<div class="imgquestion other">
				<a href="javascript:" class="imgclose ri-close-circle-line"></a>
				<input hidden class="form-control imgInput" name="img" type="file" accept="image/*">
  				<img src="images/preview.jpg" alt="preview" class='preview'>
  			</div>
			</div>

			<div class="mb-3 col-md-3">
				<label for="video" class="form-label">Banner Video (optional)</label>
				<input type="file" class="form-control videoInput" id="video" name="video" accept="video/mp4,video/webm,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/*">
				<video class="videoPreview" controls style="display:none; max-width:100%; max-height:150px; margin-top:8px; border-radius:6px;" onerror="this.style.display='none';"></video>
				<small class="text-muted">MP4 / WebM / MOV / AVI - max 40MB. Image ya Video, kam se kam ek zaroori hai.</small>
			</div>

			<div class="mb-3 col-md-3">
				<label for="order" class="form-label">Order</label>
				<input type="text" class="form-control" id="order" name="order" required>
			</div>
			

			<div class="my-2 col-md-12">
				<input type="submit" name="addRecord" class="submitInput" value="Add Record">
			</div>
		</form>
	</div>
</div>

</div>	
</div>				
</section>


	<?php include 'include/footer.php'; ?>