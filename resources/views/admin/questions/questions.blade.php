<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Questions</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
<h1>questions</h1>



<section>
  <!-- display any currently stored questions,
  if there arent any display the text-->
    @if (isset ($questions))

        <ul>
            @foreach ($questions as $question)
            @endforeach
        </ul>
    @else
        <p> no questions added yet </p>
    @endif
</section>
<!-- create form that runs QuestionControlelr function create whenever
the form is submitted-->

{{ Form::open(array('action' => 'QuestionController@create', 'method' => 'get')) }}
    <div class="row">
        {!! Form::submit('Add Question', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}

</body>
</html>
