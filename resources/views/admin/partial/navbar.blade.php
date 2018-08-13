<header class="hero is-light">
    <div class="hero-head">
      <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

          <a class="navbar-item is--brand">
            <img class="navbar-brand-logo" src="{{ asset('/logo.jpg') }}" alt="Jobjibjib Logo">
          </a>
          <a class="navbar-item is-tab is-hidden-mobile is-active"><span class="icon is-medium"><i class="fa fa-home"></i></span>Home</a>

          <button class="button navbar-burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </button>

        </div>

        <div class="navbar-menu navbar-end" id="navMenu">
          <a class="navbar-item is-tab is-hidden-tablet is-active">Home</a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              <figure class="image is-32x32" style="margin-right:.5em;">
                <img src="https://avatars1.githubusercontent.com/u/7221389?v=4&s=32">
              </figure>
              Phoud
            </a>

            <div class="navbar-dropdown is-right">
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-user-o"></i>
                  </span>
                  Profile
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-power-off"></i>
                  </span>
                  Logout
                </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
