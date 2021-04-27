const readline = require("readline");

const consulta = readline.createInterface({
    input : process.stdin,
    output : process.stdout
});

consulta.on("line", (radius) => {
    let raio = Number(radius) * Number(radius);
    let area = raio * 3.14159;
    
    console.log("A=" + area.toFixed(4));
    
    consulta.close();
});