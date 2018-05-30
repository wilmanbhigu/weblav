
<!-- Navigation -->
    <!-- <header class="nav <?php if(isset($home) && $home): ?>nav--transparent<?php endif; ?>"> -->
    <header class="nav">

      <div class="nav__holder <?php if(!isset($home)): ?>nav__border<?php endif; ?>" id="sticky-nav">
        <div class="container">
          <div class="flex-parent">

            <div class="nav__header clearfix">
              <!-- Logo -->
              <div class="logo-wrap">
                <a href="/" class="logo__link">
                  <img class="logo logo--dark" src="/img/logo_dark.png" alt="logo">
                  <?php if(isset($home) && $home): ?>
                    <img class="logo logo--light" src="/img/logo_light.png" alt="logo">
                  <?php endif; ?>
                </a>
              </div>

              <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
              </button>
            </div> <!-- end nav-header -->

            <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">              
              
				{{ menu('frontend','partials.top_menu') }}

              <div class="nav__btn-holder">
                <a href="https://github.com/the-control-group/voyager" target="_blank" class="btn btn--sm btn--color rounded"><span><i class="voyager-github-icon" style="margin-right:5px;"></i> Github</span></a>
              </div>
            </nav> <!-- end nav-wrap -->         
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->