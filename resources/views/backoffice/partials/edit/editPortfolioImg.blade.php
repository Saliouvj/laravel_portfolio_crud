<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
    <form action="/backoffice/portfolio-updatePortfolioImg/{{$editPortfolioImg->id}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">filter</label>
            <input type="text" name="filter" value="{{old("filter") ? old("filter") :$editPortfolioImg->filter}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">imgsrc</label>
              <input type="file" name="imgsrc" value="{{old("imgsrc") ? old("imgsrc") :$editPortfolioImg->imgsrc}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">titre1</label>
              <input type="text" name="titre1" value="{{old("titre1") ? old("titre1") :$editPortfolioImg->titre1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">desc</label>
              <input type="text" name="desc" value="{{old("desc") ? old("desc") :$editPortfolioImg->desc}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Titre2</label>
              <input type="text" name="titre2" value="{{old("titre2") ? old("titre2") :$editPortfolioImg->titre2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ref</label>
              <input type="text" name="ref" value="{{old("ref") ? old("ref") :$editPortfolioImg->ref}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>