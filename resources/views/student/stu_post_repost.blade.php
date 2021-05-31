
<x-app-layout>
<style>
.autoUpdate{
  display:none;
}
</style>

<x-slot name="header">
         </x-slot>
         <div>
         @include('flash-message')
         </div>
<div class="row m-10 p-2 ">
<div class="card mx-auto col-md-8 m-2 pb-4 shadow-lg" style="">
<div class="card-header text-center font-weight-bolder m-3 rounded-left">
<h4 style="font-weight:500;">Request a Tutor</h4>
  </div>
  <form action="{{ route('student.RepostRequirement', ['id' => $repost_details[0]->id]) }}" enctype="multipart/form-data" id="validate_form" method="POST">
@csrf
<div class="form-group">
    <label for="inputAddress">Location</label>
    <input type="text" class="form-control" name="st_location" value="{{$repost_details[0]->st_location}}" required id="inputAddress" placeholder="" data-toggle="tooltip" data-original-title="Please select your location from the suggested options">
  </div>
  <div class="form-row mt-2">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="email" class="form-control" name="phone" value="{{Auth()->user()->phone}}" readonly id="inputEmail4" data-toggle="tooltip" data-original-title="If you wnat to change your mobile number you can edit in profile settings" placeholder="Enter phone Number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Subjects</label>

<div class="container">
	<div class="row class="col-md-4"">
	        <select class="form-control select2" name="st_subjects[]" multiple="true" required data-live-search="true">
	           <option>Select</option> 
	           @foreach($subjects as $key => $row)
                        <option value="{{$row->id}}">{{$row->subject_name}}</option>
                @endforeach 
	        </select>
	   
 	</div>
