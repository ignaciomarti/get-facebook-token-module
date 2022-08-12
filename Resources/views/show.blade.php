@extends('front.layouts.app')

@section('title')
    Get Your Facebook Token
@endsection

@section('content')
    <div class="error section-padding">
        <div class="container">
            <div class="row justify-content-center">
              @foreach ($data['data'] as $page)
                  <div class="col-12">
                    <div class="d-flex">
                      <strong>Page: </strong> <span>{{ $page['name'] }}</span>
                    </div>
                    <div class="d-flex">
                      <strong>Access Token: </strong> <span>{{ $page['access_token'] }}</span>
                    </div>
                    <div class="d-flex">
                      <strong>Page ID: </strong> <span>{{ $page['id'] }}</span>
                    </div>
                  </div>
              @endforeach
            </div>      
        </div>
    </div>
@endsection
