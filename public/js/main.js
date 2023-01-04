// reservation part
var chambreChoice = document.getElementById("choix-chambre");
var suiteChoice = document.getElementById("choix-suite");

// friends data
var number = document.getElementById("nombre");
var fields = document.getElementById("donnee-amis");

chambreChoice.addEventListener('change', function() {
    if(chambreChoice.value == "suite") {
        var suite = `
        <select class="pt-4 form-select form-control" name="suite_type" aria-label="Default select">
            <option value="Standard">Standard</option>
            <option value="Junior">Junior</option>
            <option value="Presidential">Presidential</option>
            <option value="Penthouse">Penthouse</option>
            <option value="Honeymoon">Honeymoon</option>
            <option value="Bridal">Bridal</option>
        </select>
        <label for="type">type de suite</label>
        `;

        suiteChoice.innerHTML = suite;
    } else {
        suiteChoice.innerHTML = "";
    }
});