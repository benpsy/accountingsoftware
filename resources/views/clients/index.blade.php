@extends('layouts.app')

@section('content')

@foreach($clients as $client)

<h2> Clients </h2>
<hr>
    <h3>{{ $client->name }}</h3>
    <h4>{{ $client->company_name }} </h4>
    <p>
        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info">View client</a>
        <a href="{{ route('clients.edit', $client->id) }}">edit</a>
    </p>
    <hr>
@endforeach

@stop