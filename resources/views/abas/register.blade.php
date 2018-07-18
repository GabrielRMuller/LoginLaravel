@include('partials.head')

@include('partials.nav')

<br>


<div class="container">

    <div class="row" >
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method = "POST" align = "center">
                <h2>Cadastre-se</h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="container">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Nome" tabindex="1">
                        </div>
                    </div>
                </div>
                
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                    </div>
                
                <div class="row">
                    <div class="container">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                        </div>
                    </div>
                </div>

                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                </div>
            </form>
         </div> 
     </div> 
</div>