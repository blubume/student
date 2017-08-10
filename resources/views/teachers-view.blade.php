@extends('layouts.app')

@section('description')
 Blubu-dashboard
@stop

@section('keywords')
 Blubu-dashboard
@stop

@section('title')
 Blubu-dashboard
@stop

@section('style')
{{ asset('styles/teachers-view.css') }}
@stop
@section('navigation')
  @include('nav')
@stop
@section('footer')
  @include('footer')
@stop

@section('scripts')

@stop
@section('content')
<div class="container-fluid base-block">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div style="padding:60px;" class="block">
            <div class="block-content">
              <div class="row">
                <div style="text-align:center;" class="col-md-2">
                  <div style="width:100px;height:100px !important;display:inline-block;margin-right:0px;" class="avatar"><img src="/img/user_3.jpg" style="width:100px;height:100px;">
                    <div style="right:8px;bottom:8px;" class="cirle-status online-status"></div>
                  </div><br><a href="chat.html" style="margin-left:0px;margin-top:20px;" class="circle-button green-circle-inverse message mini-cricle teacher-button"></a><br>
                  <div style="margin-left:0px;margin-top: 10px;" class="circle-button red-circle phone mini-cricle teacher-button"></div>
                </div>
                <div class="col-md-10">
                  <div style="font-size:30px;font-family:'Lato';" class="teacher-nickname">Theresa Wong</div>
                  <table class="table info-teacher">
                    <tr>
                      <td>Профессия</td>
                      <td>Academic English Teacher and Professional Corporate Trainer</td>
                    </tr>
                    <tr>
                      <td>Интересы</td>
                      <td>
                        <div class="orangeTag">Sport</div>
                      </td>
                    </tr>
                    <tr>
                      <td>Образование</td>
                      <td>University of Alberta Canada</td>
                    </tr>
                    <tr>
                      <td>Опыт преподавания</td>
                      <td>14 years</td>
                    </tr>
                    <tr>
                      <td>Владение языками</td>
                      <td>английский (Носитель языка: США / Канада)</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="row">
                <div style="text-align: center;" class="col-md-12">
                  <button type="button" data-toggle="modal" data-target=".modal-teacher-view" class="btn btn-default play-icon">ПОСМОТРЕТЬ ВИДЕО</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="modal-teacher-view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal modal-teacher-view fade">
      <div class="modal-dialog">
        <div style="background:none" class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><img src="/img/close2.svg"></button>
          </div>
          <iframe width="100%" height="480px" src="https://www.youtube.com/embed/Wf4kVUc_HV0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
@stop