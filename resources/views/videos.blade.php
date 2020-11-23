@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status')}}
    </div>

@endif
<div class='container'>
    <div class='row justify-content-center'>
        <div class='col-md-12 col-lg-12 col-sm-12'>
            <div class="card">
                <div class="card-header">
                    The list of videos we haveideos
                </div>
                <div class='card-body'>
                    <div class="row">

                    @foreach ($videos as $video)

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate"
                            data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <a href="/videos/{{$video->id}}"><img
                                        src="http://noquittycareer.com/demo1/site/templates/assets/img/training1.jpg"
                                        class="img-fluid"></a>
                                <h4><a href="{{url('videos/'.$video->id)}}">{{$video->name}}</a></h4>
                                <strong>Category: {{$video->id}}</strong>
                                <p>{{$video->descr}}
                                </p>

                            </div>
                        </div>
                    @endforeach
                        












                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
