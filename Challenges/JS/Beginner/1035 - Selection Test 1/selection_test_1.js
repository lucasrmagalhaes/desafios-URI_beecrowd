var input = require('fs').readFileSync('/dev/stdin', 'utf8');
var lines = input.split('\n');

input = input.replace('\n', ' ');

var lines = input.split(' ');

var A = parseInt(lines.shift());
var B = parseInt(lines.shift());
var C = parseInt(lines.shift());
var D = parseInt(lines.shift());

if (B > C && 
    D > A && 
    (C + D) > (A + B) && 
    C > 0 && 
    D > 0 && 
    A % 2 === 0
) {
    console.log("Valores aceitos");
} else {
    console.log("Valores nao aceitos");
}