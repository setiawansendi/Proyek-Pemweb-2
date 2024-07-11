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
                    <h1>Dashboard Peminjaman</h1>
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
                <h3 class="card-title">Peminjaman</h3>

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
                                <th>Nama Peminjaman</th>
                                <th>KTP Peminjaman</th>
                                <th>Keperluan Peminjaman</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Biaya</th>
                                <th>Armada</th>
                                <th>Komentar Peminjaman</th>
                                <th>Status Pinjam</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_peminjaman as $peminjaman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peminjaman->nama_peminjam }}</td>
                                    <td>{{ $peminjaman->ktp_peminjam }}</td>
                                    <td>{{ $peminjaman->keperluan_pinjam}}</td>
                                    <td>{{ $peminjaman->mulai}}</td>
                                    <td>{{ $peminjaman->selesai }}</td>
                                    <td>{{ $peminjaman->biaya}}</td>
                                    <td>{{ $peminjaman->merk_armada}}</td>
                                    <td>{{ $peminjaman->komentar_peminjam}}</td>
                                    <td>{{ $peminjaman->status_pinjam}}</td>
                                    <td>
                                        <a href=" {{url('peminjaman/detail/' .$peminjaman->id) }}"><button class="btn btn-success">Detail</button></a>
                                        <a href="{{ url('peminjaman/edit/' . $peminjaman->id) }}"><button class="btn btn-warning">Edit</button></a>
                                        <a href="{{ url('peminjaman/delete/' . $peminjaman->id) }}">
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Hapus nama armada yang bernama {{ $peminjaman->id }}')">Hapus</button></a>
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
                                    <h5 class="modal-title" id="inputModalLabel">Tambah Peminjaman</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                     </div>
                                     <div class="modal-body">
                                    <form action="{{ url('peminjaman/store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="nama_peminjam">Nama Peminjaman</label>
                                            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ktp_peminjam">KTP Peminjaman</label>
                                            <input type="text" class="form-control" id="ktp_peminjam" name="ktp_peminjam"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="keperluan_pinjam">Keperluan Peminjaman</label>
                                            <input type="text" class="form-control" id="keperluan_pinjam" name="keperluan_pinjam"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mulai">Mulai</label>
                                            <input type="date" class="form-control" id="mulai" name="mulai"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="selesai">Selesai</label>
                                            <input type="date" class="form-control" id="selesai" name="selesai"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="biaya">Biaya</label>
                                            <input type="text" class="form-control" id="biaya" name="biaya"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status_pinjam">Status Pinjam</label>
                                            <input type="number" class="form-control" id="status_pinjam" name="status_pinjam"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="komentar_peminjam">Komentar Peminjaman</label>
                                            <input type="text" class="form-control" id="komentar_peminjam" name="komentar_peminjam"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="armada_id">Armada</label>
                                            <select id="select" name="armada_id" class="form-control">
                                                @foreach ($armadas as $armada)
                                                    <option value="{{ $armada->id }}">{{ $armada->merk }}
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
