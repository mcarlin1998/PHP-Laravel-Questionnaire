<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Answers</title>
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
<h1>answers</h1>


<!--
  displays answer on view
  and will return message
  if none have been added-->
<section>
    @if (isset ($answers))

        <ul>
            @foreach ($answers as $answer)
            @endforeach
        </ul>
    @else
        <p> no answers added yet </p>
    @endif
</section>

<!--runs the AnswerController create function
    when the forms submit button is activted-->
{{ Form::open(array('action' => 'AnswerController@create', 'method' => 'get')) }}
    <div class="row">
        {!! Form::submit('Add Answer', ['class' => 'button']) !!}
    </div>
{{ Form::close() }}

</body>
</html>
