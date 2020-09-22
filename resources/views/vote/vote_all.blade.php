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
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ URL::asset('user/assets/pages/img/avatars/team5.jpg') }}" alt="candidate-1" style="height:280px; width:auto;">
                                <h4 align="center">Noelle Kim</h4>
                            </div>
                            <div class="col-sm-5">
                                <img src="{{ URL::asset('user/assets/pages/img/avatars/team6.jpg') }}" alt="candidate-2" style="height:300px;">
                                <h4 align="center">A-ram Seo</h4>
                            </div>
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
