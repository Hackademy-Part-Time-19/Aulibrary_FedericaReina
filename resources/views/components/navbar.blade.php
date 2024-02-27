<nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 3px 5px 12px -3px rgba(0,0,0,0.27);">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}"><b><span style="color:#f3d113">Au</span>Library</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('books.index')}}">Books</a>
              </li>

              @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('books.create')}}">Upload a book</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.books')}}">Your Library</a>
                </li>

              @endauth
          </ul>

          <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
              @guest
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#fbc500">
                      <b>Authentication</b>
                  </a>
                  <ul class="dropdown-menu" style="border:none;">
                      <li><a class="dropdown-item" href="/login">Login</a></li>
                      <li><a class="dropdown-item" href="/register">Register</a></li>
                  </ul>
              </li>
              @endguest

              @auth
              <li class="nav-item">
                  <form action="/logout" method="POST">
                      @csrf
                      <button class="buttonPrimary">Logout</button>
                  </form>
              </li>
              @endauth
          </ul>
      </div>
  </div>
</nav>
