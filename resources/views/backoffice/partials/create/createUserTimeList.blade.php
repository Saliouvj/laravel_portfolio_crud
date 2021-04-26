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
    <form action="/backoffice/about-storeUserTimeList" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">chiffre</label>
          <input type="text" name="chiffre" value="{{old("chiffre")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">text1</label>
            <input type="text" name="text1" value="{{old("text1")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">text2</label>
            <input type="text" name="text2" value="{{old("text2")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">icon</label>
            <input type="text" name="icon" value="{{old("icon")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">color</label>
            <input type="text" name="color" value="{{old("color")}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>