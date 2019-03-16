@extends('layouts.master.master')

@section('title')
    Admin Dashboard
@endsection


@section('content')
<div class="row">

                         <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        U
                                    </div>
                                    <p class="card-category">All Users</p>
                                    <h3 class="card-title">{{$users}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="/admin/users">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        G
                                    </div>
                                    <p class="card-category">All Guides</p>
                                    <h3 class="card-title">{{$guides}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats"> 
                                        <a href="/admin/users">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        T
                                    </div>
                                    <p class="card-category">All Tourist Areas</p>
                                    <h3 class="card-title">{{$tours}}
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <a href="/admin/tours">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        B
                                    </div>
                                    <p class="card-category">All Bookings</p>
                                    <h3 class="card-title">{{$bookings}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="/admin/bookings">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>

    </div>

@endsection
