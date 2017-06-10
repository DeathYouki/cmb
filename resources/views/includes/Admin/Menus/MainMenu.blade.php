<nav class="navbar navbar-default" style="margin-bottom: 0px;">
  <div class="container-fluid" style="text-align: center;">
    <div class="navbar-header col-md-2">
      <span class="navbar-brand" href="javascript:;">Administration</span>
    </div>
    <ul class="nav navbar-nav col-md-10">
      <li class="col-md-2 active"><a id="j-main-menu-link" href="{{ route('en-suspens.index') }}">Commandes</a></li>
      <li class="col-md-2" ><a id="j-main-menu-link" href="{{ route('vitrinehaouta.index') }}">Haouta</a></li>
      <li class="col-md-2" ><a id="j-main-menu-link" href="{{ route('vitrinecmh.index') }}">CMH</a></li>
      <li class="col-md-2" ><a id="j-main-menu-link" href="{{ route('comptes.index') }}">Utilisateurs</a></li>
      <li class="col-md-2" ><a id="j-main-menu-link" href="javascript:;">Statistiques</a></li>

      {{-- Logout --}}
      <div class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </div> 
    </ul>
  </div>
</nav>





