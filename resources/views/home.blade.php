    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
     @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            <div class="row">
                                 {{ __('You are logged in!') }}
                        <p>Click  <a href='{{route('profile')}}'>HERE</a> to view the users list </p> 
                        
                        @else
                          {{ __('Welcome to Noquitty') }}
                        <p>Click  <a href='{{route("videos")}}'>HERE</a> to view the Videos list </p> 


                        @endif
                                
                            </div>
                           



                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
