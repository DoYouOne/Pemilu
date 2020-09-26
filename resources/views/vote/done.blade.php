@extends('index')

@section ('content')
    {{--  <h3>Selamat Datang</h3>
    <h4>Ini adalah halaman Vote ber status {{ auth()->user()->status }}</h4>
    <span>{{auth()->user()->email}}</span>  --}}

    {{--  <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Vote
                    <small>material design bootstrap inputs, input groups, custom checkboxes and radio controls and more</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
    </div>  --}}
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMBS -->
            {{--  <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">More</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Form Stuff</span>
                </li>
            </ul>  --}}
            <!-- END PAGE BREADCRUMBS -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <div class="portlet light ">
                    <div class="portlet-body form">
                            <div class="form-body">
                                <h2 align="center">Pemilihan Ketua Himpunan <br>
                                    Teknik Informatika S-1</h2>
                                <h4 align="center">Periode 2020/2021</h4><br><br>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            @foreach ($candidate as $c)
                                                <div class="col-sm-5">
                                                    <img src="{{ URL::asset($c->foto) }}" alt="candidate-1" style="height:280px; width:auto; padding-bottom:10px; margin-left: 45px">
                                                    <h4 align="center">{{ $c->kandidat }}</h4>
                                                    <h5 align="center">&emsp;{{ $c->jumlah }} Suara</h5>
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
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>

@stop
