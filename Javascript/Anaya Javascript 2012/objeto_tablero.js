function Tablero() {
	// Lista de propiedades
	this.casillas = new Array(3);
	for(var i=0; i<3; i++) {
		this.casillas[i] = new Array(3);
	}
	this.turno;
	this.numMovimientos;

	// Lista de métodos
	this.inicializarTablero = function (){
		// Declaramos las variables
		var azar = Math.round(Math.random());
		// Limpiamos las casillas
		for(var fila=0; fila<3; fila++) {
			for(var col=0; col<3; col++) {
				this.casillas[fila][col] = "";
				document.getElementById("casilla" + fila + col).innerHTML = "&nbsp;";
			}
		}
		// Establecemos el turno
		if (azar == 0) {
			this.turno = "O";
		} else {
			this.turno = "X";
		}
		// Reiniciamos el número de movimientos
		this.numMovimientos = 0;
	}
	this.detectarLineaDiagonal  = function () {
		// Comprobamos la diagonal hacia la derecha
		if (this.casillas[0][0] != "" &&
			this.casillas[0][0] == this.casillas[1][1] &&
			this.casillas[1][1] == this.casillas[2][2]) {
				// Ponemos las celdas en negrita
				document.getElementById("casilla00").innerHTML = this.casillas[0][0].bold();
				document.getElementById("casilla11").innerHTML = this.casillas[1][1].bold();
				document.getElementById("casilla22").innerHTML = this.casillas[2][2].bold();
				return true;
		}
		// Comprobamos la diagonal hacia la izquierda
		if (this.casillas[0][2] != "" &&
			this.casillas[0][2] == this.casillas[1][1] &&
			this.casillas[1][1] == this.casillas[2][0]) {
				// Ponemos las celdas en negrita
				document.getElementById("casilla02").innerHTML = this.casillas[0][2].bold();
				document.getElementById("casilla11").innerHTML = this.casillas[1][1].bold();
				document.getElementById("casilla20").innerHTML = this.casillas[2][0].bold();
				return true;
		}
		// En otro caso, no hemos encontrado una línea
		return false;
	}
	this.detectarLineaHorizontal  = function () {
		// Comprobamos cada fila
		for(var fila=0; fila<3; fila++) {
			if (this.casillas[fila][0] != "" &&
				this.casillas[fila][0] == this.casillas[fila][1] &&
				this.casillas[fila][1] == this.casillas[fila][2]) {
					// Ponemos las celdas en negrita
					document.getElementById("casilla" + fila + "0").innerHTML = this.casillas[fila][0].bold();
					document.getElementById("casilla" + fila + "1").innerHTML = this.casillas[fila][1].bold();
					document.getElementById("casilla" + fila + "2").innerHTML = this.casillas[fila][2].bold();
					return true;
			}
		}
		// En otro caso, no hemos encontrado una línea
		return false;
	}
	this.detectarLineaVertical  = function () {
		// Comprobamos cada columna
		for(var col=0; col<3; col++) {
			if (this.casillas[0][col] != "" &&
				this.casillas[0][col] == this.casillas[1][col] &&
				this.casillas[1][col] == this.casillas[2][col]) {
					// Ponemos las celdas en negrita
					document.getElementById("casilla0" + col).innerHTML = this.casillas[0][col].bold();
					document.getElementById("casilla1" + col).innerHTML = this.casillas[1][col].bold();
					document.getElementById("casilla2" + col).innerHTML = this.casillas[2][col].bold();
					return true;
			}
		}
		// En otro caso, no hemos encontrado una línea
		return false;
	}
	this.detectarLinea = function () {
		return this.detectarLineaHorizontal() ||
			this.detectarLineaVertical() ||
			this.detectarLineaDiagonal();
	}
	this.continuarPartida = function () {
		// Si hay tres en raya
		if (this.detectarLinea()) {
			// Finalizamos la partida
			this.numMovimientos = 9;
			// Damos la enhorabuena
			alert("¡Tres en raya! Enhorabuena.");
		} else {
			/// Si no ha terminado la partida
			if (this.numMovimientos < 9) {
			// Cambiamos el turno
				if (this.turno == "O") {
					this.turno = "X";
				} else {
					this.turno = "O";
				}
			} else {
				// En otro caso, avisamos del final de la partida
				alert("La partida ha terminado sin vencedor.");
			}
		}
	}
	this.marcarMovimiento = function (fila, col) {
		// Si no ha terminado la partida
		if (this.numMovimientos < 9) {
			// Si la casilla no está ocupada
			if (this.casillas[fila][col] == "") {
				// La ocupamos
				this.casillas[fila][col] = this.turno;
				document.getElementById("casilla" + fila + col).innerHTML = this.turno;
				// Incrementamos el número de movimientos
				this.numMovimientos++;
				// Comprobar si sigue la partida
				this.continuarPartida();
			}
		}
	}
}
