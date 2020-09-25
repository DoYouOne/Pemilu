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
                                            <div class="col-sm-5">
                                                <img src="{{ URL::asset('user/assets/pages/img/avatars/team5.jpg') }}" alt="candidate-1" style="height:300px;">
                                                <h4 align="center">Noelle Kim</h4>
                                                <h5 align="justify">&emsp; Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it to make a type specimen book.</h5>
                                                <h5>
                                                    <ul>
                                                        <li>What is Lorem Ipsum</li>
                                                        <li>Where does it come from</li>
                                                        <li>Where can I get some</li>
                                                        <li>Lorem Ipsum</li>
                                                    </ul>
                                                </h5>
                                            </div>
                                            <div class="col-sm-5">
                                                <img src="{{ URL::asset('user/assets/pages/img/avatars/team6.jpg') }}" alt="candidate-2" style="height:300px;">
                                                <h4 align="center">A-ram Seo</h4>
                                                <h5 align="justify">&emsp; Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</h5>
                                                <h5>
                                                    <ul>
                                                        <li>What is Lorem Ipsum</li>
                                                        <li>Where does it come from</li>
                                                        <li>Where can I get some</li>
                                                        <li>Lorem Ipsum</li>
                                                    </ul>
                                                </h5>
                                            </div>
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
