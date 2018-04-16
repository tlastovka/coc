@extends('layouts.app')
@section('content')



    <div class="i_q_title ml-lg-5">
        <h3> The Answer Sheet </h3><br/>
        <h5> This is a page where the Members/Users answer specific action questions</h5><br/>

        <form class="createaction_form" method="post" action="{{route('store_actions')}}"> <!-- Todo: insert a route via which I will be sending events data to the DB !-->
            {{ csrf_field() }}




            <div class="form-group init_gift">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <strong class="control-label" for="init-gift">Do you accept the symbolic gift we have offered you?</strong>
                                        <button type="button"  class="btn btn-danger" value="0">No</button>
                    <button type="button" class="btn btn-success" value="1">Yes</button>
                </div>
                <hr/>
            </div>

            <div class="form-group a1">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <strong class="control-label" for="init-gift">{{ $question -> q1 }}</strong>
                    <button type="button"  class="btn btn-danger" value="0">No</button>
                    <button type="button" class="btn btn-success" value="1">Yes</button>
                </div>
                <hr/>
            </div>
        </form>
    </div>

    <br/>
<!-- error messages !-->

    <br/>
    @if (count($errors))

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif




    <!--Todo: date and time selectors must work on click/select and on enter. The selected day should be highligted during "hover". I think I am using old bootstrap !-->

    {{--<script type="text/javascript">--}}
    {{--$('.date').datepicker({--}}
    {{--format: 'dd-mm-yyyy'--}}
    {{--});--}}
    {{--</script>--}}

    <script type="text/javascript">
        $('.timepicker').datetimepicker({
            format: 'HH:mm'
        });
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--//Todo: The console throws a warning that this script should not be in a template--}}






@endsection