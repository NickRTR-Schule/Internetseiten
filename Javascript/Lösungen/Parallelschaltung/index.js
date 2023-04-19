class Parallelschaltung {
    constructor(spannung, widerstand1, widerstand2) {
        this.spannung = spannung;
        this.widerstand1 = widerstand1;
        this.widerstand2 = widerstand2;
    }

    gesamtwiderstand = function berechneGesamtwiderstand() {
        return (widerstand1 + widerstand2) / (widerstand1 * widerstand2);
    };

    strom = function berechneStrom() {
        return this.gesamtwiderstand / spannung;
    };

    leistung = function berechneLeistung() {
        return spannung * this.strom;
    };
}

function berechneDreieck() {
    const spannung = document.getElementById("spannung").value;
    const widerstand1 = document.getElementById("widerstand1").value;
    const widerstand2 = document.getElementById("widerstand2").value;

    console.log(spannung, widerstand1, widerstand2);

    const dieSchaltung = new Parallelschaltung(spannung, widerstand1, widerstand2);

    let ausgabe = "<h3>Gesamtwiderstand</h3><p>";
    ausgabe += dieSchaltung.gesamtwiderstand();
    console.log(dieSchaltung.gesamtwiderstand());
    ausgabe += "</p>";

    ausgabe += "<h3>Leistung</h3><p>";
    ausgabe += dieSchaltung.leistung();
    ausgabe += "</p>";

    ausgabe += "<h3>Strom</h3><p>";
    ausgabe += dieSchaltung.strom();
    ausgabe += "</p>";

    document.getElementById("ausgabe").innerHTML = ausgabe;
}
