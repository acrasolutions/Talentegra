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
a.btn-floating:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 a.btn-floating {
    font-size: large;
     -webkit-transform: scale(0.8);
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }
 @media (min-width: 576px)
{
.modal-dialog {
    max-width: 50% !important;
    margin: 1.75rem auto;
}
}
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
        @php
        $check_education = DB::table('profiles')->select('user_education')->where('user_id', Auth::user()->id)->pluck('user_education')->first();
        $degree_type = DB::table('degree_types')->get();
        $association = DB::table('associations')->get();
       
        @endphp
        @if(!empty($check_education))
        <div class="flex items-center justify-end">
                <a href="{{ route('teacher.TeachingExperience') }}" type="button" class="traef btn btn-rounded btn-primary">
                <i class="far fa-hand-point-right" aria-hidden="true"></i> Go To Next Step </a>
</div>
@endif
            <div class="mt-4">
                <h3 class="box-title"><i class="fas fa-book" style="color: blue;"></i>Education and Certifications </h3>
            </div>
       
        @if(!empty($check_education))
<div class="mt-4">
                <h4 class="box-title"><i class="fas fa-chalkboard-teacher" style="color: blue;"></i>Add Education/Certification or <span class="text-muted" style="font-size: medium;">&nbsp;&nbsp;<a href="{{ route('teacher.TeachingExperience') }}"
                 class="traef" >Go To Next Step</a></span></h4>
</div>
@endif
<div class="mt-4">
<x-auth-validation-errors class="mb-4" :errors="$errors" />
@php
$bk_room = DB::table('profiles')->select('user_education')->where('user_id', Auth::user()->id)->get('user_education')->toArray();
@endphp
@foreach ($bk_room as $value) 
@foreach ($value as $rooms) 
 @php
  $result[] = json_decode($rooms, TRUE);
  @endphp
 @endforeach
@endforeach

@if(!empty($result[0]))
          <table class="table noBorderTable no-margin-bottom">
<tbody>
@foreach($result as $trd)
@foreach($trd as $name)
@php $level = DB::table('degree_types')->select('degree_type', 'id')->whereId($name['deg_type'])->pluck('degree_type');
$conv=json_encode($level, true);
$conv_res=trim($conv, '[""]');

 $asso = DB::table('associations')->select('association', 'id')->whereId($name['association'])->pluck('association');
$conv_asso=json_encode($asso, true);
$asso_res=trim($conv_asso, '[""]');
@endphp
<tr> 
<td style="background: #e8e8e8;"><a href="#Educationrupdate" type="button" class="btn-floating light-green" data-toggle="modal"
 data-target="#Educationrupdate_{{$loop->iteration-1}}" style="color: forestgreen;"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;

 <!-- Modal -->
<div class="modal fade" id="Educationrupdate_{{$loop->iteration-1}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Education/Certification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      <form action="{{ route('teacher.UpdateEducation', ['id' => $loop->iteration-1]) }}"  id="validate_form" method="POST">
            @csrf
            <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Instituion Name with City</label>
    <div class="col-sm-8">
    <x-input id="institution"  class="block mt-1 w-full" type="text" value="{{ $name['institution'] }}"  name="institution" required />
    </div>
  </div>
  <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Degree Type</label>
    <div class="col-sm-8">
    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                 focus:ring-opacity-50 block mt-1 w-full"
                                 id="user_type" class="block mt-1 w-full"
                                name="degree_type" required>
                                @foreach ($degree_type as $deg)
                                <option value="{{ $deg->id }}" {{ $deg->degree_type == $conv_res ? 'selected' : '' }}>{{ $deg->degree_type }}</option>
                                <!-- <option value="{{ $deg->id }}">{{ $deg->degree_type }}</option> -->
                                @endforeach
                                </select>
    </div>
  </div>
  <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Degree Name</label>
    <div class="col-sm-8">
    <x-input id="degree_name"  class="block mt-1 w-full" type="text" value="{{ $name['deg_name'] }}" name="degree_name" required />
    </div>
  </div>

            <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Association</label>
    <div class="col-sm-8">
   
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 
                                focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                 id="user_type" class="block mt-1 w-full"
                                name="association" required>
                                @foreach ($association as $assoc)
                                <option value="{{ $assoc->id }}" {{ $assoc->association == $asso_res ? 'selected' : '' }}>{{ $assoc->association }}</option>
                                <!-- <option value="{{ $assoc->id }}">{{ $assoc->association }}</option> -->
                                @endforeach
                                </select>

