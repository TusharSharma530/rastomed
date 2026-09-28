<?php include 'config.php';
$title = 'Create FAQ';
if(!isset($_SESSION['username'])){
	echo "<script>window.location.href='{$path}manager'</script>";
}

mysqli_query($con, "CREATE TABLE IF NOT EXISTS `product_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

if(isset($_POST['addRecord'])){
	$product_id = (int)$_POST['product_id'];
	$question = trim(mysqli_real_escape_string($con,$_POST['question']));
	$answer = trim(mysqli_real_escape_string($con,$_POST['answer']));
	$order = trim(mysqli_real_escape_string($con,$_POST['order']));
	if($order === ''){ $order = 0; }

	if($question === '' || $answer === '' || $product_id <= 0){
		echo "<script>swal('Failed', 'Please select product and fill both FAQ question & answer', 'error'); $('#submitForm').show();</script>";
		exit();
	}

	$sqlins = mysqli_query($con,"INSERT INTO `product_faq` (`id`, `product_id`, `question`, `answer`, `order`, `status`) VALUES (NULL, '$product_id', '$question', '$answer', '$order', 1)");

	if($sqlins){
		echo "<script>swal('Added Successfully', 'Click `OK` to Close', 'success'); 
				$('#submitForm').hide();
			 </script>";
		echo "<div class='col-md-12 padd0 text-center'><a href='createfaq.php' class=' btn btn-primary'>Create New</a> <a href='faq.php' class=' btn btn-secondary'>Back to List</a></div>";
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
			<h3><?=$title;?></h3>
		</div>
		<div class="createbtn">
			<a href="faq.php"> List</a>
		</div>
	</div>
</div>

<div class="col-md-12">
<div class="page-content">
	<div class="msgbox"></div>
	<form method="POST" id="submitForm">
		<div class="row">

		<div class="mb-3 col-md-12">
			<label for="product_id" class="form-label">Product</label>
			<select class="form-control" name="product_id" id="product_id" required>
				<option value="">-- Select Product --</option>
				<?php $sqlprodd = mysqli_query($con, "SELECT * FROM `products` ORDER BY `name` ASC");
				if(mysqli_num_rows($sqlprodd)){
				while($rwprodd = mysqli_fetch_assoc($sqlprodd)){ ?>
				<option value="<?=$rwprodd['id'];?>"><?=htmlspecialchars($rwprodd['name']);?></option>
				<?php }} ?>
			</select>
		</div>

		<div class="mb-3 col-md-12">
			<label for="question" class="form-label">FAQ (Question)</label>
			<input type="text" class="form-control" name="question" id="question" placeholder="Enter question" required>
		</div>

		<div class="mb-3 col-md-12">
			<label for="answer" class="form-label">FAQ Answer</label>
			<textarea class="form-control" name="answer" id="answer" rows="5" placeholder="Enter answer" required></textarea>
		</div>

		<div class="mb-3 col-md-3">
			<label for="order" class="form-label">Order</label>
			<?php $sqlord = mysqli_query($con, "SELECT * FROM `product_faq` ORDER BY `id` DESC");
			$rword = mysqli_fetch_assoc($sqlord); ?>
			<input type="text" class="form-control" name="order" placeholder="Last Order No. : <?=($rword ? $rword['order'] : 0);?>">
		</div>

		<div class="col-md-12">
			<input type="submit" value="Add Record" name="addRecord" class="submitInput">
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
