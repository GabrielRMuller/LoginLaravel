@include('partials.head')
<br>
@include('partials.nav')

<div class="col-md-12">
  <div class="container">
    <div class="card-header card-header-icon card-header-rose">
      <div class="card-icon">
        <i class="material-icons">person</i>
      </div>
      <h4 class="card-title mt-0">Usuários</h4>
      <p class="card-category"> Usuários já cadastrados no site<p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class="">
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


            {{-- @foreach($users as $user)
            <tr>
              <td>
                {{$user->id}}
              </td>
              <td>
                {{$user->name}}
              </td>
              <td>
                {{$user->email}}
              </td>
            </tr>
            @endforeach --}}


          </tbody>
        </table>
        <button type="button" class="btn btn-primary" onclick="window.location.href='/'"> Back to Home </button>
      </div>
    </div>
  </div>
</div>