@extends('footer')
@extends('body2')
@extends('head')

@section('content')
<h1><font color="white">Contact Me:</font></h1>
@if(Session::has('message'))
    <div>
        {{ Session::pull('message') }}
    </div>
@endif
@if(! $errors->isEmpty())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
{!! Form::open(array('route' => 'contact')) !!}

<div class="form-group">
    <!--{!! Form::label('Your Name') !!}-->
    {!! Form::text('name', null, 
        array('required', 
              'placeholder'=>'Your name',
              'class' => 'form-control')) !!}
</div>

<div class="form-group">
    <!--{!! Form::label('Your E-mail Address') !!}-->
    {!! Form::text('email', null, 
        array('required',
              'placeholder'=>'Your e-mail address',
              'class' => 'form-control')) !!}
</div>

<div class="form-group">
    <!--{!! Form::label('Your Message') !!}-->
    {!! Form::textarea('message', null, 
        array('required', 
              'placeholder'=>'Your message',
              'class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Send Message', array('class' => 'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
@endsection