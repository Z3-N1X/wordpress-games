document.getElementById("zen-guess-the-number-input").addEventListener("oninput",function () {
    var humanGuessedNumber = document.getElementById("zen-guess-the-number-input").value;
    if (humanGuessedNumber == document.getElementById("zen-guess-the-number-input").getAttribute("hint")) 
    {
        console.log("You got it!")
    }
    else
    {
        console.log("Not quite correct")
    }
})