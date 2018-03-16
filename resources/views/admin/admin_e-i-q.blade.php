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




<div class="container">


    <div class="i_q_title ml-lg-5">
        <h3> The Event Setter </h3><br/>
        <h5> This is a page where you must set parameters of the respective Event (e.g.: a process of informing Members, collecting their feedback, and voting)</h5><br/>
    </div>


    <form class="eventpicker_form" method="POST" action="{{route('store_events')}}"> <!-- Todo: insert a route via which I will be sending events data to the DB !-->
        <div style="position: relative">
            <strong>Select Date of the Event:</strong>
            <input class="date form-control" type="text" placeholder="Click here to select">
        </div><br/>


        <div style="position: relative">
            <strong>Select Time of the Event:</strong>
            <input class="timepicker form-control" type="text" placeholder="Click here to select">
        </div><br/>

        <div class="form-group event_title"> <!-- Date input !-->
            <strong class="control-label" for="event_title">Event Title:</strong>
            <input class="form-control" id="event_title" name="event_title" placeholder="Event Title" type="text"/></input>
        </div>

        <div class="form-group issue_title"> <!-- Date input !-->
            <strong class="control-label" for="issue_title">Issue Title:</strong>
            <input class="form-control" id="issue_title" name="issue_title" placeholder="Issue Title" type="text"/></input>
        </div>

        <div class="form-group issue_descr">
            <strong class="control-label" for="issue_descr">Description of the Issue:</strong>
            <textarea class="form-control" id="issue_descr" rows="3" placeholder="Describe the Issue" type="text"></textarea>
        </div><br/>

        <div class="admin_questions_title">
            <h3>Questions</h3>
        </div><br/>


        <div class="form-group q1">
            <label for="q1">Q1 (Text):</label>
            <input class="form-control" id="q1" name="q1_question" placeholder="Example: Do you agree with all of us that it is important to make qualified decisions which benefit majority of the members?" type="text"/>
            <div class="admin_questions_hints">
            <h5> HINT: Q1 must be limited to one short sentence that (almost) nobody can answer "NO" . It is a general, Leading, and/or loaded question, which is meant not to polarize, but to UNIFY the respondents and expose them to the Social Approval/Desirability Bias (by now, the respondents will know that their answers will be published) the Confirmation Bias and the Continuity Bias.
                The question must be heavily biased towards "YES" and can be used against the respective respondent in case he/she starts answering the follow-up questions not in tine with the premise contained in this question.
                Those who answer "No" will be subject to either credibility discounting, re-routed to a different online session, or eliminated from the online voting. For more information refer to the CrossOrCheck manual. </h5>
            </div>
        </div>

        <div class="form-group q2">
            <label for="q1">Q2 (Text):</label>
            <input class="form-control" id="q2" name="q2_question" placeholder="Example: Are you also tired of endless Flat Owners Association meetings, full of emotions, inefficiency, and unpredictable results?" type="text"/>
            <div class="admin_questions_hints">
                <h5> HINT: Q2 must be also limited to one short sentence. However, this question must be issue specific and should address the biggest problem members face due to the issue discussed. It must refere to the affirmative position of the majority "e.g.: ..also (meaning: just like all of us)...". Again it must be a question which is hard to answer "NO" and integrates member to reach the mutually acceptable target. The question must be a Leading, loaded and biased towards "YES". Those answering "No" will be subject to either credibility discounting, re-routed to a different online session, or eliminated from the online voting. For more information refer to the CrossOrCheck manual. </h5>
            </div>
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