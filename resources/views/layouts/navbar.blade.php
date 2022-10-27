<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
        
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div id="gtco-logo"><a href="/"><img src="{{asset('asset')}}/images/logo-travel.png" alt="image-travel" width="150px"> <em>.</em></a></div>
            </div>
            <div class="col-xs-8 text-right menu-1">
                <ul>
                    <li><a href="#destination">Destination</a></li>
                    <li class="has-dropdown">
                        <a href="#">Travel</a>
                        <ul class="dropdown">
                            <li><a href="#">SUMATRA</a></li>
                            <li><a href="#">JAWA</a></li>
                            <li><a href="#">KALIMANTAN</a></li>
                            <li><a href="#">BALI</a></li>
                            <li><a href="#">SULAWESI</a></li>
                            <li><a href="#">PAPUA</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Contact</a>
                        <ul class="dropdown">
                            <li><a href="https:wa.me/+6285159922605">Whatsapp</a></li>
                            <li><a href="#">Email</a></li>
                        </ul>
                    </li>
                    @auth
                    <li class="has-dropdown">
                        <a href="#"> {{ Auth::user()->name }}</a>
                        <ul class="dropdown">
                            @if (Auth::user()->role=='admin')
                            <li><a href="/dashboard">Dashboard</a></li>  
                            @endif
                           
                            <li><form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"> 
                                {{ __('Log Out') }}</a></li>
                        </ul>
                    </li>
                         <li>
                                
                            </form>
                        </li>
                    @endauth
                    @guest
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>  
                    @endguest
                    
                </ul>	
            </div>
        </div>
        
    </div>
</nav>