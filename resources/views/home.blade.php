@extends('layouts.app')

@section('content')
@if (Auth::guest())
<hr>
<h1> Please login </h1>
<hr>

@else
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
