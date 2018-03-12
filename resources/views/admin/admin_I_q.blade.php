@extends('layouts.app')


@section('content')



    <div class="i_q_head">
        <div class="i_q_title ml-lg-5">
            <h3> Set Issues and Questions </h3><br/>
            <h5> This is a page where you must define the Issue and phrase specific questions according to the corresponding instructions. Please read the "Instructions" below carefully</h5><br/>
        </div>

        <!-- event picker !-->
        <div class="event_picker">
            <div class="container-fluid">
                <div class="row">
                    <div class="ml-5 col-md-6 col-sm-6 col-xs-12">

                        <!-- Form code begins -->
                        <!--Todo: make link to Bootstrap day picker using JQuery and/or JS to automate selection of the day and time of the meeting!-->
                        <form method="post">
                            <div class="form-group event_date"> <!-- Date input !-->
                                <label class="control-label" for="event_date">Event Date (MM/DD/YYYY):</label>
                                <input class="form-control" id="event_date" name="date" placeholder="MM/DD/YYYY" type="text"/></input>
                            </div>

                            <div class="form-group issue_title"> <!-- Issue input !-->
                                <label class="control-label" for="issue_title">Issue Title (Short text):</label>
                                <input class="form-control" id="issue_title" name="issue_title" placeholder="Title of the issue" type="text"/>
                            </div>

                            <div class="form-group issue_descr">
                                <label for="issue_desciption">Desciption of the issue (Text):</label>
                                <textarea class="form-control" id="Issue desciption" name="issue_dscr" placeholder="Desciption of the issue" rows="#"></textarea>
                            </div>

                            <div class="admin_questions_title text-center">
                                <h4>Questions</h4>
                            </div>

                            <div class="form-group q1">
                                    <label for="q1">Q1 (Text):</label>
                                    <input class="form-control" id="q1" name="q1_question" placeholder="Text of Q1 question" type="text"/>
                            </div>

                            <div class="form-group"> <!-- Submit button -->
                                <button class="btn btn-success " name="submit" type="submit">Submit</button>
                            </div>
                        </form>
                        <!-- Form code ends -->

                    </div>
                </div>
            </div>
        </div>




    </div>




    </div>


@endsection