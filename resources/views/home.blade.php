@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Добро пожаловать!</div>

                <div class="panel-body">
                    @if(Auth::user()->profile_type == 1)
                        @include('layouts.learner')
                    @else
                        @include('layouts.tutor')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
