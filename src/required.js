document.getElementById('score_ecoindex').addEventListener('input', function() {
    var isScoreEcoindexFilled = this.value !== '' || this.value !== null;
    document.getElementById('poids').required = isScoreEcoindexFilled;
    document.getElementById('complexite').required = isScoreEcoindexFilled;
    document.getElementById('requetes').required = isScoreEcoindexFilled;
});

//si tous les champs sont vides, refuse la soumission
document.getElementById('form').addEventListener('submit', function(event) {
    var isScoreEcoindexEmpty = document.getElementById('score_ecoindex').value == '' || document.getElementById('score_ecoindex').value == null;
    var isPoidsEmpty = document.getElementById('poids').value == '' || document.getElementById('poids').value == null;
    var isComplexiteEmpty = document.getElementById('complexite').value == '' || document.getElementById('complexite').value == null;
    var isRequetesEmpty = document.getElementById('requetes').value == '' || document.getElementById('requetes').value == null;
    var isGtmetrixEmpty = document.getElementById('score_gtmetrix').value == '' || document.getElementById('gtmetrix').value == null;

    if (isScoreEcoindexEmpty && isPoidsEmpty && isComplexiteEmpty && isRequetesEmpty && isGtmetrixEmpty) {
        alert('Veuillez remplir au moins un champ');
        event.preventDefault();
    }
});



/*gtmetrixSection.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', () => {
        // Rendez les autres champs de cette section obligatoires
        gtmetrixSection.querySelectorAll('input').forEach(otherInput => {
            if (otherInput !== input) {
                otherInput.required = true;
            }
        });
    });
});

*/