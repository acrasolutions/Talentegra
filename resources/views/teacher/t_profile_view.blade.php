<x-app-layout>
<style>
.h6, h6 {
    font-size: .75rem !important;
    font-weight: 500;
    font-family: Roboto,Helvetica,Arial,sans-serif;
    line-height: 1.5em;
    text-transform: uppercase;
}
.acflip{
    background: linear-gradient(to right, #02aab0, #00cdac);
    border-radius: 5px !important;
}
.name h6 {
    margin-top: 10px;
    
}
.sfs{
  font-weight: bold;
    font-size: x-large;
    margin-right: 1rem;
    
}
.fw-bold{
    font-weight:800;
}

a .material-icons {
    vertical-align: middle;
}
.csf{
  font-size: large;
    font-weight: 600;
}


.profile-page .page-header {
    height: 380px;
    background-position:center;
}

.page-header {
    height: 30vh;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
    display: flex;
    align-items: center;
}

.header-filter:after, .header-filter:before {
    position: absolute;
    /* z-index: 1; */
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
}

.header-filter::before {
    background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
}

.main-raised {
    margin: -60px 30px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
}

.main {
    background: #FFF;
    position: relative;
    /* z-index: 3; */
}

.profile-page .profile {
    text-align: center;
}

.profile-page .profile img {
    max-width: 160px;
    width: 100%;
    margin: 0 auto;
    -webkit-transform: translate3d(0,-50%,0);
    -moz-transform: translate3d(0,-50%,0);
    -o-transform: translate3d(0,-50%,0);
    -ms-transform: translate3d(0,-50%,0);
    transform: translate3d(0,-50%,0);
}

.img-raised {
    box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);
}

.rounded-circle {
    border-radius: 50%!important;
}

.img-fluid, .img-thumbnail {
    max-width: 100%;
    height: auto;
}

.title {
    margin-top: 30px;
    /* margin-bottom: 25px; */
    min-height: 32px;
    color: #3C4858;
    font-weight: 700;
    font-family: "Roboto Slab","Times New Roman",serif;
}

.profile-page .description {
    margin: 1.071rem auto 0;
    max-width: 600px;
    color: #999;
    font-weight: 300;
}

p {
    font-size: 14px;
    margin: 0 0 10px;
}

.profile-page .profile-tabs {
    margin-top: 4.284rem;
}

.nav-pills, .nav-tabs {
    border: 0;
    border-radius: 3px;
    padding: 0 15px;
}

.nav .nav-item {
    position: relative;
    margin: 0 2px;
}

.nav-pills.nav-pills-icons .nav-item .nav-link {
    border-radius: 4px;
}

.nav-pills .nav-item .nav-link.active {
    color: #fff;
    background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
   
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
}

.nav-pills .nav-item .nav-link {
    line-height: 24px;
    font-size: 12px;
    font-weight: 500;
    min-width: 100px;
    color: #555;
    transition: all .3s;
    border-radius: 30px;
    padding: 10px 15px;
    text-align: center;
}

.nav-pills .nav-item .nav-link:not(.active):hover {
    background-color: rgba(200,200,200,.2);
}


.nav-pills .nav-item i {
    display: block;
    font-size: 30px;
    padding: 15px 0;
}

.tab-space {
    padding: 20px 0 50px;
}

.profile-page .gallery {
    margin-top: 3.213rem;
    padding-bottom: 50px;
}

.profile-page .gallery img {
    width: 100%;
    margin-bottom: 2.142rem;
}

.profile-page .profile .name{
    margin-top: -80px;
}

img.rounded {
    border-radius: 6px!important;
}
.profile{
    text-align: -webkit-center;
    margin-top: -15vh;
}
.tab-content>.active {
    display: block;
}
/* .sdpanel {
  margin-bottom: -1rem;
  padding-top: 0px;
}
.media-body {
    margin-top: -1.3rem;
} */

/*buttons*/
.btn {
    position: relative;
    padding: 12px 30px;
    margin: .3125rem 1px;
    font-size: .75rem;
    font-weight: 400;
    line-height: 1.428571;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0;
    border: 0;
    border-radius: .2rem;
    outline: 0;
    transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1);
    will-change: box-shadow,transform;
}

.btn.btn-just-icon {
    font-size: 20px;
    height: 41px;
    min-width: 41px;
    width: 41px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: 41px;
}

.btn.btn-just-icon fa{
    margin-top: 0;
    position: absolute;
    width: 100%;
    transform: none;
    left: 0;
    top: 0;
    height: 100%;
    line-height: 41px;
    font-size: 20px;
}
.btn.btn-link{
    background-color: transparent;
    color: #999;
}

/* dropdown */




.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    min-width: 11rem !important;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    background-color: #fff;
    background-clip: padding-box;
    border-radius: .25rem;
    transition: transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);
}
.lisy{
  font-weight: 700;
  font-size: .85rem !important;
}
.liss{
  font-size: .85rem !important;
}

.dropdown-menu.show{
    transition: transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);
}


.dropdown-menu .dropdown-item:focus, .dropdown-menu .dropdown-item:hover, .dropdown-menu a:active, .dropdown-menu a:focus, .dropdown-menu a:hover {
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(156,39,176,.4);
    background-color: #9c27b0;
    color: #FFF;
}
.show .dropdown-toggle:after {
    transform: rotate(180deg);
}

.dropdown-toggle:after {
    will-change: transform;
    transition: transform .15s linear;
}


.dropdown-menu .dropdown-item, .dropdown-menu li>a {
    position: relative;
    width: auto;
    display: flex;
    flex-flow: nowrap;
    align-items: center;
    color: #333;
    font-weight: 400;
    text-decoration: none;
    font-size: .8125rem;
    border-radius: .125rem;
    margin: 0 .3125rem;
    transition: all .15s linear;
    min-width: 7rem;
    padding: 0.625rem 1.25rem;
    min-height: 1rem !important;
    overflow: hidden;
    line-height: 1.428571;
    text-overflow: ellipsis;
    word-wrap: break-word;
}

.dropdown-menu.dropdown-with-icons .dropdown-item {
    padding: .75rem 1.25rem .75rem .75rem;
}

.dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
    vertical-align: middle;
    font-size: 24px;
    position: relative;
    margin-top: -4px;
    top: 1px;
    margin-right: 12px;
    opacity: .5;
}

</style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        
            
        </h2>
    </x-slot>
  


<body class="profile-page">
 
    
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
                            @if(Auth::user()->profile_img == null)
	                            <img class="img-responsive- rounded-x" src="{{ URL::asset('public/uploads/profile_image/default/pink.jpg')}}" alt="{{ Auth()->user()->name }}" class="img-raised rounded-circle img-fluid" style="height:250px; width:250px;>
                                @else
                                <img class="img-responsive- rounded-x " src="{{ URL::asset('public/uploads/profile_image/' .Auth::user()->profile_img)}}" alt="{{ Auth()->user()->name }}" class="img-raised rounded-circle img-fluid" style="height:250px; width:250px;">
                                @endif
	                        </div>
	                        <div class="name">
	                            <h3 class="title">{{ Auth()->user()->name }}</h3>
								<h6>{{ $f_det->speciality_strength }}</h6>
                                <div class="">
                                <i class="fa fa-star" style="color:grey;" aria-hidden="true"> No reviews yet</i>
                                </div>
                                <center>
                    
                    <a class="btn-u btn-u-green rounded text-center margin-top-20" id="btnContactTutor" href="javascript:void(0);" style="display: inline-block;">
                    <i class="far fa-envelope"></i> Message
                    </a>
                    <a class="btn-u btn-u-blue rounded text-center margin-top-20" id="btnTutorPhone" href="javascript:void(0);" style="display: inline-block;">
                    <i class="fas fa-mobile-alt"></i> Phone
                    </a>
                    <a class="btn-u btn-u-purple rounded text-center margin-top-20" id="btnPayToTutor" href="javascript:void(0);">
                    <i class="fas fa-money-bill"></i> Pay</a>
                    <a data-review-btn-source="reviewBtnTopSide" class="btn-u btn-u-orange rounded margin-top-20 btnReviewTutor" href="javascript:void(0);">
                    <i class="far fa-star"></i> Review</a>
                       
                    </center>
                    <hr>
                    <center>
                    
	                        </div>
	                    </div>
    	            </div>
                </div>
                <div class="description text-center">
                    <p wrap="soft"> {{ $t_des_ext}}  </p>
                </div>
				<div class="row mt-5">
					<div class="col-md-6">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#subjects" role="tab" data-toggle="tab">
                                  <i class="fas fa-graduation-cap"></i>
                                  Subjects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#experience" role="tab" data-toggle="tab">
                                  <i class="fas fa-briefcase"></i>
                                  Experience
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#education" role="tab" data-toggle="tab">
                                  <i class="fas fa-user-graduate"></i>
                                  Education
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#feedetails" role="tab" data-toggle="tab">
                                  <i class="fa fa-info-circle"></i>
                                  Fee details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#reviews" role="tab" data-toggle="tab">
                                  <i class=" fa fa-thumbs-up"></i>
                                  Reviews
                                </a>
                            </li>
                          </ul>
                        </div>

                        <div class="tab-content tab-space">
            <!-- subjects TOOGLE STARTS -->
            <div class="tab-pane active text-center gallery" id="subjects">
  				<div class="row">
  					<div class="col-md-12">
                      <div class="list-group shadow-lg">
  <a class="list-group-item list-group-item-action acflip" aria-current="true">
    <p class="mb-1 mt-1 color-white">Subjects I Teach</p>
  </a>
  @if($t_sub[0] != null)
  @foreach($t_sub[0] as $name)
