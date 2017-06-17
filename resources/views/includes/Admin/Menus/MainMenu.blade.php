<nav class="navbar navbar-default" style="margin-bottom: 0px;">
    <div class="container-fluid" style="text-align: center;">
        <div class="col-sm-12 navbar-container nav-overflow--hidden">
        <div class="navbar-header col-sm-2">
            <span class="navbar-brand" href="javascript:void(0)">Administration CMB</span>
        </div>
        <ul class="nav navbar-nav col-sm-9">
            <li class="col-sm-3 main-menu__li-link j-main-menu-link active"><a class="main-menu__a-link" id="j-main-menu-link-commandes" href="javascript:void(0)">Commandes</a></li>
            <li class="col-sm-3 main-menu__li-link j-main-menu-link" ><a class="main-menu__a-link" id="j-main-menu-link-haouta" href="javascript:void(0)">Haouta</a></li>
            <li class="col-sm-2 main-menu__li-link j-main-menu-link" ><a class="main-menu__a-link" id="j-main-menu-link-cmh" href="javascript:void(0)">CMH</a></li>
            <li class="col-sm-2 main-menu__li-link j-main-menu-link" ><a class="main-menu__a-link" id="j-main-menu-link-utilisateurs" href="javascript:void(0)">Utilisateurs</a></li>
            <li class="col-sm-2 main-menu__li-link j-main-menu-link" ><a class="main-menu__a-link" id="j-main-menu-link-statistiques" href="javascript:void(0)">Statistiques</a></li> 
        </ul>
        <!-- Logout -->
        <ul class="nav navbar-nav col-sm-1">
            <li class="col-sm-2 main-menu__li-link" >
                <a class="main-menu__a-link" href="{{ route('logout') }}" onclick="
                event.preventDefault(); 
                document.getElementById('logout-form').submit();"><strong>Logout</strong></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
            </li>
        </ul>
        </div>
    </div>
</nav>





