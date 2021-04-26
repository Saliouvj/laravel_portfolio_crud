<section class="container mt-5">
    <h1>resume_list</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre1</th>
            <th scope="col">titre2</th>
            <th scope="col">text1</th>
            <th scope="col">text2</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($resume_list as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre1}}</td>
              <td>{{$item->titre2}}</td>
              <td>{{$item->text1}}</td>
              <td>{{$item->text2}}</td>
              <td><a class="btn btn-primary" href="/backoffice/resume-showResume2/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/resume-deleteResume2/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="/backoffice/resume-editResume2/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createResume2')
    </form>
  </section>