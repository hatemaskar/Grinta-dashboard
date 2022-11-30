var phpNumber = {number:0},
    phpNumberDisplay = document.getElementById("php-numbers");

var tween = TweenLite.to(phpNumber, 1, {number:'$userNumber', onUpdate:shownumber})

function shownumber (){
    phpNumberDisplay.innerHTML = anim.number.toFixed(0);
}

// OnClick functions to show data-area according menu
function showPlayers() {  //Players in menu
    var usernames = document.getElementById('player-data');
    if (usernames.style.display === 'none') {
        usernames.style.display = 'block';
    }
    else {
        usernames.style.display = 'none';
    }
}