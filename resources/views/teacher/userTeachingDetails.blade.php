<style type="text/css">
    @media (min-width: 640px){
.sm\:max-w-md {
    max-width: 50% !important;
}
.table td, .table th {
     padding: .1rem !important; 
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}}

</style>
<x-register-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="flex items-center justify-end mt-4">
        <a href="{{ route('teacher.TutorProfileDescription') }}" type="button" class="traef btn btn-rounded btn-primary"><i class="far fa-hand-point-right" aria-hidden="true"></i> Go To Next Step </a>
</div>
@include('flash-message')
<form action="{{ route('teacher.AddTutorTeachingDetails') }}" enctype="multipart/form-data" id="validate_form" method="POST">
            @csrf
            <div class="mt-4">
                <h3 class="box-title"><i class="fas fa-info-circle" style="color:blue;"></i>Teaching Details</h3>
            </div>
 <div class="row mt-4">
              <div class="col-sm-4">
                 <x-label for="Location" :value="__('Fee in INR-Indian Rupee')" />
                 I charge
                  <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                                name="i_charge" required>
                                <option value="" class="text-muted"></option>
                                <option value="Hourly">Hourly</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Daily">Daily</option>
                                <option value="Monthly">Monthly</option>
                                </select>
              </div>
               <div class="col-sm-4">
                <br>
                <label for="exampleInputEmail1">Minimum Fee</label>
                <x-input id="Location"  class="block mt-1 w-full" type="text"  name="minimum_fee"  required />
              </div>
              <div class="col-sm-4">
                <br>
                <label for="exampleInputEmail1">Maximum Fee</label>
                <x-input id="Location"  class="block mt-1 w-full" type="text"  name="maximum_fee"  required />
              </div>
            </div>
 
         <div class="mt-4">
                 <label for="exampleInputEmail1" title="If your charges vary based on time, place, content, travelling etc">Fee Details <span class="text-muted" style="font-size: small;">(Details of how fee can vary)</span></label>
                 <textarea name="fee_details" rows="5" style="width: 100%;"></textarea>

            </div>
            <div class="mt-4">
                 <label for="exampleInputEmail1">Years of total experience<span class="text-muted" style="font-size: small;">(Teaching and other experience)</span></label>
                 <x-input id="Location"  class="block mt-1 w-full" type="text"  name="tot_exp"  required data-parsley-type="digits" data-parsley-minlength="1" data-parsley-maxlength="2" />

            </div>
           
            <div class="mt-4">
                 <label for="exampleInputEmail1">Years of online teaching experience</label>
                 <x-input id="Location"  class="block mt-1 w-full" type="text"  name="online_exp"  required data-parsley-minlength="1" data-parsley-maxlength="2" />
            </div>
             <div class="mt-4">
                 <label for="exampleInputEmail1">Are you willing to travel to Student?</label>
                 <div>
                 <input type="radio" required name="travel"  value="yes"/>
                 <label for="male" style="padding-right: 2rem;">Yes</label>
                 <input type="radio" required name="travel" value="No"/>
                 <label for="male" style="padding-right: 2rem;">No</label>
                 <!-- <input type="radio" name="travel" value="Yes"/>
                  <label for="male" style="padding-right: 2rem;">Yes</label>
                  <input type="radio" name="travel" value="No"/>
                  <label for="male" style="padding-right: 2rem;">No</label> -->
                </div>
            </div>
             <div class="mt-4 desc" id="carDivyes" style="display:none;">
                 <label for="exampleInputEmail1">How far can you travel? (kms)</label>
                 <x-input id="Location" required class="block mt-1 w-full" type="text"  name="travel_kms" />
            </div>
            <div class="mt-4">
                 <label for="exampleInputEmail1">Available for online teaching?</label>
                 <div>
                 <input type="radio" required id="male" name="available_online_teach" value="Yes">
                  <label for="male" style="padding-right: 2rem;">Yes</label>
                  <input type="radio" required id="male" name="available_online_teach" value="No">
                  <label for="male" style="padding-right: 2rem;">No</label>
                </div>
            </div>
            <div class="mt-4">
                 <label for="exampleInputEmail1">Do you have a digital pen?</label>
                 <div>
                 <input type="radio" required id="male" name="digital_pen" value="Yes">
                  <label for="male" style="padding-right: 2rem;">Yes</label>
                  <input type="radio" required id="male" name="digital_pen" value="No">
                  <label for="male" style="padding-right: 2rem;">No</label>
                </div>
            </div>
            <div class="mt-4">
                 <label for="exampleInputEmail1">Do you help with homework and assignments?</label>
                 <div>
                 <input type="radio" required id="male" name="help_homework_assig" value="Yes">
                  <label for="male" style="padding-right: 2rem;">Yes</label>
                  <input type="radio" required id="male" name="help_homework_assig" value="No">
                  <label for="male" style="padding-right: 2rem;">No</label>
                </div>
            </div>
            <div class="mt-4">
                 <label for="exampleInputEmail1">Are you currently a full time teacher employed by a School/College?</label>
                 <div>
                 <input type="radio" required id="male" name="currently_emp" value="Yes">
                  <label for="male" style="padding-right: 2rem;">Yes</label>
                  <input type="radio" required id="male" name="currently_emp" value="No">
                  <label for="male" style="padding-right: 2rem;">No</label>
                </div>
            </div>
           
            <!-- Email Address -->
             <div class="mt-4">
                  <label for="exampleInputEmail1">Opportunities you are interested in </label>
                 <div class="">
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                                name="oppor_interest" required>
                                <option value="" class="text-muted">--Please Select Association--</option>
                                <option value="full_time">Full Time</option>
                                <option value="part_time">Part Time</option>
                                </select>
                            </div>
                       </div>
                       
 <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4" class="traef">
                    {{ __('Save') }}
                </x-button>

            </div>
        </form>
        <!-- Button trigger modal -->
    </x-auth-card>
    <script>
$(document).ready(function() {
    $("input[name$='travel']").click(function() {
        var test = $(this).val();
        $("#carDivyes").hide();
        $("#carDiv" + test).show();
    });
});
</script>
</x-register-layout>

