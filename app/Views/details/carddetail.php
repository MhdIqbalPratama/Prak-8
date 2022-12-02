<?= $this->extend ('layout/temp'); ?>
 <?=  $this->section ('content'); ?>

 <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2">Detail Device</h2>
            <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $device['gambar']; ?>" alt="" class="sampul">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>Nama Alat :</b><?= $device['device_name']?></h5>
        <p class="card-text">Merk :<?= $device['device_brand']?></p>
        <p class="card-text">Jumlah :<?= $device['device_quantity']?></p>

        <br><br>
        <a href="/details/index">Back to Device List</a>
      </div>
    </div>
  </div>
</div>
              </div>
        </div>
    </div>



<?= $this->endSection();?>