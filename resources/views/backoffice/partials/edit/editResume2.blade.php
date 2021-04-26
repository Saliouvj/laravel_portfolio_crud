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
    <form action="/backoffice/resume-updateResume2/{{$editResume2->id}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">titre1</label>
            <input type="text" name="titre1" value="{{old("titre1") ? old("titre1") :$editResume2->titre1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">titre2</label>
              <input type="text" name="titre2" value="{{old("titre2") ? old("titre2") :$editResume2->titre2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text1</label>
              <input type="text" name="text1" value="{{old("text1") ? old("text1") :$editResume2->text1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Text2</label>
              <input type="text" name="text2" value="{{old("text2") ? old("text2") :$editResume2->text2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>