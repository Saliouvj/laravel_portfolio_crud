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
    <form action="/backoffice/services-storeServices2" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Titre</label>
          <input type="text" name="titre" value="{{old("titre")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Subtitre</label>
            <input type="text" name="subtitre" value="{{old("subtitre")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Text</label>
            <input type="text" name="text" value="{{old("text")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">imgsrc</label>
            <input type="text" name="imgsrc" value="{{old("imgsrc")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>