<style type="text/css">
  @media only screen and (max-width: 600px) {
    .desktop-v {
    display: none;
  }
}
.dropdown {
  position: relative;
  display: inline-block;
}
a{
  text-decoration: none !important;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
        border-top: 1px solid lightgrey;
    background: #fff;
        min-width: 200px;
    font-size: 0.875rem;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-butons {
  display: none;
  position: absolute;
  color:white;
      padding: 8%;

  
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-butons a {
       
     color:white;
        min-width: 200px;
    font-size: 0.875rem;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-butons {display: block;}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
</style>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 p-2">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-4">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('wel') }}">
                    <img class="lozad-custom-profile-img h-30 mt-2 p-4 " data-src="{{ URL::asset('public/uploads/logo.jpg')}}" alt="Hamzajavaid image" loading="lazy" src="{{ URL::asset('public/uploads/logo.jpg')}}" style="height: 100px;">
                    </a>
                </div>
                <!-- Navigation Links -->
            </div>
            
<!-- ------------------------------------------------part 1---------------------------------------------- -->
            <!-- Settings Dropdown -->
            @auth
  <div class="" style="float: right;">
        <div class="" style="float: right;">
             <div class="flex items-center px-4 desktop-v" style="float: right;">
                   <div class="dropdown ">
                    <button class="flex items-center text-sm  hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-black-700 focus:border-gray-300 transition duration-150 ease-in-out">  <svg style="color: blue;height: 1.5rem;width: 2rem;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
        @if(Auth::user()->profile_img == null) 
  <img class="img-responsive- rounded-x" src="{{ URL::asset('public/uploads/profile_image/default/pink.jpg')}}" style="height:34px; width:34px;">
@else
<img src="{{ URL::asset('public/uploads/profile_image/' .Auth::user()->profile_img)}}" class="img-responsive- rounded-x" style="height:34px; width:34px;">
@endif
  <div>&nbsp;&nbsp;{{ Auth::user()->name }}</div>
  <div class="ml-1">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</div>
</button>

  <div class="dropdown-content">
   <div class="font-medium text-sm text-gray-500"><a>{{ Auth::user()->name }}<br>{{ Auth::user()->email }}</a>
    <a href="{{ route('student.ProfileSettings') }}"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color:blue;" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
  <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
</svg>{{ __('Profile') }}</a>
   <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color:blue;" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>{{ __('Log out') }}
                    </x-responsive-nav-link>
                </form></a>
                </div>
  </div>
 </div>
    </div>
    
           </div> <div style="float: right;">
              <div class="flex items-center px-4 desktop-v pt-1" style="float: right;">
                <svg style="color: blue;height: 1.5rem;width: 2rem;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
</svg>&nbsp;<a style="text-decoration: none; color: black;" href="">Messages</a>
             </div>
             </div>
         <br> 
             @endauth

 <!-- ------------------------------------------------part 2---------------------------------------------- -->

             <div class="flex justify-between h-16" style="display: inline-flex; float: right;">
            <!-- Settings Dropdown -->
     @guest     
<div class="hidden sm:flex sm:items-center sm:ml-6">
  <div class="dropdown">
  <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
  <div>{{ __('Find Tutors') }}</div>
  <div class="ml-1">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</div>
</button>
  <div class="dropdown-content">
    <a href="#">{{ __('Request a Tutor') }}</a>
    <a href="#">{{ __('All Tutors') }}</a>
    <a href="#"> {{ __('Online Tutors') }}</a>
  </div>
</div> 
</div>
<div class="hidden sm:flex sm:items-center sm:ml-6">
  <div class="dropdown">
  <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
  <div>{{ __('Find Tutor Jobs') }}</div>
  <div class="ml-1">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</div>
</button>
  <div class="dropdown-content">
    <a href="#">{{ __('All Tutor Jobs') }}</a>
    <a href="#">{{ __('Online Tutor Jobs') }}</a>
    <a href="#"> {{ __('Home Tutor Jobs') }}</a>
  </div>
</div> 
</div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
             <x-nav-link>
                    {{ __('Assignment help') }}
                </x-nav-link>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
  <div class="dropdown">
  <button class="btn btn-light" style="border: 1px solid green;">
  <div>{{ __('Login') }}</div>
  <div class="ml-1">
    
</div>
</button>
  <div class="dropdown-butons">
    <a class="btn btn-success" href="{{ route('login') }}"> Log in</a>
    
    <div style="text-align: center;color:grey;font-size: smaller; background: white;">{{ __('OR') }}</div>
     <a class="btn btn-danger" href="{{ route('register') }}"> Sign up</a>
  
  </div>
</div> 
</div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
             <button type="button" class="btn btn-success">Request a tutor</button>
            </div>
            

            <!-- Hamburger -->
      
  
    @endguest

    @auth
    @if(Auth::user()->user_type == 'Teacher')
    @php $fill_data = DB::table('profiles')->where('user_id', Auth::user()->id)->get()->first();
     @endphp
    @if(($fill_data-> user_id != null) && ($fill_data-> professional_exp != null) && ($fill_data-> teaching_details != null) && ($fill_data-> user_education != null) && ($fill_data-> subject_tech != null) && ($fill_data-> speciality_strength != null)) 

    <div class="hidden sm:flex sm:items-center sm:ml-6">
             <x-nav-link :href="route('teacher.TeacherDashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>
<div class="hidden sm:flex sm:items-center sm:ml-6">
  <div class="dropdown">
  <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
  <div>{{ __('Jobs') }}</div>
  <div class="ml-1">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</div>
</button>
   <div class="dropdown-content">
    <a href="#">{{ __('My Jobs') }}</a>
    <a href="{{ route('tutor.SearchJobs') }}">{{ __('Search all Jobs') }}</a>
    <a href="{{ route('tutor.SearchJobs', ['req_search' => 'Online']) }}"> {{ __('Search Online Jobs') }}</a>
    <a href="#"> {{ __('Reviews') }}</a>
  </div>
</div> 
</div>     

            <div class="hidden sm:flex sm:items-center sm:ml-6">
  <div class="dropdown">
  <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
  <div>{{ __('Wallet') }}</div>
  <div class="ml-1">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</div>
</button>
  <div class="dropdown-content">
    <a href="#">{{ __('Coin Wallet') }}</a>
    <a href="#">{{ __('Buy Coins') }}</a>
    <a href="#"> {{ __('Payments') }}</a>
    <a href="#"> {{ __('Accounts (Getting Paid)') }}</a>
    <a href="#">{{ __('Invite Friends For Coins') }}</a>
    <a href="#"> {{ __('Refer To Get Coins') }}</a>
  </div>
</div> 
</div>
<div class="hidden sm:flex sm:items-center sm:ml-6">
<div class="dropdown">
  <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
  <div>{{ __('Edit Profile') }}</div>
  <div class="ml-1">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</div>
</button>
  <div class="dropdown-content">
    <a href="{{ route('teacher.TeacherBasicDetails') }}">{{ __('Personal Details') }}</a>
    <a href="{{ route('student.ProfileSettings') }}">{{ __('Photo') }}</a>
    <a href="{{ route('teacher.TutorsSubject') }}"> {{ __('Subjects') }}</a>
    <a href="{{ route('teacher.UserAddress') }}"> {{ __('Address') }}</a>
    <a href="{{ route('teacher.UserEducation') }}">{{ __('Education') }}</a>
    <a href="{{ route('teacher.TeachingExperience') }}"> {{ __('Experience') }}</a>
    <a href="{{ route('teacher.TutorTeachingDetails') }}"> {{ __('Teaching Details') }}</a>
    <a href="{{ route('teacher.TutorProfileDescription') }}">{{ __('Profile Description') }}</a>
    <a href="{{ route('teacher.UserPhone') }}"> {{ __('Phone') }}</a>
    <a href="{{ route('teacher.TutorViewProfile', ['t_view' => Auth()->user()->id]) }}"> {{ __('View Profile') }}<span class="text-muted small"> (As seen by students)</span></a>
  </div>
</div> 

            <div class="hidden sm:flex sm:items-center sm:ml-6">
             <button type="button" class="btn btn-success">Go Premium</button>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    @endif

    @else
<div class="hidden sm:flex sm:items-center sm:ml-6">
             <x-nav-link :href="route('student_dashboard')">
                    {{ __('My Posts') }}
                </x-nav-link>
            </div>
<div class="hidden sm:flex sm:items-center sm:ml-6">
  <div class="dropdown">
  <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
  <div>{{ __('Find Tutors') }}</div>
  <div class="ml-1">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</div>
</button>
   <div class="dropdown-content">
    <a href="#">{{ __('All Tutor') }}</a>
    <a href="#">{{ __('Online Tutor') }}</a>
    <a href="#"> {{ __('Home Tutor') }}</a>
  
  </div>
</div> 
</div>     


            <div class="hidden sm:flex sm:items-center sm:ml-6">
  <div class="dropdown">
  <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
  <div>{{ __('Wallet') }}</div>
  <div class="ml-1">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</div>
</button>
  <div class="dropdown-content">
    <a href="#">{{ __('Coin Wallet') }}</a>
    <a href="#">{{ __('Buy Coins') }}</a>
    <a href="#"> {{ __('Payments') }}</a>
    <a href="#">{{ __('Invite Friends For Coins') }}</a>
    <a href="#"> {{ __('Refer To Get Coins') }}</a>
  </div>
</div> 
</div>
<div class="hidden sm:flex sm:items-center sm:ml-6">
             <x-nav-link>
                    {{ __('Reviews') }}
                </x-nav-link>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
             <a href="{{ route('student.PostRequirement') }}"> <button type="button" class="btn btn-success">Post Requirement</button></a>
            </div>
</div>
            <!-- Hamburger -->
           
@endif
    @endauth

 <!-- ------------------------------------------------mobile parts---------------------------------------------- -->

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>






        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
               
                    <div class="font-medium text-base text-gray-800">fds</div>
                    <div class="font-medium text-sm text-gray-500">mail</div>
                  
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-responsive-nav-link>
                </form>
                </div>
        </div>
    </div>
</nav>

