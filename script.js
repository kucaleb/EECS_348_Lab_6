function alert_paragraph_color() {
    var border_R = document.getElementById("border_R").value;
    var border_G = document.getElementById("border_G").value;
    var border_B = document.getElementById("border_B").value;
    var border_width = document.getElementById("border_width").value;
    var bg_R = document.getElementById("bg_R").value;
    var bg_G = document.getElementById("bg_G").value;
    var bg_B = document.getElementById("bg_B").value;

    var tag = document.getElementById("paragraph");
    tag.style.borderColor = `rgb(${border_R},${border_G},${border_B})`;
    tag.style.borderWidth = border_width
    tag.style.backgroundColor = `rgb(${bg_R},${bg_G},${bg_B})`;
}

function validate() {
    p1 = document.getElementById("pass1").value;
    p2 = document.getElementById("pass2").value;

    if (p1.length < 8) {
        alert("The length of 1 is not long enough");
    } else if (p2.length < 8) {
        alert("The length of 2 is not long enough");
    } else if (p1 != p2) {
        alert("The passwords do not match"); 
    } else {
        alert("Good (Change this alert)");
    }
}