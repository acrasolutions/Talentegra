
<style>
input:focus,
select:focus, .form-control:focus,
textarea:focus,
button:focus {
  outline: none !important;
  box-shadow: none !important;
}
.fin{
    position: absolute;
  font-size: 50px;
  opacity: 0;
  right: 0;
  top: 0;
}
.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: #BA68C8;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}


.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}
.fac{
    color:#2980b9;

}
.labels {
    font-size: 11px
}
.wei{
    font-weight:bold;
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
<x-app-layout>
<x-slot name="header">
         </x-slot>
         <div>
         @include('flash-message')
         </div>
         
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-2">
            @if(Auth::user()->profile_img == null)
            <img class="img-responsive- rounded-x mt-5" src="{{ URL::asset('public/uploads/profile_image/default/pink.jpg')}}"style="height:100px; width:100px;">
            @else
            <img class="img-responsive- rounded-x mt-5" src="{{ URL::asset('public/uploads/profile_image/' .Auth::user()->profile_img)}}" style="height:100px; width:100px;">
            @endif
            <span class="font-weight-bold" style="text-transform: capitalize;">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span>{{ Auth::user()->iam_type }}</span></div>
           
            <form method="POST" id="validate_form" enctype="multipart/form-data" method="post" action="{{ route('student.UpdateProfileImage') }}">
            @csrf
           
                <div class="d-flex justify-content-between align-items-center mb-1">
                <div class="d-flex justify-content-between align-items-center experience wei"><span><span class="far fa-image fac" style="font-size: large;
}"></span>&nbsp;&nbsp;{{ __('Profile Photo') }}</span>
                </div>
                
                </div>
                <span class="d-block text-black-50 labels mb-1">{{ __('Manage your profile picture')}}</span>
                <div class="bootstrap-filestyle input-group"><input type="file" class="fin" name="profile_img" id="imgInp"/> 
                <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="profilePic" class="btn btn-primary ">
                <span class="icon-span-filestyle fa fa-upload">
                </span> <span class="buttonText"> Update Profile Image</span></label></span></div>
                <div>
        <img id='img-upload'/>
    </div>
                <div class="mt-2 text-center">
                <!-- <button class="btn btn-primary profile-button submit"
                 type="button" >Save Profile Photo</button> -->
                 <x-button class="ml-4" class="traef" id="submit">
                    {{ __('Save Profile Photo') }}
                </x-button>
                 </div>
                 </form>
                 @if(Auth::user()->profile_img != null)
                 <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                    <h6 class=".text-center wei"> <a class="btn btn-sm btn-danger waves-effect waves-light"
                     onclick="return confirm('Are you sure you want to delete?');" href="{{ route('student.DeleteProfileImage') }}"><i class='fa fa-trash'></i> Delete Profile Image</a> </h6>
                     <!-- <div class="profile-img-full"><img style="margin-left:0px;" src="{{ URL::asset('public/uploads/profile_image/' .Auth::user()->profile_img)}}"></div> -->
            <!-- <img class="rounded-circle mt-1" src="{{ URL::asset('public/uploads/profile_image/' .Auth::user()->profile_img)}}" width="90"> -->
                </div>
                @endif
            </div>
            
     
       
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="text-right wei">General settings</h6>
                </div>
                <div class="d-flex flex-row mt-3 exp-container"><span class="fas fa-envelope fac" style="font-size: large;margin: 2px;"></span>
