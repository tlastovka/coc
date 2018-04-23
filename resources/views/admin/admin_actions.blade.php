@extends('layouts.app')


@section('content')
    <div class="admin_action_table">
<div class="admin_action_title">
    <h3> Administrator`s Actions</h3>
</div>

<table class="table">

    <tr>
        <th scope="col" class="admin_table_heading text-center">#</th>
        <th scope="col" class="admin_table_heading text-center">Actions</th>
        <th scope="col" class="admin_table_heading text-center">Description</th>
        <th scope="col" class="admin_table_heading text-center">Create One</th>
        <th scope="col" class="admin_table_heading text-center">View All</th>
    </tr>

    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Define Users</td>
        <td>You must create a pool of all Members and other authorized Users who will have rights to vote for the Issues and use the data</td>
        <td><a class="intab_link_button" href="{{route('users')}}">Proceed</a></td>
        <td><a class="intab_link_button" href="#">Proceed</a></td>
        <!-- Todo: insert reference to a newly created route and create a corresponding view !-->
    </tr>

    <tr>
        <th scope="row">2</th>
        <td>Set-up the Event(s)</td>
        <td>An Event is an instance of the the process which starts with definition of the voting date and time, and the main issue in question. As part of the Event we inform the members about the Issue, problems, targets, solutions and funding options. We expect to collect genuine feedback from the Members, and ask them to vote on the Issue. To provide a relevant benchmark, some questions are paired with "desirable answers" as defined by the Administrator/Leader</a></td>
        <td><a class="intab_link_button" href="{{route('create_events')}}">Proceed</a></td>
        <td><a class="intab_link_button" href="{{route('list_events')}}">Proceed</a></td>
    </tr>

    {{--<tr>--}}
        {{--<th scope="row">3</th>--}}
        {{--<td>Set Issues, and Questions</td>--}}
        {{--<td>Issues are topics that the Members will be voting on. Finally, Questions are questions which the online Members must answer to cast "per-rolam" votes</td>--}}
        {{--<td><a href="{{route('i_q')}}">Click to proceed<a></td>--}}
    {{--</tr>--}}

    </tbody>
</table>

    </tbody>
</table>
    </div>


@endsection