</div>
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputAddress2 mb-0">Details of your requirement</label>
    <p class="text-danger mb-0">Please don't share any contact details (phone, email, website etc) here</p>
    <textarea data-hj-whitelist="" cols="" required id="description" name="st_requirement" rows="10" class="col-xs-12 tooltips format-text form-control valid" data-toggle="tooltip" data-placement="top" title="" placeholder="Example: I am looking for someone with experience in teaching IGCSE Maths online to young kids. My daughter is available from 4.30 pm EST to 8.30 pm EST on weekdays and flexible on Weekends. You should have a digital pen and good internet connection. My budget is a maximum of $35 per hour." style="resize: none; height: 222px; max-height: 90vh;" data-original-title="Things you may write: Required experience, Expectations from the expert, Budget, time, Task details ">{{$repost_details[0]->st_requirement}}</textarea>
  </div>

  <div class="form-row mt-2">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Level</label>
      <select name="st_level" required id="levelId" required class="form-control col-sm-12 valid">
												<option value=""> -- Select Level -- </option>
                        @foreach($grade_All as $key => $row)
                        <option value="{{$row->id}}" {{ $row->id == $repost_details[0]->st_level ? 'selected' : '' }}>{{$row->grade_level_name}}</option>
                @endforeach 
											</select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">I want</label>
      <select name="st_i_want" id="t_purpose" required class="form-control col-sm-12 valid" >
            <option value=""> -- Select -- </option>
            <option value="Tutoring" {{ ($repost_details[0]->st_i_want) == 'Tutoring' ? 'selected' : '' }}>Tutoring</option>
            <option value="Assignment" {{ ($repost_details[0]->st_i_want) == 'Assignment' ? 'selected' : '' }}>Assignment help</option>
											</select>
    </div>
  </div>
  <div class="form-row mt-4 m-3 form-group options">
    <div class="form-group col-md-2">
    <label class="form-check-label" for="gridCheck">
   Meeting options
      </label>
    </div>
    <div class="form-group col-md-3">
    <input class="form-check-input"  required name="meeting_options[]" type="checkbox" id="gridCheck1" value="Online" {{  ($repost_details[0]->meeting_options == "Online" ? ' checked' : '') }}>
    <label for="inputState"  > Online (using Skype etc)</label>
    </div>
    <div class="form-group col-md-4">
    <input class="form-check-input" required name="meeting_options[]"  type="checkbox" id="gridCheck2"  value="Home" {{  ($repost_details[0]->meeting_options == "Home" ? ' checked' : '') }} >
    <label for="inputState" >At my place (home/institute)</label>
    </div>
    <div class="form-group col-md-3">
    <input class="form-check-input" required name="meeting_options[]" type="checkbox" id="travelid"  value="Travel" {{  ($repost_details[0]->meeting_options == "Travel" ? ' checked' : '') }} >
    <label for="inputState">Travel to tutor</label>
    </div>
  </div>

  <div class="form-row mt-3 autoUpdate" id="autoUpdate">
    <div class="form-group col-md-12">
      <label for="inputEmail4 text-bold" >How much can you travel to tutor?</label>&nbsp;
      <input type="number" name="km_travel" value="{{$repost_details[0]->km_travel}}" id="travelDistance" class="form-control width-auto display-inline-block numbers-only valid" maxlength="10">  <span id="kmDiv" style="">&nbsp;&nbsp;Kilometers </span>
    </div>
    </div>
    @php
    $all_v = json_decode($repost_details[0]->st_budget, True);   
    $amt_b = $all_v[0];
    $tym = $all_v[1];
      @endphp
    <div class="form-group col-md-6 mt-10 d-flex">
    <div class="input-group mb-3" style="display: contents;">
    <label for="validationCustom05" style="padding-top: 5px;">Budget</label>&nbsp;&nbsp;
      <div class="input-group-prepend">
        <span class="input-group-text">INR</span>
      </div>
      <input type="text" required class="form-control numbersOnly" placeholder="" value="{{$amt_b}}"  id="mail" name="st_budget[]">&nbsp;&nbsp;
      <select class="form-control" required name="st_budget[]" id="budgetType">
	                                            <option value=""></option>
	                                                        <option value="Fixed" {{ ($repost_details[0]->st_budget) == $tym ? 'selected' : '' }}>fixed/flat</option>
	                                                        <option selected="selected {{ ($repost_details[0]->st_budget) == $tym ? 'selected' : '' }}" value="Hour">per hour</option>
	                                                        <option value="Daily {{ ($repost_details[0]->st_budget) == $tym ? 'selected' : '' }}">per day</option>
	                                                        <option value="Week {{ ($repost_details[0]->st_budget) == $tym ? 'selected' : '' }}">per week</option>
	                                                        <option value="Month {{ ($repost_details[0]->st_budget) == $tym ? 'selected' : '' }}">per month</option>
	                                                        <option value="Annum {{ ($repost_details[0]->st_budget) == $tym ? 'selected' : '' }}">per year</option>
	                                        </select>
    </div>
   </div>
    <div class="form-row mt-3">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Gender Preference</label>
     
      <select name="st_gender_prfer" required id="genderPreference" class="form-control col-sm-12 valid">
                                        <option value="No Preference" {{ ($repost_details[0]->st_gender_prfer) == 'No Preference' ? 'selected' : '' }}>None</option>
                                        <option value="Preferably female" {{ ($repost_details[0]->st_gender_prfer) == 'Preferably female' ? 'selected' : '' }}>Preferably female</option>
                                        <option value="Preferably male" {{ ($repost_details[0]->st_gender_prfer) == 'Preferably male' ? 'selected' : '' }}>Preferably male</option>
                                        <option value="Only female" {{ ($repost_details[0]->st_gender_prfer) == 'Only female' ? 'selected' : '' }}>Only female</option>
                                        <option value="Only male" {{ ($repost_details[0]->st_gender_prfer) == 'Only male' ? 'selected' : '' }}>Only male</option>
                                    </select>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4 mb-3" id="Tutorswanted">
      <label for="validationCustom04">Tutors wanted</label>
      <select name="tut_wantd" required id="noOfRequiredTutors" class="form-control col-sm-12 valid">
                                            <option value="One" {{ ($repost_details[0]->tut_wantd) == 'One' ? 'selected' : '' }}>Only One</option>
                                            <option value="More than one" {{ ($repost_details[0]->tut_wantd) == 'More than one' ? 'selected' : '' }}>More than one</option>
                                            <option value="Infinity" {{ ($repost_details[0]->tut_wantd) == 'Infinity' ? 'selected' : '' }}>As many as possible</option>
                                        
                                    </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-4 mb-3" id="Ineedsomeone">
      <label for="validationCustom05">I need someone</label>
      <select name="i_need_smeone" required id="association" class="form-control col-sm-12">
                                                    <option value="Part Time" {{ ($repost_details[0]->i_need_smeone) == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                                                    <option value="Full Time" {{ ($repost_details[0]->i_need_smeone) == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                    </select>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>

    <div class="col-md-4 mb-3" id="duedate" style="display:none;">
      <label for="validationCustom05">Due Date</label>
      <input data-hj-whitelist="" type="date" autocomplete="off" placeholder="Due Date" name="ass_duedate" id="dueDateView" class="form-control hasDatepicker" value="{{$repost_details[0]->ass_due_date}}">
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>

  </div>

   <!-- <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Upload file</span>
      <input type="file">
    </div>
  </div> -->
<br>
  <div class="flex items-center justify-end mt-10 mb-8">
                <x-button class="ml-4 traef" >
                    {{ __('Repost Requirement') }}
                </x-button>
            </div>
</form>


</div>
    </div>
    <script>
$('#t_purpose').on('change', function() {
  if ( this.value == 'Assignment')
  {
    $("#Tutorswanted").hide();
    $("#Ineedsomeone").hide();
    $("#duedate").show();
  }
  else
  {
    $("#Tutorswanted").show();
    $("#Ineedsomeone").show();
    $("#duedate").hide();
  }
});

</script>
    <script>
$(document).ready(function () {
    $('#travelid').change(function () {
      $('.autoUpdate').fadeToggle();
    });
});

jQuery('.numbersOnly').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});
</script>

<script>
    $('.select2').select2();

    $(function(){
    var requiredCheckboxes = $('.options :checkbox[required]');
    requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
});
</script>


</x-app-layout>