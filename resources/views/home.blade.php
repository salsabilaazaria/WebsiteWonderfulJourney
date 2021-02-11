@extends('layouts.app')

@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
       <img src="images/homephoto.jpg" style="max-width:130%;" alt="">
      
        <div class="col-10">
        <div class="row">
        <h1 class="text-center text-light" style=" font-weight: bold;"id="textheader">Welcome back, {{$user->name}}</h1><br>
        </div>
        <div class="row mt-4">

            <h1 class="text-center text-light" id="textheader">Let's Explore Indonesia</h1>
        </div>
        

        <div class="card-group text-center" id="categoryicon">
            <div class="card  justify-content-center mx-4" id="item"><a href="/category/1">
            
                <i class="fas fa-umbrella-beach mt-4" style='font-size:60px;color:white'></i>
                <div class="card-body">
                <h5 class="card-title text-light">Beach</h5>
                </div>
            
            </a></div>

            <div class="card justify-content-center mx-4" id="item"><a href="/category/2">
                
                <i class="fas fa-mountain mt-4" style='font-size:60px;color:white'></i>
                <div class="card-body">
                <h5 class="card-title text-light">Moutain</h5>
                </div>
            
            </a></div>
           

            <div class="card justify-content-center mx-4" id="item"><a href="/category/3">
                
                <i class='fas fa-city mt-4' style='font-size:60px;color:white'></i>
                <div class="card-body">
                <h5 class="card-title text-light">City</h5>
                </div>
            
            </a></div>
           
         </div>
       
       
    </div> <br><br><br><br><br><br><br>

    <div class="row mt-4 justify-content-center">

    <div class="row">
        <h1 style=" font-weight: bold;">LATEST POSTS</h1>
    </div>

    <div class="col-12 mt-4">

        <div class="d-flex flex-row bd-highlight mb-3">

            @foreach ($article as $a)

            @if($a->id<=3)
            <div class="card mr-4"><a href="/detail/{{$a->id}}">
                @if($a->id%2!=0)
                <img src="/images/{{$a->image}}"  style="max-height:200px" id ="productimg"class="card-img-top" alt="...">
                <div class="card-body text-dark">
                    <h5 class="card-title text-dark" style=" font-weight: bold;">{{$a->title}}</h5>
                </div>
                @else
                <div class="card-body text-dark">
                    <h5 class="card-title text-dark" style=" font-weight: bold;">{{$a->title}}</h5>
                    <p>{{ Str::limit($a->description, 250) }}</p>
                </div>
                @endif
                
            </div>
            @endif
            @endforeach
        
        </div>

        <div class="d-flex flex-row bd-highlight mb-3" >

            @foreach ($article as $a)

            @if($a->id>3 && $a->id<=6)
            <div class="card mr-4" ><a href="#">
                @if($a->id%2!=0)
                <img src="/images/{{$a->image}}"  style="max-height:200px;"id ="productimg"class="card-img-top" alt="...">
                <div class="card-body text-dark">
                    <h5 class="card-title text-dark" style=" font-weight: bold;">{{$a->title}}</h5>
                </div>
                @else
              
                <div class="card-body text-dark">
                    <h5 class="card-title text-dark" style=" font-weight: bold;">{{$a->title}}</h5>
                    <p>{{ Str::limit($a->description, 250) }}</p>
                </div>
                @endif
                
            </div>
            @endif
            @endforeach
        
        </div>


    </div>





    </div>


    </div>
</div>
@endsection
