<!DOCTYPE html>

<html>

<head>

    <title>Event Date and Time Picker</title>

    <!-- CSRF Token  Todo: verify if there has to be one token for each and every blade with POST!-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>



</head>

<body class="admin_events-body">
<!--Todo: Double check why the datepicker does not work when app.blade is included !-->



<!-- Standard navbar but without the interactive right side. Todo: is this site accessible only after loggin in? do I need the Login and Register here?? Problem with formatting the Login and Register to the right side. Also the user enter the Username into the navbar once the person is logged in. Finally once the unlogged user registers or loggs in, then he msut be re-directed to the same datepicker page. -->

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'CrossOrCheck') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>




<div class="container container_datepicker">


    <div class="i_q_title ml-lg-5">
        <h3> Event Setter </h3><br/>
        <h5> This is a page where you must set the date, time, and title of an Event. Also, you are expected to give a number of Issues on the agenda of the event</h5><br/>
    </div>


    <form class="eventpicker_form" method="POST" action="{{route('store_events')}}"> <!-- Todo: insert a route via which I will be sending events data to the DB !-->
        <div style="position: relative">
            <strong>Select Date of the Event:</strong>
            <input class="date form-control" type="text">
        </div><br/>


        <div style="position: relative">
            <strong>Select Time of the Event:</strong>
            <input class="timepicker form-control" type="text">
        </div><br/>

        <div class="form-group event_title"> <!-- Date input !-->
            <label class="control-label" for="event_title">Event Title :</label>
            <input class="form-control" id="event_title" name="event_title" placeholder="Event Title" type="text"/></input>
        </div><br/>

        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Number of Issues on the agenda:</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option> <!-- Todo: in the beta version automate this with additional button which would add next button !-->
                </select>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 mt-5">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label><br/>
                </div>
            </div><br/>
        </div>


        <div class="form-group"> <!-- Submit button -->
            <button class="btn btn-success " name="submit" type="submit">Submit</button>
        </div>

    </form>

</div>

<!--Todo: date and time selectors must work on click/select and on enter. The selected day should be highligted during "hover". I think I am using old bootstrap !-->

<script type="text/javascript">
    $('.date').datepicker({
        format: 'dd-mm-yyyy'
    });
</script>

<script type="text/javascript">
    $('.timepicker').datetimepicker({
        format: 'HH:mm'
      });
</script>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
{{--//Todo: The console throws a warning that this script should not be in a template--}}


</body>

</html>