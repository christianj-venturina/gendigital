<nav class="navbar navbar-expand-lg navbar-light col-lg-12 mb-4">
      <div class="container-fluid">
        <!--Logo-->
        <a class="navbar-brand" href="/"
          ><img
            src="/img/logo.png"
            class="logo"
            style="width: 200px"
            alt="GenDigital logo"
        /></a>
        <!--Toggler-->
        <button
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#site_navbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--Links-->
        <div class="collapse navbar-collapse" id="site_navbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href="/products">All products</a></li>
            <li class="nav-item"><a class="nav-link" href="/products/1">Mobile</a></li>
            <li class="nav-item"><a class="nav-link" href="/products/2">Audio</a></li>
            <li class="nav-item"><a class="nav-link" href="/products/3">Laptops</a></li>
          </ul>
          @if (Session::get('user_id'))
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown me-2">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                ><img src="/img/login.png" alt="person icon" style="width: 30px"
              /></a>
              <ul class="dropdown-menu" >
                <li>
                  <a class="dropdown-item" href="/profile">Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/orders"
                    >Orders</a
                  >
                </li>
                <li><hr /></li>
                <li>
                  <a class="dropdown-item" href="/logout" style="color: red"
                    >Sign out</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="/cart"
                ><img src="/img/cart.png" alt="cart icon" style="width: 30px"
              /></a>
            </li>
          </ul>
          @else
          <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item"><a class="nav-link" href="/login">Sign in</a></li>
          </ul>
          @endif
        </div>
      </div>
    </nav>