@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="row">

            <div class="col-md-6 col-md-3">

                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">My Info</h3>
                    </div>
                    <div class="card-body">

                        <ul>
                            <li>Name: {!! $user->name !!}</li>
                            <li>Email: {!! $user->email !!}</li>
                            <li>Mobile: {!! $user->mobile !!}</li>
                        </ul>

                    </div>
                </div>

                <hr />

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">My Tickets</h3>
                    </div>
                    <div class="card-body">

                        @if($tickets->isEmpty())

                            <p>No Tickets to display</p>

                        @else

                            <ul>
                                @foreach($tickets as $ticket)

                                    <li>

                                        <h3> {!! $ticket->event->name !!} <br />
                                            <small>{!! $ticket->event->description !!}</small>
                                        </h3>

                                        <p>
                                            Location: {!! $ticket->event->location !!}
                                            Date: {!! $ticket->event->date !!}
                                        </p>

                                    </li>

                                @endforeach
                            </ul>

                        @endif

                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection