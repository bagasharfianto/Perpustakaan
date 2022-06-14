<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Data Buku</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Update Buku
        </div>
        <div class="card-body">
        <?php foreach ($records as $data ) {?>
              <form class="row g-3" action="<?= base_url('dataBuku/edit_save') ?>" method="post">
              <input type="hidden" id="custId" name="Id" value="<?= $data['NoUrutBuku']?>">
                <div class="col-md-3">
                  <label for="inputEmail4" class="form-label">Tanggal Masuk Perpus</label>
                  <input type="date" class="form-control" id="TglMasukPerpus" name="TglMasukPerpus" value="<?= $data['TglMasukPerpus']?>">
                </div>
                <div class="col-md-4">
                  <label for="inputPassword4" class="form-label">No Urut Buku</label>
                  <input type="text" class="form-control" id="NoUrutBuku" name="NoUrutBuku" value="<?= $data['NoUrutBuku']?>">
                </div>
                <div class="col-md-5">
                  <label for="inputEmail4" class="form-label">No Induk Buku</label>
                  <input type="text" class="form-control" id="NoIndukBuku" name="NoIndukBuku" value="<?= $data['NoIndukBuku']?>">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Pengarang</label>
                  <input type="text" class="form-control" id="NamaPengarang" name="NamaPengarang" value="<?= $data['Pengarang']?>" >
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Judul Buku</label>
                  <input type="text" class="form-control" id="JudulBuku" name="JudulBuku" value="<?= $data['JudulBuku']?>">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Penerbit</label>
                  <input type="text" class="form-control" id="NamaPenerbit" name="NamaPenerbit" value="<?= $data['Penerbit']?>">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Tahun Terbit</label>
                  <input type="text" class="form-control" id="TahunTerbit" name="TahunTerbit" value="<?= $data['TahunTerbit']?>">
                </div>
                <!-- <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Harga</label>
                  <input type="text" class="form-control" id="Harga" name="Harga" value="">
                </div> -->
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Sumber Perolehan</label>
                  <input type="text" class="form-control" id="NamaPemberian" name="NamaPemberian" value="<?= $data['SumberPeroleh']?>">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Golongan</label>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="Golongan" name="Golongan" value="<?= $data['Golongan']?>">
                  
                  <?php  foreach ($DataGolongan as $dataG ) {?>
                    <option value="<?php echo $dataG['Golongan'] ?>" 
                    <?= $dataG['Golongan'] == $data['Golongan'] ? "selected":" " ?>>
                    <?php echo $dataG['Golongan'] . " - " . $dataG['Nama_Golongan']  ?></option>
                  <?php   }  ?>
                  </select>
                </div>
                <!-- <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Eksemplar</label>
                  <input type="text" class="form-control" id="eksemplar" name="eksemplar" value="">
                </div> -->
                <!-- <div class="col-md-12">
                  <label for="inputPassword4" class="form-label">Keterangan</label>
                  <input type="text" class="form-control" id="Keterangan" name="Keterangan" value="">
                </div> -->
                <div class="col-6">
                  <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
                <div class="col-6">
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form>
              <?php   }  ?>
        </div>
    </div>
</div>