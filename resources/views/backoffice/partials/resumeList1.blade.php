<section class="container mt-5">
    <h1>reLists</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reLists as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->text}}</td>
              <td><a class="btn btn-primary" href="/backoffice/resume-showResumeList1/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/resume-deleteResumeList1/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="/backoffice/resume-editResumeList1/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createResumeList1')
    </form>
  </section>