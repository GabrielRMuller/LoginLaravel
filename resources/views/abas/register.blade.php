<div class="form-group">
    @include('partials.head')
    @include('partials.nav')

</div>

<div class="container">

    <div class="container" align="center">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="POST" action='/register' align="center">
                <h2>Cadastre-se</h2>
                <hr class="colorgraph"> {{ csrf_field() }} {{-- Nome --}}
                <div class="row">
                    <div class="container">
                        <div class="form-group">
                            <input type="nome" name="nome" id="nome" class="form-control input-lg" placeholder="Nome" tabindex="1">
                        </div>
                    </div>
                </div>

                {{-- Email --}}
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="4">
                </div>

                {{-- Senha --}}
                <div class="row">
                    <div class="container">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Senha" tabindex="5">
                        </div>
                    </div>
                </div>

                <hr class="colorgraph"> {{-- Botão Registrar --}}
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input type="submit" value="Cadastrar" class="btn btn-primary btn-block btn-lg" tabindex="7">
                    </div>
                </div>
             {{-- @include('partials.errors') --}}

            </form>
        </div>
    </div>
</div>