<section class="container mt-5">
    <h1>reTitres</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">subtitre</th>
            <th scope="col">text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reTitres as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              <td>{{$item->text}}</td>
              <td><a class="btn btn-primary" href="/backoffice/resume-showResumeTitre/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/resume-deleteResumeTitre/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="/backoffice/resume-editResumeTitre/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createResumeTitre')
    </form>
  </section>