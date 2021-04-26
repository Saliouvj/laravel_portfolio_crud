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
                  <h5 class="card-title">{{$showPricings->id}}</h5>
                  <h5 class="card-title">titre: {{$showPricings->titre}}</h5>
                  <h5 class="card-title">chiffre: {{$showPricings->chiffre}}</h5>
                  <h5 class="card-title">text1: {{$showPricings->text1}}</h5>
                  <h5 class="card-title">text2: {{$showPricings->text2}}</h5>
                  <h5 class="card-title">text3: {{$showPricings->text3}}</h5>
                  <h5 class="card-title">text4: {{$showPricings->text4}}</h5>
                  <h5 class="card-title">text5: {{$showPricings->text5}}</h5>
                  <h5 class="card-title">text6: {{$showPricings->text6}}</h5>
                  <h5 class="card-title">btn: {{$showPricings->btn}}</h5>
                </div>
          </div>
    </div>  
    
    





    <script src="{{asset('css/app.css')}}"></script>
</body>
</html>