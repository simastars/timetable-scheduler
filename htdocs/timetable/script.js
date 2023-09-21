let elementsArray = document.querySelectorAll("td");

elementsArray.forEach(function(elem) {
    elem.addEventListener("keyup", function() {
        alert("h")
    });
    
    elem.setAttribute("contenteditable", "true")
});
