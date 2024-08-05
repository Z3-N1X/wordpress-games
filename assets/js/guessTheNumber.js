console.log("GTN JS is loaded")


document.addEventListener("load",function () {
    console.log("document is loaded");
    
})

const gtnInput = document.getElementById("zen-guess-the-number-input")
const gtnHeader = document.getElementById("zen-guess-the-number-header")

gtnInput.addEventListener("input",function () {
    console.log("input is changed");
    var humanGuessedNumber = gtnInput.value;
    if (humanGuessedNumber == gtnInput.getAttribute("hint")) 
    {
        party.confetti(gtnInput, {
            count: party.variation.range(20, 40)
        });
        gtnHeader.innerText = "You Win";
        console.log("You got it!")
    }
    else
    {
        gtnHeader.innerText = "Not Right";
        gtnInput.value = "";
        console.log("Not quite correct")
    }
})