@extends('layouts.app')


@section('content')

    <div class="list_events_head admin_list_events">
        <div class="list-events_title ml-lg-5">
            <h3> List of events</h3><br/>
            <h5> This is the list of all ongoing events. There should be two buttons (back to admin tasks) and (next event) which will take me to /admin or to /admin/create  </h5><br/>
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
                        <a class="intab_link_button w-100" href="/admin/events/{{ $event->id }}">{{ $event->id }}</a>
                    </th>
                    <td>{{ $event->event_date }}</td>
                    <td>{{ $event->event_time }}</td>
                    <td>{{ $event->event_title }}</td>
                    <td>{{ $event->event_descr }}</td>

                </tr>
                @endforeach
                </tbody>
            </table>

        <a href="{{route ('admin')}}" class="link_button w-25">Back to Admin Actions</a>

    </div>
@endsection
