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
                    <li class="breadcrumb-item active">LQ003-A</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-angle-right"></i><strong> Form Input ~ LQ003-A ~ 10 Nasabah dengan Dana Masuk Terbesar</strong></h3>
            </div>
        </div>
        <!-- /.card-header -->
    </div>
    <!-- /.col -->
    
    <form method="post" action="#" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="flag-detail">Flag Detail</label>
                        <input class="form-control" type="text" style="width: 100%;" name="fdetail" placeholder="Flag Detail">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="id">No Identitas</label>
                        <input class="form-control" type="text" style="width: 100%;" name="id" placeholder="No. Identitas">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="cif">No. CIF</label>
                        <input class="form-control" type="text" style="width: 100%;" name="cif" placeholder="No. CIF">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="dpk">Jenis DPK/Simpanan Dari Bank Lain</label>
                        <select class="form-control select2" style="width: 100%;" name="dpk" id="dpk">
                            <option selected="selected" value="">Pilih Jenis DPK</option>
                            <option value="">1</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="baki-debet">Nama Nasabah</label>
                        <input class="form-control" type="text" style="width: 100%;" name="nama" placeholder="Nama Nasabah">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="nominal">Nominal</label>
                        <input class="form-control" type="number" style="width: 100%;" name="nominal" placeholder="Nominal">
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