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
                    <h1>Dashboard Pembayaran</h1>
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
                <h3 class="card-title">Pembayaran</h3>

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
                                <th>Jumlah Bayar</th>
                                <th>Peminjaman</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pembayaran as $pembayaran)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pembayaran->tanggal }}</td>
                                    <td>{{ $pembayaran->jumlah_bayar }}</td>
                                    <td>{{ $pembayaran->nama_peminjam_peminjaman}}</td>
                                    <td>
                                        <a href=" {{url('pembayaran/detail/' .$pembayaran->id) }}"><button class="btn btn-success">Detail</button></a>
                                        <a href="{{ url('pembayaran/edit/' . $pembayaran->id) }}"><button class="btn btn-warning">Edit</button></a>
                                        <a href="{{ url('pembayaran/delete/' . $pembayaran->id) }}">
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Hapus nama pembayaran yang bernama {{ $pembayaran->id }}')">Hapus</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                        data-target="#inputModal">Tambah</button>
                    <!-- Modal -->
                    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog"
                        aria-labelledby="inputModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="inputModalLabel">Tambah Pembayaran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                     </div>
                                     <div class="modal-body">
                                    <form action="{{ url('pembayaran/store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_bayar">Jumlah Bayar</label>
                                            <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="peminjaman_id">Peminjaman</label>
                                            <select id="select" name="peminjaman_id" class="form-control">
                                                @foreach ($peminjamans as $peminjaman)
                                                    <option value="{{ $peminjaman->id }}">{{ $peminjaman->nama_peminjam }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block"
                                            style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
