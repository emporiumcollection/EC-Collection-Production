<header>
  <div class="header-landing top-header">
    <div class="top-header-inner">
      <div class="row align-items-md-end align-items-center">
        <div class="col-md-5 col-4">
          <div class="d-flex">
            <a href="#" class="menu-index" style="padding: 10px 10px 10px 10px;">Menu</a>
          </div>
        </div>
        <div class="col-md-2 col-4 text-center">
          <a href="<?php echo \Config::get('app.onelogindomain');?>"> 
            <?php if(\Config::get('app.currentdomain') == 'voyage'){?>
              <img src="{{ asset('/images/Emporium-Voyage-Logo-72dpi.png') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'spa'){?>
              <img src="{{ asset('/images/Emporium-Spa-Logo-72.png') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'safari'){?>
              <img src="{{ asset('/images/Emporium-Safari-Logo-72dpi.png') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'islands'){?>
              <img src="{{ asset('/images/Emporium-islands.300dpi.png') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'magazine'){?>
              <img src="{{ asset('/images/Emporium-Magazine-Large.svg') }}" width="131" height="60">
            <?php } ?>

            <?php if(\Config::get('app.currentdomain') == 'emporium-collection'){?>
              <img src="{{ asset('/images/Emporium-Collection-Logo-1.png') }}" width="131" height="60">
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
                @include('frontend.themes.EC.layouts.sections.menus')   
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