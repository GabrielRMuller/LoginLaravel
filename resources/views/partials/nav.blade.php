<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Sistema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users">Listar Usuários</a>
                </li>
                <li class="nav-item">
                    @if(Auth::check())
                    <a class="nav-link" href="#">{{ Auth::User()->nome }}</a>
                    <a class="nav-link" href="/logout">Logout</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>