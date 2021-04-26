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
        <div class="card" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">{{$showHeader->id}}</h5>
                  <h5 class="card-title">ref: {{$showHeader->ref}}</h5>
                  <h5 class="card-title">titre: {{$showHeader->titre}}</h5>
              </div>
          </div>
    </div>
    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>
