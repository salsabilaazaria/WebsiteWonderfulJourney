@extends('layouts.app')

@section('content')


<div class="container">
<div class="row m-4">
<h1>{{$category->name}}</h1>
    <ul class="list-group list-group-flush">
    @foreach($article as $a)
    <a href="/detail/{{$a->id}}" class="text-dark">
        <li class="list-group-item">
            <div class="row">
                <div class="col-4">
                    <img src="/images/{{$a->image}}" style="height:150px; width:300px;"alt="">

                </div>
                <div class="col-7">
                    <h2>{{$a->title}}</h2>
                    <p>{{ Str::limit($a->description, 300) }}</p>
                </div>
            </div>
        <li class="list-group-item">
    </a>
    @endforeach
    </ul>
</div>
</div>


@endsection