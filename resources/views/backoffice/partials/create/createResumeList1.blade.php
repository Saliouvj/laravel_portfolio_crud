<div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="/backoffice/resume-storeResumeList1" method="POST">
        @csrf
        <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">text</label>
            <input type="text" name="text" value="{{old("text")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>