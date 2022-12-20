<!DOCTYPE html>
  <html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/logo.jpg')}}">
        <link href="{{asset('css/catalogue.css')}}" rel="stylesheet">
        <title>Register</title>
        <meta charset = "utf-8">
        <script src="{{asset('js/produit.js')}}"></script> 
    </head>
    @include('header')
    <div class="header">
     <body>
            <h1>produit</h1>
            <div class="main">
			<div>{{ $produit->description }}</div>
			
			<div>	
				<p>Commander <strong>Une box {{ $produit->name }}</strong></p>
                    <div class="produit">
                        <img src="{{ asset('/img/'.$produit->image)}}" alt="Card image cap">
                        <div class="produit_header">
                            <h3 class="titre">{{ $produit->name }}</h3>
                            <h3 class="price">{{ $produit->price}}€</h3>
                        </div>
						<form action="{{ route('panier.store') }}" method="PUT">
                            @csrf
                            <input id="idproduit" type="hidden" name="id" value="{{ $produit->id }}">
                            
                            <button onclick="save()" class="btn btn-dark">Ajouter au panier</button>
                        </form>
                @can('access-admin')

                        <form action="/produit"  method="put" >
                            @csrf
                            <input type="hidden" name="id" value="{{$produit->id}}">
                            <label>Stock: </label><input type="number" size="10" maxlength="40" name="stock" autofocus>
                            <button type="sumbit">Confirmation</button>
                        </form>   
                    
                @endcan
                <!--s@if (count($user->groupe) === 'admin')
                    <form action="{s{ route('produit.update', $produit->id)}}" method="post">
                    s@csrf
                    s@method('PUT')
                        <input type="number" name="stock" value="{s{ $produit->stock}}">
                        <button type="submit" class="btn btn-dark">Editer</button>
                    </form>
                s@endif-->
            </div>
     </body>
    </div>
</html>