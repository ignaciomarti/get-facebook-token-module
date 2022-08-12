@extends('front.layouts.app')

@section('title')
    Get Your Facebook Token
@endsection

@section('content')
    <div class="error section-padding">
        <div class="container">
            <div class="row justify-content-center">
              @forelse ($data['data'] as $page)
                <div class="col-12 card mb-3">
                  <div class="card-body">
                    <h5 class="card-title">{{ $page['name'] }}</h5>
                    <p class="card-text">Access Token: {{ $page['access_token'] }}</p>
                    <p class="card-text">Page ID: {{ $page['id'] }}</p>
                  </div>
                </div>
              @empty
                <div class="col-12 card mb-3">
                  <div class="card-body">
                    <h5 class="card-title">No Pages Found</h5>
                    <p class="card-text">You have not added any pages to your account</p>
                  </div>
                </div>
              @endforelse
            </div>      
        </div>
    </div>
@endsection
