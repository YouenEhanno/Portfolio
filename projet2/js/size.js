// On change la taille
// fin
let fin = document.querySelector('.fin')

fin.onclick = function() {
    context.beginPath()
    size = context.lineWidth = 1
    pen.setSize(size)
}

// normal
let normal = document.querySelector('.normal')

normal.onclick = function() {
    context.beginPath()
    size = context.lineWidth = 3
    pen.setSize(size)
}

// epais
let epais = document.querySelector('.epais')

epais.onclick = function() {
    context.beginPath()
    size = context.lineWidth = 5
    pen.setSize(size)
}

// très epais
let tresEpais = document.querySelector('.tresEpais')

tresEpais.onclick = function() {
    context.beginPath()
    size = context.lineWidth = 200
    pen.setSize(size)
}