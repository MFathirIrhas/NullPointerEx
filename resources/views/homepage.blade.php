@extends('footer')
@extends('bodyhome')
@extends('head')

@section('content')
<a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        @if(Auth::guest())
                        <h1>NullPointerEx</h1>
                        <h3>Exception Cannot Stops You</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <!-- <a href="https://twitter.com/Udud_ulil" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a> -->
                                <a href="{{ url('/auth/login') }}" class="btn btn-default btn-lg"> <span class="network-name">Sign In</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/auth/register') }}" class="btn btn-default btn-lg"><span class="network-name">Join Me!</span></a>
                            </li>
                            <li>
                                
                                <a href="{{ url('/bloghome') }}" class="btn btn-default btn-lg"><span class="network-name">Blogs &raquo</span></a>
                            </li>
                        </ul>
                        @else
                        <h1>Welcome Back......</h1>
                        <h3>{{ Auth::user()->name }}</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            
                            <li>
                                <a href="{{ url('/user/'.Auth::id()) }}" class="btn btn-default btn-lg"><span class="network-name">My Profile</span></a>
                            </li>
                            <li>
                                
                                <a href="{{ url('/bloghome') }}" class="btn btn-default btn-lg"><span class="network-name">Blogs &raquo</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-lg"> <span class="network-name">Logout</span></a>
                            </li>
                        </ul>
                        
                        @endif
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    
   
@endsection