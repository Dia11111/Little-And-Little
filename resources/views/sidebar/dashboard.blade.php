<aside class="col-12 col-md-2 p-0 bg-dark flex-shrink-1">
    <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2" style="margin-left: 10px;">
        <div class="collapse navbar-collapse ">
            <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                <li class="nav-item active">
                    <a class="nav-link pl-0 text-nowrap" href="{{route('home')}}"></i> <span class="font-weight-bold">Đơn vé</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-0" href="{{route('sukien.index')}}"><span class="d-none d-md-inline">Sự kiện</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-0" href="{{route('ve.index')}}"><span class="d-none d-md-inline">Vé</span></a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link pl-0"href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><span class="d-none d-md-inline">Đăng xuất</span></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</aside>
