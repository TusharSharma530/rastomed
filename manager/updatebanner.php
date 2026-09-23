<?php include 'config.php';
$title = "Edit Banner";
	if(!isset($_SESSION['username'])){
		echo "<script>window.location.href='{$path}manager'</script>";
	}
	

$id = $_GET['id'] ?? "";



	$querysel = mysqli_query($con, "SELECT * FROM web_banner WHERE id = $id");
	if(mysqli_num_rows($querysel)){
		$row = mysqli_fetch_assoc($querysel);
	}

	 if(isset($_POST['editRecord'])){
		$order = trim(mysqli_real_escape_string($con,$_POST['order']));
		$category_id = trim(mysqli_real_escape_string($con,$_POST['category_id']));

		if(empty($_FILES['img']['name'])){
			$imagepath = $row['wb_img'];
		}else{
			$imagepath = createImgWebp("img", "banner");
		}

		if(empty($_FILES['video']['name'])){
			$videopath = $row['wb_video'];
		}else{
			if(!isValidVideoUpload($_FILES['video'])){
				echo "<script>swal('Invalid Video', 'Only MP4, WebM, MOV, AVI allowed. Max size 40MB.', 'warning'); $('#submitForm').show();</script>";
				exit();
			}
			$oldvideo = $row['wb_video'];
			$videopath = createVideoUpload("video", "banner");
			if($videopath === ''){
				echo "<script>swal('Video Upload Failed', 'Click `OK` to try Again', 'error'); $('#submitForm').show();</script>";
				exit();
			}
			if(!empty($oldvideo) && file_exists("../".$oldvideo)){
				unlink("../".$oldvideo);
			}
		}

		$sqlins = mysqli_query($con,"UPDATE web_banner SET wb_order = '$order', wb_img = '$imagepath', wb_video = '$videopath', category_id = '$category_id' WHERE id = $id");
			
		if($sqlins){
			echo "<script>swal('Update Successfully', 'Click `OK` to Close', 'success');  </script>";
		}else{
				
			echo "<script>swal('Failed', 'Click `OK` to try Again', 'error'); </script>";
		}
		
		exit();
	}





	include 'include/header.php';
	include 'include/sidebar.php';

 ?>


<section class="main-dashboard" style="overflow: auto; height: 100vh;">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
	<div class="page-title">
		<div class="title">
			<h3>Edit Banner</h3>
		</div>
		<div class="createbtn">
			<a href="createbanner.php"> Add New</a>
			<a href="banner.php"> List</a>
		</div>
	</div>
</div>


<div class="col-md-12">
	<div class="page-content">
	<div class="msgbox"></div>
	<form method="POST" enctype="multipart/form-data" id="submitForm" class="row">
		<div class="mb-3 col-md-3">
			<label for="category_id" class="form-label">Category</label>
			<select name="category_id" class="form-control" id="category_id" required>
				<option value="">- Select Category -</option>
<?php $sqlcat = mysqli_query($con, "SELECT * FROM category WHERE c_type = 1 AND id NOT IN ('25', '32') ORDER BY `order` ASC");
if(mysqli_num_rows($sqlcat)){
while($rwcat = mysqli_fetch_array($sqlcat)){
$selected = $rwcat['id']==$row['category_id'] ? "selected" : "";
echo "<option {$selected} value='{$rwcat['id']}'>{$rwcat['c_name']}</option>";	}
}
?>
			</select>
		</div>
		<div class="mb-2 col-md-3">
		  	<label for="formFile" class="form-label">Image</label>
		  	<div class="imgquestion other">
				<?php $active = empty($row['wb_img']) ? "" : "active"; ?>
				<a href="javascript:" class="imgclose ri-close-circle-line <?=$active;?>"></a>
				<input hidden class="form-control imgInput" name="img" type="file" accept="image/*">
  				<?php if(empty($row['wb_img'])){ ?>
  				<img src="images/preview.jpg" alt="preview" class='preview'>
  				<?php }else{ ?>
  				<img src="<?=$path.$row['wb_img'];?>" alt="<?=$row['wb_img'];?>" class='preview'>
  				<?php } ?>
  			</div>
		</div>
		<div class="mb-3 col-md-3">
			<label for="video" class="form-label">Banner Video</label>
			<input type="file" class="form-control videoInput" id="video" name="video" accept="video/mp4,video/webm,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/*">
			<?php if(!empty($row['wb_video'])){ ?>
			<video class="videoPreview" src="<?=$path.$row['wb_video'];?>" controls style="display:block; max-width:100%; max-height:150px; margin-top:8px; border-radius:6px;"></video>
			<?php }else{ ?>
			<video class="videoPreview" controls style="display:none; max-width:100%; max-height:150px; margin-top:8px; border-radius:6px;"></video>
			<?php } ?>
			<small class="text-muted">MP4 / WebM / MOV / AVI - max 40MB. Naya video select karne par purana replace ho jayega.</small>
		</div>
		<div class="mb-3 col-md-3">
			<label for="order" class="form-label">Order</label>
			<input type="text" class="form-control" id="order" name="order" value="<?php echo $row['wb_order']; ?>" required>
		</div>
						
		<div class="col-md-12">
			<input type="submit" name="editRecord" class="submitInput" value="Edit Record">
		</div>
	</form>
	</div>
</div>

</div>
</div>				
</section>

<?php include 'include/footer.php'; ?>