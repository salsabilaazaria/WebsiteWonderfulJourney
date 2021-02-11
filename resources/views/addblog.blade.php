@extends('layouts.app')

@section('content')
<div class="container">



    <div class="row m-4" >

        <form method="post" action="/addblog" style="width:100%" enctype="multipart/form-data">
            <!-- @csrf -->

            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $user->id }}"> <br/>
            <div class="form-group" id="title">
                <label for="title" class=""> Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="category">Category</label><br>
                <select class="form-control" name="category" placeholder="Delivery Type">
                    @foreach($category as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group"  id="description">
                <label for="description" class=""> Description</label><br>
                <textarea name="description" rows="10" cols="120"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Choose File</label><br>
                <input id="image" type="file" name="image">
            </div>
      
            <button id="save" type="submit" class="btn btn-dark px-3 py-2">SAVE</button>
            <br><br>
         
        </form>


    </div>
</div>

@endsection