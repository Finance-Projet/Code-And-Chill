function calcul() {
    let money = document.getElementById('money').value;
    let pourcentage = document.getElementById('pourcentage').value;
    let resultAnnonce = document.getElementById('resultat');


    if(isNaN(money) || isNaN(pourcentage)) {
        resultAnnonce.textContent = "Veuillez entrer un nombre valide"
    } else {
        let result = (parseFloat(money) / parseFloat(pourcentage));
        resultAnnonce.textContent = result
    }
}