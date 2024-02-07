function highlight(event) {
    event.preventDefault(); 
    var searchTerm = document.getElementById('searchInput').value;
    
    var elements = document.getElementsByTagName('p');
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        element.innerHTML = element.textContent;
    }
    
    var regex = new RegExp(searchTerm, 'gi');
    elements = document.getElementsByTagName('p');
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        element.innerHTML = element.innerHTML.replace(regex, function(match) {
            return '<span class="highlight" style="background-color: yellow;">' + match + '</span>';
        });
    }
    return false;
}
