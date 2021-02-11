@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row my-4">

        <div class="col-2 m-4">
        <svg width="9em" height="9em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
        </svg>
        </div>
        <div class="col-7 mt-4">
        <form method="post" action="/update" enctype="multipart/form-data">
            <!-- @csrf -->

            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $user->id }}"> <br/>
            <div id="displayname">
                <h2 class="align-middle " id="namaku">{{$user->name}}</h2>
            </div>
            <div class="form-group" style="display:none;" id="editnama">
                <label for="name" class="fa fa-user-circle"> Name</label>
                <input type="text" class="form-control" name="name" placeholder="{{$user->name}}">
            </div>

            <div id="displayemail">
                <h4 class="align-middle " id="namaku">{{$user->email}}</h4>
            </div>
            <div class="form-group" style="display:none;" id="editemail">
                <label for="email" class="fa fa-envelope"> Email</label>
                <input type="text" class="form-control" name="email" placeholder="{{$user->email}}">
            </div>
            <div id="displayphone">
                <h4 class="align-middle " id="namaku">{{$user->phone}}</h4>
            </div>
            <div class="form-group" style="display:none;" id="editphone">
                <label for="Phone" class="fa fa-phone"> Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="{{$user->phone}}">
            </div>

            <br><br>
            <button id="save" style="display:none;"type="submit" class="btn btn-dark px-3 py-2">SAVE</button>
        </form>
        </div>
        <div class="col-2 my-4">
 
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <a href=""  class="text-dark" id="editbut">Edit <i class='fas fa-pen' style='font-size:13px'></i></a>
            <script type="text/javascript">
                $('a#editbut').click(function(){  
                        $('#editnama').show();
                        $('#displayname').hide();
                        $('#editemail').show();
                        $('#displayemail').hide();
                        $('#editphone').show();
                        $('#displayphone').hide();
                        $('#save').show();
                        return false; })
            </script>
        </div>
    </div>
  
 
      
    <div class="row"  id="editform">
       
    </div>


</div>



</div>

@endsection