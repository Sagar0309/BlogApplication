@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


{!! Form::model($post ,[ 'method'=>'PUT', 'route'=>['update', $post->id] ]) !!}
  {{ csrf_field() }}
  <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
  {!! Form::label('title') !!} 
  {!! Form::text('title', null, ['class'=>'form-control']) !!} 
  @if($errors->has('title'))
  <span class="help-block">{{ $errors->first('title') }}</span> 
  @endif
  </div>

  <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
  {!! Form::label('slug') !!} {!! Form::text('slug', null, ['class'=>'form-control']) !!} 
  @if($errors->has('slug'))
  <span class="help-block">{{ $errors->first('slug') }}</span>
  @endif
  </div>

  <div class="form-group excerpt">
  {!! Form::label('excerpt') !!} 
  {!! Form::textarea('excerpt', null, ['class'=>'form-control']) !!}
  </div>

  <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }} ">
  {!! Form::label('body') !!} 
  {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
   @if($errors->has('body'))
  <span class="help-block">{{ $errors->first('body') }}</span>
  @endif
  </div>

  <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
  {!! Form::select('category_id', App\Category::pluck('name','id'), null, ['class'=>'form-control', 'placeholder'=>'Choose category']) !!} 
  @if($errors->has('category_id'))
  <span class="help-block">{{ $errors->first('category_id') }}</span> 
  @endif
  </div>
  
  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
  {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
  </div>
  {!! Form::close() !!}



</div>
            </div>
        </div>
    </div>
</div>

@endsection