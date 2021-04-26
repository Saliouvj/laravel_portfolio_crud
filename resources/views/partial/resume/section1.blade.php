<!-- ======= My Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <span>{{$titres[1]->titre}}</span>
        <h2>{{$titres[1]->titre}}</h2>
        <p>{{$titres[1]->subtitre}}</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
            <h3 class="resume-title">{{$reTitres[0]->titre}}</h3>
            <div class="resume-item pb-0">
                <h4>{{$reTitres[0]->subtitre}}</h4>
                <p><em>{{$reTitres[0]->text}}</em></p>
                <p>
                    <ul>
                        @foreach ($reLists as $resumeList1)
                            <li>{{$resumeList1->text}}</li>
                        @endforeach
              
                    </ul>
                </p>
          </div>

            <h3 class="resume-title">{{$resumeTitres[0]->titre}}</h3>
            @foreach ($resume_list as $item)
                <div class="resume-item">
                    <h4>{{$item->titre1}}</h4>
                    <h5>{{$item->titre2}}</h5>
                    <p><em>{{$item->text1}}</em></p>
                    <p>{{$item->text2}}</p>
                </div>
            @endforeach
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">{{$resumeTitres[1]->titre}}</h3>
          @foreach ($resumeList as $resumeItem)
              <div class="resume-item">
                <h4>{{$resumeItem->titre}}</h4>
                <h5>{{$resumeItem->subtitre1}}</h5>
                <p><em>{{$resumeItem->subtitre2}} </em></p>
                <p>
                  <ul>
                    <li>{{$resumeItem->text1}}</li>
                    <li>{{$resumeItem->text2}}</li>
                    <li>{{$resumeItem->text3}}</li>
                    <li>{{$resumeItem->text4}}</li>
                  </ul>
                </p>
              </div>
          @endforeach
          
        </div>
      </div>

    </div>
</section><!-- End My Resume Section -->