@php
$sub_name = DB::table('subjects')->select('subject_name', 'id')->whereId($name['subject'])->pluck('subject_name');
$level_name_from = DB::table('sub_levels')->select('level_name', 'id')->whereId($name['from_level'])->pluck('level_name');
$level_name_to = DB::table('sub_levels')->select('level_name', 'id')->whereId($name['to_level'])->pluck('level_name');
@endphp
  <span class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h6 class="mb-1 csf"> {{trim($sub_name, '[""]')}} </h6>
      <small class="text-muted">({{trim($level_name_from, '[""]')}} -{{trim($level_name_to, '[""]')}})</small>
    </div>
  </span>
@endforeach
@else
<a class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h6 class="mb-1 ">No Subjects Added.</h6>
    </div>
  </a>
@endif
</div>

</div>
</div>
</div>
          <!-- subjects TOOGLE ENDS -->

      <!-- experience TOOGLE STARTS -->
            <div class="tab-pane text-center gallery" id="experience">
      			<div class="row">
                  <div class="col-md-12">

<div class="list-group shadow-lg">
  <a class="list-group-item list-group-item-action acflip" aria-current="true">
    <p class="mb-1 mt-1 color-white">Experience</p>
  </a>
  
  @if($ols != null)
  @foreach($ols as $name)
  <a class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h6 class="mb-1 csf"> {{$name['designation']}} <span class="text-muted" style="text-transform: capitalize;"> at {{ $name['organisation'] }}</span>. </h6>
      <small class="text-muted">({{ \Carbon\Carbon::parse($name['e_startdate'])->format('M,Y') }} - {{ \Carbon\Carbon::parse($name['e_enddate'])->format('M,Y') }})</small>
    </div>
  </a>
@endforeach
@else
<a class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h6 class="mb-1 ">No Experience Mentioned.</h6>
    </div>
  </a>
@endif
</div>
  					</div>
      			</div>
  			</div>
        <!-- experience TOOGLE ENDS -->
        
          <!-- education TOOGLE STARTS -->
            <div class="tab-pane text-center gallery" id="education">
      			<div class="row">
                  <div class="col-md-12">
                  <div class="list-group shadow-lg">
  <a class="list-group-item list-group-item-action acflip" aria-current="true">
    <p class="mb-1 mt-1 color-white">Education</p>
  </a>
 
  @if($oel != null)
  @foreach($oel as $oel_name)
  <a class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h6 class="mb-1 csf"> {{$oel_name['deg_name']}} <span class="text-muted" style="text-transform: capitalize;"> at {{ $oel_name['institution'] }}</span>. </h6>
      <small class="text-muted">({{ \Carbon\Carbon::parse($oel_name['startdate'])->format('M,Y') }} - {{ \Carbon\Carbon::parse($oel_name['enddate'])->format('M,Y') }})</small>
    </div>
  </a>
