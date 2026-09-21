<?php include "config.php";
$title = 'Update Product';
if(!isset($_SESSION['username'])){
	echo "<script>window.location.href='{$path}manager'</script>";
}

if(isset($_GET['id'])){
	$id = $_GET['id'];
}else{
	$id = '';
}

$sqlprod = mysqli_query($con, "SELECT * FROM products WHERE id = {$id}");
if(mysqli_num_rows($sqlprod)){
	$rwprod = mysqli_fetch_assoc($sqlprod);
}

if(isset($_POST['editRecord'])){
	$category = trim(mysqli_real_escape_string($con, $_POST['category']));
	$subcategory = trim(mysqli_real_escape_string($con, $_POST['subcategory']));
	$childcategory = trim(mysqli_real_escape_string($con, $_POST['childcategory']));
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

	if(empty($_FILES['img']['name'])){
		$image = $rwprod['featured_img'];
		$uploadpath = $image;
	}else{
		$uploadpath = createImgWebp("img", "products");
		if(!empty($rwprod['featured_img'])){
			if(file_exists("../".$rwprod['featured_img'])){
				unlink("../".$rwprod['featured_img']);
			}			
		}
	}

	$sqlcheck = mysqli_query($con,"UPDATE products SET `cat_id` = '$category', `subcat_id` = '$subcategory', `childcat_id` = '$childcategory', `name` = '$name', `price` = '$price', `sdesc` = '$sdesc', `cdesc` = '$cdesc', `faq` = '$faq', `featured_img` = '$uploadpath', `meta_title` = '$metatitle', `meta_keywords` = '$metakeywords', `meta_desc` = '$metadesc', `url` = '$url', `order` = '$order' WHERE id = $id");
		
	if($sqlcheck){
		echo "<script>swal('Update Successfully', 'Click `OK` to Close', 'success'); </script>";
		
	}else{
			
		echo "<script>swal('Failed', 'Click `OK` to try Again', 'error'); </script>";
		}
	
	exit();
} 


// SET SUB CATEGORIES 
if(isset($_POST['setcat'])){
	$id = $_POST['catid'];
	$sql = mysqli_query($con, "SELECT * FROM sub_cat WHERE cat_id = $id ORDER BY `order` ASC");
	$output = "<option value=''>-- Select Sub Category--</option>";
	if(mysqli_num_rows($sql)){
		while($rw = mysqli_fetch_array($sql)){
			$output .= "<option value='{$rw['id']}'>{$rw['sc_name']}</option>"; 
		}
	}
	echo $output;
	exit();
}

