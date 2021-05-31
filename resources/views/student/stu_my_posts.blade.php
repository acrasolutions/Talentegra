
<x-app-layout>
<!-- confirm delete model starts style -->
<style>
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-confirm {		
		color: #636363;
		width: 400px;
		margin: 30px auto;
	}
	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
        text-align: center;
		font-size: 14px;
	}
	.modal-confirm .modal-header {
		border-bottom: none;   
        position: relative;
	}
	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -10px;
	}
	.modal-confirm .close {
        position: absolute;
		top: -5px;
		right: -2px;
	}
	.modal-confirm .modal-body {
		color: #999;
	}
	.modal-confirm .modal-footer {
		border: none;
		text-align: center;		
		border-radius: 5px;
		font-size: 13px;
		padding: 10px 15px 25px;
	}
	.modal-confirm .modal-footer a {
		color: #999;
	}		
	.modal-confirm .icon-box {
		width: 80px;
		height: 80px;
		margin: 0 auto;
		border-radius: 50%;
		z-index: 9;
		text-align: center;
		border: 3px solid #f15e5e;
	}
	.modal-confirm .icon-box i {
		color: #f15e5e;
		font-size: 46px;
		display: inline-block;
		margin-top: 13px;
	}
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
		min-width: 120px;
        border: none;
		min-height: 40px;
		border-radius: 3px;
		margin: 0 5px;
		outline: none !important;
    }
	.modal-confirm .btn-info {
        background: #c1c1c1;
    }
    .modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
        background: #a8a8a8;
    }
    .modal-confirm .btn-danger {
        background: #f15e5e;
    }
    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
<!-- confirm delete model ends style -->
<style>

.profile-header {
    /* position: relative; */
    overflow: hidden
}

.profile-header .profile-header-cover {
    /* background-image: url(https://bootdey.com/img/Content/bg1.jpg); */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
   
}

.profile-header .profile-header-cover:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .75) 100%)
}

.profile-header .profile-header-content {
    color: #fff;
    padding: 25px
}

.profile-header-img {
    float: left;
    width: 120px;
    height: 120px;
    overflow: hidden;
    position: relative;
    z-index: 10;
    margin: 0 0 -20px;
    padding: 3px;
    border-radius: 4px;
    background: #fff
}

.profile-header-img img {
    max-width: 100%
}

.profile-header-info h4 {
    font-weight: 600;
    color: #fff
}

.profile-header-img+.profile-header-info {
    margin-left: 140px
}

.profile-header .profile-header-content,
.profile-header .profile-header-tab {
    position: relative
}



.profile-header .profile-header-tab {
    background: #fff;
    list-style-type: none;
    margin: -10px 0 0;
    padding: 0 0 0 140px;
    white-space: nowrap;
    border-radius: 0
}

.text-ellipsis,
.text-nowrap {
    white-space: nowrap!important
}

.profile-header .profile-header-tab>li {
    display: inline-block;
    margin: 0
}

.profile-header .profile-header-tab>li>a {
    display: block;
    color: #929ba1;
    line-height: 20px;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: 700;
    font-size: 12px;
    border: none
}

.profile-header .profile-header-tab>li.active>a,
.profile-header .profile-header-tab>li>a.active {
    color: #242a30
}

.profile-content {
    padding: 25px;
    border-radius: 4px
}

.profile-content:after,
.profile-content:before {
    content: '';
    display: table;
    clear: both
}

.profile-content .tab-content,
.profile-content .tab-pane {
    background: 0 0
}

.profile-left {
    width: 200px;
    float: left
}

.profile-right {
    margin-left: 240px;
    padding-right: 20px
}

.profile-image {
    height: 175px;
    line-height: 175px;
    text-align: center;
    font-size: 72px;
    margin-bottom: 10px;
    border: 2px solid #E2E7EB;
    overflow: hidden;
    border-radius: 4px
}

.profile-image img {
    display: block;
    max-width: 100%
}

.profile-highlight {
    padding: 12px 15px;
    background: #FEFDE1;
    border-radius: 4px
}

.profile-highlight h4 {
    margin: 0 0 7px;
    font-size: 12px;
    font-weight: 700
}

.table.table-profile>thead>tr>th {
    border-bottom: none!important
}

.table.table-profile>thead>tr>th h4 {
    font-size: 20px;
    margin-top: 0
}

.table.table-profile>thead>tr>th h4 small {
    display: block;
    font-size: 12px;
    font-weight: 400;
    margin-top: 5px
}

.table.table-profile>tbody>tr>td,
.table.table-profile>thead>tr>th {
    border: none;
    padding-top: 7px;
    padding-bottom: 7px;
    color: #242a30;
    background: 0 0
}

