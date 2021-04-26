
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
              <h5 class="card-title">{{$showUserTimeList->id}}</h5>
              <h5 class="card-title">chiffre: {{$showUserTimeList->chiffre}}</h5>
              <h5 class="card-title">text1: {{$showUserTimeList->text1}}</h5>
              <h5 class="card-title">text2: {{$showUserTimeList->text2}}</h5>
              <h5 class="card-title">icon: {{$showUserTimeList->icon}}</h5>
              <h5 class="card-title">color: {{$showUserTimeList->color}}</h5>
          </div>
      </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>