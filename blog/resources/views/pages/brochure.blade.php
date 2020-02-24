@extends('layouts.webslides')

@section('content')
        <section class="bg-apple aligncenter">
          <!--.wrap = container (width: 90%) -->
          <div class="wrap">
            <h1><img class="whitelogo" src="{{asset('webslides/static/images/logos/apple.svg') }} " alt="Apple Logo"></h1>
          </div>
          <!-- .end .wrap -->
        </section>
        <section class="bg-apple">
          <!--.wrap = container (width: 90%) -->
          <div class="wrap size-50">
            <h1>tumbula.tv</h1>
            <p class="text-intro">Brochure | Corporate Profile | dewobha | 7 dilemmas/ productivity plateaus.</p>
            <p><code>.bg-apple</code></p>
          </div>
          <!-- .end .wrap -->
        </section>
        <section class="bg-apple aligncenter">
          <!--.wrap = container (width: 90%) -->
          <div class="wrap">
            <h2>HTML presentations can be easy</h2>
          </div>
          <!-- .end .wrap -->
        </section>

        <section class="bg-apple aligncenter">
          <h2 class="text-emoji zoomIn">😎</h2>
          <h3><strong>Thank you!</strong></h2>
          <p><a href="https://twitter.com/webslides" title="@WebSlides on Twitter">@WebSlides</a></p>
        </section>

      </article>
    </main>
    <!--main-->

@endsection
