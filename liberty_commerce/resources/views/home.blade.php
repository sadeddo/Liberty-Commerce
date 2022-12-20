
    <!DOCTYPE html>
        <html>
            <head>
                <link rel="icon" type="image/jpg" sizes="16x16" href="{{asset('img/logo.jpg')}}">
                <link href="{{asset('css/home.css')}}" rel="stylesheet">
                <title>Home</title>
                <meta charset = "utf-8">
            </head>
            @include('header')
            <body>
                <body  onload="checkCookie()"></body>
                <script src="{{asset('js/cookies.js')}}"></script>
                    <div class="bgg">
                        <div class="transparent">
                            <h3>Bienvenue chez ShopToCook!</h3>
                            <p class="a">Voyagez a travers le monde en decrouvrant nos CoOkBox.</p>
                            <div class="b">
                                <p class="c">Voulez-vous decouvrir les recettes du monde? de L'Asie en Amerique en passant par l'Afrique et l'Occident, apprenez a cuisinier en commendant nos CoOkBox que vous receverez dans la journée.</p>
                                <p class="c">Le concept est simple, decouvrez nos CoOkBox, cliquez puis vous recevrez tous les ingrédients et la recette de chaque spécialité</p><br>
                            </div>
                        </div>
                    </div>
            </body>
            @include('footer')
        </html>
