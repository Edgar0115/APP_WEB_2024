function operacion() {
    let n1, n2, tipoope, ope, resul;

    n1 = parseFloat(document.getElementById("n1").value);
    n2 = parseFloat(document.getElementById("n2").value);
    tipoope = document.getElementById("tipo").value;

    resul = document.getElementById("resultado");

    if (isNumber(n1) && isNumber(n2)) {
        switch (tipoope) {
            case "+":
                ope = n1 + n2;
                break;
            case "-":
                ope = n1 - n2;
                break;
            case "*":
                ope = n1 * n2;
                break;
            case "/":
                if (n2 !== 0) {
                    ope = n1 / n2;
                } else {
                    resul.innerHTML = `<h2>No se puede dividir por cero.</h2>`;
                    return;
                }
                break;
        }

        resul.innerHTML = `<h2>${n1} ${tipoope} ${n2} = ${ope}</h2>`;
    } else {
        resul.innerHTML = `<h2>Ingrese solo números...</h2>`;
    }
}

function isNumber(n) {
    return !isNaN(n) && isFinite(n);
}
