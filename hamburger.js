function changeMenu() {
    if(document.getElementById("menu").style.display === "block") {
        document.getElementById("menu").style.display = "none";
    } else {
        document.getElementById("menu").style.display = "block";
    }
}

function childrenBelow(id) {
    if(document.getElementById(id).style.display === "block") {
        document.getElementById(id).style.display = "none";
    } else {
        document.getElementById(id).style.display = "block";
    }
}

function clickOutside() {
    var nav = document.getElementById("nav");
    window.onclick = function(event) {
        if(event.target == nav) {
            document.getElementById("menu").style.display = "none";
        }
    }
}
