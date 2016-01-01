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
                <a href="">Contact Me &raquo</a>
            </div>
            
            <div class="col-lg-4 col-sm-6 text-center">
                <!--<img class="img-circle img-responsive img-center" src="/img/fbpp.PNG" alt="">-->
                <h3><font color="white">About Me</font>
                </br>
                     <small>Biasa dipanggil Fathir, lahir di Duri, 12 Januari 1995. ablablablablab.................</small> 
                </h3>
                <a target="_blank" href="https://github.com/MFathirIrhas">Follow Me On Github &raquo</a>
            </div>
            
        </div>

        <hr>
    </div>

@endsection