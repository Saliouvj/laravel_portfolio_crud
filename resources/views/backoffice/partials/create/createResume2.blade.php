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
    <form action="/backoffice/resume-storeResume2" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Titre1</label>
          <input type="text" name="titre1" value="{{old("titre1")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Titre2</label>
            <input type="text" name="titre2" value="{{old("titre2")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">text1</label>
            <input type="text" name="text1" value="{{old("text1")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">text2</label>
            <input type="text" name="text2" value="{{old("text2")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>