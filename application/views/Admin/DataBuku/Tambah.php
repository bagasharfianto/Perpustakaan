<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Data Buku</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Form Tambah Buku
        </div>
        <div class="card-body">
              <form class="row g-3" action="<?= base_url('dataBuku/tambah_save') ?>" method="post">
                <div class="col-md-3">
                  <label for="inputEmail4" class="form-label">Tanggal Masuk Perpus</label>
                  <input type="date" class="form-control" id="TglMasukPerpus" name="TglMasukPerpus">
                </div>
                <div class="col-md-4">
                  <label for="inputPassword4" class="form-label">No Urut Buku</label>
                  <input type="text" class="form-control" id="NoUrutBuku" name="NoUrutBuku">
                </div>
                <div class="col-md-5">
                  <label for="inputEmail4" class="form-label">No Induk Buku</label>
                  <input type="text" class="form-control" id="NoIndukBuku" name="NoIndukBuku">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Pengarang</label>
                  <input type="text" class="form-control" id="Pengarang" name="NamaPengarang">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Judul Buku</label>
                  <input type="text" class="form-control" id="JudulBuku" name="JudulBuku">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Penerbit</label>
                  <input type="text" class="form-control" id="Penerbit" name="NamaPenerbit">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Tahun Terbit</label>
                  <input type="text" class="form-control" id="TahunTerbit" name="TahunTerbit">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Harga</label>
                  <input type="text" class="form-control" id="Harga" name="Harga">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Sumber Perolehan</label>
                  <input type="text" class="form-control" id="Pemberian" name="NamaPemberian">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Golongan</label>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="Golongan" name="Golongan">
                  
                  <option selected>Pilih Golongan</option>
                  <?php  foreach ($Golongan as $data ) {?>
                    <option value="<?php echo $data['Golongan'] ?>"><?php echo $data['Golongan'] . " - " . $data['Nama_Golongan']  ?></option>
                  <?php   }  ?>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Eksemplar</label>
                  <input type="text" class="form-control" id="eksemplar" name="eksemplar">
                </div>
                <div class="col-md-12">
                  <label for="inputPassword4" class="form-label">Keterangan</label>
                  <input type="text" class="form-control" id="Keterangan" name="Keterangan">
                </div>
                <div class="col-6">
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
                <div class="col-6">
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form>
        </div>
    </div>
</div>