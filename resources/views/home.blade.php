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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<!-- this is a list of events where the respective user can participate. The comparisons of the authorized user with the database of users was not done yet  !-->
<div class="list_events_head admin_list_events">
    <div class="list-events_title ml-lg-5">
        <h3> List of events you are entitled to participate in</h3><br/>
        <h5> This is the list of all ongoing events.</h5><br/>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Date</th>
            <th scope="col">Time </th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>

                <th scope="row">
                    <a class="intab_link_button w-100" href="/events/actions/create/{{ $event->id }}">{{ $event->id }}</a>
                </th>
                <td>{{ $event->event_date }}</td>
                <td>{{ $event->event_time }}</td>
                <td>{{ $event->event_title }}</td>
                <td>{{ $event->event_descr }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{route ('welcome')}}" class="link_button w-25">Back</a>

</div>

@endsection