<!-- 2021-05-14 06:23:29 -->
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Email</span>
                    <span class="d-block text-black-50 labels">Your email is <b>{{ Auth::user()->email }}</b></span>
                    <span class="text-black-50"> <a href="#emailmodel" data-toggle="modal" data-target="#emailmodel" class="btn-u btn-brd btn-brd-hover rounded btn-u-blue btn-u-xs margin-top-10 margin-bottom-20 text-center">Change Email</a></span></div>
                </div>
                <hr>
                <div class="d-flex flex-row mt-3 exp-container"><span class="fas fa-phone fac" style="font-size: large;margin: 2px;"></span>
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Phone</span>
                    <span class="d-block text-black-50 labels">Add, remove, and verify phone numbers.</span>
                    <span class="text-black-50"> <a href="{{ route('teacher.UserPhone') }}" class="btn-u btn-brd btn-brd-hover rounded btn-u-blue btn-u-xs margin-top-10 margin-bottom-20 text-center">Manage Phone Numbers</a></span></div>
                </div>
                <hr>
                <div class="d-flex flex-row mt-3 exp-container"><span class="fas fa-signature fac" style="font-size: large;margin: 2px;
}"></span>
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Name</span>
                    <span class="d-block text-black-50 labels">Manage how others see your name.</span>
                    <span class="text-black-50"> <a href="#namemodel" data-toggle="modal" data-target="#namemodel"
                     class="btn-u btn-brd btn-brd-hover rounded btn-u-blue btn-u-xs margin-top-10 margin-bottom-20 text-center">Manage Name</a></span></div>
                </div>
               
                
                
                <!-- <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="John"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="Doe" placeholder="Doe"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Headline</label><input type="text" class="form-control" placeholder="headline" value="UI/UX Developer"></div>
                    <div class="col-md-12"><label class="labels">Current position</label><input type="text" class="form-control" placeholder="headline" value="UI/UX Developer at Boston"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value="Boston University"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value="USA"></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="Boston" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div> -->
            </div>
        </div>
        <div class="col-md-4">
       
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience wei"><span>Profile settings</span>
                </div>
                <div class="d-flex flex-row mt-3 exp-container"><span class="fas fa-user-alt fac" style="font-size: large;margin: 2px;
}"></span>
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Profile Live</span>
                    <span class="d-block text-black-50 labels"><span class="fas fa-exclamation-triangle color-orange" style="font-size: larger;"></span> &nbsp;&nbsp;If you delete your profile, you will lose all your data permanently.</span>
                    <span class="text-black-50"> <a href="#" class="btn-u btn-brd btn-brd-hover rounded btn-u-blue btn-u-xs margin-top-10 margin-bottom-20 text-center">Delete Profile</a></span></div>
                </div>
                <hr>
                <div class="p-2 py-2">
                <div class="d-flex justify-content-between align-items-center experience wei"><span>Student account settings</span>
                </div>
                <div class="d-flex flex-row mt-3 exp-container"><span class="fas fa-eye fac" style="font-size: large;margin: 2px;
}"></span>
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Post visibility</span>
                    <span class="d-block text-black-50 labels mb-2">Select how your posts are made public</span>
                    <span class="text-black-50"><select style="max-width: 200px; border-radius: 50px;font-size: 13px;" class="" name="postVisibilitySettings" id="postVisibilitySettings">
                                                    <option value="keepPublic">Always make public</option>
                                                    <option value="chooseWhilePosting">Decide while posting</option>
                                                </select></span></div>
                </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center experience wei"><span>Tutor account settings</span>
                </div>
                <div class="d-flex flex-row mt-3 exp-container"><span class="fas fa-chalkboard-teacher fac" style="font-size: large;margin: 2px;"></span>
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Open tutor account</span>
                    <a href="#" class="btn-u btn-brd btn-brd-hover rounded btn-u-blue btn-u-xs margin-top-10 margin-bottom-20 text-center">Open Tutor Account</a>
                   </div>
                </div>
                <!-- <div class="d-flex flex-row mt-3 exp-container"><img src="https://img.icons8.com/color/50/000000/google-logo.png" width="45" height="45">
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">UI/UX Designer</span><span class="d-block text-black-50 labels">Google Inc.
                    </span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                </div> -->
            </div>
        </div>
    </div>
      <!-- Email Modal -->
<div class="modal fade" id="emailmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        <span class="fas fa-envelope fac" style="font-size: large;margin: 2px;></span>
                    <span class="fas fa-signature fac"> &nbsp;Change Email</span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('email.change') }}" enctype="multipart/form-data" id="validate_form" method="POST">
@csrf
<span class="fas fa-info-circle color-blue mb-2" style="font-size: larger;"></span>
<span class="text-success">&nbsp;&nbsp;This includes verification process.</span><br>
<div class="mt-4"> 
<label for="exampleInputEmail1">Old Email</label>
                 <x-input id="email"  class="block mt-1 w-full" type="text" value="{{ Auth::user()->email }}" readonly required />
                 </div>
                 <div class="mt-4">
                 <label for="exampleInputEmail1">New Email</label>
                 <x-input id="email"  class="block mt-1 w-full" type="text" placeholder="Enter New Email" value="" name="email"  required />
      </div>
     
      </div>
      <div class="modal-footer">
       <x-button class="ml-4 bg-secondary" data-dismiss="modal">
                    {{ __('Close') }}
                </x-button>
      
        <x-button class="ml-4" class="traef">
                    {{ __('Proceed') }}
                </x-button>
                </form>
      </div>
    </div>
  </div>
</div>
<!-- Email model ends -->

    <!-- Name Modal -->
<div class="modal fade" id="namemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        <span class="fas fa-phone fac" style="font-size: large;margin: 2px;></span>
                    <span class="fas fa-signature fac"> &nbsp;Change Name</span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('student.UpdateName') }}" enctype="multipart/form-data" id="validate_form" method="POST">
@csrf
<div class="mt-4">
<label for="exampleInputEmail1">Name</label>
                 <x-input id="name"  class="block mt-1 w-full" type="text" value="{{ Auth::user()->name }}" name="name"  required />
      </div>
     
      </div>
      <div class="modal-footer">
      <x-button class="ml-4 bg-secondary" data-dismiss="modal">
                    {{ __('Close') }}
                </x-button>
        <x-button class="ml-4" class="traef">
                    {{ __('Save') }}
                </x-button>
                </form>
      </div>
    </div>
  </div>
</div>
<!-- name model ends -->
    <script>
    $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
    </script>

    <script>
$(document).ready(function(){
    $("#submit").hide();  
    $(".fin").on("change", function(){
        $("#submit").show();  
    })
});
    </script>
</div>
</x-app-layout>