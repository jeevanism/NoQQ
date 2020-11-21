@extends('layouts.app')

@section('content')
 
 <div class='container'>
    <div class='row justify-content-center'>
        <div class='col-md-8 col-lg-8 col-sm-12'>
            <div class="card">
                <div class="card-header">
                Please Add video Details below 
                </div>
                <div class='card-body'>
                    <form action="#" method='POST'>
                        @csrf


                         <div class='form-group row'>
                            <label for="videoname" class='col-md-4 col-form-label text-md-right' >
                                {{__('Name of the Video')}}</label>
                                {{-- those extra __ meant for translation ready  --}}
                                <div class='col-md-6' >
                                        <input type="text" id='videoname' class='form-control
                                         @error("videoname") is-invalid @enderror' name="videoname" value="{{old('videoname')}}" required autocomplete="videoname" autofocus>

                                         @error('videoname')
                                                <span class="invalid-feedback" role="alert" >
                                                <strong>
                                                    {{message}}
                                                    </strong>
                                                </span>
                                         @enderror

                                    </div>
                                
                         </div>


                         <div class='form-group row'>
                            <label for="videourl" class='col-md-4 col-form-label text-md-right' >
                                {{__('URL of the Video')}}</label>
                                 <div class='col-md-6' >
                                        <input type="text" id='videourl' class='form-control
                                         @error("videourl") is-invalid @enderror' name="videourl" value="{{old('videourl')}}" required autocomplete="videourl" autofocus>

                                         @error('videourl')
                                                <span class="invalid-feedback" role="alert" >
                                                <strong>
                                                    {{message}}
                                                    </strong>
                                                </span>
                                         @enderror

                                    </div>
                                
                         </div>

                         <div class='form-group row'>
                            <label for="videodescr" class='col-md-4 col-form-label text-md-right' >
                                {{__('Short Description of the Video')}}</label>
                                 <div class='col-md-6' >
                                        <input type="text" id='videodescr' class='form-control
                                         @error("videodescr") is-invalid @enderror' name="videodescr" value="{{old('videodescr')}}" required autocomplete="videodescr" autofocus>

                                         @error('videodescr')
                                                <span class="invalid-feedback" role="alert" >
                                                <strong>
                                                    {{message}}
                                                    </strong>
                                                </span>
                                         @enderror

                                    </div>
                                
                         </div>


                         <div class='form-group row'>
                            <label for="videocat" class='col-md-4 col-form-label text-md-right' >
                                {{__('Category of the Video')}}</label>
                                 <div class='col-md-6' >
                                        <input type="text" id='videocat' class='form-control
                                         @error("videocat") is-invalid @enderror' name="videocat" value="{{old('videocat')}}" required autocomplete="videocat" autofocus>

                                         @error('videocat')
                                                <span class="invalid-feedback" role="alert" >
                                                <strong>
                                                    {{message}}
                                                    </strong>
                                                </span>
                                         @enderror

                                    </div>
                                
                         </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Video') }}
                                </button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>

@endsection