@extends('layouts.master.master')

@section('title')
    Admin Dashboard
@endsection


@section('content')
<div class="row">
	<div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">All Feedbacks</h4>
            </div>
            <div class="card-body">
                        <div class="row">
                            @foreach ($feedbacks as $feedback)
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        <a class="float-left" href="#"><strong>{{ $feedback->user }}</strong></a>
                                                        @for($i=0; $i<$feedback->rate; $i++)
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                        @endfor
                                                </p>
                                                <div class="clearfix"></div>
                                                    <p>
                                                        {{ $feedback->feedback }}
                                                        <br>

                                                    <span class="text-secondary float-right">{{\Carbon\Carbon::createFromTimeStamp(strtotime($feedback->created_at))->diffForHumans()}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div style="display:flex; justify-content:center">
                            {{$feedbacks->links()}}
                        </div>
            </div>
        </div>
    </div>
</div>

@endsection