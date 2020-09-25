<style>
    #y {
        border-radius: 25px;
        background: #4BB543;
        padding-top: 3px;
        padding-left:3px;
        margin-left: 10%;
        color: white;
        width: 20px;
        font-size: 14;
        height: 20px;
    }
    #n {
        border-radius: 25px;
        background: #DE4019;
        padding-top: 3px;
        padding-left:3px;
        margin-left: 10%;
        color: white;
        width: 20px;
        font-size: 14;
        height: 20px;
    }
</style>
@extends('master')

@section ('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h3 align="center">Hasil Pemilihan Ketua Himpunan
                            <br> Teknik Informatika S-1
                        </h3>
                        <h5 align="center" style="margin-top: -5px;">Periode 2020-2021</h5>
                        <div class="row">
                            @foreach ($candidate as $c)
                                <div class="col-sm-6">
                                    <img src="{{ URL::asset('user/assets/pages/img/avatars/team5.jpg') }}" alt="candidate-1" style="height:280px; width:auto; padding-bottom:10px;">
                                    <h4 align="center">{{ $c->kandidat }}</h4>
                                    <h4 align="center">{{ $c->jumlah }} Suara</h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
