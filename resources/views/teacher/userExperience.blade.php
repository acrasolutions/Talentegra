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
        $check_exp = DB::table('profiles')->select('professional_exp')->where('user_id', Auth::user()->id)->pluck('professional_exp')->first();
        $association = DB::table('associations')->get();
        @endphp
        @if(!empty($check_exp))
        <div class="flex items-center justify-end">
                <a href="{{ route('teacher.TutorTeachingDetails') }}" type="button" class="traef btn btn-rounded btn-primary">
                <i class="far fa-hand-point-right" aria-hidden="true"></i> Go To Next Step </a>
</div>
@endif
<div class="mt-4">
<h3 class="box-title"><i class="fas fa-caret-square-up" style="color: blue;"></i>Teaching and Professional Experience</h3>
</div>
<div class="mt-4">
<h4 class="box-title">Add Experience<span class="text-muted" style="font-size: medium;">&nbsp;&nbsp;
@if(!empty($check_exp))
or <a href="TutorTeachingDetails" class="traef" >Go To Next Step</a></span></h4>
@endif
</div>
<div class="mt-4">
    @php
$bk_room = DB::table('profiles')->select('professional_exp')->where('user_id', Auth::user()->id)->get('professional_exp')->toArray();
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

<tr> 
<td style="background: #e8e8e8;"><a href="#Expupdate" type="button" class="btn-floating light-green" data-toggle="modal"
 data-target="#Expupdate_{{$loop->iteration-1}}" style="color: forestgreen;"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;
 <!-- Modal -->
<div class="modal fade" id="Expupdate_{{$loop->iteration-1}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Teaching or Professional Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('teacher.UpdateTeachingDetails', ['id' => $loop->iteration-1]) }}" enctype="multipart/form-data" id="validate_form" method="POST">
            @csrf
            <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Organisation Name with City</label>
    <div class="col-sm-8">
    <x-input id="institution"  class="block mt-1 w-full" type="text" value="{{ $name['organisation'] }}"  name="up_organisation" required />
    </div>
  </div>
  <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Designation</label>
    <div class="col-sm-8">
    <x-input id="Designation" value="{{ $name['designation'] }}" class="block mt-1 w-full" type="text"  name="up_designation"  required />
    </div>
  </div>
  <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Start Date</label>
    <div class="col-sm-3">
    <input type="date" name="up_e_startdate" required  value="{{ $name['e_startdate'] }}" required style="border-color: lightgrey;padding-left: 1px;width: -webkit-fill-available;"> 
    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-3">
    <input type="date" name="up_e_enddate" required value="{{ $name['e_enddate'] }}" style="border-color: lightgrey;padding-left: 1px;width: -webkit-fill-available;float: right;">
    </div>
  </div>
  <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Association</label>
    <div class="col-sm-8">
    <select required class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                                name="up_association" required>
                                <option value="1" {{ $name['association'] == '1' ? 'selected' : '' }}>Full Time</option>
                                <option value="2" {{ $name['association'] == '2' ? 'selected' : '' }}>Part Time</option>
                                </select>
    </div>
  </div>

<div class="form-group row">
<label for="exampleInputEmail1" class="col-sm-4 col-form-label">Job Description<span class="text-muted" style="font-size: small;">(Optional)</span></label>
    <div class="col-sm-8">
    <textarea name="upd_job_description" rows="5" required style="width: 100%;border-color: lightgrey;
">{{ $name['job_description'] }}</textarea>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-info pull-right darkblue_btn" value="Update Teaching/Professional Experience">
      </div>
      </form>
      </div>
    
    </div>
  </div>
</div>
<a href="{{ route('teacher.DeleteTeachingExpDetails', ['id' => $loop->iteration-1]) }}" onclick="return confirm('Are you sure you want to delete?');" type="button" class="btn-floating light-green" style="color: indianred;">
<i class="fa fa-trash" aria-hidden="true"></i></a>
&nbsp; <b>{{ $name['designation'] }}</b>({{ \Carbon\Carbon::parse($name['e_startdate'])->format('M,Y') }} - {{ \Carbon\Carbon::parse($name['e_enddate'])->format('M,Y') }}) at {{ $name['organisation'] }}.</td>
</tr>

<tr>
<td></td>
</tr>
</tbody>
@endforeach
 @endforeach
 </table>
 @endif
</div>

     @include('flash-message')
<form method="POST" action="{{ route('teacher.AddUserTeachningExperience') }}" enctype="multipart/form-data" id="validate_form">
            @csrf
 <div class="mt-4">
                <x-label for="Location" :value="__('Organisation Name with City')" />
                <x-input id="Organisation"  class="block mt-1 w-full" type="text"  name="organisation" required />
            </div>
            <div class="mt-4">
                <x-label for="Designation" :value="__('Designation')" />

                <x-input id="Designation" class="block mt-1 w-full" type="text"  name="designation"  required />
            </div>
       
  <div class="row mt-4">
            <label for="staticEmail" class="col-sm-2 col-form-label">Start Date</label>
    <div class="col-sm-4">
    <input type="date"  name="e_startdate" required style="border-color: lightgrey;width: -webkit-fill-available;"> 

    </div>
    <label for="staticEmail" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-4">
    <input type="date" name="e_enddate" required style="border-color: lightgrey;width: -webkit-fill-available;float: right;">
    </div>
    </div>
  
             <div class="mt-4">
                  <label for="exampleInputEmail1">Association</label>
                 <div class="">
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                                name="association" required>
                                <option value="" class="text-muted">--Please Select Association--</option>
                                <option value="1">Full Time</option>
                                <option value="2">Part Time</option>
                                </select>
                            </div>
                       </div>
                       <div class="mt-4">
                         <label for="exampleInputEmail1">Job Description</label><br>
                  <textarea name="job_description" required rows="5" style="width: 100%;"></textarea>
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

