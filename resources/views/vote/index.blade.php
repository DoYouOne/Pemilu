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
                        <form role="form" action="{{ url('vote/process') }}" method="post">
                            @csrf
                            <div class="form-body">
                                <h2 align="center">Pemilihan Ketua Himpunan <br>
                                    Teknik Informatika S-1</h2>
                                <h4 align="center">Periode 2020/2021</h4><br><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input has-success">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Isi nama lengkap anda" name="nama" pattern="[A-Za-z].{3,}" title="Masukkan minimal 3 huruf">
                                                <input type="hidden" class="form-control"  name="id_users" value={{ Auth::user()->id }}>
                                                <input type="hidden" class="form-control" value="0" name="nim">
                                                <label for="form_control_1">Nama Lengkap</label>
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $cek = Auth::user()->status;
                                    @endphp
                                    @if ($cek != 2)
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-icon">
                                                    <input type="number" class="form-control" placeholder="Isi NIM anda" name="nim" pattern="[0-9]{3}" title="Masukkan 7 angka saja">
                                                    <label for="form_control_1">NIM</label>
                                                    <i class="icon-pencil"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            @foreach ($candidate as $c)
                                                <div class="col-sm-5">
                                                    <img src="{{ URL::asset($c->foto) }}" alt="candidate-1" style="height:280px; width:auto; padding-bottom:10px; margin-left: 45px">
                                                    <h4 align="center">{{ $c->kandidat }}</h4>
                                                    <h5 align="justify">&emsp;{{ $c->VISI }}</h5>
                                                    <h5>
                                                        <ol>
                                                            <li>{{ $c->MISI_1 }}</li>
                                                            <li>{{ $c->MISI_2 }}</li>
                                                            <li>{{ $c->MISI_3 }}</li>
                                                            <li>{{ $c->MISI_4 }}</li>
                                                        </ol>
                                                    </h5>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <input type="range" min="0" max="100" id="vol" oninput="nilai(value)" name="vote">
                                        {{--  <output for="vol" id="volume">50</output>  --}}
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <div class="form-actions noborder">
                                        <button class="btn blue" type="submit">Submit</button>
                                        <button class="btn default" type="reset">Cancel</button>
                                    </div>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <p><i>NB : </i></p>
                                <p><i> - Isikan nama lengkap Anda dan NIM dengan benar.</i></p>
                                <p><i> - <strong>Geser Slide ke kiri</strong> untuk Kirene Wardani Joas dan ke kanan untuk Dhiemas Ariobimo Wijaya</i></p>
                                <p><i> - Harap menggunakan menggunakan email scholar, atau data tidak diterima.</i></p>
                            </div>
                            <br><br><br><br><br><br><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <script>
        function nilai(vol) {
            document.querySelector('#volume').value = vol;
        }
    </script>

@stop
