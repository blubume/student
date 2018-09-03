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
{{ asset('styles/settings.css') }}
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
        <div class="col-md-12 owner">
          <ul class="nav nav-tabs tabMenu">
            <li class="active"><a href="#profile" data-toggle="tab"><?=trans("base.profile");?></a></li>
            <li><a href="#about_us" data-toggle="tab"><?=trans("base.about");?></a></li>
            <li><a href="#password" data-toggle="tab"><?=trans("base.change_pass");?></a></li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div id="profile" class="tab-pane fade in active">
          <div class="row">
            <div class="col-md-4 col-md-offset-1">
              <div style="position:relative;" class="block column">
                <div class="block-title"><?=trans("base.avatar");?></div>
                <div class="block-content">
                  <div class="avatar-profile"><img src="/img/avatar.jpg" class="avatarPhoto"></div>
                  <div class="button-save-avatar">
                    <button id="avatarButton" type="button" style="margin-top:40px;padding: 15px 40px; font-size: 14px;font-family:'LatoLight'" class="btn btn-danger"><?=trans("base.change");?></button>
                    <input id="avatarSave" type="file" accept="image/*" class="hiddenFile">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div style="padding-left: 40px;padding-right: 40px;" class="block column">
                <div class="block-title"><?=trans("base.profile");?></div>
                <div class="block-content">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nickname"><?=trans("base.nickname");?></label>
                        <input id="nickname" type="text" placeholder="" class="input-guest form-control">
                      </div>
                      <div class="form-group">
                        <label for="brithday"><?=trans("base.brithday");?></label>
                        <input id="brithday" type="text" placeholder="" class="datepicker input-date form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email"><?=trans("base.email");?></label>
                        <input id="email" type="email" placeholder="" class="input-email form-control">
                      </div>
                      <div class="form-group">
                        <label for="repeat-new-password"><?=trans("base.view_age");?></label>
                        <div class="radio-button">
                          <div class="item left active"><?=trans("base.view");?></div>
                          <div class="item right"><?=trans("base.not_view");?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="text-align:center;" class="col-md-12">
                      <button type="button" style="margin-top:60px;padding: 15px 40px; font-size: 14px;font-family:'LatoLight'" class="btn btn-danger"><?=trans("base.change");?></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="about_us" class="tab-pane fade">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="block">
                <div class="block-title"><?=trans("base.about");?></div>
                <div class="block-content">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="prof"><?=trans("base.prof");?></label>
                        <input id="prof" type="text" placeholder="" class="input-prof form-control">
                      </div>
                      <div class="form-group">
                        <label for="brithday"><?=trans("base.interes");?></label>
                        <input id="brithday" type="text" placeholder="" data-role="tagsinput" class="tags input-guest form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div id="drop-lang-level" class="form-group dropdown drop-menu">
                        <label for="email"><?=trans("base.level");?></label>
                        <div id="langLevel" style="text-align:center;cursor:pointer;display:block;width:100%;" data-toggle="dropdown" class="input-guest form-control dropdown-toggle"><?=trans("base.level_1");?></div>
                        <ul class="dropdown-menu">
                          <li><a href="#"><?=trans("base.level_1");?></a></li>
                          <li><a href="#"><?=trans("base.level_2");?></a></li>
                          <li><a href="#"><?=trans("base.level_3");?></a></li>
                        </ul>
                      </div>
                      <div class="form-group">
                        <label for="brithday"><?=trans("base.goals");?></label>
                        <input id="brithday" type="text" placeholder="" data-role="tagsinput" class="tags input-guest form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="text-align:center;" class="col-md-12">
                      <button type="button" style="margin-top:60px;padding: 15px 40px; font-size: 14px;font-family:'LatoLight'" class="btn btn-danger"><?=trans("base.change");?></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="password" class="tab-pane fade">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div style="padding-left: 40px;padding-right: 40px;" class="block">
                <div class="block-title"><?=trans("base.change_pass");?></div>
                <div style="text-align:center;border-radius 40px;" class="block-content">
                  <div class="form-group">
                    <label for="old-password"><?=trans("base.old_pass");?></label>
                    <input id="old-password" type="password" placeholder="" class="input-password form-control">
                  </div>
                  <div class="form-group">
                    <label for="new-password"><?=trans("base.new_pass");?></label>
                    <input id="new-password" type="password" placeholder="" class="input-password form-control">
                  </div>
                  <div class="form-group">
                    <label for="repeat-new-password"><?=trans("base.repeat");?></label>
                    <input id="repeat-new-password" type="password" placeholder="" class="input-password form-control">
                  </div>
                  <button type="button" style="margin-top:40px;padding: 15px 40px; font-size: 14px;font-family:'LatoLight'" class="btn btn-danger"><?=trans("base.change");?></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop