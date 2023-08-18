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
                    <li class="breadcrumb-item active">CR007-A</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-angle-right"></i><strong> Form Input ~ CR007-A ~ Debitur Top-Up Plafon Terbesar</strong></h3>
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
                        <label class="col-lg-6 control-label" for="cif">No. CIF</label>
                        <input class="form-control" type="text" style="width: 100%;" name="cif" placeholder="No. CIF">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="rekening">No. Rekening</label>
                        <input class="form-control" type="text" name="rekening" placeholder="No. Rekening" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="plafon-sebelum">Plafon Sebelum</label>
                        <input class="form-control" type="number" style="width: 100%;" name="plafon-sebelum" placeholder="Plafon Sebelum" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="baki-debet-sebelum">Baki Debet Sebelum</label>
                        <input class="form-control" type="number" style="width: 100%;" name="baki-debet-sebelum" placeholder="Baki Debet Sebelum" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-8 control-label" for="jumlah-rekening-sebelum">Jumlah Rekening Sebelum</label>
                        <input class="form-control" type="number" style="width: 100%;" name="jumlah-rekening-sebelum" placeholder="Jumlah Rekening Sebelum" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="sandi-kantor">Sandi Kantor</label>
                        <input class="form-control" type="text" style="width: 100%;" name="skantor" placeholder="Sandi Kantor">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="id">No. Identitas</label>
                        <input class="form-control" type="text" style="width: 100%;" name="id" placeholder="No. Identitas">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="jenis-debitur">Jenis Debitur</label>
                        <select class="form-control select2" style="width: 100%;" name="jdebitur" id="">
                            <option selected="selected">Pilih Jenis Debitur</option>
                            <option value="">Jenis Debitur 1</option>
                            <option value="">Jenis Debitur 2</option>
                            <option value="">Jenis Debitur 3</option>
                            <option value="">Jenis Debitur 4</option>
                            <option value="">Jenis Debitur 5</option>
                            <option value="">Jenis Debitur 6</option>
                            <option value="">Jenis Debitur 7</option>
                            <option value="">Jenis Debitur 8</option>
                            <option value="">Jenis Debitur 9</option>
                            <option value="">Jenis Debitur 10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="plafon-sesudah"> Plafon Sesudah</label>
                        <input class="form-control" type="number" style="width: 100%;" name="plafon-sesudah" placeholder="Plafon Sesudah" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="baki-debet-sesudah">Baki Debet Sesudah</label>
                        <input class="form-control" type="number" style="width: 100%;" name="baki-debet-sesudah" placeholder="Baki Debet Sesudah" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-8 control-label" for="jumlah-rekening-sesudah">Jumlah Rekening Sesudah</label>
                        <input class="form-control" type="number" style="width: 100%;" name="jumlah-rekening-sesudah" placeholder="Jumlah Rekening Sesudah" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="nama-debitur">Nama Debitur</label>
                        <input class="form-control" type="text" style="width:100%;" name="nasabah" placeholder="Nama Nasabah" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-8 control-label" for="kode-kelompok-kredit">Kode Kelompok Kredit</label>
                        <input class="form-control" type="text" style="width:100%;" name="kode-kredit" placeholder="Kode Kelompok Kredit" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="top-up">Tanggal Top-up</label>
                        <input class="form-control" type="date" name="tanggal" id="">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="selisih-plafon">Selisih Plafon</label>
                        <input class="form-control" type="number" style="width: 100%;" name="selish-plafon" placeholder="Selisih Plafon" id="" disabled>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="selisih-baki-debet">Selisih Baki Debet</label>
                        <input class="form-control" type="number" style="width: 100%;" name="selisih-baki-debet" placeholder="Selisih Baki Debet" id="" disabled/>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-6" for="exampleInputFile">Data Pendukung</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input class="form-control custom-file-input" type="file" style="width: 100%;" name="data-pendukung" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleFileInput">Pilih Data Pendukung</label>
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