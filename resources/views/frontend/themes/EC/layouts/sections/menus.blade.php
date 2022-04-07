<div class="container h-100 align-items-center">
  <div class="row w-100">
    <div class="col-sm-3">
      <ul class="nav flex-column nav-sidebar" data-wow-delay=".3s">
        <?php 
        $lmenus = [];
        foreach($top_menus as $menu):
            $mmenu = '<li class="nav-item">
                <a class="nav-link" href='.$menu['url'].'>'.$menu['menu_name'].' </a>
              </li>';
            $cmenu = '';
            foreach($menu['childs'] as $child):
              $cmenu .= '<li class="nav-item">
                <a class="nav-link" href="'.$child['url'].'">'.$child['menu_name'].' </a>
              </li>';
            endforeach;
            $lmenus[] = ['main' => $mmenu, 'childs' => $cmenu];
            ?>
        <?php endforeach;?>
        <?php foreach($lmenus as $lmenu):?>
        <?php echo $lmenu['main'];?>
        <?php echo $lmenu['childs'];?>
        <?php endforeach;?>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="nav flex-column nav-sidebar" data-wow-delay=".3s">
        @foreach($landing_menus as $menu)
          <li class="nav-item">
            <a class="nav-link" href="{{ $menu['url'] }}">{{ $menu['menu_name'] }} </a>
          </li>
          @foreach($menu['childs'] as $child)
            <li class="nav-item">
              <a class="nav-link" href="{{ $child['url'] }}">{{ $child['menu_name'] }} </a>
            </li>
          @endforeach
        @endforeach
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="nav flex-column nav-sidebar" data-wow-delay=".3s">
        @foreach($popup_menus as $menu)
          <li class="nav-item">
            <a class="nav-link" href="{{ $menu['url'] }}">{{ $menu['menu_name'] }} </a>
          </li>
          @foreach($menu['childs'] as $child)
            <li class="nav-item">
              <a class="nav-link" href="{{ $child['url'] }}">{{ $child['menu_name'] }} </a>
            </li>
          @endforeach
        @endforeach
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="nav flex-column nav-sidebar" data-wow-delay=".3s">
        @foreach($popup_menus2 as $menu)
          <li class="nav-item">
            <a class="nav-link" href="{{ $menu['url'] }}">{{ $menu['menu_name'] }} </a>
          </li>
          @foreach($menu['childs'] as $child)
            <li class="nav-item">
              <a class="nav-link" href="{{ $child['url'] }}">{{ $child['menu_name'] }} </a>
            </li>
          @endforeach
        @endforeach
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="menu-media">
        <a href="https://www.facebook.com/luxurylifestyleexpereinces/" class="nav-sos"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/emporiummagazine/" class="nav-sos"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/company/emporium-collection/" class="nav-sos"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        @if(isset($policyscript->privacy))
        <?php //echo $policyscript->privacy;?>
        <br>
        @endif
        @if(isset($policyscript->cookie))
        <?php //echo $policyscript->cookie;?>
        <br>
        @endif
        @if(isset($policyscript->termandcondition))
        <?php //echo $policyscript->termandcondition;?>
        <br>
        @endif
      </div>
    </div> 
  </div>
</div>