@extends('layout.mainT')
@section('isi')
<h3>Data Pegawai</h3>
<br>
<div class="btn-group" role="group" aria-label="Basic example">
    <a href="/tambah_pegawai"><button type="button" class="btn btn-primary" name="tambah_pegawai">Tambah Data</button></a>
</div>
<br><br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Username</th>
                        <th style="text-align: center">Status</th>
                        <th style="text-align: center">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

</div>
@endsection
