@extends('layouts.app')


@section('content')
    <div class="admin_action_table">
<div class="admin_action_title">
    <h3> Administrator`s Actions</h3>
</div>

<table class="table">

    <tr>
        <th scope="col" class="admin_table_heading">#</th>
        <th scope="col" class="admin_table_heading">Actions</th>
        <th scope="col" class="admin_table_heading">Description</th>
        <th scope="col" class="admin_table_heading">Link</th>
    </tr>

    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Define Users</td>
        <td>You must create a list of all Members and other authorized Users who will have rights to vote and use the data</td>
        <td><a href="{{route('users')}}">Click to proceed</a></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Set Events</td>
        <td>Events are meetings or other events when decisions are supposed to take place.  </td>
        <td><a href="{{route('create_events')}}">Click to proceed</a></td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Set Issues, and Questions</td>
        <td>Issues are topics that the Members will be voting on. Finally, Questions are questions which the online Members must answer to cast "per-rolam" votes</td>
        <td><a href="{{route('i_q')}}">Click to proceed<a></td>
    </tr>
    </tbody>
</table>

    </tbody>
</table>
    </div>


@endsection