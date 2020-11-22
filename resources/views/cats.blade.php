@extends('layouts.app')


 


<div class='container'>
    <div class='row justify-content-center'>
        <div class='col-md-12 col-lg-12 col-sm-12'>
            <div class="card">
                <div class="card-header">
                    The list of videos we haveideos
                </div>
                <div class='card-body'>
                    <div class="row">

                    @foreach ($cats as $cat)

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate"
                            data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <h3>{{$cat->category_name}}</h3>

                            </div>
                        </div>
                          @endforeach
 </div>
                  