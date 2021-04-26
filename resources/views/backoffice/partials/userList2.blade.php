<section class="container mt-5">
    <h1>userList2</h1>
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
            @foreach ($userList2 as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              <td><a class="btn btn-primary" href="/backoffice/about-showUserList2/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/about-deleteUserList2/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </td>
            <td><a class="btn btn-primary" href="/backoffice/about-editUserList2/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createUserList2')
    </form>
  </section>