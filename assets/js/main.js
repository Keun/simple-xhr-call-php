var selectbox = document.getElementById("change_evenementen");
var inputbox = document.getElementById("input_number");
var xhttp = new XMLHttpRequest();

selectbox.addEventListener('change', function(e){
    var currentValue = this.value;

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // console.log(this.responseText);
            inputbox.innerHTML = this.responseText;
        }
    };    
    xhttp.open("GET", "xhr/get-new-html.php?id="+currentValue, true);
    xhttp.send();

});