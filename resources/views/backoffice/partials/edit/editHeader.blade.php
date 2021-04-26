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
    <form action="/backoffice-updateTitre/{{$editHeader->id}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">ref</label>
            <input type="text" name="ref" value="{{old("ref") ? old("ref") :$editHeader->ref}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">titre</label>
            <input type="text" name="titre" value="{{old("titre") ? old("titre") :$editHeader->titre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>