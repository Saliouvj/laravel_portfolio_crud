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
    <form action="/backoffice/portfolio-updatePricings/{{$editPricings->id}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">titre</label>
            <input type="text" name="titre" value="{{old("titre") ? old("titre") :$editPricings->titre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">chiffre</label>
              <input type="text" name="chiffre" value="{{old("chiffre") ? old("chiffre") :$editPricings->chiffre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">text1</label>
              <input type="text" name="text1" value="{{old("text1") ? old("text1") :$editPricings->text1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text2</label>
              <input type="text" name="text2" value="{{old("text2") ? old("text2") :$editPricings->text2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text3</label>
              <input type="text" name="text3" value="{{old("text3") ? old("text3") :$editPricings->text3}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text4</label>
              <input type="text" name="text4" value="{{old("text4") ? old("text4") :$editPricings->text4}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text5</label>
              <input type="text" name="text5" value="{{old("text5") ? old("text5") :$editPricings->text5}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text6</label>
              <input type="text" name="text6" value="{{old("text6") ? old("text6") :$editPricings->text6}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">btn</label>
              <input type="text" name="btn" value="{{old("btn") ? old("btn") :$editPricings->btn}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>