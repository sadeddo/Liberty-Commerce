

async function get_count(){
    await fetch('/bills/count')
     .then(response => response.text())
     .then(result => {
         document.querySelector('#cat_count').innerHTML = "Il y a eut " + result + " commandes";
         console.log(result);
 
     })
 
 }


 async function get_count_auth(){
    await fetch('/users/count')
     .then(responseb => responseb.text())
     .then(resultb => {
         document.querySelector('#count').innerHTML = "Il y a " + resultb + " utilisateur(s) connecté(s)";
        console.log(resultb);
 
     })
 
 }