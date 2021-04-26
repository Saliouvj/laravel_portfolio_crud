<!-- ======= My Services Section ======= -->
<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <span>{{$titres[2]->titre}}</span>
        <h2>{{$titres[2]->titre}}</h2>
        <p>{{$titres[2]->subtitre}}</p>
      </div>

      <div class="row">
        @foreach ($service_list as $serviceItem)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="{{$serviceItem->icon}}"></i></div>
                <h4 class="title"><a href="">{{$serviceItem->titre}}</a></h4>
                <p class="description">{{$serviceItem->text}}</p>
              </div>
            </div>
        @endforeach

      </div>

    </div>
  </section><!-- End My Services Section -->