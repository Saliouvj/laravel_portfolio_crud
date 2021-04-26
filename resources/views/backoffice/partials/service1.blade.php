<section class="container mt-5">
    <h1>service1</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">text</th>
            <th scope="col">icon</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($service_list as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->text}}</td>
              <td>{{$item->icon}}</td>
              <td><a class="btn btn-primary" href="/backoffice/services-showService1/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/services-deleteService1/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="/backoffice/services-editService1/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createService1')
    </form>
  </section>