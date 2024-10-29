// Fonction pour lire un cookie
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

// Fonction pour définir un cookie avec une durée de vie de 2 semaines
function setCookie(name, value, days = 14) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
}

// Récupère les IDs stockés dans le cookie et les convertit en tableau
function getStoredIds() {
    const storedIds = getCookie('compareIds');
    //count total ids
    return storedIds ? JSON.parse(storedIds) : [];
}

// Stocke le tableau d'IDs dans le cookie
function storeIds(ids) {
    setCookie('compareIds', JSON.stringify(ids));
}

// Lorsque la page se charge, récupère les IDs existants
$(document).ready(function() {
    let compareIds = getStoredIds();
    total = compareIds.length;
    if(total>0){
        $("#count-total-compare").text(total);
        $("#compare-btn").removeClass("d-none");
    }else{
        $("#compare-btn").addClass("d-none");
    }


    // Ajoute un ID au tableau et au cookie, si pas déjà présent
    $('.btn-add-compare').on('click', function() {
        const id = $(this).data('id');

        // Ajoute uniquement si l'ID n'est pas déjà dans le tableau
        if (!compareIds.includes(id)) {
            compareIds.push(id);
            storeIds(compareIds); // Met à jour le cookie avec le nouveau tableau
            alert(`ID ${id} ajouté à la comparaison.`);
        } else {
            alert(`ID ${id} est déjà dans la comparaison.`);
        }
    });
});
