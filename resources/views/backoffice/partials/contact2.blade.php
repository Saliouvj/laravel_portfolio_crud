<section class="container mt-5">
    <h1>contactList2</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">icon</th>
            <th scope="col">titre</th>
            <th scope="col">text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactList2 as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->icon}}</td>
              <td>{{$item->titre}}</td>
              <td>{{$item->text}}</td>
              <td><a class="btn btn-primary" href="/backoffice/contact-showContact2/{{$item->id}}">show</a></td> 
              <td>
                <form action="/backoffice/contact-deleteContact2/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </td>
            <td><a class="btn btn-primary" href="/backoffice/contact-editContact2/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createContact2')
    </form>
  </section>