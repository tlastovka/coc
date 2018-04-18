@extends('layouts.app')
@section('content')



    <div class="i_q_title ml-lg-5">
        <h3> The Answer Sheet </h3><br/>
        <h5> This is a page where the Members/Users answer specific action questions</h5><br/>

        <form class="createaction_form" method="post" action="{{route('store_actions')}}"> <!-- Todo: insert a route via which I will be sending events data to the DB !-->
            {{ csrf_field() }}




            <div class="form-group init_gift">
                    <strong class="control-label" for="init-gift">Do you accept the symbolic gift we have offered you?</strong>
                    <br/>
                    <input type="radio" name="ini_gift" value="0">Cross</input> <!-- ToDo: this text field must be validated so that at least one of the two inputs is selected!-->
                    <input type="radio" name="ini_gift" value="1">Check</input>  <!-- ToDo: this text field must be validated so that at least one of the two inputs is selected!-->
                <hr/>
            </div>


            <form>

                <div>
                    <strong>{{ $question -> q1 }}</strong>
                    <br/>
                    <input type="radio" id="a1_cross"
                           name="a1" value="0">
                    <label for="a1_cross">Cross</label>
                    <input type="radio" id="a1_check"
                           name="a1" value="1">
                    <label for="a1_check">Check</label>
                    <hr/>
                </div>

                <div>
                    <strong>{{ $question -> q2 }}</strong>
                    <br/>
                    <input type="radio" id="a2_cross"
                           name="a2" value="0">
                    <label for="a2_cross">Cross</label>
                    <input type="radio" id="a2_check"
                           name="a2" value="1">
                    <label for="a2_check">Check</label>
                    <hr/>
                </div>

                <div>
                    <strong>What are the problems? (ranked by importance top-down)</strong>
                    <br/>

                    <strong>Problem with priority 1: </strong>
                    <select name="pda1">
                        <option value="1" selected>{{ $question -> pdm1 }}</option>
                        <option value="2">{{ $question -> pdm2 }}</option>
                        <option value="3">{{ $question -> pdm3 }}</option>
                        <option value="4">{{ $question -> pdm4 }}</option>
                        <option value="5">{{ $question -> pdm5 }}</option>
                    </select>
                    <br/>

                    <strong>Problem with priority 2: </strong>
                    <select name="pda2">
                        <option value="1" selected>{{ $question -> pdm1 }}</option>
                        <option value="2">{{ $question -> pdm2 }}</option>
                        <option value="3">{{ $question -> pdm3 }}</option>
                        <option value="4">{{ $question -> pdm4 }}</option>
                        <option value="5">{{ $question -> pdm5 }}</option>
                    </select>
                    <br/>

                    <strong>Problem with priority 3: </strong>
                    <select name="pda3">
                        <option value="1" selected>{{ $question -> pdm1 }}</option>
                        <option value="2">{{ $question -> pdm2 }}</option>
                        <option value="3">{{ $question -> pdm3 }}</option>
                        <option value="4">{{ $question -> pdm4 }}</option>
                        <option value="5">{{ $question -> pdm5 }}</option>
                    </select>
                    <br/>

                    <strong>Problem with priority 4: </strong>
                    <select name="pda4">
                        <option value="1" selected>{{ $question -> pdm1 }}</option>
                        <option value="2">{{ $question -> pdm2 }}</option>
                        <option value="3">{{ $question -> pdm3 }}</option>
                        <option value="4">{{ $question -> pdm4 }}</option>
                        <option value="5">{{ $question -> pdm5 }}</option>
                    </select>
                    <br/>

                    <strong>Problem with priority 5: </strong>
                    <select name="pda5">
                        <option value="1" selected>{{ $question -> pdm1 }}</option>
                        <option value="2">{{ $question -> pdm2 }}</option>
                        <option value="3">{{ $question -> pdm3 }}</option>
                        <option value="4">{{ $question -> pdm4 }}</option>
                        <option value="5">{{ $question -> pdm5 }}</option>
                    </select>
                    <hr/>
                </div>

                <div>
                    <strong>What would you like to achieve by solving the problem? (ranked by importance top-down)</strong>
                    <br/>

                    <strong>Target with priority 1: </strong>
                    <select name="tda1">
                        <option value="1" selected>{{ $question -> tdm1 }}</option>
                        <option value="2">{{ $question -> tdm2 }}</option>
                        <option value="3">{{ $question -> tdm3 }}</option>
                        <option value="4">{{ $question -> tdm4 }}</option>
                        <option value="5">{{ $question -> tdm5 }}</option>
                    </select>
                    <br/>

                    <strong>Target with priority 2: </strong>
                    <select name="tda2">
                        <option value="1" selected>{{ $question -> tdm1 }}</option>
                        <option value="2">{{ $question -> tdm2 }}</option>
                        <option value="3">{{ $question -> tdm3 }}</option>
                        <option value="4">{{ $question -> tdm4 }}</option>
                        <option value="5">{{ $question -> tdm5 }}</option>
                    </select>
                    <br/>

                    <strong>Target with priority 3: </strong>
                    <select name="tda3">
                        <option value="1" selected>{{ $question -> tdm1 }}</option>
                        <option value="2">{{ $question -> tdm2 }}</option>
                        <option value="3">{{ $question -> tdm3 }}</option>
                        <option value="4">{{ $question -> tdm4 }}</option>
                        <option value="5">{{ $question -> tdm5 }}</option>
                    </select>
                    <br/>

                    <strong>Target with priority 4: </strong>
                    <select name="tda4">
                        <option value="1" selected>{{ $question -> tdm1 }}</option>
                        <option value="2">{{ $question -> tdm2 }}</option>
                        <option value="3">{{ $question -> tdm3 }}</option>
                        <option value="4">{{ $question -> tdm4 }}</option>
                        <option value="5">{{ $question -> tdm5 }}</option>
                    </select>
                    <br/>

                    <strong>Target with priority 5: </strong>
                    <select name="tda5">
                        <option value="1" selected>{{ $question -> tdm1 }}</option>
                        <option value="2">{{ $question -> tdm2 }}</option>
                        <option value="3">{{ $question -> tdm3 }}</option>
                        <option value="4">{{ $question -> tdm4 }}</option>
                        <option value="5">{{ $question -> tdm5 }}</option>
                    </select>
                    <hr/>
                </div>

                <div>
                    <strong>How do you like our solution?</strong>
                    <p>Please drag the slider to display your feelings about the proposed solution (hate it=-100, neutral=0, love it=100).</p>

                    <div class="slidecontainer">
                        <input type="range" name="sda" step="50"  oninput="outputUpdate(value)" id="slider_value" list="ticks" min="-100" max="100" value="0" class="slider">
                        <output for=value  class="sentiment_output" id="output">Neutral</output>
                        <datalist id="ticks">
                            <option value="-100" label="hate it"> <!-- ToDo: I would like to see the lables, have associated color and from red to green! The text
                            Todo: the text should follow the cursor-->
                            <option value="-50">
                            <option value="0" label="neutral">
                            <option value="50">
                            <option value="100" label="love it">
                        </datalist>


                    <script>
                        function outputUpdate(num) {
                            document.querySelector('#output').value = num;
                        }
                    </script>
                    </div>


                </div>


                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
            <pre id="log">
</pre>



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