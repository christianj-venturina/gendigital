<nav class="navbar navbar-expand-lg navbar-light col-lg-12 mb-4">
      <div class="container-fluid">
        <!--Logo-->
        <a class="navbar-brand" href="#"
          ><img
            src="/img/logo.png"
            class="logo"
            style="width: 200px"
            alt="GenDigital logo"
          />
          - Admin</a
        >
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
            <li class="nav-item"><a class="nav-link" href="/admin/dashboard">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="/admin/products">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="/admin/orders">Orders</a></li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown me-2">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                >{{Session::get('first_name')}} {{Session::get('last_name')}}</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/admin/logout" style="color: red"
                    >Sign out</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>