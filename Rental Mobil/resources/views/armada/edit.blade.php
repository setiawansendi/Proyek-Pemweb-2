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
                    <h1>Dashboard Armada</h1>
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
                <h3 class="card-title">Armada</h3>

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
                @foreach ($data_armada as $armada)
                    <form action="{{ url('armada/update/' . $armada->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" id="merk" value="{{ $armada->merk }}" name="merk" required>
                        </div>
                        <div class="form-group">
                            <label for="nopol">Nomor Polisi</label>
                            <input type="text" class="form-control" id="nopol" value="{{ $armada->nopol }}" name="nopol" required>
                        </div>
                        <div class="form-group">
                            <label for="thn_beli">Tahun Beli</label>
                            <input type="number" class="form-control" id="thn_beli" value="{{ $armada->thn_beli }}" name="thn_beli" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" value="{{ $armada->deskripsi }}" name="deskripsi" required>
                        </div>
                        <div class="form-group">
                            <label for="kapasitas_kursi">Kapasitas Kursi</label>
                            <input type="number" class="form-control" id="kapasitas_kursi" value="{{ $armada->kapasitas_kursi }}" name="kapasitas_kursi"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" class="form-control" id="rating" value="{{ $armada->rating }}" name="rating" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kendaraan_id">Jenis Kendaraan</label>
                            <select id="select" name="jenis_kendaraan_id" class="form-control">
                                @foreach ($jenis_kendaraans as $jenis_kendaraan)
                                    <option value="{{ $jenis_kendaraan->id }}">{{ $jenis_kendaraan->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block"
                            style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Simpan</button>
                    </form>
                @endforeach
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
{{-- tutup footer --}}
