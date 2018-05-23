@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">My Info</h3>
                            </div>
                            <div class="panel-body">

                                <ul>
                                    <li>Name: {!! $user->name !!}</li>
                                    <li>Email: {!! $user->email !!}</li>
                                    <li>Mobile: {!! $user->mobile !!}</li>
                                </ul>

                                <a class="btn btn-primary btn-block" href="{!! url()->current() !!}/tickets">My Tickets</a>
                                <br />
                                <a class="btn btn-primary btn-block" href="{!! url()->current() !!}/edit">Edit My Info</a>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
