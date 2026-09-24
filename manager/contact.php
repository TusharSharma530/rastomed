<?php include 'config.php';
$title = 'Contact';
if(!isset($_SESSION['username'])){
		echo "<script>window.location.href='{$path}manager'</script>";
	}
	
	if(isset($_POST['deletedata'])){
		$id = $_POST['id'];
		$sqldelete = mysqli_query($con,"DELETE FROM contact WHERE id = {$id}");
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
			<h3>Contact</h3>
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
				<th>Type</th>
				<th>Name</th>
				<th>Email ID</th>
				<th>Phone</th>
				<th>Message</th>
				<th>Status</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php 

			$sqlcontact  = mysqli_query($con, "SELECT * FROM contact ORDER BY id DESC");
			if(mysqli_num_rows($sqlcontact)){
				$serial = 1;
				while($rwcontact = mysqli_fetch_assoc($sqlcontact )){
					$cid = $rwcontact['id'];
					$msgFull = trim($rwcontact['message'] ?? '');
					$msgShort = mb_strlen($msgFull) > 60 ? mb_substr($msgFull, 0, 60) . '…' : $msgFull;
		 ?>
			<tr id='remove<?php echo $cid; ?>'>
				<td><?php echo $serial; ?></td>
				<td><?php echo htmlspecialchars($rwcontact['enquiry_type'] ?? ''); ?></td>
				<td><?php echo htmlspecialchars($rwcontact['name']); ?></td>
				<td><?php echo htmlspecialchars($rwcontact['email']); ?></td>
				<td><?= htmlspecialchars($rwcontact['phone']); ?></td>
				<td title="<?= htmlspecialchars($msgFull, ENT_QUOTES); ?>"><?= htmlspecialchars($msgShort); ?></td>
				<td>
					<div class="form-check form-switch">
						<?php $checked = $rwcontact['status']==1 ? "checked" : ""; ?>
					  <input class="form-check-input" type="checkbox" data-table="contact" ide="<?=$rwcontact['id'];?>" <?=$checked;?>>
					  <label class="form-check-label" for="status"></label>
					</div>
				</td>						
				<td class="text-center"> 
					<?php
					$viewData = [
						'id' => (int)$cid,
						'type' => $rwcontact['enquiry_type'] ?? '',
						'name' => $rwcontact['name'] ?? '',
						'email' => $rwcontact['email'] ?? '',
						'phone' => $rwcontact['phone'] ?? '',
						'state' => $rwcontact['state'] ?? '',
						'message' => $msgFull,
						'status' => (int)($rwcontact['status'] ?? 0),
					];
					$viewJson = json_encode($viewData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
					?>
					<a href="javascript:void(0);" class="viewbtn ri-eye-line" data-contact='<?= $viewJson; ?>' title="View Details"></a>
					<a href="javascript:"  ide="<?=$cid;?>" class='delbtn ri-delete-bin-line' ></a>
				</td>
			</tr>
	<?php $serial++; }} else { ?>
			<tr><td colspan="8" class="text-center">No records found.</td></tr>
	<?php } ?>
		</tbody>
	</table>
	</div>
</div>

</div>
</div>
</section>

<!-- Contact View Modal -->
<div id="contactViewModal" class="contact-view-modal" aria-hidden="true">
  <div class="contact-view-modal__overlay"></div>
  <div class="contact-view-modal__dialog" role="dialog" aria-labelledby="cvmTitle">
    <div class="contact-view-modal__header">
      <h4 id="cvmTitle">Enquiry Details</h4>
      <button type="button" class="contact-view-modal__close" aria-label="Close">&times;</button>
    </div>
    <div class="contact-view-modal__body">
      <div class="cvm-row"><span class="cvm-label">Type</span><span class="cvm-value" id="cvmType">-</span></div>
      <div class="cvm-row"><span class="cvm-label">Name</span><span class="cvm-value" id="cvmName">-</span></div>
      <div class="cvm-row"><span class="cvm-label">Email</span><span class="cvm-value" id="cvmEmail">-</span></div>
      <div class="cvm-row"><span class="cvm-label">Phone</span><span class="cvm-value" id="cvmPhone">-</span></div>
      <div class="cvm-row"><span class="cvm-label">State</span><span class="cvm-value" id="cvmState">-</span></div>
      <div class="cvm-row"><span class="cvm-label">Status</span><span class="cvm-value" id="cvmStatus">-</span></div>
      <div class="cvm-row cvm-row--block"><span class="cvm-label">Message</span><div class="cvm-value cvm-message" id="cvmMessage">-</div></div>
    </div>
    
  </div>
</div>

<style>
.contact-view-modal{display:none;position:fixed;inset:0;z-index:9999;align-items:center;justify-content:center;}
.contact-view-modal.is-open{display:flex;}
.contact-view-modal__overlay{position:absolute;inset:0;background:rgba(0,0,0,.5);}
.contact-view-modal__dialog{position:relative;background:#fff;border-radius:8px;width:min(560px,92vw);max-height:90vh;overflow:auto;box-shadow:0 12px 40px rgba(0,0,0,.2);}
.contact-view-modal__header{display:flex;align-items:center;justify-content:space-between;padding:14px 18px;border-bottom:1px solid #eee;}
.contact-view-modal__header h4{margin:0;font-size:1.05rem;color:#222;}
.contact-view-modal__close{border:0;background:transparent;font-size:1.5rem;line-height:1;cursor:pointer;color:#666;padding:0 6px;}
.contact-view-modal__close:hover{color:#000;}
.contact-view-modal__body{padding:16px 18px;}
.cvm-row{display:flex;gap:12px;padding:8px 0;border-bottom:1px dashed #eee;}
.cvm-row--block{flex-direction:column;gap:6px;border-bottom:0;}
.cvm-label{min-width:80px;font-weight:600;color:#555;font-size:.9rem;}
.cvm-value{color:#222;font-size:.95rem;word-break:break-word;}
.cvm-message{white-space:pre-wrap;background:#f7f9fc;border:1px solid #e6ecf5;border-radius:6px;padding:10px 12px;line-height:1.5;}
.contact-view-modal__footer{padding:12px 18px 16px;text-align:right;border-top:1px solid #eee;}
</style>

<?php 
	include "include/footer.php"; 
 ?>

<script>
    var url = window.location.href;

    (function () {
      var modal = document.getElementById('contactViewModal');
      if (!modal) return;
      var overlay = modal.querySelector('.contact-view-modal__overlay');
      var closeBtns = modal.querySelectorAll('.contact-view-modal__close');

      function closeModal() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
      }

      if (overlay) overlay.addEventListener('click', closeModal);
      closeBtns.forEach(function (btn) { btn.addEventListener('click', closeModal); });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeModal();
      });

      document.addEventListener('click', function (e) {
        var btn = e.target && e.target.closest ? e.target.closest('.viewbtn') : null;
        if (!btn) return;
        var raw = btn.getAttribute('data-contact') || '';
        var data = {};
        try { data = JSON.parse(raw); } catch (err) { data = {}; }

        function set(id, val) {
          var el = document.getElementById(id);
          if (el) el.textContent = (val === undefined || val === null || val === '') ? '-' : String(val);
        }

        set('cvmType', data.type);
        set('cvmName', data.name);
        set('cvmEmail', data.email);
        set('cvmPhone', data.phone);
        set('cvmState', data.state);
        set('cvmStatus', Number(data.status) === 1 ? 'On (Seen)' : 'Off (New)');
        set('cvmMessage', data.message);

        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
      });
    })();

     $(document).on("click", ".status_btn", function(){
 	var $this = $(this).attr('ide');
    // alert($this);
 	$.ajax({
 		url : url,
 		type : "POST",
 		data : {ide : $this, st : 1},
 		success : function(data){
 			location.reload();
 		}
 	})

 });
</script>