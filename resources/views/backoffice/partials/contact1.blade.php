<section class="container mt-5">
    <h1>contactList</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ref</th>
            <th scope="col">class</th>
            <th scope="col">icon</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactList as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->ref}}</td>
              <td>{{$item->class}}</td>
              <td>{{$item->icon}}</td>
              <td><a class="btn btn-primary" href="/backoffice/contact-showContact1/{{$item->id}}">show</a></td> 
              <td>
                <form action="/backoffice/contact-deleteContact1/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </td>
            <td><a class="btn btn-primary" href="/backoffice/contact-editContact2/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createContact1')
    </form>
  </section>