// Pour choisir une couleur la palette
let chooseColor = document.querySelector('#colors')
chooseColor.onchange = function() {
    console.log(`${chooseColor.value}`);

    context.beginPath()
    color = context.strokeStyle = `${chooseColor.value}`;
    pen.setColor(color)
}


// On change de couleur grace aux pastilles
// noir
let black = document.querySelector('.black')

black.onclick = function() {
    context.beginPath()
    color = context.strokeStyle = "black";
    pen.setColor(color)
}

// marron
let brown = document.querySelector('.brown')

brown.onclick = function() {
    context.beginPath()
    color = context.strokeStyle = "brown";
    pen.setColor(color)
}

// rouge
let red = document.querySelector('.red')

red.onclick = function() {
    context.beginPath()
    color = context.strokeStyle = "red";
    pen.setColor(color)
}

// jaune
let yellow = document.querySelector('.yellow')

yellow.onclick = function() {
    context.beginPath()
    color = context.strokeStyle = "yellow";
    pen.setColor(color)
}

// vert
let green = document.querySelector('.green')

green.onclick = function() {
    context.beginPath()
    color = context.strokeStyle = "green";
    pen.setColor(color)
}

// cyan
let cyan = document.querySelector('.cyan')

cyan.onclick = function() {
    context.beginPath()
    color = context.strokeStyle = "cyan";
    pen.setColor(color)
}

// bleu
let blue = document.querySelector('.blue')

blue.onclick = function() {
    context.beginPath()
    color = context.strokeStyle = "blue";
    pen.setColor(color)
}