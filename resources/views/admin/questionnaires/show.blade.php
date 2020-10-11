<!doctype html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>Admin - Questionnaires</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
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
<body>
  <div class='container'>
     <article class="row">

       <div class="col-md-6">
         <h1>questionnaires</h1>
       </div>
       <div class="col-md-6">
         <!-- lets users create new questionnaire -->
         <a href ="questionnaires/create" class="btn.btn-lg btn-success pull-right top-buffer">Add New Questionnaire</a>

         <section>
           <!-- displays created questionnaires
           in a table to show the user-->
             @if (isset ($questionnaires))

                 <table class="table table-striped table-bordered">
                     <thead>
                     <tr>
                         <td>ID</td>
                         <td>QuestionID</td>
                         <td>Made By</td>
                         <td>Name</td>
                         <td>Category</td>
                         <td>Update</td>
                         <td>Delete</td>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach ($questionnaires as $questionnaire)
                         <tr>
                           <tr>
                               <td>{{ $questionnaire->id }}</td>
                               <td>{{ $questionnaire->question_id }}</td>
                               <td>{{ $questionnaire->made_by }}</td>
                               <td>{{ $questionnaire->name }}</td>
                               <td>{{ $questionnaire->category }}</td>
                               <!-- enables user to update or delete selected questionnaire -->
                               <td> <a href="questionnaires/{{ $questionnaire->id }}/edit" class="btn btn-warning">Update</a></td>
                               <td>
                                   {!! Form::open(['method' => 'DELETE', 'route' => ['questionnaires.destroy', $questionnaire->id]]) !!}
                                   {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                   {!! Form::close() !!}
                               </td>
                         </tr>
                     @endforeach
                     </tbody>
                 </table>
             @else
                 <p> No questionnaires added yet </p>
             @endif
         </section>
     </article>
 </div><!-- close container -->

 </body>
 <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
 </html>
