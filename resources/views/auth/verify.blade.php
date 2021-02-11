@extends('layouts.authapp')

@section('content')
<div class="container">

<div class="row justify-content-center mt-4">
        <a href="/">
        <h1 class="text-light mt-4" >Wonderful Journey</h1></a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="top:20%;">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
