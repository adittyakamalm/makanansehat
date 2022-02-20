<div class="col-sm-6 mx-auto">
<div class="page-title mt-4">
        <h1 class="text-center">Edit Profile</h1>
      </div>

        <form class="calculator-form my-5 px-5 py-4" style="background-color: #ffe6b1;" method="POST" action="<?php echo base_url(). 'profile/editUser'?>" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-sm-3">
                  <label> Nama </label>
                </div>
                <div class="col-sm-1"> : </div>
                <div class="col-sm-7">
                  <input type="text" class="form-control input-text" name="user_name" value="<?= $user['user_name']; ?>">
                </div>
              </div>

            <div class="row form-group">
                <div class="col-sm-3">
                  <label> Email </label>
                </div>
                <div class="col-sm-1"> : </div>
                <div class="col-sm-7">
                  <input type="text" class="form-control input-text" name="user_email" value="<?= $user['user_email']; ?>" readonly>
                </div>
            </div>

              <div class="row form-group">
                <div class="col-sm-3">
                  <label>No. HP</label>
                </div>
                <div class="col-sm-1"> : </div>
                <div class="col-sm-7">
                <input type="text" class="form-control input-text" name="user_phone" value="<?= $user['user_phone']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-sm-3">
                  <label>Alamat</label>
                </div>
                <div class="col-sm-1"> : </div>
                <div class="col-sm-7">
                <textarea rows="3" class="form-control input-text" name="user_address" placeholder="Input your address number here"><?php echo $user['user_address']; ?></textarea> 
                </div>
              </div>

              <div class="row form-group">
                <div class="col-sm-3">
                  <label> Gambar </label>
                </div>
                <div class="col-sm-1"> : </div>
                <div class="col-sm-7">
                  <input type="file" class="form-control-file" name="user_photo">
                </div>
              </div>

              <div class="d-flex justify-content-center">
            <button type="submit" class="btn calculate-btn px-4 py-2 mt-3">Save</button>
          </div>
            
        </form>
</div>