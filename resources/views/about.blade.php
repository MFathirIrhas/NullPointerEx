@extends('footer')
@extends('bodyhome')
@extends('head')

@section('content')
<div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
            </br>
            </br>
                <h1 class="page-header"><font color="white"> About</font>
                    
                </h1>
                <p><font color="white">This Blogs site just for sharing and free. Everything you shared are your own responsibility for its originality. Feel free to share.</font></p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><font color="white">About Author</font></h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="/img/fbpp.PNG" alt="">
                <h3><font color="white">Muhammad Fathir Irhas</font>
                     <small>NullPointerEx Author</small> 
                </h3>
                <!--<a href="">Contact Me &raquo</a> </br>-->
                <a target="_blank" href="https://github.com/MFathirIrhas">Follow Me On Github &raquo</a> </br>
                <a target="_blank" href="https://id.linkedin.com/in/muhammad-fathir-irhas-05938791">View Me On Linkedin &raquo</a>
            </div>
            
            <div class="col-lg-4 col-sm-6 text-center">
                <!--<img class="img-circle img-responsive img-center" src="/img/fbpp.PNG" alt="">-->
                <h3><font color="white">About Me</font>
                </br>
                     <small>Biasa dipanggil Fathir, lahir di Duri, 12 Januari 1995. ablablablablab.................</small> 
                </h3>
                
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12">
            </br>
            </br>
                <h1 class="page-header"><font color="white"> Contact Me</font>
                    
                </h1>
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
            </div>
        </div>
        <hr>
    </div>

@endsection