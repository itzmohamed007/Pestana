// friends data
var number = document.getElementById("nombre");
var fields = document.getElementById("donnee-amis");

number.addEventListener('input', function() {
    if (number.value !== "") {
        fields.innerHTML = "";
        let i = 1;
        while(i <= number.value){
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
        i++
        } 
    } else {
        fields.innerHTML = "";
    };
});