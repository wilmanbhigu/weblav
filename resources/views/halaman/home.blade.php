@extends('layouts.default')

@section('content')
	<section class="hero bg-img bg-gradient white-text" style="background-image: url(img/hero/hero_1.jpg);">

        <div class="container  hero__container container-full-height">

          <div class="row hero__outer flex-vertical-align-center">
            <div class="col-md-5">
              <h1 class="hero__title hero--boxed">The Missing Laravel Admin</h1>
              <p style="margin-right:20px;">Voyager is a Laravel Admin Package that includes BREAD(CRUD) operations, a media manager, menu builder, and much more.</p>
              <div class="hero__btn-holder mt-30">
                
                <a href="https://github.com/the-control-group/voyager" target="_blank" class="btn btn--lg btn--color rounded"><span><i class="voyager-github-icon" style="position:relative; left:-5px;"></i> View on Github</span></a>
                <div class="play-btn__wrap">
                  <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="play-btn play-btn--sm play-btn--white single-video-lightbox" style="border:none;"></a>
                  <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="single-video-lightbox" style="border:none;"><span class="play-btn__text">Learn More</span></a>
                </div>                
              </div>                  
            </div>
            <div class="col-md-7 text-right hidden-sm hidden-xs hero-img">
              <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="hero-img-link single-video-lightbox">
                <img src="img/hero/hero-app.png" class="mt-40 heroapp" alt="">
              </a>
              <a href="/https://www.youtube.com/embed/WXqWWgHMmHY?autoplay=1&showinfo=0&controls=0&rel=0" class="play-btn play-btn--center icon-wave single-video-lightbox"></a>
            </a>
          </div>              
         
        </div>
      </section> <!-- end hero -->
@stop