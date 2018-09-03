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
                <li><a href="/update_lang?lang=ru" lang="en" class="selectLang">Русский</a></li>
                <li><a href="/update_lang?lang=en" lang="ru" class="selectLang">English</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="balanceMenu"><a href="balance.html">
                <div data-toggle="tooltip" data-placement="bottom" title="<?=trans("base.left");?> 12 <?=trans("base.minutes");?>" class="balanceStatus tooltipInfo">00:12</div></a></li>
            <li class="headerMenu"><a href="#group">
                <div class="iconGroup"><span><?=trans("base.menu_1");?></span></div></a></li>
            <li class="headerMenu"><a href="#library">
                <div class="iconLibrary"><span><?=trans("base.menu_2");?></span></div></a></li>
            <li class="headerMenu"><a href="{{url('/teachers')}}">
                <div class="iconTeachers"><span><?=trans("base.menu_3");?></span></div></a></li>
            <li class="headerMenu"><a href="{{url('/chat')}}">
                <div class="iconChat"><span><?=trans("base.menu_4");?></span></div></a></li>
            <li class="dropdown avatar-menu"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="{{asset('/img/avatar.jpg')}}" class="avatar"><span class="nickname-header">Kathleen</span><span class="myCaret">
                  <div class="arrow_down"></div></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/settings')}}" lang="en"><?=trans("base.menu_6");?></a></li>
                <li><a href="{{url('/balance')}}" lang="ru"><?=trans("base.menu_7");?></a></li>
                <li><a href="{{url('/logout')}}" lang="ru"><?=trans("base.menu_5");?></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>