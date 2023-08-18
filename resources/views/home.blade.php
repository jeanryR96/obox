@extends('adminlte::page')

@section('title','Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
      <h4></h4>
    </div>
</div>
<div class="row">
  <div class="col-12 col-sm-12">
    <div class="card card-info disabled card-tabs">
      <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-kredit" aria-selected="true">Kredit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-operasional" aria-selected="false">Operasional</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-likuiditas" aria-selected="false">Likuiditas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-hoc" aria-selected="false">Data-Add-Hoc</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
          <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            <div class="card-body pad table-responsive">
              
              <table class="table text-justify table-sm">
                <tr>
                  <th colspan="4"><h4><i class="fas fa-edit"></i><strong> Risiko Kredit</strong></h4></th>
                </tr>
                <tr>
                  <td width="16pt"><a href="{{ url('kredit/CR006A') }}" class="btn btn-block btn-primary btn-xs">CR006-A</a></td>
                  <td>Debitur Baru Plafon Terbesar</td>
                </tr>
                <tr>
                  <td width="16pt"><a href="{{ url('kredit/CR007A') }}" class="btn btn-block btn-primary btn-xs">CR007-A</a></td>
                  <td>Debitur Top-Up Plafon Terbesar</td>
                </tr>
                <tr>
                  <td width="16pt"><a href="{{ url('kredit/CR008A') }}" class="btn btn-block btn-primary btn-xs">CR008-A</a></td>
                  <td>Debitur Penurunan Baki Debet Terbesar</td>
                </tr>
                <tr>
                  <td width="16pt"><a href="{{ url('kredit/CR009A') }}" class="btn btn-block btn-primary btn-xs">CR009-A</a></td>
                  <td>Debitur Perubahan Kualitas Berdasarkan Baki Debet Terbesar</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
         </div>
         <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
          <div class="card-body pad table-responsive">
            <table class="table text-justify table-sm">
              <tr>
                <th colspan="4"><h4><i class="fas fa-edit"></i><strong> Risiko Operasional</strong></h4></th>
              </tr>
              <tr>
                <td width="16pt"><a href="{{ url('operasional/OP001A') }}" class="btn btn-block btn-primary btn-xs">OP001-A</a></td>
                <td>Pemantauan Mutasi Kas Harian</td>
              </tr>
              <tr>
                <td width="16pt"><a href="{{ url('operasional/OP002A') }}" class="btn btn-block btn-primary btn-xs">OP002-A</a></td>
                <td>Pemantauan Penempatan pada Bank Lain</td>
              </tr>
              <tr>
                <td width="16pt"><a href="{{ url('operasional/OP003A') }}" class="btn btn-block btn-primary btn-xs">OP003-A</a></td>
                <td>Pengelolaan Buku Tabungan dan Bilyet Deposito</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
         </div>
         <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
          <div class="card-body pad table-responsive">
            <table class="table text-justify table-sm">
              <tr>
                <th colspan="2"><h4><i class="fas fa-edit"></i><strong> Risiko Likuiditas</strong></h4></th>
              </tr>
              <tr>
                <td width="16pt"><a href="{{url('/likuiditas/LQ003A') }}" class="btn btn-block btn-success btn-xs">LQ003-A</a></td>
                <td>10 Nasabah dengan Dana Masuk Terbesar</td>
              </tr>
              <tr>
                <td width="16pt"><a href="{{url('/likuiditas/LQ004A') }}" class="btn btn-block btn-success btn-xs">LQ004-A</a></td>
                <td>10 Nasabah dengan Dana Keluar Terbesar</td>
              </tr>
              <tr>
                <td width="16pt"><a href="{{url('/likuiditas/LQ005A') }}" class="btn btn-block btn-success btn-xs">LQ005-A</a></td>
                <td>Pemantauan Cash Ratio Mingguan</td>
              </tr>
              <tr>
                <td width="16pt"><a href="{{url('/likuiditas/LQ006A') }}" class="btn btn-block btn-success btn-xs">LQ006-A</a></td>
                <td>Pemantauan Loan to Deposit Ratio (LDR)</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
         </div>
         <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
          <div class="card-body pad table-responsive">
            <table class="table text-justify table-sm">
              <tr>
                <th colspan="2"><h4><i class="fas fa-edit"></i><strong> Data Ad-Hoc</strong></h4></th>
              </tr>
              <tr>
                <td width="16pt"><a href="" class="btn btn-block btn-info btn-xs">LL001UN-A</a></td>
                <td>Data Pendukung Non Rutin</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
          Laporan ini berisi data yang tidak secara rutin dibutuhkan oleh Pengawas khususnya untuk data yang sifatnya pendukung.
         </div>
        </div>
      </div>
    </div>
  </div>
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
