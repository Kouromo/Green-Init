function isOneElementOfTheClassIsNotEmpty(className) {
    var elements = document.getElementsByClassName(className);
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].value !== '' && elements[i].value !== null) {
            return true;
        }
    }
    return false;
}

function isEveythingEmpty(className) {
    var elements = document.getElementsByClassName(className);
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].value !== '' && elements[i].value !== null) {
            return false;
        }
    }
    return true;
}

var pageSpeedElements = document.getElementsByClassName('ecoIndex');
for (var i = 0; i < pageSpeedElements.length; i++) {

    pageSpeedElements[i].addEventListener('input', function() {
        var isOneNotEmpty = isOneElementOfTheClassIsNotEmpty('ecoIndex');
        document.getElementById('score_ecoindex').required = isOneNotEmpty;
        document.getElementById('poids').required = isOneNotEmpty;
        document.getElementById('complexite').required = isOneNotEmpty;
        document.getElementById('requetes').required = isOneNotEmpty;
    });
    
    pageSpeedElements[i].addEventListener('input', function() {
        var isEverythingEmpty = isEveythingEmpty('ecoIndex');
        if(isEverythingEmpty){
            document.getElementById('score_ecoindex').required = false;
            document.getElementById('poids').required = false;
            document.getElementById('complexite').required = false;
            document.getElementById('requetes').required = false;
        }
    });
}

var pageSpeedElements = document.getElementsByClassName('pageSpeed');
for (var i = 0; i < pageSpeedElements.length; i++) {

    pageSpeedElements[i].addEventListener('input', function() {
        var isOneNotEmpty = isOneElementOfTheClassIsNotEmpty('pageSpeed');
        document.getElementById('performances').required = isOneNotEmpty;
        document.getElementById('accessibilite').required = isOneNotEmpty;
        document.getElementById('bonnes_pratique').required = isOneNotEmpty;
        document.getElementById('SEO').required = isOneNotEmpty;
    });
    
    pageSpeedElements[i].addEventListener('input', function() {
        var isEverythingEmpty = isEveythingEmpty('pageSpeed');
        if(isEverythingEmpty){
            document.getElementById('performances').required = false;
            document.getElementById('accessibilite').required = false;
            document.getElementById('bonnes_pratique').required = false;
            document.getElementById('SEO').required = false;
        }
    });
}


document.getElementById('form').addEventListener('submit', function(event) {
    if (isEveythingEmpty('ecoIndex') && isEveythingEmpty('pageSpeed')) {
        alert('Veuillez remplir au moins un champ');
        event.preventDefault();
    }
});
