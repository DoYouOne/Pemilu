@extends('master')

@section ('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Data Alumni</h4>
            <p class="card-category">Hak Akses untuk Alumni, User? silahkan register</p>
        </div>
        <div class="card-body">
            <form action="{{ url('data_user/add') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p style="color: #DE4019;">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Password</label>
                            <input type="password" class="form-control" name="password" pattern=".{8,}" title="Password minim 8 Karakter">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                <div class="clearfix"></div>
            </form>
        </div>
        </div>
    </div>
</div>
@stop
