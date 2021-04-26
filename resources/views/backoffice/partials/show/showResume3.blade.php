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
                  <h5 class="card-title">{{$showResume3->id}}</h5>
                  <h5 class="card-title">titre: {{$showResume3->titre}}</h5>
                  <h5 class="card-title">subtitre1: {{$showResume3->subtitre1}}</h5>
                  <h5 class="card-title">subtitre2: {{$showResume3->subtitre2}}</h5>
                  <h5 class="card-title">text1: {{$showResume3->text1}}</h5>
                  <h5 class="card-title">text2: {{$showResume3->text2}}</h5>
                  <h5 class="card-title">text3: {{$showResume3->text3}}</h5>
                  <h5 class="card-title">text4: {{$showResume3->text4}}</h5>
              </div>
          </div>
    </div>  
    
    





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>