<style type="text/css">
    @media (min-width: 640px){
.sm\:max-w-md {
    max-width: 50% !important;
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

        <form method="POST" id="validate_form" enctype="multipart/form-data" method="post" action="{{ route('teacher.AddUserAddress') }}">
            @csrf
            @include('flash-message')
            <div class="mt-4">
                <h3 class="box-title"><i class="fa fa-address-book" aria-hidden="true" style="color: blue;"></i> Address <span class="text-muted" style="font-size: small;"> (Publicily Visible)</span></h3>
            </div>
            <div class="alert alert-info" style="padding: 5px;">
                    <table class="table noBorderTable no-margin-bottom">
                    <tbody><tr>
                        <td><i class="fas fa-info-circle" style="color: darkgreen;"></i></td>
                        <td><p style="font-size: smaller;"> This address is publicly visible. Please give your local area/society so students know your approximate location.</p></td>
                    </tr>
                    <tr class="color-red margin-top-10-">
                        <td><p style="font-size: smaller;"><i class="fas fa-skull-crossbones" style="color: orangered;"></i></td>
                        <td>For your safety, do not give the complete address.</p></td>
                    </tr>
                    </tbody></table>
                </div>

            <!-- Email Address -->
             <div class="mt-4">
                <x-label for="Location" :value="__('Location')" />

                <x-input id="Location" placeholder="Enter Location" class="block mt-1 w-full" type="text"  name="location"  required />
            </div>
            <div class="mt-4">
                <x-label for="Location" :value="__('Postal Code')" />
<p style="color: red; font-size: smaller;">Note: Enter your postal code only if, you are sure it is correct.</p>
                <x-input id="Location"  type="text"  name="postalcode" data-parsley-type="digits" pattern="^[0-9]*$" onkeypress="return isNumber(event)"  placeholder="Postal Code" class="block mt-1 w-full" data-toggle="tooltip" title="Enter your postal code only if, you are sure it is correct." />
            </div>
 <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4" class="traef">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>

        <script>
        function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
    </x-auth-card>
</x-register-layout>

