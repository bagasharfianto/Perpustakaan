<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    
    <!--Start Label Jumlah-->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col h4 TitleCard">
                            Data Buku
                        </div>
                        <div class="col text-end h4">
                          <?php echo $SumBuku ; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="http://127.0.0.1:8000/DataBuku">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-9 h4 TitleCard">
                            Data Penerbit
                        </div>
                        <div class="col text-end h4">
                            <?php echo $SumPenerbit; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="http://127.0.0.1:8000/DataPeminjam">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9 h4 TitleCard">
                            Data Pengarang
                        </div>
                        <div class="col text-end h4">
                            <?php echo $SumPengarang; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="http://127.0.0.1:8000/PengajuanPeminjam">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9 h4 ">
                            Data Pengembali
                        </div>
                        <div class="col text-end h4">
                          100
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="http://127.0.0.1:8000/Laporan">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Label Jumlah-->

    <!--Start Diagram Jumlah-->
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Data Buku Tiap Bulan
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Data Peminjam
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <!--End diagram Jumlah-->

    <!--Start Tabel -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Siswa Meminjam Buku
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Daftar Buku yang di pinjam</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Pengembalian</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Budi Setiadi</td>
                        <td>VII-1</td>
                        <td>Dilan 1999</td>
                        <td>12/05/2022</td>
                        <td>19/05/2022</td>
                    </tr>
                    <tr>
                        <td>Budi Setiadi</td>
                        <td>VII-1</td>
                        <td>Dilan 1999</td>
                        <td>12/05/2022</td>
                        <td>19/05/2022</td>
                    </tr>
                    <tr>
                        <td>Budi Setiadi</td>
                        <td>VII-1</td>
                        <td>Dilan 1999</td>
                        <td>12/05/2022</td>
                        <td>19/05/2022</td>
                    </tr>
                    <tr>
                        <td>Budi Setiadi</td>
                        <td>VII-1</td>
                        <td>Dilan 1999</td>
                        <td>12/05/2022</td>
                        <td>19/05/2022</td>
                    </tr>
                    <tr>
                        <td>Budi Setiadi</td>
                        <td>VII-1</td>
                        <td>Dilan 1999</td>
                        <td>12/05/2022</td>
                        <td>19/05/2022</td>
                    </tr>
                    <tr>
                        <td>Budi Setiadi</td>
                        <td>VII-1</td>
                        <td>Dilan 1999</td>
                        <td>12/05/2022</td>
                        <td>19/05/2022</td>
                    </tr>
                    <tr>
                        <td>Budi Setiadi</td>
                        <td>VII-1</td>
                        <td>Dilan 1999</td>
                        <td>12/05/2022</td>
                        <td>19/05/2022</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--End Tabel -->
</div>
</main>
