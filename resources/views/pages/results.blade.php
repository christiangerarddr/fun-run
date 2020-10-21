@extends('layouts.app')

@section('content')

<div id="upper">
    @include('includes.navbar')

    <div id="results-page" class="container mt-5">

        <h2>Congratulations!</h2>

        <hr>

        <p>You have successfully registered to the event.</p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vitae nihil neque recusandae. Blanditiis
            inventore soluta velit dolorum odit. Temporibus blanditiis eligendi officiis, nemo aperiam alias rerum sed
            beatae.Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vitae nihil neque recusandae.
            Blanditiis
            inventore soluta velit dolorum odit. Temporibus blanditiis eligendi officiis, nemo aperiam alias rerum sed
            beatae.
        </p>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Race Category</th>
                    <th scope="col">Race Segment</th>
                    <th scope="col">Race Shirt Size</th>
                </tr>
            </thead>
            <tbody>
                @foreach($participants as $participant)
                <tr>
                    <td>{{$participant->name}}</td>
                    <td>{{$participant->race_category}}</td>
                    <td>{{$participant->gender}}</td>
                    <td>{{$participant->shirt_size}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>



</div>

@endsection
