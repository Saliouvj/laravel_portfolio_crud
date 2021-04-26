<section class="container mt-5">
    <h1>resumeTitres</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($resumeTitres as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td><a class="btn btn-primary" href="/backoffice/resume-showResumeTitre2/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/resume-deleteResumeTitre2/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="/backoffice/resume-editResumeTitre2/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createResumeTitre2')
    </form>
  </section>