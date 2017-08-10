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
{{ asset('styles/teachers.css') }}
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
          <div style="padding-left:50px;padding-right:50px;" class="block">
            <div class="block-title">ПРЕПОДАВАТЕЛИ</div>
            <div style="overflow: auto;" class="block-content"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="sort-block"><a href="" class="sort-elem active">ОНЛАЙН</a><a href="" class="sort-elem">ВСЕ</a></div>
              </div>
            </div>
            <div class="row teacher-block">
              <div class="col-md-1">
                <div class="avatar"><img src="/img/user_1.jpg">
                  <div style="right:5px;" class="cirle-status online-status"></div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="teacher-nickname">Katherine Beck</div>
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
                </table>
              </div>
              <div style="text-align:center;" class="col-md-1"><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle teacher-button"></a><br><a href="{{url('/teachers/view')}}" class="circle-button orange-circle profile mini-cricle teacher-button"></a><br>
                <div class="circle-button red-circle phone mini-cricle teacher-button"></div>
              </div>
            </div>
            <div class="row teacher-block">
              <div class="col-md-1">
                <div class="avatar"><img src="/img/user_2.jpg">
                  <div style="right:5px;" class="cirle-status online-status"></div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="teacher-nickname">Diane Mendoza</div>
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
                </table>
              </div>
              <div style="text-align:center;" class="col-md-1"><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle teacher-button"></a><br><a href="{{url('/teachers/view')}}" class="circle-button orange-circle profile mini-cricle teacher-button"></a><br>
                <div class="circle-button red-circle phone mini-cricle teacher-button"></div>
              </div>
            </div>
            <div class="row teacher-block">
              <div class="col-md-1">
                <div class="avatar"><img src="/img/user_3.jpg">
                  <div style="right:5px;" class="cirle-status online-status"></div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="teacher-nickname">Rachel Scott</div>
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
                </table>
              </div>
              <div style="text-align:center;" class="col-md-1"><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle teacher-button"></a><br><a href="{{url('/teachers/view')}}" class="circle-button orange-circle profile mini-cricle teacher-button"></a><br>
                <div class="circle-button red-circle phone mini-cricle teacher-button"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop