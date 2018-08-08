<section class="hero is-white">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
        <div class="column">
          <img src="{{ asset('/logo.jpg') }}">
        </div>
        <div class="column">
          <img class="" src="{{ asset('/banner.png') }}" alt="">
          </div>
          <div class="column">
            <div class="field is-grouped">
            <p class="control is-expanded">
              <input class="input" type="text" placeholder="Find a job">
            </p>
        <p class="control">
          <a class="button is-primary">
          Search
          </a>
          </p>
        </div>
          </div> 
      </div>
    </div>
  </div>
</section>
<hr>
<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item" href="http://bulma.io">
      <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>

   

    <div class="navbar-burger burger" data-target="navMenubd-example">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenubd-example" class="navbar-menu">
    <div class="navbar-start">
      <ul class="navbar-item">
        <li><a href="/" class="navbar-item is-tab"><span class="icon"><i class="fa p-r-10 fa-home"></i></span> Home</a></li>
        <li><a href="" class="navbar-item is-tab"><span class="icon"><i class="fa p-r-10 fa-user"></i></span> Find person</a></li>
        <li><a href="{{ route('home.about') }}" class="navbar-item is-tab"><span class="icon"><i class="fa p-r-10 fa-info-circle"></i></span> About Us</a></li>
        <li><a href="{{ route('home.contact') }}" class="navbar-item is-tab"><span class="icon"><i class="fa p-r-10 fa-phone"></i></span> Contact Us</a></li>
      </ul>
    </div>

    <div class="navbar-end">
      
    </div>
  </div>
</nav>