// Sélectionner les éléments
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var span = document.getElementsByClassName("close")[0];

// Ouvrir la fenêtre modale quand l'utilisateur clique sur le bouton
btn.onclick = function() {
    modal.style.display = "block";
}

// Fermer la fenêtre modale quand l'utilisateur clique sur la croix
span.onclick = function() {
    modal.style.display = "none";
}

// Fermer la fenêtre modale quand l'utilisateur clique en dehors de la fenêtre modale
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
