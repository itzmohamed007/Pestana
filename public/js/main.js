// reservation part

var chambreChoice = document.getElementById("choix-chambre");
var suiteChoice = document.getElementById("choix-suite");

chambreChoice.addEventListener('change', function() {
    if(chambreChoice.value == "suite") {
        var suite = `
        <select class="pt-4 form-select form-control" name="suite" aria-label="Default select">
            <option value="Standard">Standard</option>
            <option value="Junior">Junior</option>
            <option value="Presidential">Presidential</option>
            <option value="Penthouse">Penthouse</option>
            <option value="Honeymoon">Honeymoon</option>
            <option value="Bridal">Bridal</option>
        </select>
        <label for="type">type de suite</label>
        `;
        // var suitenumber = `
        // <select class="pt-4 form-select form-control" name="chambre-nombre" aria-label="Default select" id="numero-suite">
        //     <option value="X"single>suite numero: X</option>
        // </select>
        // <label for="type" class="">les suites valides</label>`;

        suiteChoice.innerHTML = suite;
    } else {
        suiteChoice.innerHTML = "";
    }
});



// friends data
var number = document.getElementById("nombre");
var fields = document.getElementById("donnee-amis");


number.addEventListener('input', function() {
    let i = 0;
    
    if (number.value !== "") {
        fields.innerHTML = "";
        while(i < number.value){
        fields.innerHTML +=
        `
        <div class="form-floating mb-3">
        <input class="form-control" type="text"/>
        <label for="phone">prénom</label>
        </div>
    
        <div class="form-floating mb-3">
            <input class="form-control" type="text"/>
            <label for="phone">nom</label>
        </div>
    
        <div class="form-floating mb-3">
            <input class="form-control" type="date"/>
            <label for="phone">date de naissance</label>
        </div>
        <hr>
        `
        i++
        } 
    } else {
        fields.innerHTML = "";
    }
});

