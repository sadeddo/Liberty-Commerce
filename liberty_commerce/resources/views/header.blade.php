
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/logo.jpg')}}">
        <link href="{{asset('css/header.css')}}" rel="stylesheet">
        <title>Header</title>
        <meta charset = "utf-8">
    </head>
    <header> 
        <div class="bg">
                <div class="Am">
                    <img src="{{asset('img/logo.jpg')}}" class="logo">
                    <h2 class=name>Shop To CoOk</h2>
                </div> 
                <div>       
                @auth 
                
                    <nav>
                        <ul>
                            <il><a href="catalogue">Africain</a></il>
                            <il><a href="catalogue">Asiatique</a></il>
                            <il><a href="catalogue">Oriental</a></il>
                            <il><a href="catalogue">Italien</a></il>
                            <il><a href="catalogue">Occidental</a></il>
                        
                        </ul>
                    </nav>  
                </div>

                @can('access-admin')
                <button href='/admin1'>page admin</button>
                @endcan
                
                    <button onclick="window.location='panier1'"class="text-muted" id="cart_logo">Panier: 0</button>
                    <div>
                        <button>{{  Auth::user()->name}}</button>
                        <form method="POST" action="{{ route('logout') }}" class="button">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                        @endauth
                        @guest
                            <button onclick="window.location='login'">connexion</button>
                            <button onclick="window.location='register'">inscription</button>
                        @endguest
                    </div>
                    <script src="{{asset('js/achat.js')}}"></script>
            </div>
    </header> 
</html>
