<div class="container-fluid px-4">
    <h1 class="mt-4">Data Buku</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Buku
        </div>
        <div class="card-body">
            <div class="MenuTambahan">
                <form action="" id="search">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" ><i class="fa fa-search"></i></button>
                </form>
                <a class="btn btn-primary float-right mt-2" href="<?= base_url("dataBuku/tambah")?>" role="button">Tambah Buku</a>
            </div>
           
            <table class="table table-bordered table-sm text-center ">
                <thead>
                    <tr class="align-middle">
                        <th>Tanggal Masuk Pepus</th>
                        <th>No Urut Buku</th>
                        <th>NO Induk Buku</th>
                        <th>Pengarang</th>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Sumber Perolehan</th>
                        <th>Golongan/Kode</th>
                        <th>Keterangan</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($records as $data ) {?>
                    <tr>
                        <td><?php echo $data['TglMasukPerpus'] ?></td>
                        <td><?php echo $data['NoUrutBuku'] ?></td>
                        <td><?php echo $data['NoIndukBuku'] ?></td>
                        <td><?php echo $data['KodePengarang'] ?></td>
                        <td><?php echo $data['JudulBuku'] ?></td>
                        <td><?php echo $data['KodePenerbit'] ?></td>
                        <td><?php echo $data['TahunTerbit'] ?></td>
                        <td><?php echo $data['KodePemberian'] ?></td>
                        <td><?php echo $data['Golongan'] ?></td>
                        <td><?php echo $data['Keterangan'] ?></td>
                        <td>
                        <a class="btn btn-info" href="<?= base_url("Admin/DataBukuController/edit/{$data['NoUrutBuku']}")?>">Edit</a>
                        <a class="btn btn-danger" href="<?= base_url("Admin/DataBukuController/hapusDataBuku/{$data['NoUrutBuku']}")?>">Hapus</a>
                        <!-- <a class="btn btn-danger" onclick="return confirm('menghapus data?')" href="">Hapus</a> -->
                    </td>
                    </tr>
                <?php   }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>