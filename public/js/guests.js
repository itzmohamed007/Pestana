var number = document.getElementById("nombre");
var fields = document.getElementById("donnee-amis");
var roomType = document.getElementById("room").value;

var max;

number.addEventListener('input', function() {
    if (number.value !== "") {
        fields.innerHTML = "";

        max = number.value
        if(roomType == 'single'){
            max = 1;
        } else if(roomType == 'double'){
            max = 2;
        }

        for(let i = 1; i <= max; i++){
        console.log(max);
        fields.innerHTML +=
        `
        <p class="text-white text-start">guest n°: ${i}</p>
        <div class="form-floating mb-3">
            <input class="form-control" type="text" name="prenom${i}"/>
            <label for="phone">prénom</label>
        </div>
    
        <div class="form-floating mb-3">
            <input class="form-control" type="text" name="nom${i}"/>
            <label for="phone">nom</label>
        </div>
    
        <div class="form-floating mb-3">
            <input class="form-control" type="date" name="naissance${i}"/>
            <label for="phone">date de naissance</label>
        </div>
        <hr class="divider-light">
        `
        } 
    } else {
        fields.innerHTML = "";
    };
});