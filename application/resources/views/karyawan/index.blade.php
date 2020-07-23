@extends('layout.main')

@section('content')

<div class="content-wrapper">

    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Karyawan</h1>
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
              <div class="card-header">
                <a href="{{ route('karyawan.create') }}" class="btn btn-primary">
                    <i class="nav-icon fas fa-pen"></i>
                    <span>Tambah Data</span>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr style="text-align: center;">
                    <th>#</th>
                    <th>Foto</th>
                    <th>NPP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenjang</th>
                    <th>Jabatan</th>
                    <th>Wilayah</th>
                    <th>Singkatan</th>
                    <th>Unit</th>
                    <th>Unit Besaran</th>
                    <th colspan="2">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach( $karyawan as $kw)
                  <tr style="text-align: center;">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <img src="{{ url('assets/img/karyawan/')}}/{{ $kw->link_img}}" alt="Foto Karyawan" style="width:100px; height:150px">
                    </td>
                    <td>{{ $kw->npp }}</td>
                    <td>{{ $kw->nama }}</td>
                    <td>{{ $kw->tgl_lahir }}</td>
                    <td>{{ $kw->jenjang }}</td>
                    <td>{{ $kw->jabatan }}</td>
                    <td>{{ $kw->wilayah }}</td>
                    <td>{{ $kw->singkatan }}</td>
                    <td>{{ $kw->unit }}</td>
                    <td>{{ $kw->unit_besaran }}</td>
                    <td>
                        <a href="{{ route('karyawan.edit', $kw->id) }}" class="btn btn-success">
                            <i class="nav-icon fas fa-edit", style="color: white;"></i>
                            <span style="color: white;">Ubah</span>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('karyawan.destroy', $kw->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="nav-icon fas fa-eraser"></i>
                                <span>hapus</span>
                            </button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>NPP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenjang</th>
                    <th>Jabatan</th>
                    <th>Wilayah</th>
                    <th>Singkatan</th>
                    <th>Unit</th>
                    <th>Unit Besaran</th>
                    <th colspan="2">Action</th>
                  </tr>
                  </tfoot>
                </table>
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
