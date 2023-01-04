// friends data
var number = document.getElementById("nombre");
var fields = document.getElementById("donnee-amis");

number.addEventListener('input', function() {
    // console.log("test");
    // let max;

    // if(chambreChoice.value == 'single'){
    //     max = 1;
    // } else if(chambreChoice.value == 'double'){
    //     max = 2;
    // } else {
    //     max = number.value;
    // }
    
    if (number.value !== "") {
        fields.innerHTML = "";
        // console.log(max);
        let i = 0;
        while(i < number.value){
        fields.innerHTML +=
        `
        <form action="index.php" method="post">
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="prenom"/>
                <label for="phone">prénom</label>
            </div>
        
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="nom"/>
                <label for="phone">nom</label>
            </div>
        
            <div class="form-floating mb-3">
                <input class="form-control" type="date" name="naissance"/>
                <label for="phone">date de naissance</label>
            </div>
        </form>
        <hr>
        `
        i++
        } 
    } else {
        fields.innerHTML = "";
    };
});