// Fonction pour lire un cookie
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) {
        return decodeURIComponent(parts.pop().split(";").shift());
    }
    return null;
}

// Fonction pour définir un cookie avec une durée de vie de 2 semaines
function setCookie(name, value, days = 14) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = `${name}=${encodeURIComponent(
        value
    )}; expires=${date.toUTCString()}; path=/`;
}

// Récupère les IDs stockés dans le cookie et les convertit en tableau
function getStoredIds() {
    const storedIds = getCookie("compareIds");
    return storedIds ? JSON.parse(storedIds) : [];
}

// Stocke le tableau d'IDs dans le cookie
function storeIds(ids) {
    setCookie("compareIds", JSON.stringify(ids));
}

function Check_exist(id) {
    $.ajax({
        url: "check_exist_appartement",
        type: "GET",
        data: {
            id: id,
        },
        success: function (data) {
            if (!data.exist) {
                //rettirer l'id du tableau
                const compareIds = getStoredIds();
                compareIds.splice(compareIds.indexOf(id), 1);
                storeIds(compareIds);
                updateCompareCount();
            }
        },
        error: function (xhr, status, error) {
            console.log("Erreur lors de la recherche : " + error);
        },
    });
}

// Met à jour l'affichage du nombre total d'IDs dans la comparaison
function updateCompareCount() {
    const compareIds = getStoredIds();
    const total = compareIds.length;
    if (total > 0) {
        compareIds.forEach(function (id) {
            Check_exist(id);
        });
        $("#count-total-compare").text(total);
        $("#compare-btn").removeClass("d-none");
    } else {
        $("#compare-btn").addClass("d-none");
    }
}

// Au chargement de la page
$(document).ready(function () {
    // Initialise l'affichage du nombre d'éléments dans la comparaison
    updateCompareCount();

    // Gère l'ajout ou la suppression d'un ID au clic
    $(".btn-add-compare").on("click", function () {
        const id = $(this).data("id");
        let compareIds = getStoredIds();

        // Vérifie si l'ID est déjà dans le tableau
        if (compareIds.includes(id)) {
            // Retire l'ID du tableau
            compareIds = compareIds.filter((item) => item !== id);
            //alert(`L'ID ${id} a été retiré de la comparaison.`);
        } else {
            // Ajoute l'ID au tableau
            compareIds.push(id);
            //alert(`L'ID ${id} a été ajouté à la comparaison.`);
        }

        // Met à jour le cookie avec le tableau modifié et l'affichage
        storeIds(compareIds);
        updateCompareCount();
    });

    $("#compare-btn").on("click", function () {
        let compareIds = getStoredIds();
        if (compareIds.length > 0) {
            const idsParam = compareIds.join(",");
            const url = `/compare?ids=${idsParam}`;
            window.location.href = url;
        }
    });
});
