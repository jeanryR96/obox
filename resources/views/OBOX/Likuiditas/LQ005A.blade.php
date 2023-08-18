@extends('adminlte::page')

@section('title','Likuid:LQ005-A')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/home') }}">Home</a></li>
                    <li class="breadcrumb-item active">LQ005-A</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-angle-right"></i><strong> Pemantauan Cash Ratio Mingguan</strong></h3>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr class="">
                            <th>Flag Detail</th>
                            <th>Periode Data</th>
                            <th>Kas</th>
                            <th>Giro</th>
                            <th>Slsih lebih Tab. antar Bank</th>
                            <th>Tab. Pd Bank Lain</th>
                            <th>Tab. Umum Lain pd Bank</th>
                            <th>Tab. BPR Lain Pd Bank</th>
                            <th>Jml Alat Likuid</th>
                            <th>Kew. Yng Segera Dibayar</th>
                            <th>Tabungan</th>
                            <th>Depo. Berjangka</th>
                            <th>Jml Kew. Lancar</th>
                            <th>CasRatio (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
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