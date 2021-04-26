<section class="container mt-5">
    <h1>resumeList</h1>
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titre</th>
            <th scope="col">subtitre1</th>
            <th scope="col">subtitre2</th>
            <th scope="col">text1</th>
            <th scope="col">text2</th>
            <th scope="col">text3</th>
            <th scope="col">text4</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($resumeList as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->titre}}</td>
              <td>{{$item->subtitre1}}</td>
              <td>{{$item->subtitre2}}</td>
              <td>{{$item->text1}}</td>
              <td>{{$item->text2}}</td>
              <td>{{$item->text3}}</td>
              <td>{{$item->text4}}</td>
              <td><a class="btn btn-primary" href="/backoffice/resume-showResume3/{{$item->id}}">show</a></td>
              <td>
                <form action="/backoffice/resume-deleteResume3/{{$item->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="/backoffice/resume-editResume3/{{$item->id}}">Edit</a></td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
      @include('backoffice.partials.create.createResume3')
    </form>
  </section>