var calcul = ""
var recap = document.getElementById("recap");
var resultat = document.getElementById("resultat")

function calculation(x){
    switch (x){
        case "d":calcul = calcul.substring(0, calcul.length-1)
            recap.innerHTML = calcul
            break
        case "c":calcul = ""
            recap.innerHTML = calcul
            resultat.innerHTML = ""
            break
        case "r":
            resultat.innerHTML = eval(calcul)
            break
        default:calcul = calcul + x;
            recap.innerHTML = calcul
            break
    }
}




