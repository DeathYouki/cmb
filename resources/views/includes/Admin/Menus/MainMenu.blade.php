<nav class="navbar navbar-default" style="margin-bottom: 0px;">
    <div class="container-fluid" style="text-align: center;">
        <div class="navbar-header col-sm-2">
            <span class="navbar-brand" href="javascript:void(0)">Administration</span>
        </div>
        <ul class="nav navbar-nav col-sm-10">
            <li class="col-sm-2 j-main-menu-link active"><a id="j-main-menu-link-commandes" href="javascript:void(0)">Commandes</a></li>
            <li class="col-sm-2 j-main-menu-link" ><a id="j-main-menu-link-haouta" href="javascript:void(0)">Haouta</a></li>
            <li class="col-sm-2 j-main-menu-link" ><a id="j-main-menu-link-cmh" href="javascript:void(0)">CMH</a></li>
            <li class="col-sm-2 j-main-menu-link" ><a id="j-main-menu-link-utilisateurs" href="javascript:void(0)">Utilisateurs</a></li>
            <li class="col-sm-2 j-main-menu-link" ><a id="j-main-menu-link-statistiques" href="javascript:void(0)">Statistiques</a></li>

            <div class="nav navbar-nav navbar-right">
            <!-- Logout Links -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}" onclick="
                        event.preventDefault(); 
                        document.getElementById('logout-form').submit();">Logout</a>

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





