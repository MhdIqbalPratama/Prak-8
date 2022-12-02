<?= $this->extend ('layout/temp'); ?>
 <?=  $this->section ('content'); ?>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Gambar</th>
            <th scope="col">Device_name</th>
            <th scope="col">Merk</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            <?php foreach($monitor as $m) :?>
            <tr>
            <th scope="row"><?= $i++;?></th>
            <td><img src="/img/<?= $m['gambar']; ?>" alt="" class="sampul"></td>
            <td> <?= $m['device_name']; ?> </td>
            <td> <?= $m['device_brand']; ?></td>
            <td> <?= $m['device_quantity']; ?></td>
            <td> <?= $m['device_status']; ?></td>
            <td>
            <a href="/details/<?= $m['slug']?>" class="btn btn-success">Details</a>
            </td>
            </tr>
            <?php endforeach ?>
            
        </tbody>
        </table>
<?= $this->endSection();?>