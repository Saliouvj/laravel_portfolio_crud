<section class="container mt-5">
    <h1>header</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ref</th>
            <th scope="col">titre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($headers as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->ref}}</td>
              <td>{{$item->titre}}</td>
             <td><a class="btn btn-primary" href="/backoffice-showHeader/{{$item->id}}">show</a></td> 
              <td>
                <form action="/backoffice-deleteHeader/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </td>
            <td><a class="btn btn-primary" href="/backoffice-editHeader/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
              

        </tbody>
      </table>
      @include('backoffice.partials.create.createHeader')
    </form>
  </section>