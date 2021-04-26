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
    <form action="/backoffice/about-updateUserTimeList/{{$editUserTimeList->id}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">chiffre</label>
            <input type="text" name="chiffre" value="{{old("chiffre") ? old("chiffre") :$editUserTimeList->chiffre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">text1</label>
            <input type="text" name="text1" value="{{old("text1") ? old("text1") :$editUserTimeList->text1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">text2</label>
            <input type="text" name="text2" value="{{old("text2") ? old("text2") :$editUserTimeList->text2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">icon</label>
            <input type="text" name="icon" value="{{old("icon") ? old("icon") :$editUserTimeList->icon}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">color</label>
            <input type="text" name="color" value="{{old("color") ? old("color") :$editUserTimeList->color}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
      
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>