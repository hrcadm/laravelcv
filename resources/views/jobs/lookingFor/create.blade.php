@extends('layouts.master')
@section('active_page', 'What I\'m looking for [create]')
@section('content')

@if (session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        I'm looking for a job like this... 
        <div id="chars">0/10000 Characters</div>
    </div>

    <div class="panel-body">
        {!! Form::open(['route' => 'looking_for.store', 'method' => 'POST']) !!}
			{{ Form::label('description', 'Description',['class' => 'form-label']) }}
			{{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'descInput']) }}
			{{ Form::submit('Submit', ['class' => 'form-control btn btn-success']) }}
        {!! Form::close() !!}
    </div>
</div>

@endsection

@section('javascripts')
<script>
	$(document).ready(function(){
		$('textarea#descInput').on('keyup',function(){
		   var charCount = $(this).val().length;
			$("#chars").text(charCount + "/10000 Characters");
		});
	});
</script>
@endsection