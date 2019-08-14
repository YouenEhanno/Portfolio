class Pen {

    constructor() {
        this.color = 'black';
        this.size = 1;
    }

    setColor(color) {
        this.color = color;
    }

    setSize(size) {
        this.size = size;
    }

    setPostion(position) {
        this.position = position;
    }

    draw(context) {
        let bounds = canvas.getBoundingClientRect()
        canvas.onmousedown = function(event) {
            isDrawing = true;
            context.moveTo(event.clientX - bounds.left - scrollX, event.clientY - bounds.top - scrollY);
        }

        canvas.onmousemove = function(event) {
            if (isDrawing) {
                context.lineTo(event.clientX - bounds.left - scrollX, event.clientY - bounds.top - scrollY);
                context.stroke();
            }
        }

        canvas.onmouseup = function() {

            isDrawing = false;
        }

    }
}