.table.table-profile>tbody>tr>td.field {
    width: 20%;
    text-align: right;
    font-weight: 600;
    color: #2d353c
}

.table.table-profile>tbody>tr.highlight>td {
    border-top: 1px solid #b9c3ca;
    border-bottom: 1px solid #b9c3ca
}

.table.table-profile>tbody>tr.divider>td {
    padding: 0!important;
    height: 10px
}

.profile-section+.profile-section {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #b9c3ca
}

.profile-section:after,
.profile-section:before {
    content: '';
    display: table;
    clear: both
}

.profile-section .title {
    font-size: 20px;
    margin: 0 0 15px
}

.profile-section .title small {
    font-weight: 400
}

body.flat-black {
    background: #E7E7E7
}

.flat-black .navbar.navbar-inverse {
    background: #212121
}

.flat-black .navbar.navbar-inverse .navbar-form .form-control {
    background: #4a4a4a;
    border-color: #4a4a4a
}

.flat-black .sidebar,
.flat-black .sidebar-bg {
    background: #3A3A3A
}

.flat-black .page-with-light-sidebar .sidebar,
.flat-black .page-with-light-sidebar .sidebar-bg {
    background: #fff
}

.flat-black .sidebar .nav>li>a {
    color: #b2b2b2
}

.flat-black .sidebar.sidebar-grid .nav>li>a {
    border-bottom: 1px solid #474747;
    border-top: 1px solid #474747
}

.flat-black .sidebar .active .sub-menu>li.active>a,
.flat-black .sidebar .nav>li.active>a,
.flat-black .sidebar .nav>li>a:focus,
.flat-black .sidebar .nav>li>a:hover,
.flat-black .sidebar .sub-menu>li>a:focus,
.flat-black .sidebar .sub-menu>li>a:hover,
.sidebar .nav>li.nav-profile>a {
    color: #fff
}

.flat-black .sidebar .sub-menu>li>a,
.flat-black .sidebar .sub-menu>li>a:before {
    color: #999
}

.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a,
.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:focus,
.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:hover,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:focus,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:hover {
    color: #000
}

.flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:focus>a,
.flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:hover>a {
    background: #323232
}

.flat-black .page-sidebar-minified .sidebar .nav li.has-sub>.sub-menu,
.flat-black .sidebar .nav>li.active>a,
.flat-black .sidebar .nav>li.active>a:focus,
.flat-black .sidebar .nav>li.active>a:hover,
.flat-black .sidebar .nav>li.nav-profile,
.flat-black .sidebar .sub-menu>li.has-sub>a:before,
.flat-black .sidebar .sub-menu>li:before,
.flat-black .sidebar .sub-menu>li>a:after {
    background: #2A2A2A
}

.flat-black .page-sidebar-minified .sidebar .sub-menu>li:before,
.flat-black .page-sidebar-minified .sidebar .sub-menu>li>a:after {
    background: #3e3e3e
}

.flat-black .sidebar .nav>li.nav-profile .cover.with-shadow:before {
    background: rgba(42, 42, 42, .75)
}

.bg-white {
    background-color: #fff!important;
}
.p-10 {
    padding: 10px!important;
}
.media.media-xs .media-object {
    width: 32px;
}
.m-b-2 {
    margin-bottom: 2px!important;
}
.media>.media-left, .media>.pull-left {
    padding-right: 15px;
}
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}
select.form-control:not([size]):not([multiple]) {
    height: 34px;
}
.form-control.input-inline {
    display: inline;
    width: auto;
    padding: 0 7px;
}


.timeline {
    list-style-type: none;
    margin: 0;
    padding: 0;
    position: relative
}

.hef:hover {
  
  box-shadow: 0 10px 14px rgb(0 0 0 / 10%), 0 6px 12px rgb(0 0 0 / 20%);
}

.timeline>li {
    position: relative;
    min-height: 50px;
    padding: 20px 0
}



.timeline .timeline-body {
    /* margin-left: 23%;
    margin-right: 17%; */
    background: #fff;
    position: relative;
    padding: 20px 25px;
    border-radius: 6px
}

.timeline .timeline-body:before {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    border-right-color: #fff;
    left: -20px;
    top: 20px
}

.timeline .timeline-body>div+div {
    margin-top: 15px
}

.timeline .timeline-body>div+div:last-child {
    margin-bottom: -20px;
    padding-bottom: 20px;
    border-radius: 0 0 6px 6px
}

.timeline-header {
    padding-bottom: 10px;
    border-bottom: 1px solid #e2e7eb;
    line-height: 30px
}

