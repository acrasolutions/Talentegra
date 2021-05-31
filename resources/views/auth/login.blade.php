<style type="text/css">
    .min-h-screen {
    min-height: 75vh !important;
}
</style>
<style>
        /* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}
</style>
<x-app-layout>
      <x-slot name="header">
         </x-slot>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                
            </a>
        </x-slot>
      
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" id="validate_form">
            @csrf
            <div>
         @include('flash-message')
         </div>
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required data-parsley-type="email" data-parsley-trigger="keyup" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">

                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember"  value="" {{ ('remember_token') !== null ? 'checked' : '' }}>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                     
                </label>
              
                <x-button class="ml-3 traef" style="float: right;">
                    {{ __('Log in') }}
                </x-button>
           
            </div>
            </form>
          <div class="row block mt-4">
             <div class="col-sm-6">
                <button class="loginBtn loginBtn--facebook traef" style="font-size: small;">
  Login with Facebook
</button>
</div>
  <div class="col-sm-6">
      <button class="loginBtn loginBtn--google traef" style="font-size: small;">
  Login with Google
</button>
  </div>  
 </div>

 <div class="row block mt-4">
 <div class="col-sm-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="col-sm-6">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" style="float: right;" href="{{ route('register') }}">
                      Don't have an Account?
                    </a>
                    </div>  
 </div>
           
       
    </x-auth-card>
</x-guest-layout>
</x-app-layout>
