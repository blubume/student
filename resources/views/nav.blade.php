    <div role="navigation" class="navbar navbar-inverse navbar-fixed-top header">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="{{url('/dashboard')}}" class="navbar-brand"><img src="/img/logo.svg" height="50px" class="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="langSelect" class="dropdown visible-xs hidden-sm visible-md visible-lg"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="selectLangData">Русский</span><span class="myCaret">
                  <div class="arrow_down"></div></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" lang="en" class="selectLang">Русский</a></li>
                <li><a href="#" lang="ru" class="selectLang">English</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="balanceMenu"><a href="balance.html">
                <div data-toggle="tooltip" data-placement="bottom" title="Осталось 12 минут" class="balanceStatus tooltipInfo">00:12</div></a></li>
            <li class="headerMenu"><a href="#group">
                <div class="iconGroup"><span>СООБЩЕСТВО</span></div></a></li>
            <li class="headerMenu"><a href="#library">
                <div class="iconLibrary"><span>БИБЛИОТЕКА</span></div></a></li>
            <li class="headerMenu"><a href="{{url('/teachers')}}">
                <div class="iconTeachers"><span>ПРЕПОДАВАТЕЛИ</span></div></a></li>
            <li class="headerMenu"><a href="{{url('/chat')}}">
                <div class="iconChat"><span>СООБЩЕНИЯ</span></div></a></li>
            <li class="dropdown avatar-menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="{{asset('/img/avatar.jpg')}}" class="avatar"><span class="nickname-header">Kathleen</span><span class="myCaret">
                  <div class="arrow_down"></div></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/settings')}}" lang="en">Профиль</a></li>
                <li><a href="{{url('/balance')}}" lang="ru">Пополнить баланс</a></li>
                <li><a href="{{url('/logout')}}" lang="ru">Выход</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>