<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
      <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#full"></use>
      </svg>
      <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>
    <ul class="c-sidebar-nav">
      <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{route('home')}}">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
          </svg> Dashboard
          </a>
       </li>
      <li class="c-sidebar-nav-title">Utilities</li>
      <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="colors.html">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-drop')}}"></use>
          </svg> Colors
          </a>
       </li>
     @if (auth()->user()->is_admin)
      <li class="c-sidebar-nav-title">Admin</li>
      <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
          <a class="c-sidebar-nav-link" href="{{route('admin.pages.index')}}">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
          </svg> Pages
          </a>
        
      </li> 
      @endif
{{--       
      <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
        <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="{{route('admin.pages.index')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle')}}"></use>
        </svg> Pages
        </a>
      <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"><span class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/cards.html"><span class="c-sidebar-nav-icon"></span> Cards</a></li>
      </ul>
    </li> --}}
      
      <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();"href="{{ route('logout') }}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-drop')}}"></use>
        </svg> {{ __('Logout') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
    </li>

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
  </div>