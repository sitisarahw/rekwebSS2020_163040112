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

                  <div class="form-group {{ $errors->has('npp') ? 'has-error' : '' }}">
                      <label for="NPP" class="control-label">NPP</label>
                      <input type="text" class="form-control" name="npp" placeholder="NPP">
                      @if ($errors->has('npp'))
                          <span class="help-block">{{ $errors->first('npp') }}</span>
                      @endif
                  </div>

                  <div class="form-group {{ $errors->has('npp') ? 'has-error' : '' }}">
                      <label for="NPP" class="control-label">NPP</label>
                      <input type="text" class="form-control" name="npp" placeholder="NPP">
                      @if ($errors->has('npp'))
                          <span class="help-block">{{ $errors->first('npp') }}</span>
                      @endif
                  </div>

                  <div class="form-group {{ $errors->has('npp') ? 'has-error' : '' }}">
                      <label for="NPP" class="control-label">NPP</label>
                      <input type="text" class="form-control" name="npp" placeholder="NPP">
                      @if ($errors->has('npp'))
                          <span class="help-block">{{ $errors->first('npp') }}</span>
                      @endif
                  </div>

                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-info">Save</button>
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