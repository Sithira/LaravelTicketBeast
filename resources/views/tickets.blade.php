@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h3>My Tickets</h3>

                <br />

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Time</th>
                            <th scope="col">Location</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <th scope="row">{!! $ticket->id !!}</th>
                                <td>{!! $ticket->event->name !!}</td>
                                <td>{!! $ticket->event->description !!}</td>
                                <td>{!! $ticket->event->time !!}</td>
                                <td>{!! $ticket->event->location !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection