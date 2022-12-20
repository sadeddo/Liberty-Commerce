<!DOCTYPE html>
  <html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/logo.jpg')}}">
        <link href="{{asset('css/catalogue.css')}}" rel="stylesheet">
        <title>Register</title>
        <meta charset = "utf-8">
    </head>
    @include('header')
    <div class="header">
     <body>
        
            <h1>Catalogue</h1>
            <div class="main">
                @foreach ($produits as $produit)
                    <div class="produit1">
                        <img src="{{ asset('/img/'.$produit->image)}}" alt="Card image cap">
                        <div class="produit_header">
                            <h3 class="titre">{{ $produit->name }}</h3>
                            <h3 class="price">{{ $produit->price}}€</h3>
                        </div>

                        <form action="{{ route('panier.store') }}" method="PUT">
                            @csrf
                            <input type="hidden" name="id" value="{{ $produit->id }}">
                            <input type="hidden" name="name" value="{{ $produit->name }}">
                            <input type="hidden" name="price" value="{{ $produit->price }}">
                            <input type="hidden" name="stock" value="{{ $produit->stock }}">
                            <input type="hidden" name="image" value="{{ $produit->image }}">
                            <input type="hidden" name="description" value="{{ $produit->description }}">
                            
                            
                        </form><br><br>
                        <button type="submit" onclick="buy('{{$produit->id}}','{{$produit->name}}','{{$produit->price}}','{{$produit->stock}}')" class="btn btn-dark">Ajouter au panier</button>
                        <a href="produit/{{$produit->id}}" class="but">Detail</a>
                    </div><br><br>
                @endforeach
            </div>
            <script src="{{asset('js/achat.js')}}"></script>
            
     </body>
    </div>
</html>