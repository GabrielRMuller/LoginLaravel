@include('partials.head')
  @include('partials.nav')

<div class="col-md-12">
  <div class="container">
    <div class="card-header card-header-icon card-header-rose">
      <div class="card-icon">
        <i class="material-icons">person</i>
      </div>
      <h4 class="card-title mt-0">Usuários</h4>
      <p class="card-category"> Usuários já cadastrados no site
        <p>
    </div>
    <div class="card-body">
      <div class="table-wrapper-scroll-y">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <th>
                ID
              </th>
              <th>
                Nome
              </th>
              <th>
                Email
              </th>
            </thead>

            <tbody>

                @foreach($usuarios as $usuario)
                <tr>
                  <td>
                    {{$usuario->id}}
                  </td>
                  <td>
                    {{$usuario->nome}}
                  </td>
                  <td>
                    {{$usuario->email}}
                  </td>
                </tr>
                @endforeach

            </tbody>

          </table>
        </div>
      </div>
      <button type="button" class="btn btn-primary" onclick="window.location.href='/'"> Back to Home </button>
    </div>
  </div>
</div>