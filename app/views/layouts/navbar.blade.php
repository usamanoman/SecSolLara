<style>
.navbar>.container .navbar-brand{
  margin-left: 0px !important;  
}
</style>
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
              {{ HTML::image('images/SSW121.png', "Security Solutions Worldwide Logo", array('class' => 'navbar-brand nav-to logo')) }}
            </div>
            
            <!-- BEGIN: MENU -->       
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
              @if(Auth::check() && Auth::user()->role == 'Admin')
                <li><a class="nav-to" href="{{ URL::route('user.edit',array('id'=>Auth::user()->id)) }}">Edit Profile</a></li>
                <li><a class="nav-to" href="{{ URL::route('user.index') }}">Show Users</a></li>
                <li><a class="nav-to" href="{{ URL::route('user.create_admin') }}">Create A Admin</a></li>
                <li><a class="nav-to" href="{{ URL::route('job.create') }}">Create A Job</a></li>
                <li><a class="nav-to" href="{{ URL::route('forum.create') }}">Create A Forum</a></li>
                <li><a class="nav-to" href="{{ URL::route('forum.index') }}">Forum</a></li>
                <li><a class="nav-to" href="{{ URL::route('job.index') }}">Job Listings</a></li>
                <li>{{ HTML::link('user/logout','Logout',array('class'=>'nav-to')) }}</li>
              @elseif(Auth::check() && Auth::user()->role == 'Company')
                <li><a class="nav-to" href="{{ URL::route('user.edit',array('id'=>Auth::user()->id)) }}">Edit Profile</a></li>
                <li><a class="nav-to" href="{{ URL::route('job.create') }}">Create A Job</a></li>
                <li><a class="nav-to" href="{{ URL::route('forum.index') }}">Forum</a></li>
                <li><a class="nav-to" href="{{ URL::route('job.index') }}">Job Listings</a></li>
                <li>{{ HTML::link('user/logout','Logout',array('class'=>'nav-to')) }}</li>
              @elseif(Auth::check() && Auth::user()->role == 'User')
                <li><a class="nav-to" href="{{ URL::route('user.edit',array('id'=>Auth::user()->id)) }}">Edit Profile</a></li>
                <li><a class="nav-to" href="{{ URL::route('forum.index') }}">Forum</a></li>
                <li><a class="nav-to" href="{{ URL::route('job.index') }}">Job Listings</a></li>
                <li>{{ HTML::link('user/logout','Logout',array('class'=>'nav-to')) }}</li>
              @else
                <li><a class="nav-to" href="{{URL::route('home')}}">HOME</a></li>
                <li><a class="nav-to" href="{{URL::route('home')}}#about">About US</a></li>
                  <li><a class="nav-to" href="{{URL::route('home')}}#services">Services</a></li> 
                <li><a class="nav-to" href="{{URL::route('home')}}#clients">CLIENTS</a></li>
                <li><a class="nav-to" href="{{URL::route('home')}}#contacts">Contact</a></li>
                <li><a class="nav-to" href="{{ URL::route('user.create') }}">SIGN UP</a></li>
                <li><a class="nav-to" href="{{ URL::route('user.login') }}">Login</a></li>
                <li><a class="nav-to" id="forum_link" href="#">Forum</a></li>
                <li><a class="nav-to" id="joblist_link" href="#">Job Listings</a></li>
              @endif            
              
             
          </ul>
        </div>
        <!-- END: MENU -->
      </div>
      <!--END: NAV-CONTAINER -->
    </div>


    <script>
      $(function(){
        $("#forum_link").click(function(){
          alert("You must login to use forums");
        });


        $("#joblist_link").click(function(){
          alert("You must login to see job list");
        });
        

      });
    </script>