@extends('front.layouts.app')

@section('title')
    Get Your Facebook Token
@endsection

@section('css')
<style>
    .btn-facebook {
        color: #fff;
        background-color: #3b5998;
        border-color: rgba(0,0,0,0.2);
    }

    .btn-facebook:hover{
        color: #fff;
        background-color: #2d4373;
        border-color: rgba(0,0,0,0.2);
    }
</style>
@endsection

@section('content')
    <div class="error section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="error-content">
                        <div class="error-message">
                            <h3>Login with Facebook to get your Facebook Page's Token</h3>

                            <a href="{{ route('facebooklogin') }}" class="btn btn-facebook btn-social">
                                <i class="lni lni-facebook-filled"></i>
                                Sign in with Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
@endsection
