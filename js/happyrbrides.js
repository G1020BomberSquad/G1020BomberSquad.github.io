function addItem(){
    var ul = document.getElementById("wensenLijst");
    var candidate = document.getElementById("wens");
    var li = document.createElement("li");
    li.setAttribute('id',candidate.value);
    li.appendChild(document.createTextNode(candidate.value));
    ul.appendChild(li);
}

function removeItem(){
    var ul = document.getElementById("wensenLijst");
    var candidate = document.getElementById("wens");
    var item = document.getElementById(candidate.value);
    ul.removeChild(item);
}

function useStorage(){
    
}

document.body.onkeydown = function(addItem) {
    if (e.keyCode == 13)
        ul.appendChild(li);
};

