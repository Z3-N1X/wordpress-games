console.log("GTN JS is loaded")


document.addEventListener("load",function () {
    console.log("document is loaded");
    
})
document.getElementById("zen-guess-the-number-input").addEventListener("input",function () {
    console.log("input is changed");
    var humanGuessedNumber = document.getElementById("zen-guess-the-number-input").value;
    if (humanGuessedNumber == document.getElementById("zen-guess-the-number-input").getAttribute("hint")) 
    {
        party.confetti(getElementById("zen-guess-the-number-input"), {
            count: party.variation.range(20, 40)
        });
        console.log("You got it!")
    }
    else
    {
        console.log("Not quite correct")
    }
})