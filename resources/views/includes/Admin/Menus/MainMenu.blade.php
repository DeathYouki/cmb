<nav class="navbar navbar-default" style="margin-bottom: 0px;">
  <div class="container-fluid" style="text-align: center;">
    <div class="navbar-header col-md-2">
      <span class="navbar-brand" href="javascript:;">Administration</span>
    </div>
    <ul class="nav navbar-nav col-md-10">
      <li class="col-md-2 j-main-menu-link active"><a id="j-main-menu-link-commandes" href="javascript:;">Commandes</a></li>
      <li class="col-md-2 j-main-menu-link" ><a id="j-main-menu-link-haouta" href="javascript:;">Haouta</a></li>
      <li class="col-md-2 j-main-menu-link" ><a id="j-main-menu-link-cmh" href="javascript:;">CMH</a></li>
      <li class="col-md-2 j-main-menu-link" ><a id="j-main-menu-link-utilisateurs" href="javascript:;">Utilisateurs</a></li>
      <li class="col-md-2 j-main-menu-link" ><a id="j-main-menu-link-statistiques" href="javascript:;">Statistiques</a></li>

      <div class="nav navbar-nav navbar-right">
        <!-- Logout Links -->
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
      </div> 
    </ul>
  </div>
</nav>





