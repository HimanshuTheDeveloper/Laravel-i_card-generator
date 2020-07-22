
  @extends('app/navbar')


  @section('content')

<div class="container">

    <h2 class="success text-center my-2">I-Cards Details Of Students</h2>
    
        <div class="container">

            <div class="row mx-auto">

                @foreach ($details as $detail)
                    
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-body bg-dark text-light">
                    <h5 class="card-title">Name: {{$detail->name}}</h5>
                        <p class="card-text">Student Id:  {{$detail->student_id}}</p>
                        <a href="#" class="btn btn-primary">I-Card</a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        
</div>

@endsection