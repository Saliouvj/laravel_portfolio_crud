<section class="container mt-5">
    <h1>userList1</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">subtitre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($userList1 as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              <td><a class="btn btn-primary" href="/backoffice/about-showUserList1/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/about-deleteUserList1/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </td>
            <td><a class="btn btn-primary" href="/backoffice/about-editUserList1/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createUserList1')
    </form>
  </section>