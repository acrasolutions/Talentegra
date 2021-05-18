<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.ms {
    
    position: relative;
    padding: .35rem 1rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    font-size: 14px;
    color:white;
    width: 25rem;
    border-left-width: thick;
    float: right;
    margin-right: 3%;
}
.st{
    height:0;
   
}

</style>
@if ($message = Session::get('infomail'))
<div class="alert alert-info-block w3-animate-right ms" style="color:darkblue; background: linear-gradient(to right, #cac531, #f3f9a7);">
<i class="fas fa-envelope" style="color: indianred; font-size: large;"></i>
    <button type="button" class="close st" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<!-- @if ($message = Session::get('infomail'))
<div class="alert-info-block w3-animate-right ms" style="color:darkblue; background: linear-gradient(to right, #cac531, #f3f9a7);">
<i class="fas fa-envelope" style="color: indianred; font-size: large;"></i>
    <button type="button" class="close st" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif -->

@if ($message = Session::get('success'))
<div class="fadei alert alert-success alert-block w3-animate-right ms .bg-success.bg-gradient" style="background: linear-gradient(to right, #02aab0, #00cdac); border-right: dotted !important;">
<i class="fas fa-check-circle" style="color: white; font-size: large;"></i>
    <button type="button" class="close st" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="fadei alert alert-danger alert-block w3-animate-right ms" style="background: linear-gradient(to right, #d31027, #ea384d);border-right: dotted !important;">
<i class="fas fa-exclamation-triangle"></i>
    <button type="button" class="close st" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="fadei alert alert-warning alert-block bg-warning w3-animate-righ ms" style="color: darkblue; background: linear-gradient(to right, #cac531, #f3f9a7);">
<i class="fas fa-exclamation"></i> <button type="button" class="close st" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="fadei alert alert-info alert-block w3-animate-right ms" style="background: linear-gradient(to right, #2193b0, #6dd5ed);border-right: dotted !important;" >
<i class="fas fa-info-circle"></i><button type="button" class="close st" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="fadei alert alert-danger w3-animate-right ms" style="color: white; background: linear-gradient(to right, #cb2d3e, #ef473a);border-right: dotted !important;"">
<i class="fas fa-sensor-alert"></i> <button type="button" class="close st" data-dismiss="alert">×</button>
    Something went wrong..Please check Again!
</div>
@endif

<script>
$("document").ready(function(){
    setTimeout(function(){
       $("div.fadei").remove();
    }, 6000 ); // 5 secs

});
    </script>
</html>
