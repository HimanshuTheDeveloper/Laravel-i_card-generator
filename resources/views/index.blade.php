
  @extends('app/navbar')


  @section('content')

<div class="container">

    <h2 class="text-center my-2 p-4">I-Cards Details Of Students</h2>
    
        <div class="container">

            <div class="row mx-auto">

                @foreach ($details as $detail)
             
                    
                <div class="card w-25">
                    
                    <div class="card-body bg-warning">
                    <h5 class="card-title">Id : {{$detail->id}}</h5>
                    <h5 class="card-title">Name : {{$detail->name}}</h5>
                        <p class="card-text">Student Id : {{$detail->student_id}}</p>
                        
                        
                         <a href="{!! url("icard/$detail->id"); !!}" class="btn btn-primary">I-Card</a>
                         <a href="{!! url("icard/$detail->id/edit"); !!}" class="btn btn-light">Edit</a>
                        
                    </div>
                </div>



                @endforeach
                
            </div>
        </div>
        
</div>

@endsection