<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://parsleyjs.org/dist/parsley.js"></script>
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
    background-color: #DFF0D8;
    border: 1px solid #D6E9C6;
  }

  input.parsley-error,
  select.parsley-error,
  textarea.parsley-error {
    color: #B94A48;
    background-color: #F2DEDE;
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

  .parsley-errors-list.filled {
    opacity: 1;
  }
  
  .parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{
   color:#ff0000;
  }
  
  </style>

 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laravel 5.8 - Client Side Form Validation using Parsleys.js</h3>
     <br />
   
    <form id="validate_form">
     @CSRF
     <div class="row">
      <div class="col-xs-6">
       <div class="form-group">
        <label>First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup" />
       </div>
      </div>
      <div class="col-xs-6">
       <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup" />
       </div>
      </div>
     </div>
     <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" id="email" class="form-control" placeholder="Email" required data-parsley-type="email" data-parsley-trigger="keyup" />
     </div>
     <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password" required data-parsley-length="[8,16]" data-parsley-trigger="keyup" />
     </div>
     <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required data-parsley-equalto="#password" />
     </div>
     <div class="form-group">
      <label>Website</label>
      <input type="text" name="website" id="website" class="form-control" data-parsley-type="url" data-parsley-trigger="keyup" />
     </div>
     <div class="form-group">
      <div class="checkbox">
       <label> <input type="checkbox" name="check_rules" id="check_rules" required />I Accept the Terms & Conditions</label>
      </div>
     </div>
     <div class="form-group">
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success" />
     </div>
    </form>
  </div>
 </body>
</html>
<script>
$(document).ready(function(){

 $('#validate_form').parsley();

 $('#validate_form').on('submit', function(event){
  event.preventDefault();

  if($('#validate_form').parsley().isValid())
  {
   $.ajax({
   
    method:"POST",
    data:$(this).serialize(),
    dataType:"json",
    beforeSend:function()
    {
     $('#submit').attr('disabled', 'disabled');
     $('#submit').val('Submitting...');
    },
    success:function(data)
    {
     $('#validate_form')[0].reset();
     $('#validate_form').parsley().reset();
     $('#submit').attr('disabled', false);
     $('#submit').val('Submit');
     alert(data.success);
    }
   });
  }
 });

});
</script>

