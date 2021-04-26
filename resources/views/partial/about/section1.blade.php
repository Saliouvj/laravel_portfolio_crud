<section id="about" class="about">
    <div class="container">

      <div class="section-title">
      <span>{{$titres[0]->titre}}</span>
        <h2>{{$titres[0]->titre}}</h2>
        <p>{{$titres[0]->subtitre}}</p>
      </div>

      <div class="row">
        <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
        <div class="col-lg-8 d-flex flex-column align-items-stretch">
          <div class="content pl-lg-4 d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  @foreach ($userList1 as $userList1s)
                      <li><i class="icofont-rounded-right"></i> <strong>{{$userList1s->titre}}:</strong> {{$userList1s->subtitre}}</li>
                  @endforeach
                  

                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  @foreach ($userList2 as $item)
                      <li><i class="icofont-rounded-right"></i> <strong>{{$item->titre}}:</strong> {{$item->subtitre}}</li>
                  @endforeach
                  
                </ul>
              </div>
            </div>
            <div class="row mt-n4">
              @foreach ($userTime as $userTimes)
                  <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="{{$userTimes->icon}}" style="color: {{$userTimes->color}};"></i>
                      <span data-toggle="counter-up">{{$userTimes->chiffre}}</span>
                      <p><strong>{{$userTimes->text1}}</strong> {{$userTimes->text2}}</p>
                    </div>
                  </div>
              @endforeach
              

              
          </div><!-- End .content-->

          <div class="skills-content pl-lg-4">
            @foreach ($userList4 as $userList4s)
                <div class="progress">
                <span class="skill"> {{$userList4s->titre}}<i class="val">{{$userList4s->chiffre}}%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$userList4s->chiffre}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
            @endforeach
            
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Me Section -->