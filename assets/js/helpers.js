String.prototype.replaceAt = function(index, replacement) {
    return this.substr(0, index) + replacement + this.substr(index + replacement.length);
}

String.prototype.toCapitalize = function() {
    let explode = this.split(' ');
    explode.forEach((e, i) => {
        explode[i] = e.charAt(0).toUpperCase() + e.slice(1);
    });

    return explode.join(' ');
}

function baseUrl(path = '') {
    var l = document.createElement("a");
    l.href = window.location.href;

    if (location.port !== '' && `${location.port}` != '80' && `${location.port}` != '443') {
        return `${location.protocol}//${l.hostname}:${location.port}/${path}`;
    }

    return `${location.protocol}//${l.hostname}/${path}`;
}