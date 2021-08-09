<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box {{ Request::is('/') ? 'active' : '' }}">
            <i class="fa fa-home"></i>
            <a href="{{ route('index.port') }}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box {{ Request::is('about') ? 'active' : '' }}">
            <i class="fa fa-user"></i>
            <a href="{{ route('about') }}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box {{ Request::is('projects') ? 'active' : '' }}">
            <i class="fa fa-briefcase"></i>
            <a href="{{ route('projects.port') }}">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box {{ Request::is('contact') ? 'active' : '' }}">
            <i class="fa fa-envelope-open"></i>
            <a href="{{ route('contact') }}">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box {{ Request::is('blog') ? 'active' : '' }}">
            <i class="fa fa-comments"></i>
            <a href="{{ route('blog.port') }}">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('index.port') }}"><i
                            class="fa fa-home"></i><span>Home</span></a>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}"><i
                            class="fa fa-user"></i><span>About</span></a></li>
                <li class="{{ Request::is('projects') ? 'active' : '' }}"><a
                        href="{{ route('projects.port') }}"><i
                            class="fa fa-folder-open"></i><span>Portfolio</span></a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}><a href=" {{ route('contact') }}"><i
                        class="fa fa-envelope-open"></i><span>Contact</span></a>
                </li>
                <li class="{{ Request::is('blog') ? 'active' : '' }}><a href=" {{ route('blog.port') }}"><i
                        class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
