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
                        <a href="{{ route('pages.home') }}" class="nav-link {{ active_class(['pages/home']) }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pages.about-us') }}" class="nav-link {{ active_class(['pages/about-us']) }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pages.research-and-innovations') }}" class="nav-link {{ active_class(['pages/about-us']) }}">Research and Innovations</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pages.team') }}" class="nav-link {{ active_class(['pages/team']) }}">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pages.partners') }}" class="nav-link {{ active_class(['pages/partners']) }}">Partners</a>
                    </li>
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
        <li class="nav-item {{ active_class(['/admin/projects']) }}">
            <a href="{{ route('projects.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Projects</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['/admin/news']) }}">
            <a href="{{ route('news.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">News</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['/admin/publications']) }}">
            <a href="{{ route('publications.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Publications</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['/admin/research-and-innovations']) }}">
            <a href="{{ route('research-and-innovations.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Research and Innovations</span>
            </a>
        </li>
    </ul>
  </div>
</nav>
