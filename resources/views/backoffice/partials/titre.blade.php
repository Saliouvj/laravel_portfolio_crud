<section class="container mt-5">
    <h1>Titre</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">subtitle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($titres as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              <td><a class="btn btn-primary" href="/backoffice-showTitre/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice-deleteTitre/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </td>
            <td><a class="btn btn-primary" href="/backoffice-editTitre/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
            
        </tbody>
        
      </table>
      @include('backoffice.partials.create.createTitre')
    </form>
  </section>