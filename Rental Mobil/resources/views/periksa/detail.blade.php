<!-- Navbar -->
@include('layouts.header');
<!-- /.navbar -->
<!-- Main Sidebar Container -->
@include('layouts.sidebar');
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Periksa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Periksa</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>Tensi</th>
                                <th>Keterangan</th>
                                <th>Pasien ID</th>
                                <th>Dokter ID</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_periksa as $periksa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $periksa->tanggal }}</td>
                                    <td>{{ $periksa->berat }}</td>
                                    <td>{{ $periksa->tinggi }}</td>
                                    <td>{{ $periksa->tensi }}</td>
                                    <td>{{ $periksa->keterangan }}</td>
                                    <td>{{ $periksa->nama_pasien }}</td>
                                    <td>{{ $periksa->nama_dokter }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
{{-- footer --}}
@include('layouts.footer');
{{-- tutup footer --}}
