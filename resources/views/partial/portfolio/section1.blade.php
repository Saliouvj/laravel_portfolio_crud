<!-- ======= My Portfolio ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <span>{{$titres[3]->titre}}</span>
        <h2>{{$titres[3]->titre}}</h2>
        <p>{{$titres[3]->subtitre}}</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center">
      <li data-filter="*" class="filter-active">{{$titrePortfolios[0]->titre}}</li>
        <li data-filter=".filter-app">{{$titrePortfolios[1]->titre}}</li>
        <li data-filter=".filter-card">{{$titrePortfolios[2]->titre}}</li>
        <li data-filter=".filter-web">{{$titrePortfolios[3]->titre}}</li>
      </ul>

      <div class="row portfolio-container">

        @foreach ($imagePortfolios as $item)
          <div class="col-lg-4 col-md-6 portfolio-item {{$item->filter}}">
            <div class="portfolio-wrap">
              <img src="{{asset("/storage/img/".$item->imgsrc)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$item->titre1}}</h4>
                <p>{{$item->desc}}</p>
                <div class="portfolio-links">
                  <a href="{{asset("/storage/img/".$item->imgsrc)}}" data-gall="portfolioGallery" class="venobox" title="{{$item->titre}}"><i class="bx bx-plus"></i></a>
                  <a href="{{$item->ref}}" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </section>
  <!-- Fin My Portfolio  -->