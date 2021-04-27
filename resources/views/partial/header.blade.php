<!-- ======= Header ======= -->
<header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

    <nav class="nav-menu d-none d-lg-block">
      <ul>
          @foreach ($headers as $header)
              <li><a href="{{$header->ref}}">{{$header->titre}}</a></li>
          @endforeach

      </ul>
    </nav>

  </header>
  
  <!-- End Header -->