let canvas = document.querySelector('#canvas');
let context = canvas.getContext('2d');
let isDrawing;


// On dessine un trait avec la couleur et la taille par defaut
let pen = new Pen()
pen.draw(context)



// Outils pour effacer ou Reset

// pour gommer
let eraser = document.querySelector('.eraser')

eraser.onclick = function() {
    context.beginPath()
    color = context.strokeStyle = "white";
    pen.setColor(color)
}


// pour tout reset
let reset = document.querySelector('.reset')

reset.onclick = function() {
    context.beginPath()
    context.clearRect(0, 0, canvas.width, canvas.height)
}
