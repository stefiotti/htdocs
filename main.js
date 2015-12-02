var mapa = {'Z': "C3",
			'S': "C3s",
			'X': "D3",
			'D': "D3s",
			'C': "E3",
			'V': "F3",
			'G': "F3s",
			'B': "G3",
			'H': "G3s",
			'N': "A3",
			'J': "A3s",
			'M': "B3",
			'Q': "C4",
			'2': "C4s",
			'W': "D4",
			'3': "D4s",
			'E': "E4",
			'R': "F4",
			'5': "F4s",
			'T': "G4",
			'6': "G4s",
			'Y': "A4",
			'7': "A4s",
			'U': "B4",
			'I': "C5"
			};
// the var notas stores the notes in the array
var notas = [];
// add notes to the notes array
for (var i in mapa) {
	notas.push(mapa[i]);
}
// variable that will receive the Piano object
var piano;
// function that plays or pauses a note while changing the key color in the Piano
// receives as parameters the noa being played / stopped, gone down or released and the element on the piano that will change color

function tocarNota(nota, press) {
	var tecla = document.getElementById(nota);
// Check if the key was pressed
	if (press) {
// Checks the type of pressed key
		if (tecla.className == "key") {
			// tecla branca
			tecla.className = "keyPressed";
		}
		else if (tecla.className == "blackKey") {
// Black key
			tecla.className = "blackKeyPressed";
		}
// Reproduce the note
		piano.play(nota);
	}
// If the key is released, it returns to original color
	else {
// Checks the type of pressed key
		if (tecla.className == "keyPressed") {
			// tecla branca
			tecla.className = "key";
		}
		else if (tecla.className == "blackKeyPressed") {
			// tecla preta
			tecla.className = "blackKey";
		}
		// interrompe a nota
		piano.stop(nota);
	}
}

// Variables and functions are outside the above require in order to be accessed after running the require

require(["Piano"], function(Piano){
// Creates a new object type Piano
	piano = new Piano("sons/");
	var tecla;
// Runs through the array notes and add the mouse events to the corresponding elements
	for (var i = 0; i < notas.length; i++) {
		tecla = document.getElementById(notas[i]);
		
	// When the button is pressed with the mouse
		tecla.addEventListener("mousedown", function(e) {
// Before holding the note, it is checked whether the element that triggered the event is the same element that was clicked .
// This check is required because the black key is an element in a white key ,
// So the click the black button would trigger the event the white button if there was no check.
// 'This' reference to own tag to which the event is added
// ' E.target ' references the element that was clicked
			if (e.target == this) {
				tocarNota(this.id, true);
			}
		},false);
		
// When the key is released with the mouse
		tecla.addEventListener("mouseup", function(e) {
			if (e.target == this) {
				tocarNota(this.id, false);
			}
		},false);
		
// When the mouse is removed from above the element
		tecla.addEventListener("mouseout", function(e) {
			if (e.target == this) {
				tocarNota(this.id, false);	
			}
		},false);
	}
// Add keyboard events to the entire document
// When the button is pressed
	document.addEventListener("keydown", function(e) {
// The pressed key is identified
		var tecla = String.fromCharCode(e.keyCode).toUpperCase();
		var nota;
// Check the existence of the key on the map and has not been pressed in combination with alt , ctrl and shift
		if ((nota = mapa[tecla]) && (!e.altKey) && (!e.ctrlKey) && (!e.shiftKey)) {
// There is the execution of the note
// While the note is running, ie the keyboard key is pressed, the note will not run again
			if (!piano.sons[nota].executando) {
// Note is executed
				tocarNota(nota, true);
			}
		}
	}, false);
	
// When the button is released
	document.addEventListener("keyup", function(e) {
// The pressed key is identified
		var tecla = String.fromCharCode(e.keyCode).toUpperCase();
		var nota;
// Check the existence of the note on the map and has not been pressed in combination with alt , ctrl and shift
		if ((nota = mapa[tecla]) && (!e.altKey) && (!e.ctrlKey) && (!e.shiftKey)) {
// Note is stopped
			tocarNota(nota, false);
		}
	}, false);
});