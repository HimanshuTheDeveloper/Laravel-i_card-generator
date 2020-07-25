@extends('app/navbar')

@section('icard')

    <div class="container w-50 mx-auto p-2 my-4 bg-success">

        <h3 class="text-center">STUDENT I CARD</h3>

        <ul class="list-group w-50 mx-auto my-4">
        <li class="list-group-item">Name : {{$details->name}}</li>
        <li class="list-group-item">Program : {{$details->program}}</li>
            <li class="list-group-item">Student Id : {{$details->student_id}}</li>
            <li class="list-group-item">Date Of Birth : {{$details->dob}} </li>
            <li class="list-group-item">Address : {{$details->address}}</li>
            <li class="list-group-item">Admission Taken : {{$details->created_at->format('m/yy')}}</li>
          </ul>


    </div>

@stop