@extends('index')

@section('content')
{{--  <div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="portlet light">
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verifikasi baru telah dikirim ke alamat email Anda..') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, pastikan email Anda telah terverifikasi. klik link dibawah untuk verifikasi.') }}
                    <br><br>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik di sini untuk meminta verifikasi ulang') }}</button>
                    </form>
                    <br><br>
                    {{ __('Setelah itu silahkan cek notifikasi email Anda') }},
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>  --}}

<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">

        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" fa fa-exclamation-triangle font-yellow"></i>
                        <span class="caption-subject font-yellow bold uppercase">Verifikasi Email</span>
                    </div>
                </div>
                <div class="portlet-body" style="">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verifikasi baru telah dikirim ke alamat email Anda..') }}
                        </div>
                    @endif
                    {{ __('Sebelum melanjutkan, pastikan email Anda telah terverifikasi. klik link dibawah untuk verifikasi.') }}
                    <br><br>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik di sini untuk meminta verifikasi ulang') }}</button>
                    </form>
                    <br><br>
                    {{ __('Setelah itu silahkan cek notifikasi email Anda') }},
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
@endsection
