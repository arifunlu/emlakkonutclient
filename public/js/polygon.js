var perimeter = new Array(new Array());
var canvas = document.getElementById("jPolygon");
var ctx;
var complete;
var polygonIndex;
var displayMode = true;

function point(x, y) {
    ctx.fillStyle = "white";
    ctx.strokeStyle = "white";
    ctx.fillRect(x - 2, y - 2, 4, 4);
    ctx.moveTo(x, y);
}

function undo() {
    if (!displayMode) {
        if (polygonIndex === 0 && perimeter[polygonIndex].length === 0) {
            perimeter = new Array(new Array());
            return;
        }
        else if (perimeter[polygonIndex].length === 0) {
            polygonIndex--;
        }
        ctx = undefined;
        perimeter[polygonIndex].pop();
        complete = false;
        start(true);
    }
}

function clear_canvas() {
    ctx = undefined;
    perimeter = new Array(new Array());
    complete = false;
    polygonIndex = 0;
    start();
}

function draw(end, restart) {
    ctx.lineWidth = 1;
    ctx.strokeStyle = "white";
    ctx.lineCap = "square";
    ctx.beginPath();

    for (var i = restart ? 0 : polygonIndex; i < perimeter.length; i++) {
        for (var j = 0; j < perimeter[i].length; j++) {
            if (j == 0) {
                ctx.moveTo(perimeter[i][j]['x'], perimeter[i][j]['y']);
                end || point(perimeter[i][j]['x'], perimeter[i][j]['y']);
            } else {
                ctx.lineTo(perimeter[i][j]['x'], perimeter[i][j]['y']);
                end || point(perimeter[i][j]['x'], perimeter[i][j]['y']);

                if (restart && (i !== polygonIndex)) {
                    ctx.closePath();
                    ctx.fillStyle = 'rgba(255, 0, 0, 0.5)';
                    ctx.fill();
                    ctx.strokeStyle = 'blue';
                }
            }
        }
    }

    /*if (restart) {
        for (var key in perimeter) {
            var i = perimeter[key].length - 1;

            if (perimeter[key][i]['complete']) {
                ctx.lineTo(perimeter[key][0]['x'], perimeter[key][0]['y']);
                point(perimeter[key][0]['x'], perimeter[key][0]['y']);
                ctx.closePath();
                ctx.fillStyle = 'rgba(255, 0, 0, 0.5)';
                ctx.fill();
                ctx.strokeStyle = 'blue';
            }
        }
    }*/

    if (end) {
        ctx.lineTo(perimeter[polygonIndex][0]['x'], perimeter[polygonIndex][0]['y']);
        point(perimeter[polygonIndex][0]['x'], perimeter[polygonIndex][0]['y']);
        ctx.closePath();
        ctx.fillStyle = 'rgba(255, 0, 0, 0.5)';
        ctx.fill();
        ctx.strokeStyle = 'blue';
        complete = true;
    }
    ctx.stroke();
}

function setComplete(x, y) {
    ctx.lineTo(perimeter[polygonIndex][0]['x'], perimeter[polygonIndex][0]['y']);
    point(perimeter[polygonIndex][0]['x'], perimeter[polygonIndex][0]['y']);
    ctx.closePath();
    ctx.fillStyle = 'rgba(255, 0, 0, 0.5)';
    ctx.fill();
    ctx.strokeStyle = 'blue';
    complete = true;
}

function point_it(event) {
    var rect, x, y;

    if (event.ctrlKey || event.metaKey) {
        var currentPolygon = perimeter[polygonIndex];

        if (!currentPolygon[currentPolygon.length - 1]["complete"]) {
            if (perimeter[polygonIndex].length == 2) {
                alert('Bir poligon için en az üç noktaya ihtiyacınız var.');
                return false;
            }
            x = perimeter[polygonIndex][0]['x'];
            y = perimeter[polygonIndex][0]['y'];
            perimeter[polygonIndex].push({ 'x': x, 'y': y, complete: true });
            draw(true);
            event.preventDefault();
            return false;
        }
    } else if (event.which === 3 || event.button === 2) {
        undo();
    } else {
        rect = canvas.getBoundingClientRect();
        x = event.clientX - rect.left;
        y = event.clientY - rect.top;
        if (complete) {
            polygonIndex++;
            perimeter[polygonIndex] = new Array();
            complete = false;
        }
        perimeter[polygonIndex].push({ 'x': x, 'y': y });
        draw();
        return false;
    }
}

function start(with_draw) {
    var img = new Image();
    img.src = canvas.getAttribute('data-imgsrc');

    img.onload = function () {
        ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        if (with_draw === true) {
            draw(false, true);
        }
    }
}