

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

             <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div>
                <x-jet-label for="job_description" value="{{ __('Job Description') }}" />
                <textarea d="job_description" class="block mt-1 w-full" name="job_description" :value="old('job_description')" required autofocus autocomplete="job_description"></textarea>

            </div>
            <div>
                <x-jet-label for="job_designation" value="{{ __('Job Designation') }}" />
                <textarea d="job_designation" class="block mt-1 w-full "  data-role="tagsinput" name="job_designation" :value="old('job_designation')" required autofocus autocomplete="job_designation"></textarea>

            </div>
             <div>
                <x-jet-label for="retired_at" value="{{ __('Retired At') }}" />
                <x-jet-input id="retired_at" class="block mt-1 w-full" type="date" name="retired_at" :value="old('retired_at')" required autofocus autocomplete="retired_at" />
            </div>

             <div>
                <x-jet-label for="age" value="{{ __('Age') }}" />
                <x-jet-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
            </div>

            <div>
                <x-jet-label for="job_designation" value="{{ __('Job speciality') }}" />
                <textarea d="speciality" class="block mt-1 w-full" name="speciality" :value="old('job_designation')" required autofocus autocomplete="speciality"></textarea>

            </div>

               <div>

                <x-jet-label for="joining_form" value="{{ __('Joining Form') }}" />
                <x-jet-input id="joining_form" class="block mt-1 w-full" type="date" name="joining_form" :value="old('joining_form')" required autofocus autocompjoining_formlete="joining_form" />
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}

@extends('layouts.dashboard.app')
@section('content')

    <div class="navigation login_page">
        <div class="logo">
            <a href="#">Ps<span>cribe</span></a>
        </div>
        <!-- <nav class="nav">
            <ul>
                <li><a href="#"></a></li>
            </ul>
        </nav> -->
        <div class="btn">
            <ul>
                <li><a href="{{url('login')}}">Sign In</a></li>
            </ul>
        </div>
    </div>

    <div class="sign_box sign_up_page">
        <div class="row">
            <div class="col">
                <h2>Sign In To Account</h2>
                <span></span>
                <div class="with_box">
                    <a href="#"><i class="fab fa-google"></i></a>
                </div>
                <p>or use your email for registration</p>

                <form class="form" action="{{route('registration_store')}}" method="POST" >
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" name="name" class="@error('name') is-invalid @enderror" id="name" required>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="country_line">
                        <div>
                            <label for="country">Country</label>
                            <input type="text" name="country"class="@error('country') is-invalid @enderror"  id="country" required>
                            @error('country')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="opt_card_country">
                                <ul>
                                    @foreach($countries as $country)
                                        <li class="getCities" value="{{$country->id}}">{{$country->name}}</li>

                                    @endforeach

                                </ul>
                            </div>


                        </div>

                        <div>
                            <label for="city">City</label>
                            <input type="text" name="city" class="@error('city') is-invalid @enderror" id="city" required>
                            @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="opt_card_city">
                                <ul class="city">

                                </ul>
                            </div>


                        </div>
                    </div>

                    <label for="email">Email</label>
                    <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" required>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="password">Password</label>
                    <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" required>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div >
                        <input type="checkbox" name="checkbox" required id="checkbox">
                        <label for="" class="check_box_label_main" > Agree with all terms and conditions</label>
                    </div>


{{--                                        <div class="term_c_block">--}}


{{--                                            <div>--}}
{{--                                                <p>--}}
{{--                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam totam, illum enim quam aliquam, cumque aspernatur deleniti assumenda animi accusantium a mollitia maxime. Praesentium maiores saepe ut est necessitatibus minus!--}}


{{--                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aspernatur fugit perferendis, quidem, obcaecati alias facere sunt ipsum voluptas quis, exercitationem commodi nesciunt suscipit? Alias dolore mollitia rem expedita ipsa.--}}



{{--                                                    <br>--}}


{{--                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem perferendis sit provident expedita beatae iste ut ullam quidem. Reiciendis ex voluptate ullam praesentium earum deleniti non enim aspernatur error possimus.--}}
{{--                                                </p>--}}




{{--                                                <div>--}}
{{--                                                    <input type="checkbox" required id="checkbox2">--}}
{{--                                                    <label class="terms_label_1" for="checkbox2" > Agree with all terms and conditions</label>--}}
{{--                                                </div>--}}


{{--                                                <span class="btn">Close</span>--}}


{{--                                            </div>--}}


{{--                                        </div>--}}

                    <input type="submit" class="btn mt-2" value="Sign Up">

                </form>









            </div>
            <div class="col">
                <div class="content">
                    <h2>Welcome Back</h2>
                    <span></span>
                    <p>To Keep Connected with us please login with your personal information</p>
                    <a href="{{route('login')}}">
                        <input type="button" value="Sign In" class="signin_btn btn">
                    </a>
                </div>
            </div>
        </div>
    </div>



    <script src="{{asset('assets/frontend')}}/js/reg.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function (){
            $(document).on('click', '.getCities', function (e){
                e.preventDefault();

                let countryId = $(this).val();
                $.ajax({
                    type:"GET",
                    url:"/getCities/"+countryId,
                    success:function (response){
                        // console.log(response.cities)
                        $('.city').html();
                        $.each(response.cities, function (key, city){
                            // console.log(city.name);
                            $('.city').append('<li>'+city.name+'</li>')


                        })



                    }

                })
            })

            //
            // $(document).on('submit', '#AddForm', function (e){
            //     e.preventDefault();
            //
            //     let formData = new FormData($('#AddForm')[0])
            //     console.log(formData);
            //     $.ajax({
            //         type:"POST",
            //         url:"/registration_store",
            //         data:[formData,'X-CSRF-TOKEN'],
            //         contentType:false,
            //         processData:false,
            //         success:function (response) {
            //             alert('success')
            //         }
            //     })
            // })


        })
    </script>


@endsection

@section('javascript')

@endsection
