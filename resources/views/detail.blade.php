@extends('layouts.app')

@section('content')

<div class="container">
<br><br><br><br>
    <div class="row">
    <br><br><br><br>
        <h1>{{$article->title}}</h1>
        <img src="/images/{{$article->image}}" class="justify-content-center"style="max-height:600px;"alt="">
    
        <p> <br><br>{{$article->description}}</p>
  
    </div>
</div>

@endsection