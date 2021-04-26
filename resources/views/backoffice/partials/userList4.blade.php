<section class="container mt-5">
    <h1>userList4</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">chiffre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($userList4 as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->chiffre}}</td>
              <td><a class="btn btn-primary" href="/backoffice/about-showUserList4/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/about-deleteUserList4/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </td>
            <td><a class="btn btn-primary" href="/backoffice/about-editUserList4/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createUserList4')
    </form>
  </section>