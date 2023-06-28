class Dreieck {
    constructor(hypothenuse, kathete) {
        this.hypothenuse = hypothenuse;
        this.kathete = kathete;
    }

    umfang = function berechneUmfang() {
        return this.hypothenuse + 2 * this.kathete;
    };
}

function berechneDreieck() {
    const hypothenuse = document.getElementById("hypothenuse").value;
    const kathete = document.getElementById("kathete").value;

    const dasDreieck = new Dreieck(hypothenuse, kathete);

    let ausgabe = "<h3>Umfang</h3><p>";
    ausgabe += dasDreieck.umfang();
    ausgabe += "</p>";

    ausgabe += "<h3>Umfang</h3><p>";
    ausgabe += dasDreieck.umfang();
    ausgabe += "</p>";

    ausgabe += "<h3>Umfang</h3><p>";
    ausgabe += dasDreieck.umfang();
    ausgabe += "</p>";

    ausgabe = "<h3>Umfang</h3><p>";
    ausgabe += dasDreieck.umfang();
    ausgabe += "</p>";

    document.getElementById("ausgabe").innerHTML = ausgabe;
}
