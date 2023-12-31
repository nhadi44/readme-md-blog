<nav class="navbar bg-warning border-bottom border-1 border-dark">
    <div class="container-fluid container-md">
        <div class="w-100 d-flex justify-content-between align-items-center">
            <div class="w-50 d-flex align-items-center gap-2">
                <img src="{{ asset('assets/icons/markdown.png') }}" alt="readme-md-icon" class="readme-icon">
                <a href="#" class="navbar-brand">Readme.md</a>
            </div>
            <div class="w-100">
                <ul class="navbar-nav d-flex flex-row gap-4 justify-content-end align-items-center">
                    <li class="nav-item d-none d-sm-block">
                        <a href="{{ route('homepage.index') }}"
                            class="nav-link text-capitalize {{ request()->is('/') ? 'active' : '' }}">home</a>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a href="{{ route('aboutpage.index') }}"
                            class="nav-link text-capitalize {{ request()->is('about') ? 'active' : '' }}">about</a>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a href="#" class="nav-link text-capitalize">sign in</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-dark text-capitalize">get started</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
