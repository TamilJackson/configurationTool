{{-- vertical-menu --}}
@if($configData['mainLayoutType'] == 'vertical-menu')
<div class="main-menu menu-fixed @if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto">
      <a class="navbar-brand" href="{{asset('/')}}">
      <h2 class="brand-text mb-0">
        @if(!empty($configData['templateTitle']) && isset($configData['templateTitle']))
        {{$configData['templateTitle']}}
        @else
        Configuration Tool
        @endif
      </h2>
      </a>
    </li>
        <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
          <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
        </a>
        </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
      <li class="nav-item {{ Route::currentRouteName() === 'systemsourcedata' ? 'active' : '' }}">
        <a href=""><i class="menu-livicon" data-icon="diagram"></i><span class="menu-title text-truncate">{{ __('locale.Source Data')}}</span></a>
        <ul class="menu-content">
          @foreach (App\Models\System::get() as $menuItem)
          @if( $menuItem->exists )
          <li>
            <a href="{{route('systemsourcedata',$menuItem->id)}}"  class="d-flex align-items-center"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate">{{$menuItem->name}}</span></a>
          </li>
          @endif
          @endforeach
        </ul>
      </li>
      <li class="nav-item">
        <a href=""><i class="menu-livicon" data-icon="grid"></i><span class="menu-title text-truncate">{{ __('locale.Static Data')}}</span></a>
        <ul class="menu-content">
          <li class="{{ Route::currentRouteName() === 'sourcedata-dbmsystem' ? 'active' : '' }}"><a href="{{route('sourcedata-dbmsystem')}}"  class="d-flex align-items-center"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate">{{ __('locale.DB Management System')}}</span></a></li>
          <li class="{{ Route::currentRouteName() === 'sourcedata-filesystem' ? 'active' : '' }}"><a href="{{route('sourcedata-filesystem')}}"  class="d-flex align-items-center"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate">{{ __('locale.File System')}}</span></a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href=""><i class="menu-livicon" data-icon="two-pointers"></i><span class="menu-title text-truncate">{{ __('locale.Master Source Data')}}</span></a>
        <ul class="menu-content">
          <li class="{{ Route::currentRouteName() === 'systems-list' || Route::currentRouteName() === 'systems-add' || Route::currentRouteName() === 'systems-edit' ? 'active' : '' }}"><a href="{{route('systems-list')}}"  class="d-flex align-items-center"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate">{{ __('locale.Systems')}}</span></a></li>
          <li class="{{ Route::currentRouteName() === 'products-list' || Route::currentRouteName() === 'products-add' || Route::currentRouteName() === 'products-edit' ? 'active' : '' }}"><a href="{{route('products-list')}}"  class="d-flex align-items-center"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate">{{ __('locale.Products')}}</span></a></li>
          <li class="{{ Route::currentRouteName() === 'apiset-list' || Route::currentRouteName() === 'apiset-add' || Route::currentRouteName() === 'apiset-edit' ? 'active' : '' }}"><a href="{{route('apiset-list')}}"  class="d-flex align-items-center"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate">{{ __('locale.API Set')}}</span></a></li>
        </ul>
      </li>
      <li class="nav-item {{ Route::currentRouteName() === 'roles-list' || Route::currentRouteName() === 'roles-add' || Route::currentRouteName() === 'roles-edit' ? 'active' : '' }}">
        <a href="{{route('roles-list')}}"><i class="menu-livicon" data-icon="shield"></i><span class="menu-title text-truncate">{{ __('locale.Roles')}}</span></a>
      </li>
      <li class="nav-item {{ Route::currentRouteName() === 'users-list' || Route::currentRouteName() === 'users-add' || Route::currentRouteName() === 'users-edit' ? 'active' : '' }}">
        <a href="{{route('users-list')}}"><i class="menu-livicon" data-icon="users"></i><span class="menu-title text-truncate">{{ __('locale.Users')}}</span></a>
      </li>
    </ul>
  </div>
</div>
@endif
{{-- horizontal-menu --}}
@if($configData['mainLayoutType'] == 'horizontal-menu')
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-light navbar-without-dd-arrow
@if($configData['navbarType'] === 'navbar-static') {{'navbar-sticky'}} @endif" role="navigation" data-menu="menu-wrapper">
  <div class="navbar-header d-xl-none d-block">
      <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
          <a class="navbar-brand" href="{{asset('/')}}">
          <div class="brand-logo">
            <img src="{{asset('images/logo/logo.svg')}}" class="logo" alt="">
          </div>
          <h2 class="brand-text mb-0">
            @if(!empty($configData['templateTitle']) && isset($configData['templateTitle']))
            {{$configData['templateTitle']}}
            @else
            Configuration Tool
            @endif
          </h2>
          </a>
      </li>
      <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          </a>
      </li>
      </ul>
  </div>
  <div class="shadow-bottom"></div>
  <!-- Horizontal menu content-->
  <div class="navbar-container main-menu-content" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
      @if(!empty($menuData[1]) && isset($menuData[1]))
          @foreach ($menuData[1]->menu as $menu)
          <li class="@if(isset($menu->submenu)){{'dropdown'}} @endif nav-item" data-menu="dropdown">
          <a class="@if(isset($menu->submenu)){{'dropdown-toggle'}} @endif nav-link" href="{{asset($menu->url)}}"
            @if(isset($menu->submenu)){{'data-toggle=dropdown'}} @endif @if(isset($menu->newTab)){{"target=_blank"}}@endif>
              <i class="menu-livicon" data-icon="{{$menu->icon}}"></i>
              <span>{{ __('locale.'.$menu->name)}}</span>
          </a>
          @if(isset($menu->submenu))
              @include('panels.sidebar-submenu',['menu'=>$menu->submenu])
          @endif
          </li>
          @endforeach
      @endif
      </ul>
  </div>
  <!-- /horizontal menu content-->
  </div>
@endif

{{-- vertical-box-menu --}}
@if($configData['mainLayoutType'] == 'vertical-menu-boxicons')
<div class="main-menu menu-fixed @if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
    <li class="nav-item mr-auto">
      <a class="navbar-brand" href="{{asset('/')}}">
        <div class="brand-logo">
          <img src="{{asset('images/logo/logo.svg')}}" class="logo" alt="">
        </div>
        <h2 class="brand-text mb-0">
          @if(!empty($configData['templateTitle']) && isset($configData['templateTitle']))
          {{$configData['templateTitle']}}
          @else
          Configuration Tool
          @endif
        </h2>
      </a>
    </li>
    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
      @if(!empty($menuData[2]) && isset($menuData[2]))
      @foreach ($menuData[2]->menu as $menu)
          @if(isset($menu->navheader))
              <li class="navigation-header text-truncate"><span>{{$menu->navheader}}</span></li>
          @else
          <li class="nav-item {{ Route::currentRouteName() === $menu->slug ? 'active' : '' }}">
            <a href="@if(isset($menu->url)){{asset($menu->url)}} @endif" @if(isset($menu->newTab)){{"target=_blank"}}@endif>
            @if(isset($menu->icon))
              <i class="{{$menu->icon}}"></i>
            @endif
            @if(isset($menu->name))
              <span class="menu-title text-truncate">{{ __('locale.'.$menu->name)}}</span>
            @endif
            @if(isset($menu->tag))
              <span class="{{$menu->tagcustom}} ml-auto">{{$menu->tag}}</span>
            @endif
           </a>
          @if(isset($menu->submenu))
            @include('panels.sidebar-submenu',['menu' => $menu->submenu])
          @endif
          </li>
          @endif
      @endforeach
      @endif
  </ul>
  </div>
</div>
@endif
