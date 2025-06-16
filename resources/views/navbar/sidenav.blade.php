<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="{{route('dashboard')}}" target="_blank">
            <img src="{{ asset('assets/img/logo/backyard16.webp') }}" class="navbar-brand-img" width="160" height="50" alt="main_logo">
            <!-- <span class="ms-1 text-sm text-dark">Creative Tim</span> -->
            
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark side-nav-link" href="{{route('dashboard')}}">
                    <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link text-dark side-nav-link" href="{{route('user')}}">
                        <i class="material-symbols-rounded opacity-5">person</i>
                        <span class="nav-link-text ms-1">Add User</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark side-nav-link" href="{{route('user.list')}}">
                        <i class="material-symbols-rounded opacity-5">receipt_long</i>
                        <span class="nav-link-text ms-1">User List</span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link text-dark side-nav-link" href="{{route('client')}}">
                    <i class="material-symbols-rounded opacity-5">person</i>
                    <span class="nav-link-text ms-1">Add Client</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark side-nav-link" href="{{route('client.list')}}">
                    <i class="material-symbols-rounded opacity-5">groups</i>
                    <span class="nav-link-text ms-1">Client List</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark side-nav-link" href="{{route('bill.create')}}">
                    <i class="material-symbols-rounded opacity-5">add</i>
                    <span class="nav-link-text ms-1">Create Bill</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark side-nav-link" href="{{route('bill.list')}}">
                    <i class="material-symbols-rounded opacity-5">receipt_long</i>
                    <span class="nav-link-text ms-1">Bill List</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark side-nav-link" href="{{route('deleted.bill.list')}}">
                    <i class="material-symbols-rounded opacity-5">close</i>
                    <span class="nav-link-text ms-1">Deleted Bill</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('logout')}}">
                    <i class="material-symbols-rounded opacity-5">logout</i>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