@endforeach
@else
<a class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h6 class="mb-1 ">No Education Qualification Mentioned.</h6>
    </div>
  </a>
  @endif
</div>
  					</div>
      			</div>
      		</div>
           <!-- education TOOGLE ENDS -->

          <!-- feedetails TOOGLE STARTS -->
          <div class="tab-pane text-center gallery" id="feedetails">
      			<div class="row">
                  <div class="col-md-12">
                  <div class="list-group shadow-lg">
  <a class="list-group-item list-group-item-action acflip" aria-current="true">
    <p class="mb-1 mt-1 color-white">Fee details</p>
  </a>
  <a class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h6 class="mb-1 ">&nbsp;I Charge {{$ss_fin['i_charge']}},&nbsp; Min: {{$ss_fin['min_fee']}}Rs &nbsp; and Max: {{$ss_fin['max_fee']}}Rs</h6>
    </div>
  </a>
</div>
  					</div>
      			</div>
      		</div>
               <!-- feedetails TOOGLE ENDS -->

                  <!-- REVIEW TOOGLE STARTS -->
          <div class="tab-pane text-center gallery" id="reviews">
      			<div class="row">
                  <div class="col-md-12">
                  <div class="list-group shadow-lg">
  <a class="list-group-item list-group-item-action acflip" aria-current="true">
    <p class="mb-1 mt-1 color-white">Reviews
</p>
  </a>
  <a class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h6 class="mb-1">No reviews yet. Be the first one to review this tutor.</h6>
    </div>
  </a>
</div>
  					</div>
      			</div>
      		</div>
                  <!-- REVIEW TOOGLE ENDS -->
          </div>
        
    	    	</div>
                <div class="col-md-5 ml-auto mb-4">
         
         <!-- Two Line List with Icon -->
<div class="col-md-12 ml-auto  p-2 rounded shadow-lg" style="background: linear-gradient(to right, #ada996, #f2f2f2, #dbdbdb, #eaeaea);">
<h3 class="text-center">{{ Auth()->user()->name}}</h3>
<ul class="list-group pmd-list md-card-list m-3">
<!-- <li class="list-group-item d-flex border-bottom-0 rounded "> 
    <div class="media-body">
    <h3 class="text-center">{{ Auth()->user()->name}}</h3>
    </div>