.timeline-header .userimage {
    float: left;
    width: 34px;
    height: 34px;
    border-radius: 40px;
    overflow: hidden;
    margin: -2px 10px -2px 0
}

.timeline-header .username {
    font-size: 16px;
    font-weight: 600
}

.timeline-header .username,
.timeline-header .username a {
    color: #2d353c
}

.timeline img {
    max-width: 100%;
    display: block
}

.timeline-content {
    letter-spacing: .25px;
    line-height: 18px;
    font-size: 13px
}

.timeline-content:after,
.timeline-content:before {
    content: '';
    display: table;
    clear: both
}

.timeline-title {
    margin-top: 0
}

.timeline-footer {
    background: #fff;
    border-top: 1px solid #e2e7ec;
    padding-top: 15px
}

.timeline-footer a:not(.btn) {
    color: #575d63
}

.timeline-footer a:not(.btn):focus,
.timeline-footer a:not(.btn):hover {
    color: #2d353c
}

.timeline-likes {
    color: #6d767f;
    font-weight: 600;
    font-size: 12px
}

.timeline-likes .stats-right {
    float: right
}

.timeline-likes .stats-total {
    display: inline-block;
    line-height: 20px
}

.timeline-likes .stats-icon {
    float: left;
    margin-right: 5px;
    font-size: 9px
}

.timeline-likes .stats-icon+.stats-icon {
    margin-left: -2px
}

.timeline-likes .stats-text {
    line-height: 20px
}

.timeline-likes .stats-text+.stats-text {
    margin-left: 15px
}

.timeline-comment-box {
    background: #f2f3f4;
    margin-left: -25px;
    margin-right: -25px;
    padding: 20px 25px
}



.lead {
    margin-bottom: 20px;
    font-size: 21px;
    font-weight: 300;
    line-height: 1.4;
}

.text-danger, .text-red {
    color: #ff5b57!important;
}
</style>
<x-slot name="header">
 </x-slot>

@php
 $obs_cat= DB::table('student_posts')->where('user_id', Auth()->user()->id)->orderBy('id','desc')->paginate(2);
@endphp
@if($obs_cat != null);
<div class="container">

   <div class="row">
      <div class="col-md-12">
      

     
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
            <div class="profile">
               <div class="profile-header">
                  <!-- BEGIN profile-header-cover -->
                  <div class="profile-header-cover"></div>
                  <!-- END profile-header-cover -->
                  <!-- BEGIN profile-header-content -->
                  <div class="profile-header-content ">
                     <!-- BEGIN profile-header-img -->
                     <!-- <div class="profile-header-img">
                     @if(Auth::user()->profile_img == null)
                        <img src="{{ URL::asset('public/uploads/profile_image/default/pink.jpg')}}" alt="">
                        @else
                        <img src="{{ URL::asset('public/uploads/profile_image/' .Auth::user()->profile_img)}}" alt="">
                        @endif
                     </div> -->
                     <!-- END profile-header-img -->
                     <!-- BEGIN profile-header-info -->
                     <div class="profile-header-info">
                        <h4 class="m-t-10 m-b-5 mb-4 float-left"><i class="fas fa-sticky-note"></i>My Requirements</h4>
                        <a href="{{ route('student.PostRequirement') }}" class="btn btn-sm btn-info p-3 float-right">Post Your Study Needs</a>
                     </div>
                     
                     <!-- END profile-header-info -->
                  </div>
                  <!-- END profile-header-content -->
                  
               </div>
            </div>
            <div class="float-right mb-2 mt-4">
       @include('flash-message')
       <br>
</div>
            <!-- end profile -->
            <!-- begin profile-content -->
            <div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-post tab -->
                  <div class="tab-pane fade active show" id="profile-post">
                     <!-- begin timeline -->
                     <ul class="timeline">
                        <li>
                           <!-- end timeline-icon -->
                           @foreach ($obs_cat as $key => $row)
                           <!-- begin timeline-body -->
                          
                           <div class="timeline-body mb-4 hef">
                              <div class="timeline-header">
                              <a href="#">
                              <span class="username text-primary">

                                 @php
                                 $s_n=[];
                                    $sub_id = $row->st_subjects;
                                    $sub_ext = json_decode($sub_id, True);
                                    foreach($sub_ext as $key => $num){
                                        $sub_tb= DB::table('subjects')->where('id', $num)->get()->pluck('subject_name')->first();
                                        $s_n[] =  $sub_tb;
                                    }
                                    $ext_arr = json_encode($s_n, True);
                                    $s_name= trim($ext_arr, '[""]');
                                    $sd_name = str_replace('"', ' ', $s_name); 
                                  
                                 @endphp
                                @if($row->st_i_want != "Assignment")
                                 @if($row->meeting_options == "Online")
                                 Online | online {{$sd_name}} teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                 @elseif($row->meeting_options == "Home")
                                 Home | online {{$sd_name}} teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                 @elseif($row->meeting_options == "Travel")
                                   {{$sd_name}} teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                 @endif
                                 @else
                                 <span class="text-capitalize"> {{$sd_name}} teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span> </span> </span></a>
                                 @endif
                                   
                                 <span class="pull-right text-muted"><span class="tooltips  margin-right-10  " data-toggle="tooltip" data-placement="bottom" data-original-title="{{ $row->st_location }}">
                                    <span class="h3">
                                        <i class="fas fa-map-marker-alt text-primary"></i>
                                    </span>
                                    <span> {{ $row->st_location }}</span>
                                            </span>
                                            </span>
                              </div>
                              <div class="timeline-content">
                                 <p class="text-capitalize">
                                 {{ $row->st_requirement }}
                                 </p>
                              </div>
                              <div class="timeline-likes">
                                 <div class="stats-right">
                                    <!-- <span class="stats-text">Online</span>
                                    <span class="stats-text">21 Comments</span> -->
                                 </div>
                                 <div class="stats">
                                 @if($row->km_travel!=null)
                                 <span class="tooltips margin-right-10 text-black" data-toggle="tooltip" data-placement="bottom" data-original-title="Willing to Travel {{$row->km_travel}} KM">
                                    <span class="h3"><i class="fas fa-car" title="Willing to travel"></i> </span>{{$row->km_travel}} km
                                                </span>|
                                   
                                   
                                    @endif
                                            @php
  $b_ft=json_decode($row->st_budget, True);   
                                            @endphp
                                                <span class="tooltips margin-left-10 margin-right-10 text-black" data-toggle="tooltip" data-placement="bottom" data-original-title=""><i class="fas fa-rupee-sign" style="font-size;"></i>
                                                    <span class="h3 margin-right-2 display-inline-block"></span>{{$b_ft[0]}}/{{$b_ft[1]}}
                                                </span>
                                 </div>
                              </div>
                              <div class="timeline-footer">
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter" style="margin-right: 8px;"><i class="fa fa-share fa-fw fa-lg m-r-3 text-primary"></i> View Messages</a>
                              @if($row->status==1)
                                 <a href="javascript:;" style="margin-right: 8px;" data-toggle="modal" data-target="#deletepost_{{$row->id}}" class="m-r-15 text-inverse-lighter" data-toggle="tooltip" data-placement="top" data-original-title="Do you want to Close this post?"><i class="fas fa-times-circle fa-fw fa-lg m-r-3 text-danger"></i> close</a> 
                                    @else
                                    <span class="m-r-15 text-inverse-lighter text-danger" style="margin-right: 8px;"><i class="fas fa-exclamation-triangle fa-fw fa-lg m-r-3 text-danger"></i>Post closed</span>

                                    <a href="{{route('student.StudentRePost', ['post_id'=>$row->id]) }}"><span class="m-r-15 text-inverse-lighter" data-toggle="tooltip" data-placement="top" data-original-title="Do you want to Repost?" ><i class="fas fa-undo-alt fa-fw fa-lg m-r-3 text-success"></i> Repost</a> 
                                    @endif
                                 <!-- Modal -->
<!-- Modal HTML -->
<div id="deletepost_{{$row->id}}" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header" style="display:contents;">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title">Are you sure?</h4>	
                <button type="button" class="close mr-auto mt-auto" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to close this Post? You can also repost it later.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                <a href="{{route('student.DeletePost', ['post_id'=>$row->id]) }}"><button type="button" class="btn btn-danger">Close Post</button></a>
			</div>
		</div>
	</div>
</div>     

                                 <span class="badge badge-pill badge-secondary rounded-left float-right  mt-2" data-toggle="tooltip" data-original-title="Posted {{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}"><i class="fas fa-history mr-1" ></i>Posted {{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</span>
                              </div>
            <!-- end profile-content -->
         </div>
        
         @endforeach
      </div>
     </div>
   </div>
</div>
{{ $obs_cat->links() }}
@else
<div class="card text-center mx-auto m-5" style="width: 70%;">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">You haven't posted any requirements yet.</h5>
    <p class="card-text"> <a class="btn btn-primary rounded text-center margin-top-20" href="{{ route('student.PostRequirement') }}">
                    Post a Requirement
                </a></p>
               <h6>or</h6>
                <a class="btn btn-danger rounded text-center" href="#">
                Find Teachers
                </a>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
    @endif

</x-app-layout>