@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center  mt-100">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body">
                    <h1 >{{ __('Verify Your Email Address') }}</h1>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
