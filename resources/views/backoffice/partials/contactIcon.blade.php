<section class="container mt-5">
    <h1>contactIcons</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">icon</th>
            <th scope="col">titre</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactIcons as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->icon}}</td>
              <td>{{$item->titre}}</td>
              <td><a class="btn btn-primary" href="/backoffice/contact-showContactIcon/{{$item->id}}">show</a></td> 
              <td>
                <form action="/backoffice/contact-deleteContactIcon/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                <td><a class="btn btn-primary" href="/backoffice/contact-editContactIcon/{{$item->id}}">Edit</a></td>
            </td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createContactIcon')
    </form>
  </section>