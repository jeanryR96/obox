@extends('adminlte::page')

@section('title','Kredit:CR006-A')

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
                <h3 class="card-title"><i class="fa fa-users"></i><strong> Debitur Baru Plafon Terbesar</strong></h3>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body p-0 table-responsive" style="height: 450px">
                <table class="table table-bordered table-head-fixed table-sm text-nowrap">
                    <thead style="height: 40px; text-align:center; color:#f5f5f5;">
                        <tr>
                            <th style="background-color:#17a2b8;">Flag Detail</th>
                            <th style="background-color:#17a2b8;">No. CIF</th>
                            <th style="background-color:#17a2b8;">Nama Nasabah</th>
                            <th style="background-color:#17a2b8;">No. Identitas</th>
                            <th style="background-color:#17a2b8;">Baki Debet</th>
                            <th style="background-color:#17a2b8;">Jenis Agunan</th>
                            <th style="background-color:#17a2b8;">Nilai Agunan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>D</td>
                            <td>00000001</td>
                            <td>Nasabah0001</td>
                            <td>00000000000001</td>
                            <td>30000000000</td>
                            <td>01</td>
                            <td>20.000.000.000</td>
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