// SET CHILD CATEGORIES 
if(isset($_POST['setsubcat'])){
	$id = $_POST['subcatid'];
	$sql = mysqli_query($con, "SELECT * FROM childcategory WHERE subcat_id = $id ORDER BY `order` ASC");
	$output = "<option value=''>-- Select Child Category --</option>";
	if(mysqli_num_rows($sql)){
		while($rw = mysqli_fetch_array($sql)){
			$output .= "<option value='{$rw['id']}'>{$rw['childcat']}</option>"; 
		}
	}
	echo $output;
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
			<h3>Edit Product</h3>
		</div>
		<div class="createbtn d-flex">
			<a href="createproduct.php"> Add New</a>
			<a href="products.php"> List</a>
		</div>
	</div>
</div>

<div class="col-md-12">
<div class="page-content">
<div class="msgbox"></div>
<form method="POST" id="submitForm" class="row" enctype="multipart/form-data">
	<div class="row">

	<div class="mb-3 col-md-4">
		<label for="category" class="form-label">Category</label>
		<select name="category" class="form-control" id="category">
			<option value="">- Select Category -</option>
<?php $sqlcat = mysqli_query($con, "SELECT * FROM category WHERE c_type = 1 AND id NOT IN ('25', '32') ORDER BY `order` ASC");
if(mysqli_num_rows($sqlcat)){
while($rwcat = mysqli_fetch_array($sqlcat)){
$selected = $rwcat['id']==$rwprod['cat_id'] ? "selected" : "";
echo "<option {$selected} value='{$rwcat['id']}'>{$rwcat['c_name']}</option>";	}
}
?>									
		</select>								
	</div>

	<div class="mb-3 col-md-4">
		<label for="subcategory" class="form-label">Sub Category</label>
		<select name="subcategory" class="form-control" id="subcategory">
			<option value="">- Select Sub Category -</option>
<?php $sqlsubcat = mysqli_query($con, "SELECT * FROM sub_cat WHERE cat_id = {$rwprod['cat_id']}");
if(mysqli_num_rows($sqlsubcat)){
while($rwsubcat = mysqli_fetch_array($sqlsubcat)){
$selected = $rwsubcat['id']==$rwprod['subcat_id'] ? "selected" : "";
echo "<option {$selected} value='{$rwsubcat['id']}'>{$rwsubcat['sc_name']}</option>";	}
}
?>										
		</select>								
	</div>

	<div class="mb-3 col-md-4">
		<label for="childcategory" class="form-label">Child Category</label>
		<select name="childcategory" class="form-control" id="childcategory">
			<option value="">- Select Child Category -</option>
<?php $sqlchildcat = mysqli_query($con, "SELECT * FROM childcategory WHERE subcat_id = {$rwprod['subcat_id']}");
if(mysqli_num_rows($sqlchildcat)){
while($rwchildcat = mysqli_fetch_array($sqlchildcat)){
$selected = $rwchildcat['id']==$rwprod['childcat_id'] ? "selected" : "";
echo "<option {$selected} value='{$rwchildcat['id']}'>{$rwchildcat['childcat']}</option>";	}
}
?>										
		</select>								
	</div>

	<div class="mb-3 col-md-6">
		<label for="name" class="form-label">Product Name</label>
		<input type="text" class="form-control" name="name" id="name" value="<?=$rwprod['name'];?>" required>
	</div>

	<div class="mb-3 col-md-3">
		<label for="price" class="form-label">Product Price</label>
		<input type="text" class="form-control" name="price" id="price" value="<?=$rwprod['price'];?>">
	</div>

	<div class="mb-3 col-md-3">
		<label for="order" class="form-label">Order</label>
		<input type="text" class="form-control" name="order" id="order" required value="<?=$rwprod['order'];?>">
	</div>

	<div class="mb-3 col-md-12">
		<label for="sdesc" class="form-label">Short Description</label>
		<textarea class="tinyMCE" name="sdesc" id="sdesc"><?=$rwprod['sdesc'];?></textarea>
	</div>

	<div class="mb-3 col-md-12">
		<label for="cdesc" class="form-label">Description</label>
		<textarea class="tinyMCE" name="cdesc" id="cdesc"><?=$rwprod['cdesc'];?></textarea>
	</div>

	<div class="mb-3 col-md-12">
		<label for="faq" class="form-label">FAQ</label>
		<textarea class="tinyMCE" name="faq" id="faq"><?=$rwprod['faq'];?></textarea>
	</div>

	<div class="mb-3 col-md-4">
		<label for="mtitle" class="form-label">Meta Title</label>
		<input type="text" class="form-control" id="mtitle" name="meta-title" value="<?=$rwprod['meta_title'];?>">
	</div>

	<div class="mb-3 col-md-4">
		<label for="mkeywords" class="form-label">Meta Keywords</label>
		<input type="text" class="form-control" id="mkeywords" name="meta-keywords" value="<?=$rwprod['meta_keywords'];?>">
	</div>

	<div class="mb-3 col-md-4">
		<label for="mdesc" class="form-label">Meta Description</label>
		<textarea class="form-control" rows='3' name="meta-desc" id="mdesc"><?=$rwprod['meta_desc'];?></textarea>
	</div>

	<div class="mb-3 col-md-12">
	  	<label for="formFile" class="form-label">Product Image</label>
	  	<div class="imgquestion other">
			<?php $active = empty($rwprod['featured_img']) ? "" : "active"; ?>
			<a href="javascript:" class="imgclose ri-close-circle-line <?=$active;?>"></a>
			<input hidden class="form-control imgInput" name="img" type="file">
  			<?php if(empty($rwprod['featured_img'])){ ?>
  			<img src="images/preview.jpg" alt="preview" class='preview'>
  			<?php }else{ ?>
  			<img src="<?=$path.$rwprod['featured_img'];?>" alt="<?=$rwprod['name'];?>" class='preview'>
  			<?php } ?>
  		</div>
	</div>

	<div class="col-md-12">
		<input type="submit" value="Edit Record" name="editRecord" class="submitInput">
	</div>

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

<script>
	$(document).on("change", "#category", function(){ 
		var $id = $(this).val();
		$.ajax({
			url : url,
			type : "POST",
			data : {setcat : 1, catid : $id},
			success : function(data){
				$('#subcategory').html(data);
				$('#childcategory').html("<option value=''>- Select Child Category -</option>");
			}
		})
	})

	$(document).on("change", "#subcategory", function(){ 
		var $id = $(this).val();
		$.ajax({
			url : url,
			type : "POST",
			data : {setsubcat : 1, subcatid : $id},
			success : function(data){
				$('#childcategory').html(data);
			}
		})
	})
</script>
