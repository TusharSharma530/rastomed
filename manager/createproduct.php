<?php include 'config.php';
$title = 'Add Product';
if(!isset($_SESSION['username'])){
	echo "<script>window.location.href='{$path}manager'</script>";
}

if(isset($_POST['addProduct'])){
	$category = trim(mysqli_real_escape_string($con, $_POST['category']));
	$name = trim(mysqli_real_escape_string($con, $_POST['name']));
	$price = trim(mysqli_real_escape_string($con, $_POST['price']));
	$url = seo_friendly_url($name);
	$sdesc = trim(mysqli_real_escape_string($con, $_POST['sdesc']));
	$cdesc = trim(mysqli_real_escape_string($con, $_POST['cdesc']));
	$faq = trim(mysqli_real_escape_string($con, $_POST['faq']));
	$metatitle = trim(mysqli_real_escape_string($con, $_POST['meta-title']));
	$metakeywords = trim(mysqli_real_escape_string($con, $_POST['meta-keywords']));
	$metadesc = trim(mysqli_real_escape_string($con, $_POST['meta-desc']));
	$order = trim(mysqli_real_escape_string($con, $_POST['order']));
	$uploadpath = "";

	if(isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])){
		$uploadpath = createImgWebp("img", "products");
	}

	$sqlins = mysqli_query($con,"INSERT INTO `products`(`id`, `cat_id`, `subcat_id`, `childcat_id`, `name`, `price`, `sdesc`, `cdesc`, `faq`, `featured_img`, `meta_title`, `meta_keywords`, `meta_desc`, `url`, `order`, `status`) VALUES (NULL, '$category', 0, 0, '$name', '$price', '$sdesc', '$cdesc', '$faq', '$uploadpath', '$metatitle', '$metakeywords', '$metadesc', '$url', '$order', 1)");

	if($sqlins){
		echo "<script>swal('Added Successfully', 'Click `OK` to Close', 'success'); 
		$('#submitForm').hide();
		</script>";
		echo "<div class='col-md-12 padd0 text-center'><a href='createproduct.php' class=' btn btn-primary'>Create New</a></div>";
	}else{
		echo "<script>swal('Failed', 'Click `OK` to try Again', 'error'); $('#submitForm').show();</script>";
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
			<h3>Add Product</h3>
		</div>
		<div class="createbtn">
			<a href="products.php"> List</a>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="page-content">
	<div class="msgbox"></div>
	<form method="POST" id="submitForm" class="row" enctype="multipart/form-data">

		<div class="mb-3 col-md-4">
			<label for="category" class="form-label">Category</label>
			<select name="category" class="form-control" id="category" required>
				<option value="">- Select Category -</option>
<?php $sqlcat = mysqli_query($con, "SELECT * FROM category WHERE c_type = 1 AND id NOT IN ('25', '32') ORDER BY `order` ASC");
if(mysqli_num_rows($sqlcat)){
while($rwcat = mysqli_fetch_array($sqlcat)){
$selected = $rwcat['id']==70 ? "selected" : "";
echo "<option {$selected} value='{$rwcat['id']}'>{$rwcat['c_name']}</option>";	}
}
?>
			</select>								
		</div>

		<div class="mb-3 col-md-6">
			<label for="name" class="form-label">Product Name</label>
			<input type="text" class="form-control" name="name" id="name" required>
		</div>

		<div class="mb-3 col-md-3">
			<label for="price" class="form-label">Product Price</label>
			<input type="text" class="form-control" name="price" id="price">
		</div>

		<div class="mb-3 col-md-3">
			<label for="order" class="form-label">Order</label>
			<input type="text" class="form-control" name="order" id="order" required>
		</div>

		<div class="mb-3 col-md-12">
			<label for="sdesc" class="form-label">Short Description</label>
			<textarea class="tinyMCE" name="sdesc" id="sdesc"></textarea>
		</div>

		<div class="mb-3 col-md-12">
			<label for="cdesc" class="form-label">Description</label>
			<textarea class="tinyMCE" name="cdesc" id="cdesc"></textarea>
		</div>

		<div class="mb-3 col-md-12">
			<label for="faq" class="form-label">FAQ</label>
			<textarea class="tinyMCE" name="faq" id="faq"></textarea>
		</div>

		<div class="mb-3 col-md-4">
			<label for="mtitle" class="form-label">Meta Title</label>
			<input type="text" class="form-control" id="mtitle" name="meta-title">
		</div>

		<div class="mb-3 col-md-4">
			<label for="mkeywords" class="form-label">Meta Keywords</label>
			<input type="text" class="form-control" id="mkeywords" name="meta-keywords">
		</div>

		<div class="mb-3 col-md-4">
			<label for="mdesc" class="form-label">Meta Description</label>
			<textarea class="form-control" rows='3' name="meta-desc" id="mdesc"></textarea>
		</div>

		<div class="mb-3 col-md-12">
		  	<label for="formFile" class="form-label">Product Image</label>
		  	<div class="imgquestion other">
				<a href="javascript:" class="imgclose ri-close-circle-line"></a>
				<input hidden class="form-control imgInput" name="img" type="file">
  				<img src="images/preview.jpg" alt="preview" class='preview'>
  			</div>		  	
		</div>
		
		<div class="mt-2 mx-auto">
			<input type="submit" value="Add Product" name="addProduct" class="btn btn-primary">
		</div>

	</form>
</div>
</div>

</div>
</div>
</section>

<?php 
	include "include/footer.php"; 
?>
