<section class="container mt-5">
    <h1>service2</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">subtitre</th>
            <th scope="col">text</th>
            <th scope="col">imgsrc</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($serviceList as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre}}</td>
              <td>{{$item->text}}</td>
              <td>{{$item->imgsrc}}</td>
              <td><a class="btn btn-primary" href="/backoffice/services-showService2/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/services-deleteService2/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="/backoffice/services-editService2/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createService2')
    </form>
  </section>