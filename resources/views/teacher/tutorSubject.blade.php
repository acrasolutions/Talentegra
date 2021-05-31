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

</style>
<x-register-layout>
    <x-auth-card>
        <x-slot name="logo">
           
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @php
        $check_sub = DB::table('profiles')->select('subject_tech')->where('user_id', Auth::user()->id)->pluck('subject_tech')->first();
        @endphp
        @if(!empty($check_sub))
                <div class="flex items-center justify-end">
                <a href="{{ route('teacher.UserEducation') }}" type="button" class="traef btn btn-rounded btn-primary">
                <i class="far fa-hand-point-right" aria-hidden="true"></i> Go To Next Step </a>
</div>
@endif
<div class="mt-4">
    <h3 class="box-title"><i class="fas fa-chalkboard-teacher" style="color: blue;"></i>Subjects You Teach 
    <!-- <span class="text-muted" style="font-size: medium;">&nbsp;&nbsp;
    <a href="#exampleModalCenter" class="traef" data-toggle="modal" data-target="#exampleModalCenter">Add a Subject</a></span> -->
    </h3>
</div>
<div class="mt-4">
@php
$bk_room = DB::table('profiles')->select('subject_tech')->where('user_id', Auth::user()->id)->get('subject_tech')->toArray();

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
@php 
$level = DB::table('sub_levels')->select('level_name', 'id')->whereId($name['to_level'])->pluck('level_name');
$level_from = DB::table('sub_levels')->select('level_name', 'id')->whereId($name['from_level'])->pluck('level_name');

$conv_from=json_encode($level_from, true);
$conv_res_from=trim($conv_from, '[""]');

$conv=json_encode($level, true);
$conv_res=trim($conv, '[""]');
@endphp
<tr> 
<td style="background: #e8e8e8;"><a href="#exampleModalCenterupdate" type="button" class="btn-floating light-green" data-toggle="modal"
 data-target="#exampleModalCenterupdate_{{$loop->iteration-1}}" style="color: forestgreen;">
<i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;
<!-- Modal -->
<div class="modal fade" id="exampleModalCenterupdate_{{$loop->iteration-1}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterupdate" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('teacher.UpdatetutorSubject', ['id' => $loop->iteration-1]) }}" enctype="multipart/form-data" id="validate_form" method="POST">
@csrf
      <div class="modal-body">
                <x-label for="subject" :value="__('Subject Name')" />
                <select required name="update_subject_tech" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full">
              
@foreach ($subject_data as $cat)
<option value="{{ $cat->id }}" {{ $cat->id == $name['subject'] ? 'selected' : '' }} required>{{ $cat->subject_name }}</option>
@endforeach
</select>
    <div class="mt-4">
    <x-label for="add_from_level" :value="__('From Level')" />
    <div class="">
                    <select required class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                    name="update_from_level" required>
                    @foreach ($level_data as $level)
                    <option value="{{ $level->id }}" {{ $level->level_name == $conv_res_from ? 'selected' : '' }}>{{ $level->level_name }}</option>
                    @endforeach
                    </select>
                </div>
</div>
<div class="mt-4">
    <x-label for="add_to_level" :value="__('To Level')" />
        <div class="">
                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                    name="update_to_level" required>
                    <option value="" class="text-muted">--Please Select--</option>
                    @foreach ($level_data as $level)
                    <option value="{{ $level->id }}" {{ $level->level_name == $conv_res ? 'selected' : '' }}>{{ $level->level_name }}</option>
                    @endforeach
                    </select>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       
        <input type="submit" name="submit" class="btn btn-info pull-right darkblue_btn" value="Update Subject">
      </div>
    </div>
      </div>
     </form>
    </div>
  </div>
</div>
@php
$sub_name = DB::table('subjects')->select('subject_name', 'id')->whereId($name['subject'])->pluck('subject_name');
$sub_con=json_encode($sub_name, true);
$sub_res=trim($sub_con, '[""]');
@endphp

<a href="{{ route('teacher.DeletetutorSubject', ['id' => $loop->iteration-1]) }}" onclick="return confirm('Are you sure you want to delete?');" type="button" class="btn-floating light-green"
 style="color: indianred;">
<i class="fa fa-trash" aria-hidden="true"></i></a>
&nbsp;  {{ $sub_res }} ({{$conv_res}}) </td>
</tr>
<tr><td></td></tr>
</tbody>
@endforeach
 @endforeach
</table>
@endif
</div>
<br>

<form action="{{ route('teacher.AddtutorSubject') }}" enctype="multipart/form-data" id="validate_form" method="POST">
@csrf
@include('flash-message')
<!-- Email Address -->
    <div class="mt-4">
<label for="exampleInputEmail1">Subject<span class="text-muted" style="font-size: small;">&nbsp; (One at a Time)</span></label>
<div class="">
<!-- <select required  name="subject_tech" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full">
<option value="" class="text-muted">--Please Select Subject--</option>
@foreach ($subject_data as $cat)
<option value="{{ $cat->id }}">{{ $cat->subject_name }}</option>
@endforeach
</select> -->

<x-input id="typeahead1" placeholder="Enter Subject Name" name="subject_tech" class="block mt-1 w-full typeahead form-control" type="text" required />

</div>

<!-- <div class="mt-4">
<button type="button" class="traef btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
<i class="fas fa-plus-circle"style="color: white;"></i>&nbsp;&nbsp;If not in options above, add a new subject.
</button>
</div> -->
<div class="mt-4">
    <x-label for="Location" :value="__('From Level')" />
    <div class="">
                    <select required class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                    name="from_level" required>
                    <option value="" class="text-muted">--Please Select--</option>
                    @foreach ($level_data as $level)
                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                    @endforeach
                    </select>
                </div>
</div>
<div class="mt-4">
    <x-label for="Location" :value="__('To Level')" />
        <div class="">
                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                    name="to_level" required>
                    <option value="" class="text-muted">--Please Select--</option>
                    @foreach ($level_data as $level)
                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                    @endforeach
                    </select>
                </div>

 <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4" class="traef">
                    {{ __('Save') }}
                </x-button>

            </div>
</form>
        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add a New Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('teacher.AddNewtutorSubject') }}" enctype="multipart/form-data" id="validate_form" method="POST">
@csrf
      <div class="modal-body">
                <x-label for="subject" :value="__('Subject Name')" />
                <p style="color: red; font-size: smaller;">Note: Please add only one subject at a time.</p>
               <x-input id="subject" placeholder="Enter Subject Name" name="add_subject" class="block mt-1 w-full" type="text" required autofocus />
              

               <div class="mt-4">
    <x-label for="add_from_level" :value="__('From Level')" />
    <div class="">
                    <select required class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                    name="add_from_level" required>
                    <option value="" class="text-muted">--Please Select--</option>
                    @foreach ($level_data as $level)
                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                    @endforeach
                    </select>
                </div>
</div>
<div class="mt-4">
    <x-label for="add_to_level" :value="__('To Level')" />
        <div class="">
                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                    name="add_to_level" required>
                    <option value="" class="text-muted">--Please Select--</option>
                    @foreach ($level_data as $level)
                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                    @endforeach
                    </select>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       
        <input type="submit" name="submit" class="btn btn-info pull-right darkblue_btn" value="Add Subject">
      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
     
        source:  function (query, process) {
          
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });

</script>
    </x-auth-card>
</x-register-layout>

