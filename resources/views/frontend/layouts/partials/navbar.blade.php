<div class="container-fluid navb">
  <div class="container ">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand font-weight-bold main-color text-uppercase" href="#">Jagir<span class="text-dark">.com</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-4 ">
            <li class="nav-item  font-weight-bold active mr-2 ">
              <a class="nav-link main-color" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a>
            </li>
          
            <li class="nav-item  font-weight-bold  mr-2">
                <a class="nav-link main-color" href="{{route('view.job')}}">Jobs</a>
              </li>
              <li class="nav-item  font-weight-bold  mr-2">
                <a class="nav-link main-color" href="#">Employeer</a>
              </li>
              <li class="nav-item  font-weight-bold  mr-2 ">
                <a class="nav-link main-color" href="{{route('test.index')}}">Skill Test</a>
              </li>
            <li class="nav-item  font-weight-bold  mr-2 ">
                <a class="nav-link main-color" href="#about-us">About Us</a>
              </li>
              <li class="nav-item  font-weight-bold  mr-2">
                <a class="nav-link main-color" href="#">Contact Us</a>
              </li>


          </ul>
          @guest
          <a class="nav-link text-success" href="{{route('login')}}"> <button class="btn main-color-background"><i class="fas fa-user"></i> Login/Register</button>  </a>
          @endguest
          @auth
          <form action="{{route('logout')}}" method="POST">
          @csrf
             <button type="submit" class="btn btn-link nav-link btn main-color-background"><span class="text-light"><i class="fas fa-sign-out-alt"></i> Logout</span></button> 
          </form>
          @endauth
        </div>
      </nav>
  </div>
</div>