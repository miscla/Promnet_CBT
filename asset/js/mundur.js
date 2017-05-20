var MAX_COUNTER =7200;
var counter = null;
var counter_interval = null;

function setCookie(name,value,days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires="+date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return null;
}

function deleteCookie(name) {
    setCookie(name,"",-1);
}

function resetCounter() {
    counter = MAX_COUNTER;
}

function stopCounter() {
    window.clearInterval(counter_interval);
    deleteCookie('counter');
}

function updateCounter() {
    var msg = '';
    if (counter > 0) {
        counter -= 1;
        msg = counter;
        setCookie('counter', counter, 1);
    }
    else {
        msg = "Counting finished.";
        stopCounter();
    }
    var el = document.getElementById('counter');
    if (el) {
        el.innerHTML = msg;
    }
}

function startCounter() {
    stopCounter();
    counter_interval = window.setInterval(updateCounter, 1000);
}

function init() {
    counter = getCookie('counter');
    if (!counter) {
        resetCounter();
    }
    startCounter();
}

init();


