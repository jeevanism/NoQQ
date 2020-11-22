    @extends('layouts.app')

    @section('content')

    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-md-12 col-lg-12 col-sm-12'>
                <div class="card">
                    <div class="card-header">
                        The list of videos we haveideos
                    </div>
                    <div class='card-body'>
                        <h2>{{$video->name}}</h2>
                        <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src=" {{$fullEmbedUrl}}" allowfullscreen></iframe>
    </div> 
                        <p>{{$video->descr}}</p>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
     
