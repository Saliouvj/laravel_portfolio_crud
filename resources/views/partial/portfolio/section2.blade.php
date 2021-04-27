<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container">

      <div class="section-title">
        <span>{{$titres[4]->titre}}</span>
        <h2>{{$titres[4]->titre}}</h2>
        <p>{{$titres[4]->subtitre}}</p>
      </div>

      <div class="row">
        @foreach ($pricings as $princingItem)
            <div class="col-lg-3 col-md-6">
          <div class="box">
          <h3>{{$princingItem->titre}}</h3>
            <h4><sup>$</sup>{{$princingItem->chiffre}}<span> {{$princingItem->text1}}</span></h4>
            <ul>
              <li>{{$princingItem->text2}}</li>
              <li>{{$princingItem->text3}}</li>
              <li>{{$princingItem->text4}}</li>
              <li>{{$princingItem->text5}}</li>
              <li>{{$princingItem->text6}}</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">{{$princingItem->btn}}</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- Fin Pricing Section -->
