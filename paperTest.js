var node = new Path();
var swatch;
var mousePosition;
var hitOptions = {
	fill: true
};

// keeps track of the mouse's position
function onMouseMove(event) {
	mousePosition=event;
}

// when you press space, it generates node at the mouse's position
function onKeyDown(event){
	if(event.key=='space'){
		node = new Path.Circle(new Point(mousePosition.point), 50);
		node.fillColor='black';
	}
}

function onMouseDown(event) {
	node = new Path.Circle(new Point(mousePosition.point), 50);
	node.fillColor='black';
}

function onMouseDrag(event) {
	node.position = new Point(event.point);
}


project.onClick = function(event) {
		console.log(this.hitRequest(event.point, hitOptions));
}