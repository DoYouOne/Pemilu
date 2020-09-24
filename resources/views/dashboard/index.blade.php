@extends('master')

@section ('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats" style="height: 110px;">
                  <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Jumlah Pengguna</p>
                    <h3 class="card-title">{{ $user }}
                    </h3>
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats" style="height: 110px;">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Jumlah Suara</p>
                    <h3 class="card-title">{{ $jmlh }}
                    </h3>
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats" style="height: 110px;">
                  <div class="card-header card-header-default card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Jumlah Golput</p>
                    <h3 class="card-title">
                        @foreach ($golput as $g)
                        @endforeach
                        {{ $g->jumlah }}
                    </h3>
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