</div>
</div>
<div class="form-group row">
<label for="exampleInputEmail1" class="col-sm-4 col-form-label">Speciality<span class="text-muted" style="font-size: small;">(Optional)</span></label>
    <div class="col-sm-8">
    <x-input id="speciality"  class="block mt-1 w-full" type="text" name="speciality" value="{{ $name['speciality'] }}"/>
    </div>
  </div>
  <div class="form-group row">
  <label for="exampleInputEmail1" class="col-sm-4 col-form-label">Score<span class="text-muted" style="font-size: small;">(Optional)</span></label>
    <div class="col-sm-8">
    <x-input id="score"  class="block mt-1 w-full" type="text" value="{{ $name['score'] }}"  name="score"/>
    </div>
  </div>
   <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Start Date</label>
    <div class="col-sm-3">
    <input type="date" name="up_start_date"  value="{{ $name['startdate'] }}" required style="border-color: lightgrey;padding-left: 1px;width: -webkit-fill-available;"> 
    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-3">
    <input type="date" name="up_edu_start" value="{{ $name['enddate'] }}" style="border-color: lightgrey;padding-left: 1px;width: -webkit-fill-available;float: right;">
    </div>
  </div>
      </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-info pull-right darkblue_btn" value="Update Education/Certification">
      </div>
      </form>
    </div>
  </div>
</div>
<a href="{{ route('teacher.DeleteUserEducation', ['id' => $loop->iteration-1]) }}" onclick="return confirm('Are you sure you want to delete?');" type="button" class="btn-floating light-green" style="color: indianred;">
<i class="fa fa-trash" aria-hidden="true"></i></a>
&nbsp;  <b>{{ $name['deg_name'] }} </b>({{ $name['score'] }}), <b>{{ $name['institution'] }}</b> ({{ \Carbon\Carbon::parse($name['startdate'])->format('M,Y') }} - {{ \Carbon\Carbon::parse($name['enddate'])->format('M,Y') }}).
</td>
</tr>
<tr><td></td></tr>
</tbody>
@endforeach
 @endforeach
</table>
@endif
            </div><br>
            @include('flash-message')
            <!-- Email Address -->
            <form action="{{ route('teacher.AddUserEducation') }}" id="validate_form" method="POST">
            @csrf
             <div class="mt-4">
                   <x-label for="institution" :value="__('Instituion Name with City')" />
                   <x-input id="institution"  class="block mt-1 w-full" type="text"  name="institution" data-parsley-required data-parsley-excluded />
            </div>
             <div class="mt-4">
                   <x-label for="degree" :value="__('Degree Type')" />
                 <div class="">
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                 focus:ring-opacity-50 block mt-1 w-full"
                                 id="user_type" class="block mt-1 w-full"
                                name="degree_type" required>
                                <option value="" class="text-muted"></option>
                                @foreach ($degree_type as $deg)
                                <option value="{{ $deg->id }}">{{ $deg->degree_type }}</option>
                                @endforeach
                                </select>
                            </div>
            </div>
            <div class="mt-4">
                   <x-label for="degree_name" :value="__('Degree Name')" />
                   <x-input id="degree_name"  class="block mt-1 w-full" type="text"  name="degree_name" required />
            </div>
   
    <div class="row mt-4">
            <label for="staticEmail" class="col-sm-2 col-form-label">Start Date</label>
    <div class="col-sm-4">
    <input type="date"  name="edu_start" required style="border-color: lightgrey;width: -webkit-fill-available;"> 

    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-4">
    <input type="date" id="edu_start" name="edu_end" style="border-color: lightgrey;width: -webkit-fill-available;float: right;">
    </div>
    </div>
            <!-- Email Address -->
             <div class="mt-4">
                  <label for="exampleInputEmail1">Association</label>
                 <div class="">
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 
                                focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                 id="user_type" class="block mt-1 w-full"
                                name="association" required>
                                <option value="" class="text-muted">--Please Select Association--</option>
                                @foreach ($association as $assoc)
                                <option value="{{ $assoc->id }}">{{ $assoc->association }}</option>
                                @endforeach
                                </select>
                </div>
            </div>
<div class="mt-4">
                 <label for="exampleInputEmail1">Speciality<span class="text-muted" style="font-size: small;">(Optional)</span></label>
                 <x-input id="speciality"  class="block mt-1 w-full" type="text"  name="speciality"/>
</div>
             <div class="mt-4">
                 <label for="exampleInputEmail1">Score<span class="text-muted" style="font-size: small;">(Optional)</span></label>
                 <x-input id="score"  class="block mt-1 w-full" type="text"  name="score"/>
            </div>

 <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4" class="traef">
                    {{ __('Save') }}
                </x-button>
</div>
</form>

        <!-- Button trigger modal -->
    </x-auth-card>
</x-register-layout>

