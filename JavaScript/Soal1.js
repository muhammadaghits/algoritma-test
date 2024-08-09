function reverseAlphabet(str) {
    let result = str.replace(/[a-z]+/gi, function (x) {
        return x.split("").reverse().join("")
    });
    return result;
}

const input = "NEGIE1...NEGIE2";
console.info(reverseAlphabet(input));