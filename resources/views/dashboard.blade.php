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
{{ asset('styles/dashboard.css') }}
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
        <div class="col-md-4 col-md-offset-4">
          <div class="row button-block">
            <div class="col-xs-1 col-sm-2">
              <div style="position:relative;left:-15px;" class="circle-button red-circle phone"></div>
            </div>
            <div class="col-xs-11 col-sm-10 search-text"><?=trans("base.search_t");?></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="block column">
            <div class="block-title"><?=trans("base.past_t");?></div>
            <div class="block-content">
              <div class="container-fluid">
                <div class="block-elem">
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="col-xs-4 avatar"><img src="/img/user_1.jpg">
                        <div class="cirle-status online-status"></div>
                      </div>
                      <div class="col-xs-8 teacher-data">
                        <div class="teacher-nickname">Katherine Beck</div>
                        <div class="teacher-last"><span class="last-key"><?=trans("base.past_call");?>:</span><span class="last-value">Вчера</span></div>
                      </div>
                    </div>
                    <div style="text-align:right;" class="col-xs-4">
                      <div class="circle-button red-circle phone mini-cricle"></div><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle"></a>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
                <div class="block-elem">
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="col-xs-4 avatar"><img src="/img/user_2.jpg">
                        <div class="cirle-status offline-status"></div>
                      </div>
                      <div class="col-xs-8 teacher-data">
                        <div class="teacher-nickname">Mary Myers</div>
                        <div class="teacher-last"><span class="last-key"><?=trans("base.past_call");?>:</span><span class="last-value">2 дня назад</span></div>
                      </div>
                    </div>
                    <div style="text-align:right;" class="col-xs-4">
                      <div class="circle-button red-circle phone mini-cricle"></div><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle"></a>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
                <div class="block-elem">
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="col-xs-4 avatar"><img src="/img/user_3.jpg">
                        <div class="cirle-status online-status"></div>
                      </div>
                      <div class="col-xs-8 teacher-data">
                        <div class="teacher-nickname">Olivia Payne</div>
                        <div class="teacher-last"><span class="last-key"><?=trans("base.past_call");?>:</span><span class="last-value">6 дней назад</span></div>
                      </div>
                    </div>
                    <div style="text-align:right;" class="col-xs-4">
                      <div class="circle-button red-circle phone mini-cricle"></div><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle"></a>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
                <div class="block-elem">
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="col-xs-4 avatar"><img src="/img/user_4.jpg">
                        <div class="cirle-status offline-status"></div>
                      </div>
                      <div class="col-xs-8 teacher-data">
                        <div class="teacher-nickname">Jessica Ray</div>
                        <div class="teacher-last"><span class="last-key"><?=trans("base.past_call");?>:</span><span class="last-value">1 неделю назад</span></div>
                      </div>
                    </div>
                    <div style="text-align:right;" class="col-xs-4">
                      <div class="circle-button red-circle phone mini-cricle"></div><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle"></a>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
                <div class="block-elem">
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="col-xs-4 avatar"><img src="/img/user_5.jpg">
                        <div class="cirle-status online-status"></div>
                      </div>
                      <div class="col-xs-8 teacher-data">
                        <div class="teacher-nickname">Brittany Black</div>
                        <div class="teacher-last"><span class="last-key"><?=trans("base.past_call");?>:</span><span class="last-value">2 недели назад</span></div>
                      </div>
                    </div>
                    <div style="text-align:right;" class="col-xs-4">
                      <div class="circle-button red-circle phone mini-cricle"></div><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle"></a>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
                <div class="block-elem">
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="col-xs-4 avatar"><img src="/img/user_6.jpg">
                        <div class="cirle-status offline-status"></div>
                      </div>
                      <div class="col-xs-8 teacher-data">
                        <div class="teacher-nickname">Lisa Rodriguez</div>
                        <div class="teacher-last"><span class="last-key"><?=trans("base.past_call");?>:</span><span class="last-value">месяц назад</span></div>
                      </div>
                    </div>
                    <div style="text-align:right;" class="col-xs-4">
                      <div class="circle-button red-circle phone mini-cricle"></div><a href="{{url('/chat')}}" class="circle-button green-circle-inverse message mini-cricle"></a>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div style="text-align:center;padding:20px;" class="col-md-12"><a href="{{url('/teachers')}}" class="link"><?=trans("base.all_t");?></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="block column">
            <div class="block-title"><?=trans("base.history");?></div>
            <div class="block-content">
              <div class="container-fluid">
                <div class="row left-message">
                  <div class="col-xs-8">
                    <div class="messsage-name">Katherine Beck</div>
                    <div class="avatar avatar-message-left"><img src="/img/user_1.jpg"></div>
                    <div class="tool right orange-tool col-xs-8">
                      <div class="tool-arrow"></div>
                      <div class="tool-inner">
                        <div class="tool-new-message-right"></div><img src="/img/phone.svg" class="iconMessage"><span><?=trans("base.call_start");?>...</span>
                      </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="col-xs-4">
                    <div class="date-message">06.12.2016 12:12:03</div>
                  </div>
                </div>
                <div class="row right-message">
                  <div class="col-xs-4 right-message-text">
                    <div class="date-message-left">06.12.2016 12:12:03</div>
                  </div>
                  <div class="col-xs-8 right-message-text">
                    <div class="messsage-name">Вы</div>
                    <div class="avatar avatar-message-right"><img src="/img/user_2.jpg"></div>
                    <div class="tool left red-tool col-xs-8">
                      <div class="tool-arrow"></div>
                      <div class="tool-inner">
                        <div class="tool-new-message-left"></div>Cкинь доки
                      </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="row left-message">
                  <div class="col-xs-8">
                    <div class="messsage-name">Katherine Beck</div>
                    <div class="avatar avatar-message-left"><img src="/img/user_1.jpg"></div>
                    <div class="tool right orange-tool col-xs-8">
                      <div class="tool-arrow"></div>
                      <div class="tool-inner">
                        <div class="tool-new-message-right"></div><img src="/img/file.svg" class="iconMessage"><span>Cource.pdf</span>
                      </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="col-xs-4">
                    <div class="date-message">06.12.2016 12:12:03</div>
                  </div>
                </div>
                <div class="row left-message">
                  <div class="col-xs-8">
                    <div class="messsage-name">Katherine Beck</div>
                    <div class="avatar avatar-message-left"><img src="/img/user_1.jpg"></div>
                    <div class="tool right orange-tool col-xs-8">
                      <div class="tool-arrow"></div>
                      <div class="tool-inner">
                        <div class="tool-new-message-right"></div><img src="/img/phone_down_white.svg" class="iconMessage"><span><?=trans("base.call_end");?>...</span>
                      </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                  <div class="col-xs-4">
                    <div class="date-message">06.12.2016 12:12:03</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop