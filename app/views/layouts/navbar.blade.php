<div class="navbar navbar-default light-menu navbar-fixed-top" role="navigation">
      <!-- BEGIN: NAV-CONTAINER -->
      <div class="nav-container container">
          <div class="navbar-header">
              <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
              <!-- BEGIN: LOGO -->
              {{ HTML::image('images/SSW.png', "Security Solutions Worldwide Logo", array('class' => 'navbar-brand nav-to logo')) }}
            </div>
            
            <!-- BEGIN: MENU -->       
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
              @if(Auth::check())
                <li><a class="nav-to" href="forum.html">Forum</a></li>
                <li><a class="nav-to" href="joblisting.html">Job Listings</a></li>
                <li>{{ HTML::link('user/logout','Logout',array('class'=>'nav-to')) }}</li>
              @else
                <li><a class="nav-to" href="#home-fsslider">HOME</a></li>
                <li><a class="nav-to" href="#about">About US</a></li>
                  <li><a class="nav-to" href="#services">Services</a></li> 
                <li><a class="nav-to" href="#clients">CLIENTS</a></li>
                <li><a class="nav-to" href="#contacts">Contact</a></li>
                <li><a class="nav-to" href="forum.html">Forum</a></li>
                <li><a class="nav-to" href="joblisting.html">Job Listings</a></li>
              @endif            
              
             
          </ul>
        </div>
        <!-- END: MENU -->
      </div>
      <!--END: NAV-CONTAINER -->
    </div>