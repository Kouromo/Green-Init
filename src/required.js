// Sélectionnez les éléments du formulaire
const form = document.querySelector('form');
const ecoindexSection = document.querySelector('.ecoIndex');
const gtmetrixSection = document.querySelector('.GTmetrix');

// Ajoutez des écouteurs d'événements sur les champs de formulaire dans chaque section
ecoindexSection.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', () => {
        // Rendez les autres champs de cette section obligatoires
        ecoindexSection.querySelectorAll('input').forEach(otherInput => {
            if (otherInput !== input) {
                otherInput.required = true;
            }
        });
    });
});

gtmetrixSection.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', () => {
        // Rendez les autres champs de cette section obligatoires
        gtmetrixSection.querySelectorAll('input').forEach(otherInput => {
            if (otherInput !== input) {
                otherInput.required = true;
            }
        });
    });
});