</li> -->
    <li class="list-group-item d-flex border-top-0 sdpanel"> 
        <i class="material-icons pmd-list-icon align-self-center sfs">location_on</i>
        <div class="media-body">
            <span class="pmd-list-title text-bolder lisy">{{$f_det->location}}</span>
        </div>
    </li>
    
    <li class="list-group-item d-flex sdpanel"> 
        <i class="material-icons pmd-list-icon align-self-center sfs ">directions_car</i>
        <div class="media-body">
        
            <span class="pmd-list-title text-bolder lisy">Can travel: &nbsp; </span>
            @if($ss_fin['travel']=='yes')
            <span class="pmd-list-subtitle liss badge badge-pill badge-success rounded"> Yes</span>
            @else
            <span class="badge badge-pill badge-danger rounded" style="font-size: small;">No</span>
            @endif
        </div>
    </li>

    <li class="list-group-item d-flex sdpanel"> 
        <i class="material-icons pmd-list-icon align-self-center sfs">power_settings_new</i>
        <div class="media-body">
            <span class="pmd-list-title text-bolder lisy">Last seen: </span>
            <span class="pmd-list-subtitle liss"> &nbsp; 
                                @if($f_f_user->last_seen != null)
                                        {{ \Carbon\Carbon::parse($f_f_user->last_seen)->diffForHumans() }}
                                        @else
                                        No data
                                        @endif</span>
        </div>
    </li>

    <li class="list-group-item d-flex sdpanel "> 
        <i class="material-icons pmd-list-icon align-self-center sfs">person</i>
        <div class="media-body">
            <span class="pmd-list-title text-bolder lisy">Registered: </span>
            <span class="pmd-list-subtitle liss"> &nbsp;{{ \Carbon\Carbon::parse($f_f_user->created_at)->format('M d, Y') }}</span>
        </div>
    </li>

    <li class="list-group-item d-flex sdpanel "> 
        <i class="material-icons pmd-list-icon align-self-center sfs">keyboard</i>
        <div class="media-body">
            <span class="pmd-list-title text-bolder lisy">Total Teaching exp: </span>
            <span class="pmd-list-subtitle liss"> &nbsp;{{$ss_fin['tot_exp']}} yrs.</span>
        </div>
    </li>

    <li class="list-group-item d-flex sdpanel "> 
        <i class="material-icons pmd-list-icon align-self-center sfs ">wifi</i>
        <div class="media-body">
        
        <span class="pmd-list-title text-bolder lisy">Teaches online: &nbsp;</span>
        @if($ss_fin['avail_online_teach']=='yes')
            <span class="pmd-list-subtitle liss badge badge-pill badge-success rounded"> Yes</span>
            @else
            <span class="badge badge-pill badge-danger rounded" style="font-size: small;">No</span>
            @endif
        </div>
    </li>

    <li class="list-group-item d-flex sdpanel "> 
        <i class="material-icons pmd-list-icon align-self-center sfs">signal_cellular_4_bar</i>
        <div class="media-body">
        <span class="pmd-list-title text-bolder lisy">Online Teaching exp: </span>
            <span class="pmd-list-subtitle liss"> &nbsp;{{$ss_fin['online_exp']}} yrs.</span>
        </div>
    </li>

    <li class="list-group-item d-flex sdpanel "> 
        <i class="material-icons pmd-list-icon align-self-center sfs">home</i>
        <div class="media-body">
            <span class="pmd-list-title text-bolder lisy">Teaches at student's home: &nbsp;</span>
            @if($ss_fin['travel']=='yes')
            <span class="pmd-list-subtitle liss badge badge-pill badge-success rounded"> Yes</span>
            @else
            <span class="badge badge-pill badge-danger rounded" style="font-size: small;">No</span>
            @endif
        </div>
    </li>

    <li class="list-group-item d-flex sdpanel "> 
        <i class="material-icons pmd-list-icon align-self-center sfs ">book</i>
        <div class="media-body">
        <span class="pmd-list-title text-bolder lisy">Homework Help: &nbsp;</span>
        @if($ss_fin['help_homework_assig']=='yes')
            <span class="pmd-list-subtitle liss badge badge-pill badge-success rounded"> Yes</span>
            @else
            <span class="badge badge-pill badge-danger rounded" style="font-size: small;">No</span>
            @endif
          
        </div>
    </li>
    <li class="list-group-item d-flex sdpanel "> 
        <div class="media-body">
        <span class="pmd-list-title text-bolder lisy">Fee: </span>
            <span class="pmd-list-subtitle liss"> &nbsp;I Charge {{$ss_fin['i_charge']}},&nbsp; Min: {{$ss_fin['min_fee']}}Rs &nbsp; Max: {{$ss_fin['max_fee']}}Rs</span>
            
        </div>
    </li>
</ul>
</div>
          </div>
            </div>
        
       
          
            </div>
        </div>
	</div>
	 <!--Teacher profile view script -->
     <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
      <!--Teacher profile view script ends--> 

</body>
    <script>
var big_image;

$(document).ready(function() {
  BrowserDetect.init();

  // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
  $('body').bootstrapMaterialDesign();

  window_width = $(window).width();

  $navbar = $('.navbar[color-on-scroll]');
  scroll_distance = $navbar.attr('color-on-scroll') || 500;

  $navbar_collapse = $('.navbar').find('.navbar-collapse');

  //  Activate the Tooltips
  $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

  // Activate Popovers
  $('[data-toggle="popover"]').popover();

  if ($('.navbar-color-on-scroll').length != 0) {
    $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
  }

  materialKit.checkScrollForTransparentNavbar();

  if (window_width >= 768) {
    big_image = $('.page-header[data-parallax="true"]');
    if (big_image.length != 0) {
      $(window).on('scroll', materialKit.checkScrollForParallax);
    }

  }


});

