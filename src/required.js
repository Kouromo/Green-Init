function isOneElementOfTheClassIsNotEmpty(className) {
    var elements = document.getElementsByClassName(className);
    for (var i = 0; i < elements.length; i++)
        if (elements[i].value !== '' && elements[i].value !== null) 
            return true;
    return false;
}

function isEveythingEmpty(className) {
    var elements = document.getElementsByClassName(className);
    for (var i = 0; i < elements.length; i++)
        if (elements[i].value !== '' && elements[i].value !== null)
            return false;
    return true;
}

var ecoIndexElements = document.getElementsByClassName('ecoIndex');
for (var i = 0; i < ecoIndexElements.length; i++) {

    ecoIndexElements[i].addEventListener('input', function() {
        var isOneNotEmpty = isOneElementOfTheClassIsNotEmpty('ecoIndex');
        document.getElementById('score_ecoindex').required = isOneNotEmpty;
        document.getElementById('poids').required = isOneNotEmpty;
        document.getElementById('complexite').required = isOneNotEmpty;
        document.getElementById('requetes').required = isOneNotEmpty;
    });
    
    ecoIndexElements[i].addEventListener('input', function() {
        var isEverythingEmpty = isEveythingEmpty('ecoIndex');
        if(isEverythingEmpty){
            document.getElementById('score_ecoindex').required = false;
            document.getElementById('poids').required = false;
            document.getElementById('complexite').required = false;
            document.getElementById('requetes').required = false;
        }
    });
}


document.getElementById('form').addEventListener('submit', function(event) {
    if (isEveythingEmpty('ecoIndex') && isEveythingEmpty('GTmetrix')) {
        alert('Veuillez remplir au moins un champ');
        event.preventDefault();
    }
});
