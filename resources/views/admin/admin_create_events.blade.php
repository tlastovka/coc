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


    <form class="eventpicker_form" method="post" action="{{route('store_events')}}"> <!-- Todo: insert a route via which I will be sending events data to the DB !-->
        {{ csrf_field() }}
        <div style="position: relative">
            <strong>Select Date of the Event:</strong>
            <input class="date form-control" type="date" name="event_date" placeholder="Click here to select" required>
        </div><br/>


        <div style="position: relative">
            <strong>Select Time of the Event:</strong>
            <input class="timepicker form-control" type="time" name="event_time" placeholder="Click here to select" required>
        </div><br/>

        <div class="form-group event_title">
            <strong class="control-label" for="event_title">Event Title:</strong>
            <input class="form-control" id="event_title" name="event_title" placeholder="Event Title" type="text" required>
        </div>

        <div class="form-group event_descr">
            <strong class="control-label" for="event_descr">Event Subject Description:</strong>
            <textarea class="form-control" id="event_descr" name="event_descr" rows="3" placeholder="Describe the Event" type="text" required></textarea>
        </div><br/>


        <div class="admin_intro_title">
            <h3>Introduction</h3>
        </div><br/>

        <div class="form-group into_speech">
            <label for="intro_speech">Intro Speech (Text):</label>
            <textarea class="form-control" id="intro_speach textarea"  name="into-speech" Placeholder="Write text which will be converted to a voice-over presentation" rows="5" type="text" required></textarea>
            <br/>
            <label for="initial_gift">Initial Gift  (Text):</label>
            <input class="form-control" id="initial_gift" name="ini_gift" placeholder="Identify a small 'initial gift', which the Management can 'present' to each and every member."  type="text" required/>
            <br/>
            <label for="upload_intro_summary">Upload Intro Summary:</label>
            <!-- <input class="upload_intro_summary" id="upload intro summary"  name="upload_intro_summary" type="file"/>
        Todo: this file uploading field should be added once I know how to put sore it - probably impossible via DB!-->
        </div>
        <div class="admin_intro_hint">
                <h5> HINT: the introductory text should contatin the following:........ </h5>
        </div>
        <br/>




        <div class="admin_questions_title">
            <h3>Questions</h3>
        </div><br/>


        <div class="form-group q1">
            <label for="q1">Q1 (Text):</label>
            <input class="form-control" id="q1" name="q1" placeholder="Example: Do you agree with all of us that it is important to make qualified decisions which benefit majority of the members?" type="text" required/>
            <div class="admin_questions_hints">
            <h5> HINT: Q1 must be limited to one short sentence that (almost) nobody can answer "NO" . It is a general, Leading, and/or loaded question, which is meant not to polarize, but to UNIFY the respondents and expose them to the Social Approval/Desirability Bias (by now, the respondents will know that their answers will be published) the Confirmation Bias and the Continuity Bias.
                The question must be heavily biased towards "YES" and can be used against the respective respondent in case he/she starts answering the follow-up questions not in tine with the premise contained in this question.
                Those who answer "No" will be subject to either credibility discounting, re-routed to a different online session, or eliminated from the online voting. For more information refer to the CrossOrCheck manual. </h5>
            </div>
        </div>

        <div class="form-group q2">
            <label for="q1">Q2 (Text):</label>
            <input class="form-control" id="q2" name="q2" placeholder="Example: Are you also tired of endless Flat Owners Association meetings, full of emotions, inefficiency, and unpredictable results?" type="text" required/>
            <div class="admin_questions_hints">
                <h5> HINT: Q2 must be also limited to one short sentence. However, this question must be issue specific and should address the biggest problem members face due to the issue discussed. It must refere to the affirmative position of the majority "e.g.: ..also (meaning: just like all of us)...". Again it must be a question which is hard to answer "NO" and integrates member to reach the mutually acceptable target. The question must be a Leading, loaded and biased towards "YES". Those answering "No" will be subject to either credibility discounting, re-routed to a different online session, or eliminated from the online voting. For more information refer to the CrossOrCheck manual. </h5>
            </div>
        </div>

        <div>
            <label class="form-group definitions">Problem, Solution, and Target Definition Questions:</label>
        </div>

        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center PDM_title"><strong>Problem Definition by the Manager:</strong></h5>
                    <h5 class="card-text PDMs">Top 5 problems, <strong>ranked top to bottom</strong></h5>
                    <label for="problems_speech">Problems Speech (Text):</label>
                    <textarea class="form-control" id="problem_speech textarea"  name="problem_speech" Placeholder="Write text which will be converted to a voice-over presentation. For hits, please refer to the CrossOrCheck manual or www.chrossorcheck.com" rows="10" type="text" required></textarea>
                    <br/>
                    <input class="form-control mb-1" id="PDM1" name="PDM1" placeholder="Enter the problem (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="PDM2" name="PDM2" placeholder="Enter the problem (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="PDM3" name="PDM3" placeholder="Enter the problem (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="PDM4" name="PDM4" placeholder="Enter the problem (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="PDM5" name="PDM5" placeholder="Enter the problem (max. 50 characters)" type="text" required/>
                    <label for="upload_problems_summary">Upload Problems Summary:</label>
                    <!-- <input class="upload_problems_summary" id="upload problems summary"  name="upload_problems_summary" type="file"/>
                Todo: this file uploading field should be added once I know how to put sore it - probably impossible via DB!-->
                </div>
                <div class="card-footer">
                    <small class="text-muted">HINT: The issue is defined by the problems it which it is associated with. They should be listed here in the order of their importance</small>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center SDM_title"><strong>Solution Definition by the Manager:</strong></h5>
                    <h5 class="card-text SDQs">Top 5 solutions, <strong>ranked top to bottom</strong></h5>
                    <label for="solutions_speech">Solutions Speech (Text):</label>
                    <textarea class="form-control" id="solution_speech textarea"  name="solutions_speech" Placeholder="Write text which will be converted to a voice-over presentation. For hits, please refer to the CrossOrCheck manual or www.chrossorcheck.com" rows="10" type="text" required></textarea>
                    <br/>
                    <input class="form-control mb-1" id="SDM1" name="SDM1" placeholder="Enter the solution (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="SDM2" name="SDM2" placeholder="Enter the solution (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="SDM3" name="SDM3" placeholder="Enter the solution (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="SDM4" name="SDM4" placeholder="Enter the solution (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="SDM5" name="SDM5" placeholder="Enter the solution (max. 50 characters)" type="text" required/>
                    <label for="upload_solutions_summary">Upload Solutions Summary:</label>
                    <!--<input class="upload_solutions_summary" id="upload solutions summary"  name="upload_solutions_summary" type="file"/>
                Todo: this file uploading field should be added once I know how to put sore it - brobably impossible via DB!-->
                </div>
                <div class="card-footer">
                    <small class="text-muted">HINT: The problems can be solved by applying the following solution. The solutions should be rank-ordered according to the effectiveness in solving the problem and delivering targeted results</small>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center TDM_title"><strong>Target Definition by the Manager:</strong></h5>
                    <h5 class="card-text TDQs">Top 5 targets, <strong>ranked top to bottom</strong></h5>
                    <label for="targets_speech">Targets Speech (Text):</label>
                    <textarea class="form-control" id="target_speech textarea"  name="targets_speech" Placeholder="Write text which will be converted to a voice-over presentation. For hits, please refer to the CrossOrCheck manual or www.chrossorcheck.com" rows="10" type="text" required></textarea>
                    <br/>
                    <input class="form-control mb-1" id="TDM1" name="TDM1" placeholder="Enter the target (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="TDM2" name="TDM2" placeholder="Enter the target (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="TDM3" name="TDM3" placeholder="Enter the target (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="TDM4" name="TDM4" placeholder="Enter the target (max. 50 characters)" type="text" required/>
                    <input class="form-control mb-1" id="TDM5" name="TDM5" placeholder="Enter the target (max. 50 characters)" type="text" required/>
                    <label for="upload_targets_summary">Upload Targets Summary:</label>
                    <!--<input class="upload_targets_summary" id="upload targets summary"  name="upload_targets_summary" type="file"/>
                Todo: this file uploading field should be added once I know how to put sore it - probably impossible via DB!-->
                </div>
                <div class="card-footer">
                    <small class="text-muted">HINT: The rank-ordered list of targets defines realistic goals which the solutions can achieve provided the Members vote "Yes"</small>
                </div>
            </div>

        </div><br/>

        <div class="inline form-check_funding">
            <label class="form-check-label" for="funding_check">Will extra funding be required?</label>
            <input type="checkbox" class="form-check funding_required" name="funding_required" id="funding_check" required>
        </div>
        <br/>
        <br/>

        <div class="form-group funding_explained">
            <label for="funding_explanation">If yes, define total cost and funding terms for one membership unit:</label>
            <input class="form-control" id="funding_explanation" name="funding_descr" placeholder="Please, insert here description of any funding requirement" type="text"/>
            <div class="admin_questions_hints">
                <h5> HINT: Please provide maximum clarity in terms of total cost, sharing algorithm, total contribution per one membership unit, funding options etc. For details, refer to the CrossOrCheck Manual   </h5>
            </div>
        </div>


        <br/>



        <div class="form-group voting">
            <label for="preaching_speech">Preaching (Text):</label>
            <textarea class="form-control" id="preaching_speech textarea"  name="preaching" Placeholder="Write text which will be converted to a voice-over presentation. For hits, please   refer to the CrossOrCheck manual or www.chrossorcheck.com" rows="10" type="text" required></textarea>
            <br/>
            <label for="voting">Voting Question (Text):</label>
            <input class="form-control" id="voting_question" name="voting_question" placeholder="Please, insert here a properly framed voting question" type="text" required/>
            <div class="admin_questions_hints">
                <h5> HINT: Educate the user about framing and proper wording of the voting question ....... </h5>
            </div>
        </div><br/>

        <div class="form-group"> <!-- Submit button -->
            <button class="btn btn-success " name="submit" type="submit">Submit</button>
        </div>


        <!-- Validation Alerts by TL Todo: review validation using the $this -> validate(request() [what to validate], function !-->
        {{--<div class = "aletr alert-danger">--}}
            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}



    </form>

</div>













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


</body>

</html>