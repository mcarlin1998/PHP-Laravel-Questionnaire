<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Admin - create skills</title>
      <link rel="stylesheet" href="/css/app.css" />
  </head>
  <body>
    <!--
      creates the navigation navbar
      and sets the values-->
  <div class="container">
      <header class="row">
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
      </header>
      <article class="row">
          <h1>Create a new Questionnaire</h1>

      @if ($errors->any())
         <div>
             <ul class="alert alert-danger">
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     <!--
        opens a form from the partials folder
        for the questionnaires url -->
      {!! Form::open(['url' => 'questionnaires']) !!}

              @include('partials/questionnaireform')


      <div class="form-group">
        {!! Form::submit('Add Questionnaire', ['class' => 'btn btn-primary form-control']) !!}

      </div>


      {!! Form::close() !!}

      </article>
  </div><!-- close container -->

  </body>
  </html>
