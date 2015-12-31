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
                        <h1>Welcome!</h1>
                        <h3>Free Blogs For Anything</h3>
                        <hr class="intro-divider">
                        <h5>*This Site Is Still Under Construction</h5>
                        <h5>...But The Blog is working and free.</h5>
                        <!--<ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="{{ url('/auth/login') }}" class="btn btn-default btn-lg"> <span class="network-name">Sign In</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/auth/register') }}" class="btn btn-default btn-lg"><span class="network-name">Join Me!</span></a>
                            </li>
                            <li>
                                
                                <a href="{{ url('/bloghome') }}" class="btn btn-default btn-lg"><span class="network-name">Blogs &raquo</span></a>
                            </li>
                        </ul>-->
                        @else
                        <h1>Welcome Back......</h1>
                        <h3>{{ Auth::user()->name }}</h3>
                        <hr class="intro-divider">
                        <h5>*This Site Is Still Under Construction</h5>
                        <h5>...But The Blog is working and free.</h5>
                        <!--<ul class="list-inline intro-social-buttons">
                            
                            <li>
                                <a href="{{ url('/user/'.Auth::id()) }}" class="btn btn-default btn-lg"><span class="network-name">My Profile</span></a>
                            </li>
                            <li>
                                
                                <a href="{{ url('/bloghome') }}" class="btn btn-default btn-lg"><span class="network-name">Blogs &raquo</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-lg"> <span class="network-name">Logout</span></a>
                            </li>
                        </ul>-->
                        
                        @endif
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    
   
@endsection