<section class="container mt-5">
    <h1>footer</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">subtitre</th>
            <th scope="col">copy</th>
            <th scope="col">designed</th>
            <th scope="col">img</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($footers as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              <td>{{$item->copy}}</td>
              <td>{{$item->designed}}</td>
              <td>{{$item->img}}</td>
              <td><a class="btn btn-primary" href="/backoffice-showFooter/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice-deleteFooter/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </td>
            <td><a class="btn btn-primary" href="/backoffice-editFooter/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
            
        </tbody>
      </table>
      @include('backoffice.partials.create.createFooter')
    </form>
  </section>