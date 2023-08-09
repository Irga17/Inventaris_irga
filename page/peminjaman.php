<div class="row">
    <center>
        <h2>Peminjaman Inventaris</h2>
    </center>
    <hr>
</div>
<div class="col-lg-4">
    <div class="panel panel-primary">
        <div class="panel-heading">Peminjaman</div>
        <div class="panel-body">
            <form action="">
                <div class="col-md-12">
                    <div class="form-grub">
                        <label for="">Kode Peminjaman</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="form-grub">
                        <label for="">Nama peminjam</label>
                        <select name="" id="" class="form-control">
                            <option value="">Nama pegawai</option>
                        </select>
                    </div>
                    <div class="form-grub">
                        <label for="">Pilih barang</label>
                        <select name="" id="" class="form-control">
                            <option value="">Laptop</option>
                            <option value="">Kabel kolor</option>
                        </select>
                    </div>
                    <div class="form-grub">
                        <label for="">Jumlah Peminjaman</label>
                        <input type="number" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-md btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-8">
    <div class="panel panel-success">
        <div class="panel panel-heading">Dafyar barang pinjam</div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tgl. Pinjam</th>
                        <th>Nama peminjam</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Tgl. Kembali</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>8-8-2023</td>
                        <td>Irga</td>
                        <td>Laptop</td>
                        <td>10</td>
                        <td>10-8-2023</td>
                        <td>
                            <label for="" class="label label-danger">Belum Disetujui</label>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Konfirmasi</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>8-8-2023</td>
                        <td>Firman</td>
                        <td>Laptop</td>
                        <td>10</td>
                        <td>10-8-2023</td>
                        <td>
                            <label for="" class="label label-warning">Suda Disetujui</label>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Konfirmasi</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>