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
    <form action="/backoffice/portfolio-storePortfolioImg" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">filter</label>
          <input type="text" name="filter" value="{{old("filter")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">imgsrc</label>
            <input type="file" name="imgsrc" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">titre1</label>
            <input type="text" name="titre1" value="{{old("titre1")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">desc</label>
            <input type="text" name="desc" value="{{old("desc")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">titre2</label>
            <input type="text" name="titre2" value="{{old("titre2")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">ref</label>
            <input type="text" name="ref" value="{{old("ref")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>