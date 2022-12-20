<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" type="image/png" sizes="16x16" href="chapeau.jpg">
    <link href="{{asset('css/panier.css')}}" rel="stylesheet">
    <script src="{{asset('js/produit.js')}}"></script>
    <title>Panier</title>
    <meta charset = "utf-8">
  </head>
  <body>
    <button onclick="window.location='panier1'"class="text-muted" id="cart_logo">Panier: 0</button>
    <div class="titre">Panier</div>
    <div class="page">
        <div class="tableau" >
            <table id="cart_content">
                
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Nombre de produits voulus</th>
                    <th>Stock</th>
                    <th>Total</th>
                </tr>
                    
                
                
            </table>    
        </div>      
        <div class="Detail">
          
         
        
        <p class="text">
           <div class="Detail-header">
            <h3>Livraison:</h3>
            <h4>GRATUIT</h4>
           </div>
           <div class="Detail-header">
            <h3 >prix total:</h3>
           <h4 id="prixTotal" name="prixTotal"></h4>
            </div>
            <form action="{{ route('cart.checkout')}}" method="POST" >
                @csrf
                <h4 id="total" name="prixTotal" requered ></h4>
                <button type="submit">payer</button>
            </form><br><br>
            <p>Nous acceptons</p>
            <img alt="payment" src="{{asset('img/payment.jpg')}}"><br>
            <p>Les prix et les frais de livraison ne sont validés que durant la finalisation de la commande.</p>
        </p>
        </div>
    </div>
    <script src="{{asset('js/achat.js')}}"></script>
    <script>display_cart();</script>
  </body>
  <button onclick="window.location='catalogue'">retour a la page</button>
</html>