<nav class="navbar bg-primary">
    <div class="container-fluid p-0">
        <div class="d-flex">
            <h5 class="mb-0 sidebar-open d-lg-none text-white cursor-pointer"><i class="fas fa-bars"></i></h5>
            <h5 class="mb-0 ml-3 search-box-open d-lg-none text-white cursor-pointer" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i></h5>
            <form action="" class="d-none d-lg-inline-block">
                <div class="search-box">
                    <input type="text" name="search" class="form-control pr-5" placeholder="Search....">
                    <button class="btn text-primary" ><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="dropdown">
            <div class="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ isset(Auth::user()->photo) ? asset('storage/profile/'.Auth::user()->photo) : asset('img/profile_default.png') }}" width="35px" height="35px" class="rounded-circle border-white border" alt="">
                <span class="text-white d-none d-md-inline-block cursor-pointer">{{ Auth::user()->name }}</span>
                <i class="fas fa-caret-down text-white"></i>
            </div>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route("profile") }}"><i class="fas fa-user"></i> Profile</a>
                <a class="dropdown-item bg-danger text-white" href="{{ route("logout") }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
