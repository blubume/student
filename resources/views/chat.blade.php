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
{{ asset('styles/chat.css') }}
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
    <div style="height:100%;" class="container-fluid base-block">
      <div style="height:100%;" class="row">
        <div style="height:100%;" class="col-lg-10 col-lg-offset-1">
          <div style="padding:0px;box-shadow:0px 0px 2px rgba(0,0,0,.25);" class="block">
            <div style="height:100%;" class="block-content">
              <div style="height:100%;" class="row">
                <div class="col-xs-3 contacts">
                  <div class="search-block">
                    <input type="text" placeholder="" class="input-search form-control seacrh-elem">
                  </div>
                  <div class="contactList scrollbar-macosx">
                    <div class="container-fluid">
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">																					</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">		</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">		</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">		</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">		</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">		</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">		</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">		</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">		</a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle"></a>
                        </div>
                      </div>
                      <div class="row contact">
                        <div style="padding-top: 10px;" class="col-xs-10">
                          <div class="avatar avatarContact"><img src="/img/user_1.jpg">
                            <div class="cirle-status online-status circ"></div>
                          </div>
                          <div style="float:left;text-align:left;" class="dataContact col-xs-7">
                            <div class="firstnameContact">Emma Gordon</div>
                            <div class="messageContact"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia fugiat quisquam quam, reprehenderit, enim voluptate incidunt blanditiis cum laborum doloremque, modi laudantium temporibus. Excepturi adipisci, debitis at numquam enim!</div>
                          </div>
                        </div>
                        <div style="text-align:right;" class="col-xs-2">
                          <div style="margin-left:0px;display:inline-block;" class="circle-button red-circle phone mini-cricle teacher-button micro_circle"></div><a href="{{url('/teachers/view')}}" style="margin-left:0px;margin-top: 5px;display:inline-block;" class="circle-button orange-circle profile mini-cricle teacher-button micro_circle">																																																																																																																																																																																								</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-9 chat-block">
                  <div class="chat-info">
                    <div class="row">
                      <div class="col-xs-8">
                        <div class="avatar chat-avatar"><img src="/img/user_3.jpg"></div>
                        <div class="avatarName">Чат с <span> Emma Gordon</span></div>
                      </div>
                      <div style="text-align:right;" class="col-xs-4">
                        <div class="online">ОНЛАЙН </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat scrollbar-macosx">
                    <div class="container-fluid">
                      <div class="row message">
                        <div class="col-xs-10">
                          <div class="avatar avatarMessage"><img src="/img/user_2.jpg"></div>
                          <div class="messageData col-xs-7">
                            <div class="firstnameMessage">Emma Gordon</div>
                            <div class="textMessage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam pariatur alias excepturi. Animi earum ratione rerum nesciunt temporibus ipsa laborum mollitia asperiores, qui modi, consectetur sed! Ipsa ratione et quidem.</div>
                          </div>
                        </div>
                        <div class="col-xs-2">
                          <div class="dateMessage">18 апр</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="send-block">
                    <textarea placeholder="Введите ваше сообщение..." class="textarea-chat"></textarea>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="uppload-button"></div>
                        <input type="file" multiple="multiple" id="upploadFile" class="upploadForm">
                        <div class="upploads">																																																								</div>
                      </div>
                      <div class="col-md-4 right-block">
                        <button type="button" class="btn btn-default send-button">ОТПРАВИТЬ</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop