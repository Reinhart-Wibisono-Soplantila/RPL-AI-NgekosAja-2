<!-- Navbar-->
<!--<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="background-color: #151100">-->
<!--    <div class="container px-4 px-lg-5 mb-3 mt-3">\-->
<!--      <img src="{{URL::asset('/assets/img/NgekostAja_footer.png')}}" width="15%" />\-->
<!--      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--      </button>-->
<!--      <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--        <ul class="navbar-nav ms-auto" style="width: 100%">-->
<!--          <form class="d-flex" style="width: 100%" action="/hompage/pemilik-kos">-->
<!--            <div class="input-group me-4" >-->
<!--              <input style="width: 100%" type="text" class="form-control" placeholder="Masukkan nama/ area/ alamat indekos" aria-label="Username" aria-describedby="basic-addon1" />-->
<!--            </div>-->
<!--          </form>-->
<!--          {{-- <form action="/logout" method="POST">-->
<!--            @csrf-->
<!--            <button type="submit" class="dropdown-item">Logout</button>-->
<!--          </form> --}}-->
<!--            {{-- <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" style="border-radius: 8px">-->
<!--              <i class="bi bi-search"></i>-->
<!--            </button> --}}-->
<!--          @auth-->
<!--          <li class="nav-item dropdown">-->
<!--            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--              <h2><i class="bi bi-person-circle px-3" style="color: #ffcc00; float:left;"></i></h2>-->
<!--            </a>-->
<!--            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--              <li>-->
<!--                <a class="dropdown-item" href="{{url('/pencari-kos/profile/')}}">Profile</a>-->
<!--              </li>-->
<!--              <li>-->
<!--                <form action="/logout" method="POST">-->
<!--                  @csrf-->
<!--                  <button type="submit" class="dropdown-item">Logout</button>-->
<!--                </form>-->
<!--              </li>-->
<!--            </ul>-->
<!--          </li>-->
<!--          @else-->
<!--          <li class="nav-item">-->
<!--            <a href="{{url('/login')}}" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Login</a>-->
              
<!--            {{-- <h2><a href="">Profile</a></h2> --}}-->
<!--          </li>-->
<!--          @endauth-->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->
<!--  </nav>-->
<!-- End of Navbar -->>

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
                  <li class="dropdown-item">
                    <a class="dropdown-item" href="{{url('/pencari-kos/list')}}">List Kost</a>
                  </li>
                  <li>
                      <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                  </li>
                  
                </ul><hr>
              </div>
            </div>
            </ul>
            @else
              <li class="dropdown-item">
                <a href="{{url('/login')}}" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Login</a>
              </li>
              @endauth
            
          </div>
        </nav>
      <!-- End of Navbar -->