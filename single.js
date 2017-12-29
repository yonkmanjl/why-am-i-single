function single() {
    var reasons = ["You don't know what a lentil is.", 
                   "Your expectations are unrealistic.", 
                   "You have poor options.",
                   "You failed to define  your last relationship before feelings got hurt.",
                   "You are unable to find someone with a compatible lifestyle.",
                   "Your hair colour.",
                   "Your breath smells.",
                   "Your jokes are awful.",
                   "You're racist.",
                   "You're sexist.",
                   "You have weird body hair.",
                   "Your fragile mascuilinity.",
                   "You smoke like a chimney.",
                   "You aren't a doctor.",
                   "You're ugly.",
                   "You have to be a catch to make a catch.",
                   "It's your personality.",
                   "You're a narcissist.",
                   "You spent all your money on avocado toast and now will never be financially stable.",
                   "You hog the bed."];
    var num = Math.floor((Math.random() * reasons.length));
    $("#reason").html(reasons[num]);
}
