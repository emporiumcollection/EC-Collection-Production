<header>
  <div class="header-landing top-header">
    <div class="top-header-inner">
      <div class="row align-items-md-end align-items-center">
        <div class="col-md-5 col-4">
          <div class="d-flex">
            <a href="#" class="nav-link menu-index">Menu</a>
          </div>
        </div>
        <div class="col-md-2 col-4 text-center">
          <a href="#" class="btn-sidebar" data-sidebar="#dashboard_menu">
            <?php if(\Config::get('app.currentdomain') == 'voyage'){?>
              <i class="t-logo logo-2" style="background: url({{ asset('/images/Emporium-Voyage-Large.svg') }}) no-repeat center center; background-size: 160px 75px;"></i>.
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'spa'){?>
              <i class="t-logo logo-2" style="background: url({{ asset('/images/Emporium-Spa-Large.svg') }}) no-repeat center center; background-size: 160px 75px;"></i>.
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'safari'){?>
              <i class="t-logo logo-2" style="background: url({{ asset('/images/Emporium-Safari-Large.svg') }}) no-repeat center center; background-size: 160px 75px;"></i>.
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'islands'){?>
              <i class="t-logo logo-2" style="background: url({{ asset('/images/Emporium-Islands-Large.svg') }}) no-repeat center center; background-size: 160px 75px;"></i>.
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'magazine'){?>
              <i class="t-logo logo-2" style="background: url({{ asset('/images/Emporium-Magazine-Large.svg') }}) no-repeat center center; background-size: 160px 75px;"></i>.
            <?php } ?>
          </a>
        </div>
        <div class="col-md-5 col-4 text-right">
          
          <div class="d-flex justify-content-end align-items-center my-2 menu-col-nav">
            @if(Auth::check() && Auth::user()->username)
              <a href="/dashboard" class="login-nav mr-3 pr-1" data-toggle="tooltip" title="" data-original-title="Login, Register or go to dashboard">
                <div class="user-profile-img">
                  @if(!empty(Auth::user()->avatar))
                   <img src="{{ asset('/images/user_avatar/'.Auth::user()->avatar) }}" alt="">
                  @else
                    <img src="{{ asset('themes/EC/images/user-icon-emporium-collection.svg') }}" alt="">
                  @endif
                </div>
              </a>
            @else  
              <a href="/register" class="login-nav mr-3 pr-1" data-toggle="tooltip" title="" data-original-title="Login, Register or go to dashboard">
                <div class="user-profile-img">
                  <img src="{{ asset('themes/EC/images/user-icon-emporium-collection-default.svg') }}" alt="">
                  <!-- <img src="https://i.pravatar.cc/300" alt=""> -->
                </div>
              </a>
            @endif
            <div class="humburger-menu">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
             {{-- <ul class="nav justify-content-end nav-header-menu">
                <li class="nav-item">
                  <a class="nav-link " href="landing-overview.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Step-By-Step</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="get-inspired.html">Get Inspired</a>
                </li>
              </ul>  --}}
            
              <div class="menu">
                <a href="#" class="close-menu">
                  <svg fill="currentColor" focusable="false" height="30px" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <title>Close</title>
                    <path d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                    </path>
                  </svg>
                </a>
                <div class="container h-100 d-flex align-items-center">
                  <div class="row w-100">
                    <div class="col-sm-4">
                      <ul class="nav flex-column nav-sidebar" data-wow-delay=".3s">
                        <?php 
                      $lmenus = [];
                      foreach($landing_menus as $menu):
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
                      <div class="menu-media">
                        <a href="#" class="nav-sos"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="nav-sos"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="nav-sos"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      </div>
                    </div>
                      
                      <div class="col-sm-6">
                        <div class="row">
                          <div class="col-6">
                            <ul class="nav flex-column">
                              @foreach($top_menus as $menu)
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ $menu['url'] }}">{{ $menu['menu_name'] }} <i class="fa fa-chevron-right"
                                      aria-hidden="true"></i></a>
                                </li>
                                @foreach($menu['childs'] as $child)
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ $child['url'] }}">{{ $child['menu_name'] }} 
                                      <i class="fa fa-chevron-right"
                                      aria-hidden="true"></i></a>
                                  </li>
                                @endforeach
                              @endforeach
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="nav flex-column">
                              @foreach($popup_menus as $menu)
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ $menu['url'] }}">{{ $menu['menu_name'] }} <i class="fa fa-chevron-right"
                                      aria-hidden="true"></i></a>
                                </li>
                                @foreach($menu['childs'] as $child)
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ $child['url'] }}">{{ $child['menu_name'] }} 
                                      <i class="fa fa-chevron-right"
                                      aria-hidden="true"></i></a>
                                  </li>
                                @endforeach
                              @endforeach
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="nav flex-column">
                              @foreach($popup_menus2 as $menu)
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ $menu['url'] }}">{{ $menu['menu_name'] }} <i class="fa fa-chevron-right"
                                      aria-hidden="true"></i></a>
                                </li>
                                @foreach($menu['childs'] as $child)
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ $child['url'] }}">{{ $child['menu_name'] }} 
                                      <i class="fa fa-chevron-right"
                                      aria-hidden="true"></i></a>
                                  </li>
                                @endforeach
                              @endforeach
                            </ul>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

        {{-- <div class="menu-s">
          <div class="menu-mobile">
            <div class="humburger-landing-menu">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
          </div>
        </div> --}}

      </div>

    </div>
  </div>

</header>


<div class="menu-landing-mobile">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link @@overview" href="landing-overview.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link @@step" href="index.html">Step-By-Step</a>
    </li>
    <li class="nav-item">
      <a class="nav-link @@getInspired" href="get-inspired.html">Get Inspired</a>
    </li>
  </ul>
</div>
<script type="text/javascript">
    var arrival =  '<?php echo \Session::get('arrival');?>';
    var departure =  '<?php echo \Session::get('departure');?>';
</script>