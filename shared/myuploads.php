<div class="col-xl-8 order-xl-1">
  <div class="card bg-secondary shadow">
    <div class="card-header bg-white border-0">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">My Uploads</h3>
        </div>
        <?php    include '../lib/myuploadsGetter.php';?>
      </div>
    </div>
    <div class="card-body">
      <!-- <form action="../lib/db.php" method="POST"> -->
      <h1 class=" text-muted mb-4">My BOOKS (<?php echo $count ?>)</h1>
      <div class="pl-lg-4">
        <?php
                   
                      include 'myuploadsslider.php';

                ?>
        <div class="row">
          <div class="col-lg-6">
          </div>
        </div>
      </div>
    </div>
  </div>