<!-- Data Tables -->
<div class="container-xxl flex-grow-1 container-p-y">

<div class="col-12">
  <div class="card overflow-hidden">
    <div class="table-responsive">
      <table class="table table-sm">
        <thead>
          <tr>
            <th class="text-truncate">User</th>
            <th class="text-truncate">Role</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach( $data['user'] as $user) : ?>
          <tr>
            <td>
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-4">
                  <img src="<?= BASEURL;?>/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div>
                  <h6 class="mb-0 text-truncate"><?= $user['username']?></h6>
                  <small class="text-truncate">jordan@gmail.com</small>
                </div>
              </div>
            </td>

            <td class="text-truncate">
              <div class="d-flex align-items-center">
                <i class="ri-vip-crown-line ri-22px text-primary me-2"></i>
                <span><?= $user['role']?></span>
              </div>
            </td>
          </tr>
         <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!--/ Data Tables -->