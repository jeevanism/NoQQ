@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row justify-content-center'>
        <div class='col-md-12 col-lg-12 col-sm-12'>
            <div class="card">
                <div class="card-header">
                    <h2>Name of the video</h2>
                </div>
                <div class='card-body'>


                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p4yVRSKmF0o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>



@endsection