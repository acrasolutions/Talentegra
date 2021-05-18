
<x-app-layout>
      <x-slot name="header">
         </x-slot>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
       
        <form method="POST" action="{{ route('register') }}" id="validate_form">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text"  name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email"  name="email" :value="old('email')" required data-parsley-type="email" data-parsley-trigger="keyup" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                id="password"
                                required data-parsley-length="[8,15]"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                required data-parsley-equalto="#password"
                                type="password"
                                name="password_confirmation" data-parsley-error-message="Password and Confirm Password should be same" />
            </div>
                <!-- I am Type -->
             <div class="mt-4">
                            <label for="user_type">{{ __('I am a') }}</label>

                            <div class="">
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                                name="user_type" required>
                                <option value="">--Select--</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Student/Parent">Student/Parent</option>
                                </select>
                                @error('iam_type')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <!--acc_confirmation -->
                        <div class="mt-4">
                <x-input id="acc_confirmation" 
                                type="checkbox"
                                name="only_acc" value="yes" required /><b style="font-weight: 100; color: lightslategrey;"
                                class="text-sm text-gray-600 hover:text-gray-900">This is my first and only account with Talentegra.com</b>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4 traef">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
       

    </x-auth-card>
</x-guest-layout>
</x-app-layout>
