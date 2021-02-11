@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row m-4">

        <h1>My Blog</h1> <br><br>
        

    </div>

    <div class="row m-4">
    <p id="item"class="p-3 "><a href="/addblog" class="text-light" >+ Create New Blog</a></p>

    </div>
    <div class="row m-4">
        <ul class="list-group list-group-flush">
        @foreach($article as $a)
        <a href="/detail/{{$a->id}}" class="text-dark">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-2">
                        <img src="/images/{{$a->image}}" style="height:150px; width:300px;"alt="">

                    </div>
                    <div class="col-8">
                        
                        <h2>{{$a->title}}</h2>
                        <p>{{ Str::limit($a->description, 250) }}</p>
                            
                        <a href="/delete/{{$a->id}}" ><svg class=" " width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg></a>          
                            
                       
                    </div>
                    
                </div>
            <li class="list-group-item">
        </a>
        @endforeach
        </ul>
    </div>

  
</div>

@endsection


<!-- <div class="card-group">
     
        
        @foreach($article as $a)

            <div class="card mr-4"><a href="">

                <img src="/images/{{$a->image}}" id ="productimg"class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-dark">{{$a->title}}</h5>
                    <p class="card-text text-dark">{{$a->description}}</p>

                </div>
            </div>
 
        @endforeach
        
           
        </div>


    </div> -->