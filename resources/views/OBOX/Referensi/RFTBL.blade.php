@extends('adminlte::page')

@section('title','Referensi')
    
@section('content')
   <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5><i class="fas fa-angle-right"></i><strong> OJK-BOX BPR/BPRS Table Referensi</strong></h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Table Referensi</li>
                    </ol>
                </div>
            </div>
        </div>
   </section>
   
   <div class="card card-default">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h1 class="card-title"><i class="fas fa-angle-right"></i><strong> Title of Table Referensi </strong></h1>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="">
            @csrf    
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control select2" style="width: 100%" name="sandi" id="">
                                <option selected="selected"> Choose References</option>
                                @foreach($data as $key => $value)
                                    <option value="{{ $value->sndid }}" name="sandi"> {{ $value->snddesc }}</option>    
                                @endforeach
                            </select>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button class="btn btn-info" type="submit"> Pilih</button>
                        </div>
                    </div>
                </div>
            </div>
        <form>
   </div>
   <div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="card-body p-1 table-responsive" style="height: 475px">
                <table class="table table-bordered table-head-fixed table-sm text-wrap">
                    <thead style="height: 40px; text-align:center; color:#f5f5f5;">
                        <tr>
                            <th style="background-color:#17a2b8;"> No. </th>
                            <th style="background-color:#17a2b8;"> Keterangan Sandi </th>
                            <th style="background-color:#17a2b8;"> Sandi </th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp
                        <tr>
                            <td style="width: 70px;">{{ $no++ }}</td>
                            <td> Keterangan Satu </td>
                            <td style="width: 8%;">001130</td>
                        </tr>   
                    </tbody>
                </table>
               </div>
           </div>
       </div>
   </div>
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