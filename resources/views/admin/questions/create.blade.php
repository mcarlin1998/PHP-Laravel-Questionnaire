<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Question</title
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">>
</head>
<body>
  <!--
    creates the navigation navbar
    and sets the values-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav">
                <a class="navbar-brand" href="#">Admin</a>
                <li class="active"><a href="/"> questionnaires</a></li>
                <li class="active"><a href="/"> questions</a></li>
                <li class="active"><a href="/"> answers</a></li>
            </ul>
        </div>
      </div>
    </nav>
<h1>Add Create Question</h1>
  <!-- creates a form that runs the QuestionController store function whenever it is submitted-->
{!! Form::open(array('action' => 'QuestionController@store', 'id' => 'createquestion')) !!}
        {{ csrf_token() }}
    <div class="row large-12 columns">
        {!! Form::label('id', 'ID:') !!}
        {!! Form::text('id', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('made_by', 'Made By:') !!}
        {!! Form::text('made_by', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('question', 'Question:') !!}
        {!! Form::textarea('question', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('questionnaire', 'Questionnaire:') !!}
        {!! Form::select('questionnaire[]', $cats, null,['class' => 'large-8 columns', 'multiple']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Add Question', ['class' => 'button']) !!}
    </div>
{!! Form::close() !!}

</body>
</html>
