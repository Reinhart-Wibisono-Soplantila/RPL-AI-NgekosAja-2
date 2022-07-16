<!-- Navigation Bar -->
        <nav class="navbar navbar-light shadow p-3 mb-5 bg-body fixed-top" style="background-color:#ffffff">
          <div class="container-fluid">
            <a class="navbar-brand text-brand mx-3" href="{{url('/pemilik-kos/homepage')}}">Ngekost<span class="color-b">Aja</span></a>
            <button class="navbar-toggler btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                @auth
              <div class="offcanvas-header">
                <h4 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="bi bi-person-circle" style="color: #ffcc00"></i>{{auth()->user()->nama}}</h4>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  
                  <li>
                    <a class="dropdown-item" href="{{url('/pencari-kos/profile/')}}">Profile</a>
                  </li>
                </ul><hr>
                <li>
                  <form action="/logout" method="POST">
                  @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                </form>
                  </li>
              </div>
               @else
                  <li class="nav-item">
                    <a href="{{url('/login')}}" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Login</a>
                  </li>
                  @endauth
            </div>
          </div>
        </nav>
      <!-- End of Navbar -->