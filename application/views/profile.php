<div class="col-sm-6 mx-auto">
    <div class="container">
      <div class="page-title mt-4">
        <h1 class="text-center">My Profile</h1>
      </div>  
    </div>
</div> 


<div class="card mb-3" style="max-width: 1000px; margin-left:220px ; margin-top:50px">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('/upload/user/') . $user['user_photo']; ?>" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user['user_name']; ?></h5>
        <p class="card-text"><?= $user['user_email']; ?></p>
        <p class="card-text"><?= $user['user_phone']; ?></p>
        <p class="card-text"><?= $user['user_address']; ?></p>
        <p class="card-text"><small class="text-muted">Member Since <?= date('d F Y', $user['date_created']) ?></small></p>
      </div>
    </div>
  </div>
</div> 
<div class="container">
<div class="d-flex justify-content-end">
  <?php echo anchor('profile/edit/' . $user['user_username'],'<div class="btn btn-sm btn-primary text-center" style="margin-right:65px; font-size:18px;" ><i class="fa fa-edit" style="margin-right:10px;"></i>Edit Profil</div>' ) ?>
</div>

