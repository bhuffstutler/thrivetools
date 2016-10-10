@extends('app');

@section('title', 'Provider List')

@section('content')
    <h1>
        Chart Communications &mdash; Providers
    </h1>

    <div class="list-group">
        <a class="list-group-item" href="/chartcommunications/5/today">Cranford</a>
        <a class="list-group-item" href="/chartcommunications/238/today">DeLizio</a>
        <a class="list-group-item" href="/chartcommunications/12/today">Pruitt</a>
        <a class="list-group-item" href="/chartcommunications/11/today">Reece</a>
        <a class="list-group-item" href="/chartcommunications/7/today">Segler</a>
        <a class="list-group-item" href="/chartcommunications/6/today">Urbanek</a>
        <a class="list-group-item" href="/chartcommunications/4/today">Warren</a>
    </div>

@endsection