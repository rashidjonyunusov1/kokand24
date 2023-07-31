@extends('layouts.main')
    
@section('content')
    




          <!-- start category -->
         @include('sections.category')
          <!-- end category -->
        </nav>
        <!-- start ads -->
        @include('sections.ads')
        <!-- end ads -->
      </div>
    </header>
    {{-- start infos --}}
   @include('sections.infos')
    {{-- end infos --}}

    {{-- start posts --}}
    @include('sections.posts')
    {{-- end posts --}}

    {{-- start notification --}}
   @include('sections.notfication')
    {{-- end notification --}}

    <section class="news">
      <div class="container">
        <div class="news__wrapper basic-flex">

            {{-- start latest_news --}}
       @include('sections.latest_news')
          {{-- end latest_news --}}

          <div class="popular-news">

           {{-- start popular news  --}}

           @include('sections.popular_news')

            {{-- end popular news --}}


            {{-- start ads PLACEHOLDER --}}

          @include('sections.ads_placeholder')

            {{-- end ads PLACEHOLDER  --}}
          </div>
        </div>
      </div>
    </section>

    {{-- start app download --}}
   
    @include('sections.app_download')

    {{-- end app download --}}
  </main>

  @endsection