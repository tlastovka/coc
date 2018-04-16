@extends('layouts.app')
@section('content')



    <h1>(this is where I will show individual form for each user)</h1>
    <div class="action_form">
    <ul>
    <td>{{ $event->id }}</td>
    <td>{{ $event->event_date }}</td>
    <td>{{ $event->event_time }}</td>
    <td>{{ $event->event_title }}</td>
    <td>{{ $event->q1 }}</td>
    </ul>
    </div>



@endsection