function almacenarCookie(nombre, valor, caducidad, dominio, ruta, segura) {
	var cookie;
	// Añadimos el nombre de la cookie y su valor
	cookie = nombre + "=" + escape(valor);
	// Comprobamos si hemos recibido caducidad
	if (arguments[2] != undefined) {
		cookie += "; expires=" + caducidad.toGMTString();
	}
	// Comprobamos si hemos recibido dominio
	if (arguments[3] != undefined) {
		cookie += "; domain=" + dominio;
	}
	// Comprobamos si hemos recibido ruta
	if (arguments[4] != undefined) {
		cookie += "; path=" + ruta;
	}
	// Comprobamos si hemos recibido segura y si hay que añadirla
	if (arguments[5] != undefined && segura) {
		cookie += "; secure";
	}
	// Añadimos la cookie
	document.cookie = cookie;
}

function recuperarCookie(nombreCookie) {
	// Definición de variables
	var posicionCookie, posicionPuntoComa;
	var posicionInicio, posicionFin;
	var valorCookie = "";
	// Comprobamos si hay cookies
	if (document.cookie.length > 0) {
		// Buscamos la posición de la cookie
		posicionCookie = document.cookie.indexOf(nombreCookie + "=");
		// Si hemos encontrado la posición
		if (posicionCookie != -1) {
			// Calculamos la posición de inicio del valor
			posicionInicio = posicionCookie + nombreCookie.length + 1;
			// Buscamos la posición del punto y coma más próximo
			posicionPuntoComa = document.cookie.indexOf(";", posicionCookie);
			// Si estamos en la última cookie (no hay punto y coma)
			if (posicionPuntoComa == -1) {
				// Leemos hasta el final de la cadena
				posicionFin = document.cookie.length;
			} else {
				// En otro caso, leemos hasta el punto y coma
				posicionFin = posicionPuntoComa;
			}
			// Obtenemos el valor de la cookie
			valorCookie = document.cookie.substring(posicionInicio, posicionFin);
		}
	}
	// Devolvemos el valor de la cookie
	return unescape(valorCookie);
}