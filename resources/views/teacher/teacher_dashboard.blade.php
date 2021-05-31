
<x-app-layout>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<style>
a{
    text-decoration:none !important;
}
.ce{
    background: white;
    width: 80%;
    margin-top: 3rem;
}
@media (min-width: 768px){
.col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 23%;
}
}
@media (min-width: 1200px){
.container {
    max-width: 100%;
}}
.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
    width:100%;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
    width:100%;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 2em;
    opacity: 0.4;
    padding-bottom: 2px;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    /* top: 20px; */
    /* font-size: 32px; */
    display: inline-grid;
  }
.lsc{
    opacity: 0.5;
    font-size:10px;
    color:white;
}
  .card-counter .count-name{
    position: absolute;
    /* right: 35px; */
    top: 65px;
    font-style: italic;
    /* text-transform: capitalize; */
    opacity: 0.5;
    display: block;
    font-size: 12px;
  }
  .lfs{
    font-size: 1.5em;
    opacity: 0.9;
    padding-bottom: 2px;
    color: white;
  }
  .lcs{
      color:white;
  }
</style>
<x-slot name="header">
         </x-slot>
         <div>
       
         </div>
         <div class="container content ce"> 
         @include('flash-message')
         <br>
         <div class="row mt-7">
         <div class="col-sm-10">


    <div class="row mb-5">
    <div class="col-md-3">
    <a href="#">
      <div class="card-counter primary">
        <i class="fa fa-users"></i>
        <span class="count-numbers">Invite Friends</span>
        <span class="count-name">invite to join & get coins</span>
      </div>
      </a>
    </div>
    <div class="col-md-3">
    <a href="{{ route('student.ProfileSettings') }}">
@if(Auth()->user()->profile_img != null)
    <div class="card-counter success">
        <i class="fas fa-image"></i>
        <span class="count-numbers">Photo Uploaded</span>
        <span class="count-name">profile display picture</span>
      </div>
@else
    <div class="card-counter danger">
        <i class="fas fa-image"></i>
        <span class="count-numbers">Upload Photo</span>
        <span class="count-name">profile display picture</span>
      </div>
      @endif
      </a>
      </div>
      <div class="col-md-3">
      <a href="{{ route('teacher.UserPhone') }}">
      <div class="card-counter danger">
        <i class="fas fa-mobile-alt"></i>
        <span class="count-numbers">Verify Mobile</span>
        <span class="count-name">mobile number verification</span>
      </div>
      </a>
  </div>

  <!-- <div class="col-md-3">
  
  </div> -->
    </div>

    <div class="row mb-5">
    <div class="col-md-3">
    <a href="#">
      <div class="card-counter primary">
        <i class="fas fa-thumbs-up"></i>
        <span class="count-numbers">Get Reviews</span>
        <span class="count-name">reviews</span>
      </div>
      </a>
    </div>
    <div class="col-md-3">
    <a href="#">
      <div class="card-counter primary">
        <i class=" fas fa-wallet"></i>
        <span class="count-numbers">Refer & earn </span>
        <span class="count-name">share referral link &  get 10% of the coins they buy</span>
      </div>
      </a>
      </div>
      <div class="col-md-3">
      <a href="#">
      <div class="card-counter primary">
        <i class="fas fa-bullhorn"></i>
        <span class="count-numbers">Promote yourself </span>
        <span class="count-name">add badge on your blog</span>
      </div>
      </a>
  </div>

  <!-- <div class="col-md-3">
  
  </div> -->
    </div>
  </div>
                      	
            	
            <div class="col-sm-2 hidden- text-center">
            <a href="{{ route('teacher.TutorViewProfile', ['t_view' => Auth()->user()->id]) }}">
                    <div class="bg-info alert float-right-">
                    <i class="fa fa-eye lfs"></i>
                    <span class="display-block lcs">My Profile</span>	
                    </div>
                    </a>
                    <a href="#">
                    <div class="bg-info alert float-right-">
                    <i class="fas fa-wallet lcs"></i>
                    <span class="display-block lcs">0 coins</span>	
                    </div>
                    </a>
                    
</div>
</div>
</div>


    




</div>
</x-app-layout>