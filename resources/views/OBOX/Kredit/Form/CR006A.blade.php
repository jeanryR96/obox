@extends('adminlte::page')

@section('title','Kredit:CR006-A')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4><i class=""></i></h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/home') }}">Home</a></li>
                    <li class="breadcrumb-item active">CR006-A</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-angle-right"></i><strong> Form Input ~ CR006-A ~ Debitur Baru Plafon Terbesar</strong></h3>
            </div>
        </div>
        <!-- /.card-header -->
    </div>
    <!-- /.col -->
    
    <form method="post" action="#" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="flag-detail">Flag Detail</label>
                        <input class="form-control" type="text" style="width: 100%;" name="fdetail" placeholder="Flag Detail">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="sandi-kantor">Sandi Kantor</label>
                        <input class="form-control" type="text" style="width: 100%;" name="skantor" placeholder="Sandi Kantor" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="cif">No. CIF</label>
                        <input class="form-control" type="text" style="width: 100%;" name="cif" placeholder="No. CIF">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="nasabah">Nama Nasabah</label>
                        <input class="form-control" type="text" style="width: 100%;" name="nasabah" placeholder="Nama Nasabah">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="id">No. Identitas</label>
                        <input class="form-control" type="text" style="width: 100%;" name="id" placeholder="No. Identitas">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="baki-debet">Baki Debet</label>
                        <input class="form-control" type="text" style="width: 100%;" name="bdebet" placeholder="Baki Debet">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="jenis-agunan">Jenis Agunan</label>
                        <input class="form-control" type="text" style="width: 100%;" name="jagunan" placeholder="Jenis Agunan" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="nilai-agunan">Nilai Agunan</label>
                        <input class="form-control" type="text" style="width: 100%;" name="nagunan" placeholder="Nilai Agunan" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6" for="exampleInputFile">Data Pendukung</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input class="form-control custom-file-input" type="file" style="width: 100%;" name="data-pendukung" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleFileInput">Pilih File Pendukung</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-12">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-warning"><i class="fas fa-circle"></i> Hapus</button>
                        <a href="" class="btn btn-danger"><i class="fas fa-backward"></i> Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
  <!-- /.row -->
@endsection
@section('footer')
  <div class="pull-right hidden-xs">
    <p> <span>&copy; Copyright <strong>2021 -
    <script type="text/javascript" language="Javascript"> 
      var thisTime = new Date();
          year = thisTime.getYear();
          if(year < 1900)
          year = year + 1900;
          document.write(year);
    </script></strong></span> PT. BPR Banksar Dana Loka. | All Rights Reserved</span></p>
  </div>
@endsection