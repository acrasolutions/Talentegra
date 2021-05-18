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
        <form method="POST" id="validate_form" enctype="multipart/form-data" method="post" action="{{ route('teacher.TeacherBasicDetails_add') }}">
            @csrf
            @include('flash-message')
               <div class="mt-4">
                <x-label for="name" style="font-weight: bold;font-size: larger;padding-bottom:1.5rem;" :value="__('Basic Details')" />
            </div>
            <!-- Email Address -->
             <div class="mt-4">
                <x-label for="name" :value="__('Speciality, Strength or Current role')" />
                <x-input id="name" class="block mt-1 w-full" type="text"  name="speciality_strength"  required autofocus />
            </div>
           <div class="mt-4">
              <x-label for="gender" :value="__('Gender')"/>
                            <div class="">
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                                name="gender" required>
                                <option value=""></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Transgender">Transgender</option>
                                </select>
                               
                            </div>
                    </div>
         <div class="mt-4">
                <x-label for="dob" :value="__('Date Of Birth')" />
                <x-input id="date" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
            </div>
 <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4" class="traef">
                    {{ __('Submit') }}
                </x-button>
    </div>
        </form>
    </x-auth-card>
</x-register-layout>

