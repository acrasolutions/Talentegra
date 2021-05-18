<style type="text/css">
  label{
    font-weight: bold;
  }
</style>
<x-guest-layout>
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
        <form method="POST" id="validate_form" enctype="multipart/form-data" method="post" action="{{ route('teacher.addIam') }}">
            @csrf
            <!-- Email Address -->
            <div>
            @include('flash-message')
              <label for="user_type">{{ __('I am') }}</label>
                            <div class="">
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="user_type" class="block mt-1 w-full"
                                name="iam_type" required>
                                <option value="">--Please Select--</option>
                                <option value="Individual Teacher">Individual Teacher</option>
                                <option value="Tutoring Company">Tutoring Company</option>
                                </select>
                                @error('iam_type')

                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            </div>
        
 <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4" class="traef">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

