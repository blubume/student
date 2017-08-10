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
{{ asset('styles/balance.css') }}
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
            <li class="active"><a href="#home" data-toggle="tab">Баланс</a></li>
            <li><a href="#profile" data-toggle="tab">История</a></li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="block">
                <div style="font-size: 18px;" class="block-title">ТВОЯ ПОДПИСКА</div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="subscribe-info"><span class="min-day-info">30 </span> МИН В ДЕНЬ  | ОСТАЛОСЬ <span class="min-info">530</span> МИНУТ |  ИСТЕКАЕТ ЧЕРЕЗ <span class="days-info">14</span> ДНЕЙ</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-1">
              <div style="position:relative;" class="block column">
                <div class="block-title bigTitle">ВЫБЕРИ ЖЕЛАЕМОЕ КОЛИЧЕСТВО МИНУТ
                  <div data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Покупай любое кол-во минут (от 5 и больше) и пользуйся ими когда тебе удобно!" class="issue-form tooltipInfo">?</div>
                </div>
                <div class="block-content buyBlock">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="form-group">
                        <input type="email" placeholder="" class="input-clock form-control buyMinute">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-content buyButtonBlock">
                  <div class="row">
                    <div style="text-align:center;" class="col-sm-12">
                      <div class="info-buy">К ОПЛАТЕ <span>150.00 РУБ</span></div>
                      <button type="button" data-toggle="modal" data-target=".modal-register" style="padding: 15px 40px; font-size: 15px;font-family:'LatoLight'" class="btn btn-danger">ОПЛАТИТЬ</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div style="text-align: center;" class="block column">
                <div style="display:inline-block;" class="block-title bigTitle"><span>ОФОРМИ ПОДПИСКУ
                    <div data-html="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Подписка – отличный способ экономии и мотивации! Выбери сколько минут в день и сколько раз неделю ты хочешь практиковаться, и получи необходимое кол-во минут на месяц со скидкой. К примеру, подписка на 30 минут в день, 3 раза в неделю даст тебе 360 минут на месяц.&lt;br&gt;При этом, ты не можешь использовать больше 30 минут в день, но можешь при желании практиковать английский не 3, а 4 раза в неделю – тогда подписка закончится быстрее.&lt;br&gt;Неиспользованные минуты сгорают в конце месяца." class="issue-form tooltipInfo">?</div></span>
                  <div class="arrow-block">
                    <div class="text">ЭТО ВЫГОДНО</div><img src="/img/redo.svg">
                  </div>
                </div>
                <div class="block-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 title-subscribe">СКОЛЬКО МИНУТ В ДЕНЬ?</div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2">
                      <div class="row min_circle">
                        <div c="1" class="col-xs-2 col-xs-offset-05 circle active"><span>15</span></div>
                        <div l="1" class="col-xs-1 line"></div>
                        <div c="2" class="col-xs-2 circle"><span>30</span></div>
                        <div l="2" class="col-xs-1 line"></div>
                        <div c="3" class="col-xs-2 circle"><span>60</span></div>
                        <div l="3" class="col-xs-1 line"></div>
                        <div c="4" class="col-xs-2 circle"><span>120</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 title-subscribe">СКОЛЬКО РАЗ В НЕДЕЛЮ?</div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2">
                      <div class="row week_circle">
                        <div c="1" class="col-xs-2 col-xs-offset-05 circle active"><span>2</span></div>
                        <div l="1" class="col-xs-1 line"></div>
                        <div c="2" class="col-xs-2 circle"><span>3</span></div>
                        <div l="2" class="col-xs-1 line"></div>
                        <div c="3" class="col-xs-2 circle"><span>5</span></div>
                        <div l="3" class="col-xs-1 line"></div>
                        <div c="4" class="col-xs-2 circle"><span>7</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="text-align:center;margin-top:40px;" class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2">
                      <div class="info-data"><br><span class="min-day">15</span> МИН В ДЕНЬ | <span class="day_week">3</span> РАЗА В НЕДЕЛЮ | НА <span class="days_d">30</span> ДНЕЙ</div><br>
                      <div class="payment-data">К ОПЛАТЕ <span class="payment_num">1 500.00</span><span class="currency"> РУБ</span></div><br>
                      <button type="button" data-toggle="modal" data-target=".modal-register" style="padding: 15px 40px; margin-top:50px;font-size: 15px;font-family:'LatoLight'" class="btn btn-danger">ОПЛАТИТЬ</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="profile" class="tab-pane fade">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="block">
                <div class="block-title">ИСТОРИЯ</div>
                <div style="padding-left:20px;padding-right:20px;overflow: auto;" class="block-content">
                  <table class="table table-data">
                    <thead>
                      <tr>
                        <td>СУММА</td>
                        <td>КОЛ-ВО МИНУТ</td>
                        <td>СТАТУС</td>
                        <td>ДАТА</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="balance">150.00 РУБ</td>
                        <td class="minute">12</td>
                        <td class="status_ok">УСПЕШНО</td>
                        <td class="date">12.12.16 12:53</td>
                      </tr>
                      <tr>
                        <td class="balance">150.00 РУБ</td>
                        <td class="minute">12</td>
                        <td class="status_proccess">В ПРОЦЕССЕ</td>
                        <td class="date">12.12.16 12:53</td>
                      </tr>
                      <tr>
                        <td class="balance">150.00 РУБ</td>
                        <td class="minute">12</td>
                        <td class="status_error">ОШИБКА</td>
                        <td class="date">12.12.16 12:53</td>
                      </tr>
                      <tr>
                        <td class="balance">150.00 РУБ</td>
                        <td class="minute">12</td>
                        <td class="status_ok">УСПЕШНО</td>
                        <td class="date">12.12.16 12:53</td>
                      </tr>
                      <tr>
                        <td class="balance">150.00 РУБ</td>
                        <td class="minute">12</td>
                        <td class="status_ok">УСПЕШНО</td>
                        <td class="date">12.12.16 12:53</td>
                      </tr>
                      <tr>
                        <td class="balance">150.00 РУБ</td>
                        <td class="minute">12</td>
                        <td class="status_ok">УСПЕШНО</td>
                        <td class="date">12.12.16 12:53</td>
                      </tr>
                      <tr>
                        <td class="balance">150.00 РУБ</td>
                        <td class="minute">12</td>
                        <td class="status_ok">УСПЕШНО</td>
                        <td class="date">12.12.16 12:53</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop