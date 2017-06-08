<nav class="navbar navbar-default" style="margin-bottom: 0px;">
  <div class="container-fluid" style="text-align: center;">
  	<div class="navbar-header col-md-1">
      <span class="navbar-brand" href="javascript:;" style="background-color: #bbb;">Berra</span>
    </div>
    <ul class="nav navbar-nav col-md-5">
      <li class="col-md-3 active"><a href="{{ route('en-suspens.index') }}">Suspendus</a></li>
      <li class="col-md-3" ><a href="{{ route('payés.index') }}">Payés</a></li>
      <li class="col-md-3" ><a href="{{ route('achetés.index') }}">Achetés</a></li>
      <li class="col-md-3" ><a href="{{ route('rejetésberra.index') }}">Rejetés</a></li>
    </ul>
    <div class="navbar-header col-md-1">
      <span class="navbar-brand" href="javascript:;" style="background-color: #bbb;">Hna</span>
    </div>
    <ul class="nav navbar-nav col-md-5">
      <li class="col-md-4" ><a href="{{ route('commandés.index') }}">Commandés</a></li>
      <li class="col-md-4" ><a href="{{ route('livrés.index') }}">Livrés(Payés)</a></li>
      <li class="col-md-4" ><a href="{{ route('rejetéshna.index') }}">Rejetés</a></li>
    </ul>
  </div>
</nav>


