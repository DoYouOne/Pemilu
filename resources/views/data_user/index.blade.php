@extends('master')

@section ('content')
    <h3>Selamat Datang</h3>
    <h4>Ini adalah halaman Data User ber status {{ auth()->user()->status }}</h4>
    <span>{{auth()->user()->email}}</span>

@stop
