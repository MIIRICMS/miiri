<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      MIIRI
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/dashboard']) }}">
        <a href="{{ route('dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['pages/*']) }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#general" role="button" aria-expanded="{{ is_active_route(['pages/*']) }}" aria-controls="general">
                <i class="link-icon" data-feather="book"></i>
                <span class="link-title">Manage Pages</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse {{ show_class(['pages/*']) }}" id="general">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('pages.show',['name'=>'home']) }}" class="nav-link {{ active_class(['pages/home']) }}">Home page</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ url('/general/faq') }}" class="nav-link {{ active_class(['general/faq']) }}">Faq</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ url('/general/invoice') }}" class="nav-link {{ active_class(['general/invoice']) }}">Invoice</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ url('/general/profile') }}" class="nav-link {{ active_class(['general/profile']) }}">Profile</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ url('/general/pricing') }}" class="nav-link {{ active_class(['general/pricing']) }}">Pricing</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ url('/general/timeline') }}" class="nav-link {{ active_class(['general/timeline']) }}">Timeline</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </li>

        <li class="nav-item nav-category">Models</li>
{{--        <li class="nav-item {{ active_class(['/dashboard']) }}">--}}
{{--            <a href="{{ route('dashboard') }}" class="nav-link">--}}
{{--                <i class="link-icon" data-feather="box"></i>--}}
{{--                <span class="link-title">Projects</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item {{ active_class(['/admin/programs']) }}">
            <a href="{{ route('programs.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Programs</span>
            </a>
        </li>
    </ul>
  </div>
</nav>
