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
                    <li class="breadcrumb-item active">LQ006-A</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-angle-right"></i><strong> Form Input ~ LQ006-A ~ Pemantauan Loan to Deposit Ratio (LDR)</strong></h3>
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
                        <label class="col-lg-6 control-label" for="giro">Giro</label>
                        <input class="form-control" type="number" style="width: 100%;" name="giro" placeholder="Giro">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="tabumum">Tab. Bank Umum lain pada bank</label>
                        <input class="form-control" type="number" style="width: 100%;" name="tabumum" placeholder="Tabungan bank umum lain pada bank">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="kewajiban">Kewajiban Yang segera dibayar</label>
                        <input class="form-control" type="number" style="width: 100%;" name="kewajiban" placeholder="Kewajiban yang segera dibayar">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="jumlahkewajiban">Jumlah Kewajiban Lancar</label>
                        <input class="form-control" type="number" style="width: 100%;" name="jumlahkewajiban" placeholder="Jumlah Kewajiban Lancar">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="periode">Periode Data</label>
                        <input class="form-control" type="date" style="width: 100%;" name="periode" placeholder="Periode Data">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="selisihlebih">Selisih Lebih tab. antar bank</label>
                        <input class="form-control" type="number" style="width: 100%;" name="selisihlebih" placeholder="Selisih lebih tab. antar bank">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="tabbprlain">Tab. BPR Lain pada bank</label>
                        <input class="form-control" type="number" style="width: 100%;" name="tabbprlain" placeholder="Tab. BPR Lain pada bank">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="tab">Tabungan</label>
                        <input class="form-control" type="number" style="width: 100%;" name="tab" placeholder="Tabungan">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="selisihlebih">Cash Ratio (%)</label>
                        <input class="form-control" type="number" style="width: 100%;" name="ratio" placeholder="Cash Ratio (%)">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-lg-6 control-label" for="kas">Kas</label>
                        <input class="form-control" type="number" style="width: 100%;" name="kas" placeholder="Kas">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="tabpdbanklain">Tab. Pada Bank Lain</label>
                        <input class="form-control" type="number" style="width: 100%;" name="tabpdbanklain" placeholder="Tabungan pada bank lain">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="jmlalatlikuid">Jumlah alat likuid</label>
                        <input class="form-control" type="number" style="width: 100%;" name="jmlalatlikuid" placeholder="Jumlah Alat Likuid">
                    </div>                    
                    <div class="form-group">
                        <label class="col-lg-10 control-label" for="depberjangka">Deposito Berjangka</label>
                        <input class="form-control" type="number" style="width: 100%;" name="depberjangka" placeholder="Deposito Berjangka">
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