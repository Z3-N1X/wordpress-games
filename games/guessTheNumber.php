function guess_the_number() {
    $correctNumber = rand(1,3);
    return '<input hint="'.$correctNumber.'" id="z3n-guess-the-number">';
}

add_shortcode("numberGuess", 'guess_the_number');
