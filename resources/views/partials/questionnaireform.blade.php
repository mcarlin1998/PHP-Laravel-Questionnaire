
<!--
creates form that can be included in
any other blade template -->
<div class="form-group">
  {!! Form::label('id', 'ID:') !!}
  {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('made_by', 'Made By:') !!}
  {!! Form::text('made_by', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('question_id', 'Question ID:') !!}
  {!! Form::text('question_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('category', 'Category:') !!}
  {!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>
