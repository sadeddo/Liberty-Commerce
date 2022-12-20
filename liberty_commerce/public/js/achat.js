
var i = 0;
let current_cart =  {
    count: 0,
    produits: []
};

function display_cart_logo(){
    const div = document.querySelector("#cart_logo").innerHTML = "Panier: " + current_cart.count;
}
function test(id,name,price,stock){
if (stock>0){
    buy(id, name, price, stock);
    stock--;
    console.log(stock);
    
}
else {
    alert('erreur')
}
}
function buy(id, name, price, stock){
    
        let was_found = false;
        const a = parseFloat(price);
        current_cart.produits.forEach((produit) => { 
            if(produit.id === id){
                
                produit.quantity++;
                //produit.price = parseFloat(produit.price )+parseFloat(a) ;
                was_found=true;
            }
            produit.stock--;
        });
        
        if (!was_found) {
            current_cart.produits.push({id: id, name: name, price: price, quantity: 1,stock: stock})
        }
        current_cart.count++;
        

        display_cart_logo();
        save_cart(); 
    
}


function save_cart(){
    localStorage.setItem('current_cart', JSON.stringify(current_cart));
}
function load_cart(){
    const saved_cart = JSON.parse(localStorage.getItem('current_cart'));
    if (saved_cart !== undefined && saved_cart !== null) {
        current_cart = saved_cart;
        display_cart_logo();
    }
    
}

load_cart();


function display_cart(){
   
    var total=0;
    
    const cart_content = document.querySelector('#cart_content');
    current_cart.produits.forEach((produit) => {
        var totalproduit= produit.quantity*produit.price;
        cart_content.innerHTML += "<tr><td>"
        +produit.name+ "</td><td>"
        +produit.price+"€"+ "</td><td>"
        +produit.quantity+"</td><td>"
        +produit.stock+"</td><td>"
        +totalproduit+"€"+"</td></tr>";
    
        total=total+totalproduit;
    });
    
    document.querySelector('#prixTotal').innerHTML = total + "€";
    
}
function quantity(){
    
    current_cart.produits.forEach(produit => {
        var prix = parseInt(produit.price)*parseInt(produit.quantity);
    });
}

