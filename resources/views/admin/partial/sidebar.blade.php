<aside class="column is-2 aside">
        <nav class="menu">
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a class="is-active" href="#"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Dashboard</a></li>
          </ul>
          <p class="menu-label">
            Administration
          </p>
          <ul class="menu-list">
            <li><a href="{{ route('admin.add') }}"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> Add Job</a></li>
            <li><a href="{{ route('admin.alljob') }}"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> All job</a></li>

            <li><a href="{{ route('admin.addtag') }}"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> Add tag</a></li>

          </ul>
     
        </nav>
      </aside>



      <main class="column main">
        <nav class="breadcrumb is-small" aria-label="breadcrumbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">@yield('content-title')</a></li>
          </ul>
        </nav>

        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <div class="title has-text-primary"><i class="fa fa-tachometer"></i> @yield('content-title')</div>
            </div>
          </div>
        </div>
        