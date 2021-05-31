<style type="text/css">
    @media (min-width: 640px){
.sm\:max-w-md {
    max-width: 50% !important;
}

}

.progress{
    white-space: nowrap;
    color: white;
    font-size: 12px;
  overflow: hidden;
    background-color: forestgreen !important;
    padding-left: 5px;
}
</style>

<script type="text/JavaScript">
/***********************************************
* Form Field Progress Bar- By Ron Jonk- http://www.euronet.nl/~jonkr/
* Modified by Dynamic Drive for minor changes
* Script featured/ available at Dynamic Drive- http://www.dynamicdrive.com
* Please keep this notice intact
***********************************************/
function textCounter(field,counter,maxlimit,linecounter) {
    // text width//
    var fieldWidth =  parseInt(field.offsetWidth);
    var charcnt = field.value.length;        

    // trim the extra text
    if (charcnt > maxlimit) { 
        field.value = field.value.substring(0, maxlimit);
    }
    else { 
    // progress bar percentage
    var percentage = parseInt(100 - (( maxlimit - charcnt) * 100)/maxlimit) ;
    document.getElementById(counter).style.width =  parseInt((fieldWidth*percentage)/100)+"px";
    document.getElementById(counter).innerHTML= percentage+"%"+" : "+"Power Profile "
    // color correction on style from CCFFF -> CC0000
    setcolor(document.getElementById(counter),percentage,"background-color");
    }
}
function setcolor(obj,percentage,prop){
    obj.style[prop] = "rgb(50%,"+(100-percentage)+"%,"+(100-percentage)+"%)";
}

</script>
</style>
<x-register-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @include('flash-message')
        <form action="{{ route('teacher.AddTutorProfileDescription') }}" enctype="multipart/form-data" id="validate_form" method="POST">
            @csrf
            <div class="mt-4">
                <h3 class="box-title"><i class="fas fa-id-badge" aria-hidden="true" style="color: blue;"></i> Profile Description </h3>
            </div>
            @php
            $teach_detl = DB::table('profiles')->where('user_id', Auth()->user()->id)->get('profile_description')->toArray();
          
         if($teach_detl[0]->profile_description != null){
         
    foreach ($teach_detl as $value){
        foreach ($value as $det){
          $te_det[] = json_decode($det, TRUE);
          foreach ($te_det as $s_ex){
            $ss_fin=$s_ex[0];
          }
        }
        }
         }
       
                @endphp
            <div class="alert alert-info" style="padding: 5px;">
                    <table class="table noBorderTable no-margin-bottom">
                    <tbody><tr>
                        
                        <td>
                            <ul style="list-style: none;"><li>This is the most important section for you.</li>
                            <li><b>80% of students will decide if they want to hire you just based on what you write here.</b></li>
                           <li>Make sure it's good, relevent in detail, and without mistakes.</li>
                            <li>Do not copy-paste your resume here.</li>
                            <li><b>Do not share any contact details.</b></li>
                             </ul>
                        </td>
                       
                    </tr>
                    </tbody>
                </table>
<textarea name="profile_description" style="width:100%;color: black;" required rows="15" id="maxcharfield"
onKeyDown="textCounter(this,'progressbar1',300)"
onKeyUp="textCounter(this,'progressbar1',300)"
onFocus="textCounter(this,'progressbar1',300)">@if($teach_detl[0]->profile_description != null)
{{$ss_fin['profile_des']}}
@endif
</textarea>
<br/>
<div id="progressbar1" class="progress traef" style="width: 100%; padding: 2%; align-items: center;"></div>
<script>textCounter(document.getElementById("maxcharfield"),"progressbar1",300)</script>

<div class="form-check">
  <input class="form-check-input" style="margin-left: -19px;" required name="one_acc" type="checkbox" value="yes" id="flexCheckChecked">
  
     I have not shared any contact details(Email, Phone, Skype, Website etc.)
 
</div>
 <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4" class="traef">
                    {{ __('Submit') }}
                </x-button>
            </div>
           
        </form>
    </x-auth-card>
</x-register-layout>

