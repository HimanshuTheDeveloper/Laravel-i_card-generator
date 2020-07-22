
@extends('./app/navbar')



@section('heading')
<h2 class="text-center my-2"> Student Identification Form</h2>
@stop

@section('form')
<div class="jumbotron container my-2 bg-dark text-light">

   
        {!!Form::open(['method'=>'post','action'=>'icardController@store'])!!}
        
        <div class="form-group">

            {!!Form::label('name','Student Name')!!}
            {!!Form::text('name', null ,['class'=>'form-control'])!!}

            {!!Form::label('program','Program')!!}
            {!!Form::text('program', null ,['class'=>'form-control'])!!}

            {!!Form::label('student_id','Student Id')!!}
            {!!Form::text('student_id', null ,['class'=>'form-control'])!!}

            {!!Form::label('dob','Student Date Of Birth')!!}
            {!!Form::text('dob', null ,['class'=>'form-control'])!!}

            {!!Form::label('address',' Student Address')!!}
            {!!Form::text('address', null ,['class'=>'form-control'])!!}
           

         {!!Form::submit('Create I-card',['class'=>'btn btn-success my-2'])!!}
       
        
  
      {!!Form::close()!!} 




</div>
@stop
