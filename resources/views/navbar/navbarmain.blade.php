<nav class="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo.png" alt="" width="200" height="32">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
              <nav class="navbar navbar-expand-sm navbar-inverse justify-content-center">
                <ul class="navbar-nav" id="navbar-tengah">
                  <li class="nav-item mr-1">
                    <a class="nav-link" href="/" id="navigation">Home</a>
                  </li>
                  <li class="nav-item mr-1">
                    <a class="nav-link" href="/diagnoses" id="navigation">Diagnoses</a>
                  </li>
                  <li class="nav-item mr-1">
                    <a class="nav-link" href="/medicine" id="navigation">Medicine</a>
                  </li>
                  <li class="nav-item mr-1">
                    <a class="nav-link" href="/history" id="navigation">History</a>
                  </li>
                  <li class="nav-item mr-1">
                    <a class="nav-link" href="/profile" id="navigation">Profile</a>
                  </li>
                  <li class="nav-item mr-1">
                    <a class="nav-link" href="/dashboard" id="navigation">Dashboard</a>
                  </li>
                </ul>
              </nav>
              @auth
                <a href="/logout">
                  <button class="btn btn-outline-success" type="submit">Logout</button>
                </a>
              @else
                <a href="/login">
                  <button class="btn btn-outline-success" type="submit">Login</button>
                </a>
              @endauth            
            </div>
    </div>
  </nav>