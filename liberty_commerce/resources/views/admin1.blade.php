<!DOCTYPE html>
  <html>
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/chapeau.jpg')}}">
        <link href="{{asset('css/admin.css')}}" rel="stylesheet">
        <title>Admin</title>
        <meta charset = "utf-8">
    </head>
    <body>
        @include('header')
        <div class=header>
        
            <h1 class=titre>Page admin</h1>
        </div>
        <div id="cat_count"></div>
        <button onclick="get_count()">Refresh</button>
        <div id="count"></div>
        <button onclick="get_count_auth()">Refresh</button>

        <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="a">
                        <h2 class="stitre">Ajouter un article</h2>
                        <div class="b">
                            <label>Nom de l'article:</label><br>
                            <input type="text" name="name" required><br>
                            <label>image:</label><br>
                            <input type="file" id="image" name="image" required ><br>
                            <label for="price">Prix:</label><br>
                            <input type="number" id="price" name="price" step="any"required><br>
                            <label for="stock">Stock:</label><br>
                            <input type="number" id="stock" name="stock" step="any"required><br>
                            <label>description:</label><br>
                            <input type="text" id="description" name="description" required><br>
                            <button type="submit" value="ajouter">ajouter</button>
                            <br><br>
                        </div>
                    </div>
        </form>
        <script src="{{asset('js/admin.js')}}"></script>
    </body> 
    @include('footer')   
 </html>