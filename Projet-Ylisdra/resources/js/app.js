require('./bootstrap');

//compare la catégorie contenu dans le html à la catégorie récupérer dans le hash
function applyFilter(categorie){
    let cards = document.getElementById('cards');
    for(let images of cards.children){
        if(images.dataset.categorie === categorie || categorie == ""){
            images.hidden = false;
        } else {
            images.hidden = true;
        }
        
    }
}

//récupère le hash dans l'url en enlevant le "#" pour récupérer la catégorie et actionne la fonction applyFilter
function windowFilter(){
    let cat = window.location.hash.substring(1);
    applyFilter(cat);
}

//déclenche la fonction windowFilter au moment où le hash change
windowFilter();
window.addEventListener("hashchange", windowFilter);