const readline = require("readline");

const cosulta = readline.createInterface({
    input: process.stdin, output: process.stdout
});
    
cosulta.on("line", (n1) => {

    cosulta.on("line", (n2) => {
        console.log("X = " + (Number(n1) + Number(n2)));
        
        cosulta.close();
    });
});