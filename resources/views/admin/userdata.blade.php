@extends('admin.layouts.adminapp')

@section('content')
<div class="container">
    <h1 class=mt-4>User</h1>

    <br>
    <div class="accordion" id="accordionExample">
        @foreach ($user as $u)
            <div class="card">
                @if($u->role != 'admin')
                <div class="card-header" id="heading{{ $u->id }}">
                    <div class="row">
                        <div class="col-10 px-4">
                        <button class="btn btn-link collapsed text-dark text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $u->id }}" aria-expanded="false" aria-controls="collapse{{ $u->id }}">
                        <div class="">
                                <h4>{{ $u->name }}</h4>
                                <p>{{ $u->email }}<br>{{ $u->phone }}</p>  
                        </div>
                        </button>
                        </div>
                    
                        <div class="col-2">
                            <a href="/deleteuser/{{$u->id}}" ><svg class="mt-4 " width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="black" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                            </svg></a>
                        </div>
                    </div>
                   
                </div>
                @endif

                <div id="collapse{{ $u->id }}" class="collapse" aria-labelledby="heading{{ $u->id }}" data-parent="#accordionExample">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <!-- <tr>
                                    <th scope="col" class="align-middle">User ID</th>
                                    <th scope="col" class="align-middle">User Name</th>
                                    <th scope="col" class="align-middle">User Email</th>
                                    <th scope="col" class="align-middle">User Phone</th>
                                </tr> -->
                            </thead>

                            <tbody>
                                @foreach ($article as $a)
                                    @if($a->user_id == $u->id)
                                    <tr>

                                        <th scope="row"></th>
                                        <td><img id="photoproductcart"style="height:150px; width:300px;" src="/images/{{$a->image}}" alt=""></td>
                                        <td>  
                                            <div>
                                                <h2>{{$a->title}}</h2>
                                                <p>{{ Str::limit($a->description, 200) }}</p>
                                            </div>
                                        </td>


                                        </td>
                                        <td class="align-middle">  
                                            <!-- remove data -->
                                            
                                        </td>

                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
