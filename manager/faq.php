<?php include 'config.php';
	$title = 'FAQ';
	if(!isset($_SESSION['username'])){
		echo "<script>window.location.href='{$path}manager'</script>";
	}

	// make sure faq table exists
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

	if(isset($_POST['deletedata'])){
		$id = (int)$_POST['id'];
		$sqldelete = mysqli_query($con,"DELETE FROM product_faq WHERE id = $id");
		if($sqldelete){
			echo 'true';
		}else{
			echo 'false';
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
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="page-content">
		<div class="msgbox"></div>
		<table class="table table-hover" id="myTable">
			<thead>
				<tr>
					<th>#</th>
					<th>Product</th>
					<th>FAQ (Question)</th>
					<th>FAQ Answer</th>
					<th>Order</th>
					<th>Status</th>
					<th class="text-end">Action</th>
				</tr>
			</thead>
			<tbody>
<?php
$sqlfaq = mysqli_query($con, "SELECT f.*, p.`name` AS `product_name`
	FROM `product_faq` f
	LEFT JOIN `products` p ON p.`id` = f.`product_id`
	ORDER BY f.`product_id` ASC, f.`order` ASC, f.`id` ASC");
if(mysqli_num_rows($sqlfaq)){
$serial = 1;
while($rwfaq = mysqli_fetch_assoc($sqlfaq)){
$id = $rwfaq['id'];
?>
				<tr id='remove<?=$id;?>'>
					<td><?=$serial;?></td>
					<td><?=htmlspecialchars($rwfaq['product_name'] ? $rwfaq['product_name'] : '—');?></td>
					<td><?=htmlspecialchars($rwfaq['question']);?></td>
					<td><?=htmlspecialchars($rwfaq['answer']);?></td>
					<td><?=$rwfaq['order'];?></td>
					<td>
						<div class="form-check form-switch">
							<?php $checked = $rwfaq['status']==1 ? "checked" : ""; ?>
						  <input class="form-check-input" type="checkbox" data-table="product_faq" ide="<?=$id;?>" <?=$checked;?>>
						  <label class="form-check-label" for="status"></label>
						</div>
					</td>
					<td class="text-end">
						<a href="updatefaq.php?id=<?=$id;?>" class="editbtn ri-pencil-line" ></a> 
						<a href="javascript:" ide="<?=$id;?>" class='delbtn ri-delete-bin-line' ></a>
					</td>
				</tr>
<?php $serial++; }} else { ?>
				<tr>
					<td colspan="7" class="text-center">No FAQ Found. Click "Add New" to create one.</td>
				</tr>
<?php } ?>
			</tbody>
		</table>
	</div>
</div>

</div>
</div>
</section>

<?php 
	include "include/footer.php"; 
?>
