<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul id="main_menu">
    <li class="active"><a href="{{route('index')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="{{route('charts')}}"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="{{route('wig')}}"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="{{route('tables')}}"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="{{route('grid')}}"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important"></span></a>
      <ul>
        <li class="child_li"><a href="{{route('common')}}">Basic Form</a></li>
        <li class="child_li"><a href="{{route('val')}}">Form with Validation</a></li>
        <li class="child_li"><a href="{{route('wiz')}}">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="{{route('btn')}}"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface_f"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important"></span></a>
      <ul>
        <li class="child_li"><a href="{{route('index2')}}">Dashboard2</a></li>
        <li class="child_li"><a href="{{route('gal')}}">Gallery</a></li>
        <li class="child_li"><a href="{{route('calendar')}}">Calendar</a></li>
        <li class="child_li"><a href="{{route('inv')}}">Invoice</a></li>
        <li class="child_li"><a href="{{route('chat')}}">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important"></span></a>
      <ul>
        <li class="child_li"><a href="{{route('403')}}">Error 403</a></li>
        <li class="child_li"><a href="{{route('404')}}">Error 404</a></li>
        <li class="child_li"><a href="{{route('405')}}">Error 405</a></li>
        <li class="child_li"><a href="{{route('500')}}">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>