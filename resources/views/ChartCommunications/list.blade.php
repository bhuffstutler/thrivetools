@extends('app');

@section('title', $view)

@section('content')
    <h1>
        Chart Communications &mdash; {{ $view }}
        <div class="h5 pull-right">
            @if ($view != 'Today')
                <a href="/chartcommunications/{{ $provider_num }}/today">Today</a>
            @endif
            @if ($view != 'Yesterday')
                <a href="/chartcommunications/{{ $provider_num }}/yesterday">Yesterday</a>
            @endif
            @if ($view != 'Seven Days')
                <a href="/chartcommunications/{{ $provider_num }}/7days">Seven Days</a>
            @endif
        </div>
    </h1>

@if(count($communications) > 0)
    @foreach($communications as $communication)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $communication->cc_arxnum }} &mdash; {{ $communication->account->ipv1_lastname }}, {{ $communication->account->ipv1_firstname }}</h3>
            </div>
            <div class="panel-body">
                @foreach($communication->actions as $action)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <b>{{ $action->note->note_dttm }}</b><br>
                            <b>FROM:</b> {{ $action->note->author->name }} <br>
                            @if($action->recipient)
                            <b>TO:</b> {{ $action->recipient->name->name }} <br>
                            @endif
                            @if($action->caller)
                            <b>CALLER:</b> {{ $action->caller->ccc_name }} <br>
                            @endif
                            <b>SUBJECT:</b> {{ $action->note->note_subject }} <br>
                            <b>FACILITY:</b> {{ $action->note->note_facid }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        {!! $action->note->note_body !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endforeach
@else
    No records found.
@endif

@endsection