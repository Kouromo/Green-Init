//************  Functions utilities

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

//************  Variables
var ecoIndexElements = document.getElementsByClassName('ecoIndex');
var pageSpeedElements = document.getElementsByClassName('pageSpeed');


//************  Events listeners
for (var i = 0; i < ecoIndexElements.length; i++) {
    // Put required attribute on the input fields if one of them is not empty
    ecoIndexElements[i].addEventListener('input', function() {
        var isOneNotEmpty = isOneElementOfTheClassIsNotEmpty('ecoIndex');
        var requiredElements = ['score_ecoindex', 'poids', 'complexite', 'requetes'];
        requiredElements.forEach(function(elementId) {
            document.getElementById(elementId).required = isOneNotEmpty;
        });
    });
    // Remove required attribute on the input fields if all of them are empty
    ecoIndexElements[i].addEventListener('input', function() {
        var isEverythingEmpty = isEveythingEmpty('ecoIndex');
        var requiredElements = ['score_ecoindex', 'poids', 'complexite', 'requetes'];
        if (isEverythingEmpty) {
            requiredElements.forEach(function(elementId) {
                document.getElementById(elementId).required = false;
            });
        }
    });
}

for (var i = 0; i < pageSpeedElements.length; i++) {
    // Put required attribute on the input fields if one of them is not empty
    pageSpeedElements[i].addEventListener('input', function() {
        var isOneNotEmpty = isOneElementOfTheClassIsNotEmpty('pageSpeed');
        var requiredElements = ['performances', 'accessibilite', 'bonnes_pratique', 'SEO'];
        requiredElements.forEach(function(elementId) {
            document.getElementById(elementId).required = isOneNotEmpty;
        });
    });
    // Remove required attribute on the input fields if all of them are empty
    pageSpeedElements[i].addEventListener('input', function() {
        var isEverythingEmpty = isEveythingEmpty('pageSpeed');
        var requiredElements = ['performances', 'accessibilite', 'bonnes_pratique', 'SEO'];
        if (isEverythingEmpty) {
            requiredElements.forEach(function(elementId) {
                document.getElementById(elementId).required = false;
            });
        }
    });
}

// Prevent form submission if all fields are empty
document.getElementById('form').addEventListener('submit', function(event) {
    if (isEveythingEmpty('ecoIndex') && isEveythingEmpty('pageSpeed')) {
        alert('Veuillez remplir au moins un champ');
        event.preventDefault();
    }
});
