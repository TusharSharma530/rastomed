<?php include "config.php";
$title = 'Edit FAQ';
if(!isset($_SESSION['username'])){
	echo "<script>window.location.href='{$path}manager'</script>";
}

$id = (int)($_GET['id'] ?? 0);
$rwfaq = null;
$sqlfaq = mysqli_query($con, "SELECT * FROM `product_faq` WHERE id = $id");
if(mysqli_num_rows($sqlfaq)){
	$rwfaq = mysqli_fetch_assoc($sqlfaq);
}

if(isset($_POST['updatetc'])){
	$product_id = (int)$_POST['product_id'];
	$question = trim(mysqli_real_escape_string($con,$_POST['question']));
	$answer = trim(mysqli_real_escape_string($con,$_POST['answer']));
	$order = trim(mysqli_real_escape_string($con,$_POST['order']));
	if($order === ''){ $order = 0; }

	if($question === '' || $answer === '' || $product_id <= 0){
		echo "<script>swal('Failed', 'Please select product and fill both FAQ question & answer', 'error'); $('#submitForm').show();</script>";
		exit();
	}

	$sqlcheck = mysqli_query($con,"UPDATE `product_faq` SET `product_id` = '$product_id', `question` = '$question', `answer` = '$answer', `order` = '$order' WHERE id = $id");

	if($sqlcheck){
		echo "<script>swal('Update Successfully', 'Click `OK` to Close', 'success'); </script>";
	}else{
		echo "<script>swal('Failed', 'Click `OK` to try Again', 'error'); </script>";
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
			<h3><?=$title;?></h3>
		</div>
		<div class="createbtn">
			<a href="createfaq.php"> Add New</a>
			<a href="faq.php"> List</a>
		</div>		
	</div>
</div>

<div class="col-md-12">
	<div class="page-content">
		<div class="msgbox"></div>
		<form method="POST" id="submitForm" class="row">		
			<div class="mb-3 col-md-12">
				<label for="product_id" class="form-label">Product</label>
				<select class="form-control" name="product_id" id="product_id" required>
					<option value="">-- Select Product --</option>
					<?php $sqlprodd = mysqli_query($con, "SELECT * FROM `products` ORDER BY `name` ASC");
					if(mysqli_num_rows($sqlprodd)){
					while($rwprodd = mysqli_fetch_assoc($sqlprodd)){
						$sel = ($rwfaq && $rwfaq['product_id']==$rwprodd['id']) ? "selected" : ""; ?>
					<option value="<?=$rwprodd['id'];?>" <?=$sel;?>><?=htmlspecialchars($rwprodd['name']);?></option>
					<?php }} ?>
				</select>
			</div>

			<div class="mb-3 col-md-12">
				<label for="question" class="form-label">FAQ (Question)</label>
				<input type="text" class="form-control" name="question" id="question" value="<?=htmlspecialchars($rwfaq['question']);?>" required>
			</div>

			<div class="mb-3 col-md-12">
				<label for="answer" class="form-label">FAQ Answer</label>
				<textarea class="form-control" name="answer" id="answer" rows="5" required><?=htmlspecialchars($rwfaq['answer']);?></textarea>
			</div>

			<div class="mb-3 col-md-3">
				<label for="order" class="form-label">Order</label>
				<input type="text" class="form-control" name="order" value="<?=$rwfaq['order'];?>">
			</div>

			<div class="col-md-12">
				<input type="submit" value="Edit Record" name="updatetc" class="submitInput">
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
