<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container">

      <div class="owl-carousel testimonials-carousel">
        @foreach ($serviceList as $servicesItem)
            <div class="testimonial-item">
              <img src="{{asset($servicesItem->imgsrc)}}" class="testimonial-img" alt="">
              <h3>{{$servicesItem->titre}}</h3>
              <h4>{{$servicesItem->subtitre}}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{$servicesItem->text}}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Testimonials Section -->