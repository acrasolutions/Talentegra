<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

     
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Fonts ends -->

    <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       
    <!-- < font-awesome icons> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- < font-awesome icons ends> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- Angular -->
        <link rel="stylesheet" href="{{ asset('css/common-combined-style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset('css/common-combined-style.css') }}"></script>

<!-- Data parsley script --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="http://parsleyjs.org/dist/parsley.js"></script>
<!-- Data parsley script ends--> 

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style type="text/css">

             /* //font awesome icons */
            @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
            .traef:hover {
  
  transition: all .1s ease-in;
    transform: translateY(-2px) translateX(-2px) scale(1.06);
    box-shadow: 0 7px 14px rgb(0 0 0 / 10%), 0 3px 6px rgb(0 0 0 / 10%);

}
</style>
 <!-- Data parsley style -->       
  <style>
  .box
  {
   width:100%;
   max-width:600px;
   background-color:#f9f9f9;
   border:1px solid #ccc;
   border-radius:5px;
   padding:16px;
   margin:0 auto;
  }
  input.parsley-success,
  select.parsley-success,
  textarea.parsley-success {
    color: #468847;
    /* background-color: #DFF0D8; */
    border: 1px solid #D6E9C6;
  }

  input.parsley-error,
  select.parsley-error,
  textarea.parsley-error {
    color: #B94A48;
    /* background-color: #F2DEDE; */
    border: 1px solid #EED3D7;
  }

  .parsley-errors-list {
    margin: 2px 0 3px;
    padding: 0;
    list-style-type: none;
    font-size: 0.9em;
    line-height: 0.9em;
    opacity: 0;

    transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
  }
.parsley-custom-error-message{
    color: #ff0000;
}
  .parsley-errors-list.filled {
    opacity: 1;
  }
  
  .parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{
   color:#ff0000;
  }
  </style>
  <!-- Data parsley style ends--> 
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
       
            {{ $slot }}
        </div>
    </body>
<!-- Data parsley script -->
    <script>
$(document).ready(function(){

 $('#validate_form').parsley();

});
</script>
</html>
