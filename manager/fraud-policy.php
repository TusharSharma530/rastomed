<?php include 'config.php';
$title = 'Recruitment Fraud Policy';
if(!isset($_SESSION['username'])){
	echo "<script>window.location.href='{$path}manager'</script>";
}

$sqlpage = mysqli_query($con, "SELECT * FROM `pages` WHERE slug = 'fraud-policy'");
if(mysqli_num_rows($sqlpage)){
	$rwpage = mysqli_fetch_assoc($sqlpage);
}

if(isset($_POST['editRecord'])){
	$ptitle = trim(mysqli_real_escape_string($con,$_POST['title']));
	$psubtitle = trim(mysqli_real_escape_string($con,$_POST['subtitle']));
	$pdesc = trim(mysqli_real_escape_string($con, pages_plain_input($_POST['description'])));

	$sqlcheck = mysqli_query($con,"UPDATE `pages` SET `title` = '$ptitle', `subtitle` = '$psubtitle', `description` = '$pdesc' WHERE slug = 'fraud-policy'");

	if($sqlcheck){
		echo "<script>swal('Update Successfully', 'Click `OK` to Close', 'success');</script>";
	}else{
		echo "<script>swal('Failed', 'Click `OK` to try Again', 'error');</script>";
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
			<h3>Recruitment Fraud Policy</h3>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="page-content">
		<div class="msgbox"></div>
		<form method="POST" id="submitForm" class="row">
			<div class="mb-3 col-md-12">
				<label for="title" class="form-label">Title</label>
				<input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($rwpage['title']); ?>" required>
			</div>

			<div class="mb-3 col-md-12">
				<label for="subtitle" class="form-label">Subtitle</label>
				<input type="text" class="form-control" name="subtitle" value="<?php echo htmlspecialchars($rwpage['subtitle']); ?>">
			</div>

			<div class="mb-3 col-md-12">
				<label for="description" class="form-label">Description</label>
				<textarea class="form-control" name="description" id="description" rows="14" placeholder="Blank line = new paragraph&#10;## Heading&#10;- List item"><?php echo htmlspecialchars(pages_plain_input($rwpage['description'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></textarea>
				<small class="text-muted">Plain text only — blank line = paragraph, ## Heading, - list item</small>
			</div>

			<div class="col-md-12">
				<input type="submit" value="Update Record" name="editRecord" class="submitInput">
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
