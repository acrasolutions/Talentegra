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
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
        <form method="POST" id="validate_form" enctype="multipart/form-data" method="post" action="{{ route('teacher.teacherIamCompany_add') }}">
            @csrf
            @include('flash-message')
            <!-- Email Address -->
             <div class="mt-4">
                   <x-label for="Location" :value="__('I am')" />
                   <x-input id="Location"  class="block mt-1 w-full bg-info text-white"  type="text"  name="name" readonly required value="Tutoring Company" readonly />
            </div>
            
<div class="mt-4">
                 <label for="exampleInputEmail1">Full Name</label>
                 <x-input id="Location"  class="block mt-1 w-full" type="text" value="{{ Auth::user()->name }}"  name="fullname"  required />

            </div>
             <div class="mt-4">
                 <label for="exampleInputEmail1">Company Name</label>
                 <x-input id="Location"  class="block mt-1 w-full" type="text"  name="company_name"  required />

            </div>
            <div class="mt-4">
                 <label for="exampleInputEmail1">Role/Job Title</label>
                 <x-input id="Location"  class="block mt-1 w-full" type="text"  name="role_job"  required />

            </div>
            <div class="mt-4">
                   <x-label for="Location" :value="__('Display Name')" />
                       <div class="">
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                                name="display_name" required>
                                <option value="" class="text-muted">--Please Select--</option>
                                <option value="Name">Name<span class="text-muted" style="font-size: small;"> ({{ Auth::user()->name }})</span></option>
                                <option value="CompanyName">Company Name</option>
                                <option value="Both">Both <span class="text-muted" style="font-size: small;">({{ Auth::user()->name }} - company name)</span></option>
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
</x-register-layout>

