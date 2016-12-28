@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Modificar vacaciones</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action='{{url("/vacaciones/update/{$datos->id}")}}' method="post">
                      {{ csrf_field() }}
                      @include('holidays.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