$(document).on('click', '.navbar-toggler', function() {
  $toggle = $(this);

  if (materialKit.misc.navbar_menu_visible == 1) {
    $('html').removeClass('nav-open');
    materialKit.misc.navbar_menu_visible = 0;
    $('#bodyClick').remove();
    setTimeout(function() {
      $toggle.removeClass('toggled');
    }, 550);

    $('html').removeClass('nav-open-absolute');
  } else {
    setTimeout(function() {
      $toggle.addClass('toggled');
    }, 580);


    div = '<div id="bodyClick"></div>';
    $(div).appendTo("body").click(function() {
      $('html').removeClass('nav-open');

      if ($('nav').hasClass('navbar-absolute')) {
        $('html').removeClass('nav-open-absolute');
      }
      materialKit.misc.navbar_menu_visible = 0;
      $('#bodyClick').remove();
      setTimeout(function() {
        $toggle.removeClass('toggled');
      }, 550);
    });

    if ($('nav').hasClass('navbar-absolute')) {
      $('html').addClass('nav-open-absolute');
    }

    $('html').addClass('nav-open');
    materialKit.misc.navbar_menu_visible = 1;
  }
});

materialKit = {
  misc: {
    navbar_menu_visible: 0,
    window_width: 0,
    transparent: true,
    fixedTop: false,
    navbar_initialized: false,
    isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
  },

  initFormExtendedDatetimepickers: function() {
    $('.datetimepicker').datetimepicker({
      icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });
  },

  initSliders: function() {
    // Sliders for demo purpose
    var slider = document.getElementById('sliderRegular');

    noUiSlider.create(slider, {
      start: 40,
      connect: [true, false],
      range: {
        min: 0,
        max: 100
      }
    });

    var slider2 = document.getElementById('sliderDouble');

    noUiSlider.create(slider2, {
      start: [20, 60],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    });
  },

  checkScrollForParallax: function() {
    oVal = ($(window).scrollTop() / 3);
    big_image.css({
      'transform': 'translate3d(0,' + oVal + 'px,0)',
      '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
    });
  },

  checkScrollForTransparentNavbar: debounce(function() {
    if ($(document).scrollTop() > scroll_distance) {
      if (materialKit.misc.transparent) {
        materialKit.misc.transparent = false;
        $('.navbar-color-on-scroll').removeClass('navbar-transparent');
      }
    } else {
      if (!materialKit.misc.transparent) {
        materialKit.misc.transparent = true;
        $('.navbar-color-on-scroll').addClass('navbar-transparent');
      }
    }
  }, 17)
};

// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    }, wait);
    if (immediate && !timeout) func.apply(context, args);
  };
};

var BrowserDetect = {
  init: function() {
    this.browser = this.searchString(this.dataBrowser) || "Other";
    this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
  },
  searchString: function(data) {
    for (var i = 0; i < data.length; i++) {
      var dataString = data[i].string;
      this.versionSearchString = data[i].subString;

      if (dataString.indexOf(data[i].subString) !== -1) {
        return data[i].identity;
      }
    }
  },
  searchVersion: function(dataString) {
    var index = dataString.indexOf(this.versionSearchString);
    if (index === -1) {
      return;
    }

    var rv = dataString.indexOf("rv:");
    if (this.versionSearchString === "Trident" && rv !== -1) {
      return parseFloat(dataString.substring(rv + 3));
    } else {
      return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
    }
  },

  dataBrowser: [{
      string: navigator.userAgent,
      subString: "Chrome",
      identity: "Chrome"
    },
    {
      string: navigator.userAgent,
      subString: "MSIE",
      identity: "Explorer"
    },
    {
      string: navigator.userAgent,
      subString: "Trident",
      identity: "Explorer"
    },
    {
      string: navigator.userAgent,
      subString: "Firefox",
      identity: "Firefox"
    },
    {
      string: navigator.userAgent,
      subString: "Safari",
      identity: "Safari"
    },
    {
      string: navigator.userAgent,
      subString: "Opera",
      identity: "Opera"
    }
  ]

};
    </script>
</x-app-layout>
