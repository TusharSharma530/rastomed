<?php include 'config.php';
$title = 'Products';
if(!isset($_SESSION['username'])){
echo "<script>window.location.href='{$path}manager'</script>";
}

if(isset($_POST['deletedata'])){
$id = $_POST['id'];

	$sqldelete = mysqli_query($con,"DELETE FROM products WHERE id = {$id}");
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
			<h3>Products</h3>
		</div>
		<div class="createbtn d-flex">
			<a href="createproduct.php"> Add New</a>
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
									<th>Product Name</th>
									<th>Price</th>
									<th>Category</th>
									<th>Sub Category</th>
									<th>Child Category</th>
									<th>Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
<?php 
$sqlprod = mysqli_query($con, "SELECT * FROM products ORDER BY id DESC");
if(mysqli_num_rows($sqlprod)){
$serial = 1;
while($rwprod = mysqli_fetch_assoc($sqlprod)){
$id = $rwprod['id'];

$rwn = mysqli_fetch_array(mysqli_query($con, "SELECT c_name FROM category WHERE id = '{$rwprod['cat_id']}'"));
$rws = mysqli_fetch_array(mysqli_query($con, "SELECT sc_name FROM sub_cat WHERE id = '{$rwprod['subcat_id']}'"));
$rwc = mysqli_fetch_array(mysqli_query($con, "SELECT childcat FROM childcategory WHERE id = '{$rwprod['childcat_id']}'"));
?>
<tr id='remove<?=$id;?>'>
<td><?=$serial;?></td>
<td><?=$rwprod['name'];?></td>
<td><?=$rwprod['price'];?></td>
<td><?=$rwn['c_name'];?></td>
<td><?=$rws['sc_name'];?></td>
<td><?=$rwc['childcat'];?></td>
<td>
<?php if($rwprod['status']==1){ ?>
<a href="javascript:" class="statusbtn" id="<?=$id;?>" table="products"><span class="badge bg-success">Active</span></a>
<?php }else{ ?>
<a href="javascript:" class="statusbtn" id="<?=$id;?>" table="products"><span class="badge bg-danger">Deactive</span></a>
<?php } ?>
</td>
<td class="text-center">
<a href="updateproduct.php?id=<?=$id;?>"><i class='bx bx-edit mx-2 text-success'></i></a> 
<a href="javascript:" class="delbtn" ide="<?=$id;?>"><i class='bx bx-trash mx-2 text-danger'></i></a>
</td>
</tr>

<?php $serial++; }} ?>
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
