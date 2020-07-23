@extends('layout.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Karyawan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group">
                      <label for="NPP" class="control-label">NPP</label>
                      <input type="text" class="form-control @error('npp') is-invalid @enderror" name="npp" placeholder="NPP" value="{{ old('npp') }}">
                      @error('npp')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Nama" class="control-label">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                      @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Tanggal Lahir" class="control-label">Tanggal Lahir</label>
                      <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ old('tgl_lahir') }}">
                      @error('tanggal_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Jenjang" class="control-label">Jenjang</label>
                      <input type="text" class="form-control @error('jenjang') is-invalid @enderror" name="jenjang" placeholder="Jenjang" value="{{ old('jenjang') }}">
                      @error('jenjang')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Jabatan" class="control-label">Jabatan</label>
                      <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Jabatan" value="{{ old('jabatan') }}">
                      @error('jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Wilayah" class="control-label">Wilayah</label>
                      <input type="text" class="form-control @error('wilayah') is-invalid @enderror" name="wilayah" placeholder="Wilayah" value="{{ old('wilayah') }}">
                      @error('wilayah')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Singkatan" class="control-label">Singkatan</label>
                      <input type="text" class="form-control @error('singkatan') is-invalid @enderror" name="singkatan" placeholder="Singkatan" value="{{ old('singkatan') }}">
                      @error('singkatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Unit" class="control-label">Unit</label>
                      <input type="text" class="form-control @error('unit') is-invalid @enderror" name="unit" placeholder="Unit" value="{{ old('unit') }}">
                      @error('unit')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Unit Besaran" class="control-label">Unit Besaran</label>
                      <input type="text" class="form-control @error('unit_besaran') is-invalid @enderror" name="unit_besaran" placeholder="Unit Besaran" value="{{ old('unit_besaran') }}">
                      @error('unit_besaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="Foto" class="control-label">Foto</label>
                      <input type="text" class="form-control @error('link_img') is-invalid @enderror" name="link_img" placeholder="Foto" value="{{ old('link_img') }}">
                      @error('link_img')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-info">Tambah</button>
                      <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">
                        <i class="nav-icon fas fa-angle-left"></i>
                        <span>Back</span>
                      </a>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection