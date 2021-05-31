
<x-app-layout>
<style>

.profile-header {
    /* position: relative; */
    overflow: hidden
}
.ss:hover{
    background: #007bff!important;
    color: white;
}
.iun{
    color: darkgrey;
    font-size: medium;
}
.ian{
    font-size: medium;
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
    bottom: 0
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



.timeline>li {
    position: relative;
    min-height: 50px;
    padding: 20px 0
}
.brup:hover{
    color: deepskyblue;
}
.brup{
    border: none !important;
    background: transparent;
    color: white;
    font-weight: bolder;
   
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
    border-radius: 0 0 6px 6px;
    font-size: smaller;
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
    color: balck;
    font-weight: 600;
    font-size: 12px
}

.timeline-likes .stats-right {
    float: right;
    font-size: 14px;
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
.hef:hover {
  
    box-shadow: 0 10px 14px rgb(0 0 0 / 10%), 0 6px 12px rgb(0 0 0 / 20%);
}
.text-danger, .text-red {
    color: #ff5b57!important;
}
.hb{
    border:none;
}
.hb:hover{
    border:none !important;
    outline:none !important;
}
</style>
<x-slot name="header">
 </x-slot>
<div>
@include('flash-message')
</div>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
                    
                     <!-- END profile-header-img -->
                     <!-- BEGIN profile-header-info -->
                     <div class="profile-header-info">
                        <h4 class="m-t-10 m-b-5 mb-4 float-left"><span class="fas fa-globe"></span> Tutor jobs</h4>
                        <!-- <a href="#" class="btn btn-sm btn-info p-3 float-right">Post Your Study Needs</a> -->
                     </div>
                     <!-- END profile-header-info -->
                  </div>
                  <!-- END profile-header-content -->
               </div>
            </div>
            
            <!-- end profile -->
            <!-- begin profile-content -->
            <div class="profile-content">

            <div class="container" style="width: 70%;">
        <form action="{{ route('t_jobsearch') }}" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group  mb-4">
                <input type="text" class="form-control mr-2" name="q"
                    placeholder="Subject/skill"> 
                    <input type="text" class="form-control" name="location_s"
                    placeholder="Location">
                    <button type="submit" class="btn btn-default hb">
                        <span class="text-white bg-primary p-2"> <i class="fas fa-search"> Search</i></span>
                    </button>
                    </form>
            </div>
       
        <div class="row mx-auto justify-content-center">
        <ul class="list-group list-group-horizontal" style="display:contents;">
       
        <a href="{{ route('tutor.SearchJobs', ['req_search' => 'all']) }}"><li class="list-group-item brup">All</li></a>
        <a href="{{ route('tutor.SearchJobs', ['req_search' => 'Online']) }}"><li class="list-group-item brup">Online</li></a>
        <a href="{{ route('tutor.SearchJobs', ['req_search' => 'Home']) }}"><li class="list-group-item brup">Home</li></a>
        <a href="{{ route('tutor.SearchJobs', ['req_search' => 'Assignment']) }}"><li class="list-group-item brup">Assignment</li></a>

</ul>
        </div>
    </div>
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-post tab -->
                  <div class="tab-pane fade active show" id="profile-post">
                     <!-- begin timeline -->
                     <ul class="timeline">
                        <li>
                           <!-- end timeline-icon -->
                           @if($obs_cat->count() != 0)
                           @foreach ($obs_cat as $key => $row)
                           <!-- begin timeline-body -->
                           <div class="timeline-body mb-4 hef">
                              <div class="timeline-header">
                              <a href="#">
                                 <span class="username text-primary">
                                 @php
                                 $f_s_n=[];
                                    $sub_id = $row->st_subjects;
                                    $sub_ext = json_decode($sub_id, True);
                                    foreach($sub_ext as $key => $thr){
                                        $sub_tb= DB::table('subjects')->where('id', $thr)->get()->pluck('subject_name')->first();
                                        $f_s_n[] =  $sub_tb;
                                    }
                                    $ext_arr = json_encode($f_s_n, True);
                                    $s_name= trim($ext_arr, '[""]');
                                    $sc_name = str_replace('"', ' ', $s_name); 
                                  
                                 @endphp
                                 @php $meet_opt=json_decode($row->meeting_options);
                                @endphp
                                @if($row->st_i_want != "Assignment")
                                
                                @if(((in_array('Home', $meet_opt)) && in_array('Online', $meet_opt)))
                                 Home | Online {{$sc_name}} teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                 @elseif(in_array('Home', $meet_opt))
                                 Home {{$sc_name}} teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                 @elseif(in_array('Online', $meet_opt))
                                 Online {{$sc_name}} teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                
                                 @elseif(in_array('Travel', $meet_opt))
                                 <span class="text-capitalize"> {{$sc_name}}</span> teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span> </span> </a>
                                 @endif
                                 @endif
                                 @if($row->st_i_want == "Assignment")
                                 
                                 @if(((in_array('Home', $meet_opt)) && in_array('Online', $meet_opt)))
                                 Home | Online {{$sc_name}} assignment help teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                 @elseif(in_array('Home', $meet_opt))
                                 Home {{$sc_name}} assignment help teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                 @elseif(in_array('Online', $meet_opt))
                                 Online {{$sc_name}} assignment help teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span>
                                 
                                 @elseif(in_array('Travel', $meet_opt))
                                 <span class="text-capitalize"> {{$sc_name}}</span> assignment help teacher needed in <span class="text-capitalize">{{$row->st_location}}</span></a> <small></small></span> </span></a>
                                 @endif
                                 @endif
                                 

                                 <span class="pull-right text-muted"><span class="tooltips  margin-right-10  " data-toggle="tooltip" data-placement="bottom" data-original-title="{{ $row->st_location }}">
                                    <span class="h3">
                                        <i class="fas fa-map-marker-alt text-primary"></i>
                                    </span>
                                    <span>{{ $row->st_location}}</span>
                                            </span>
                                            </span>
                              </div>
                              <div class="timeline-content">
                                 <p class="text-capitalize">
                               {{$row->st_requirement}}
                                 </p>
                              </div>
                              <div class="timeline-likes">
                                 <div class="stats-right">
@php
$u_data = DB::table('users')->whereId($row->user_id)->pluck('phone_verified')->first();

@endphp

                                @if($u_data == null)
                                    <span class="stats-text"><i class="fas fa-mobile-alt iun" data-toggle="tooltip" data-placement="top" data-original-title="Phone unavailable"></i></span>
                                    @else 
                                    <span class="stats-text"><i class="fas fa-mobile-alt ian" data-toggle="tooltip" data-placement="top" data-original-title="Phone Verified"></i></span>
                                    @endif
                                    @php $meet_opt=json_decode($row->meeting_options);
                                    @endphp
                                    @if(in_array('Online', $meet_opt))
                                    <span class="stats-text" data-toggle="tooltip" data-original-title="Not Available to meet online"><i class="fas fa-wifi iun"></i></span>
                                    @else
                                    <span class="stats-text" data-toggle="tooltip" data-original-title="Available to meet online"><i class="fas fa-wifi ian"></i></span>
                                    @endif
                                    @if(in_array('Home', $meet_opt))
                                    <span class="stats-text"><i class="fas fa-home iun" data-toggle="tooltip" data-original-title="Not available for home tutoring"></i></span>
                                    @else
                                    <span class="stats-text"><i class="fas fa-home ian" data-toggle="tooltip" data-original-title="available for home tutoring"></i></span>
                                    @endif
                                    @if($row->km_travel!=null)
                                     <span class="stats-text"><i class="fas fa-car ian" data-toggle="tooltip"  data-original-title="Can travel ({{$row->km_travel}}.0km)"> {{$row->km_travel}} km</i> </span>
                                   
                                    @else
                                    <span class="stats-text"><i class="fas fa-car iun" data-toggle="tooltip"  data-original-title="Can not travel"> </i> </span>
                                  
                                    @endif
                                 </div>
                                 <div class="stats">
                                 @php
                                 $s_n=[];
                                    $sub_id = $row->st_subjects;
                                    $sub_ext = json_decode($sub_id, True);
                                    foreach($sub_ext as $key => $num){
                                        $sub_tb= DB::table('subjects')->where('id', $num)->get()->pluck('subject_name')->first();
                                        $s_n[] =  $sub_tb;
                                    }
                                 @endphp
                                  @foreach($s_n as $subs)
                                 <a href="#"><span class="p-1 m-1 border border-primary ss rounded-left">{{$subs}}</span> </a>
                                    @endforeach
                                               
                                 </div>
                              </div>
                              <div class="timeline-footer">
                              @php  
                                                    $uld_data = DB::table('users')->whereId($row->user_id)->pluck('last_seen')->first();
                                                    @endphp
                              <span class="tooltips margin-right-10" data-toggle="tooltip" data-placement="top" data-original-title="Student confirmed that they still need a tutor when we called {{ \Carbon\Carbon::parse($uld_data)->diffForHumans() }}">
                                                    <span class="h3"><i class="fas fa-headset" title="Willing to travel"></i> </span> 
                                                  
                                                    @if($uld_data != null)
                                            {{ \Carbon\Carbon::parse($uld_data)->diffForHumans() }}
                                        @else
                                            No data
                                        @endif
                                        </span>|

                                                <span class="tooltips margin-right-10 margin-left-10" data-toggle="tooltip" data-placement="top" data-original-title="Student confirmed that they still need a tutor when we called {{ \Carbon\Carbon::parse($uld_data)->diffForHumans() }}">
                                                    <span class="h3"><i class="fas fa-coins" title="125 coins to apply for this job"></i> </span>125 coins
                                                </span>|

                                                <span class="tooltips margin-left-10 margin-right-10" data-toggle="tooltip" data-placement="top" data-original-title="">
                                                    <span class="h3 margin-right-2 display-inline-block"></i><i class="fas fa-map-marker-alt" style="font-size;"></i></span> {{$row->st_location}}
                                                </span>|
                                                @php
  $b_ft=json_decode($row->st_budget, True);   
                                            @endphp
                                                <span class="tooltips margin-left-10 margin-right-10" data-toggle="tooltip" data-placement="top" data-original-title="{{$b_ft[0]}}/{{$b_ft[1]}}"><i class="fas fa-dollar-sign"></i>
                                                    <span class="h3 margin-right-2 display-inline-block"></span> {{$b_ft[0]}}/{{$b_ft[1]}}
                                                </span>

                                                   
                                 @if(Cache::has('user-is-online-' . $row->user_id))
                                 <i class="fas fa-circle float-right text-success" data-toggle="tooltip" data-original-title="recruiter is online chat now"> online</i>
                                    @else
                                 <i class="fas fa-circle float-right text-secondary mt-1"  data-toggle="tooltip" data-original-title="recruiter is offline now"> offline</i>
                                 @endif
                                
                                            <br>
                                 <span class="badge badge-pill badge-secondary rounded-left float-right " style="margin-top: -.6rem !important;" data-toggle="tooltip"  data-original-title="Posted {{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}"><i class="fas fa-history mr-1" ></i>Posted {{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</span>
                                
                              </div>
                             
            <!-- end profile-content -->
         </div>
        <!-- <script>
                                            window.setInterval(function(){
                                                $.ajax({
                                                    url: "{{ url('live-status') }}/{{$row->user_id }}",
                                                    method: 'GET',
                                                    success: function (result) {
                                                        console.log(result);
                                                       
                                                        
                                                        $('#status_{{$row->user_id}}').html("Status: " + result.status + "<br/>Last Seen: " + result.last_seen);
                                                    }
                                                });
                                            }, 10000); // call every 10 seconds
                                        </script> -->  
         @endforeach
      </div>
      {{ $obs_cat->links() }}
      @else
         
         <p class="mx-auto" style="text-align: center;font-weight:bolder;"><i class="fas fa-undo-alt" style="color: red;"></i> "No jobs found" for your search. Add relevant subjects in your profile to receive job enquiries.</p>
        
         @endif
   </div>
</div>


   

</x-app-layout>