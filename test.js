// Fonction pour mettre à jour le titre de la page
function updatePageTitle() {
    // Vérifier si la page est cachée
    if (document.hidden) {
        document.title = "Come back 😢";
    } else {
        // Si la page est affichée, restaurer le titre par défaut
        document.title = "Page login";
    }
}

// Ajouter un écouteur d'événement pour l'événement visibilitychange
document.addEventListener('visibilitychange', updatePageTitle);

// Appeler la fonction pour mettre à jour le titre lors du chargement initial de la page
updatePageTitle();

document.addEventListener("DOMContentLoaded", function () {
    const body = document.getElementById('page-body'); // Sélection de la balise body
    const toggleCheckbox = document.querySelector('.toggle-checkbox');
    const textElements = document.querySelectorAll('.text-to-change'); // Sélection de tous les éléments de texte à modifier
    const rectangle = document.querySelector('.rectangle'); // Sélection du rectangle
    const bouton = document.querySelector('.btn'); // Sélection du bouton
    const text = document.querySelector('.text'); // Sélection de tous les éléments de texte à modifier
    const passwordInput = document.querySelector('input[type="password"]'); // Sélection de l'input de type password
    const hotlineText = document.querySelector('.hotline-text'); // Sélection de l'élément de texte contenant la hotline

    toggleCheckbox.addEventListener('change', function () { // Ajout d'un gestionnaire d'événements pour le changement de la case à cocher
        if (toggleCheckbox.checked) { // Si la case est cochée
            body.style.backgroundColor = 'black'; // Changement de la couleur de fond de la page en noir
            textElements.forEach(function (element) { // Parcours de tous les éléments de texte à modifier
                element.style.color = 'black'; // Changement de la couleur du texte en blanc
            });
            rectangle.style.backgroundColor = 'white'; // Changement de la couleur du rectangle en blanc
            bouton.style.backgroundColor = 'black'; // Changement de la couleur du bouton en noir
            bouton.style.color = 'white'; // Changement de la couleur du texte du bouton en blanc
            bouton.querySelector('span').style.color = 'white'; // Changement de la couleur du texte à l'intérieur du bouton en blanc
            document.querySelectorAll('.input').forEach(function(input) { // Modification de la couleur des barres blanches sous les champs "Email" et "Password"
                input.style.borderBottomColor = 'black'; // Changement de la couleur des barres en noir
                input.style.color = 'black'; // Changement de la couleur du texte saisi en noir
            });
            hotlineText.style.color = 'white'; // Changement de la couleur du texte de la hotline en blanc
        } else {
            body.style.backgroundColor = 'white'; // Sinon, changement de la couleur de fond de la page en blanc
            textElements.forEach(function (element) { // Parcours de tous les éléments de texte à modifier
                element.style.color = 'white'; // Changement de la couleur du texte en noir
            });
            rectangle.style.backgroundColor = 'black'; // Changement de la couleur du rectangle en noir
            bouton.style.backgroundColor = 'white'; // Changement de la couleur du bouton en blanc
            bouton.style.color = 'black'; // Changement de la couleur du texte du bouton en noir
            bouton.querySelector('span').style.color = 'black'; // Changement de la couleur du texte à l'intérieur du bouton en noir
            document.querySelectorAll('.input').forEach(function(input) { // Modification de la couleur des barres blanches sous les champs "Email" et "Password"
                input.style.borderBottomColor = 'white'; // Changement de la couleur des barres en blanc
                input.style.color = 'white'; // Changement de la couleur du texte saisi en noir
            });
            hotlineText.style.color = 'black'; // Changement de la couleur du texte de la hotline en noir
        }
    });
});
