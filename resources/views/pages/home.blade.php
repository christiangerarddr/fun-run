@extends('layouts.app')

@section('content')

<div id="upper">

    @include('includes.navbar')

    <div class="container pt-5">
        <div id="campaign" class="d-flex justify-content-center align-items-center">
            <div id="campaign-banner" class="text-center">
                <img id="campaign-image" class="w-100 m-3" src="{{asset('images/header.png')}}" alt="run-for-earth-header">
                <p id="campaign-description">A 3k run alongside the candidates of Miss Philippines Earth 2015 to aid the Calumpang River Rehabilitation</p>
            </div>
        </div>
        <div id="event" class="d-flex justify-content-center align-items-center">
            <div id="event-banner" class="text-center">
                <p id="event-details">APRIL 25, 2015 | Assembly time: 5:00AM | SM City Batangas Parking Grounds</p>
                <p id="event-registration-fee">Registration fee: Php500 inclusive race kit with shirt</p>
                @guest
                <a href="#registration"><button id="event-register-btn" class="btn btn-outline-success text-blue">Register now!</button></a>
                @endguest
            </div>
        </div>
    </div>

</div>

@guest
<section id="lower">

    @include('includes.navbar')

    <div class="container pt-4">

        @include('includes.registrationForm')

    </div>
    
</section>
@endguest

@endsection
