@extends('layouts.master.master')

@section('title')
    Edit Profile
@endsection


@section('content')

<div class="row">

	<div class="col-md-12">

		@include('errors')

@if(isset($tours))
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">All Tourist Areas</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                                        <table class="table" id="tours" width="100%">
                                            <thead class=" text-primary">
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    City
                                                </th>
                                                <th>
                                                	Country
                                                </th>
                                                <th>
                                                	Created At
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </thead>
                                            <tbody>

                                                @foreach($tours as $m)

                                                <tr>
                                                    <td>
                                                        {{$m->title}}
                                                    </td>
                                                    <td>
                                                        {{$m->description}}
                                                    </td>
                                                    <td>
                                                        {{$m->city}} 
                                                    </td>
                                                    <td>
                                                        {{$m->country}} 
                                                    </td>
                                                    <td>
                                                    	{{ $m->created_at}}
                                                    </td>

                                                    <td>
                                                        <a href="/admin/deletetours/{{$m->id}}" class="btn btn-danger ">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>

                                    </div>
            </div>
        </div>
@endif
@if(isset($users))
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">All Users</h4>
            </div>
            <div class="card-body">
                
            <div class="table-responsive">
                                        <table class="table" id="users" width="100%">
                                            <thead class=" text-primary">
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Type
                                                </th>
                                                <th>
                                                    City
                                                </th>
                                                <th>
                                                	Country
                                                </th>
                                                <th>
                                                	Languages
                                                </th>
                                                <th>
                                                	Created At
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </thead>
                                            <tbody>

                                                @foreach($users as $m)
                                                <tr>
                                                    <td>
                                                        {{$m->name}}
                                                    </td>
                                                    <td>
                                                        {{$m->email}}
                                                    </td>
                                                    <td>
                                                        {{$m->role}}
                                                    </td>
                                                    <td>
                                                        {{$m->city}} 
                                                    </td>
                                                    <td>
                                                        {{$m->country}} 
                                                    </td>
                                                    <td>
                                                        {{$m->language}} 
                                                    </td>
                                                    <td>
                                                    	{{ $m->created_at}}
                                                    </td>
                                                    <td>
                                                        @if($m->role == 'guide')
                                                            <a href="#" data-toggle="modal" data-target="#m{{$m->id}}" class="btn btn-info ">
                                                                Detail
                                                            </a>
                                                        @endif
                                                        @if($m->role == 'user')
                                                            <a href="/admin/deleteuser/{{$m->id}}" class="btn btn-danger ">
                                                                Delete
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <!-- Modal -->
                                                <div class="modal fade" id="m{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Full Detail of {{$m->name}}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @if(isset($m->guideProfile))
                                                                    <p>Rate Per Day : {{$m->guideProfile->rate_per_day}}</p>
                                                                    <p>Availability Status : {{$m->guideProfile->availability_status}} </p>
                                                                    <p>Certificate : <img src="{{asset('images/certificates').'/'.$m->guideProfile->certificate_image}}"></p>
                                                                    <p> Skill and Experiences: </p>
                                                                    {!! html_entity_decode($m->guideProfile->skill_experience) !!}
                                                                @endif
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>

                                    </div>
                </div>
            </div>
        </div>
@endif
@if(isset($bookings))
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">All Bookings</h4>
            </div>
            <div class="card-body">
                
            <div class="table-responsive">
                                        <table class="table" id="bookings" width="100%">
                                            <thead class=" text-primary">
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    City
                                                </th>
                                                <th>
                                                	Country
                                                </th>
                                                <th>
                                                	Created At
                                                </th>
                                            </thead>
                                            <tbody>

                                                @foreach($bookings as $m)

                                                <tr>
                                                    <td>
                                                        {{$m->title}}
                                                    </td>
                                                    <td>
                                                        {{$m->description}}
                                                    </td>
                                                    <td>
                                                        {{$m->city}} 
                                                    </td>
                                                    <td>
                                                        {{$m->country}} 
                                                    </td>
                                                    <td>
                                                    	{{ $m->created_at}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>

                                    </div>
                    </div>
            </div>
        </div>
@endif
    </div>
</div>



<script>
$(document).ready(function() {
    $('#tours').DataTable({"pagingType": "full_numbers"});
    $('#users').DataTable({"pagingType": "full_numbers"});
    $('#bookings').DataTable({"pagingType": "full_numbers"});
} );

</script>
@endsection