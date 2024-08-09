function longestWord(sentence) {
    const words = sentence.split(" ");
    let longest = "";
    for (const word of words) {
        if (word.length > longest.length) {
            longest = word;
        }
    }
    return `Kata terpanjang : ${longest} (${longest.length} karakter)`;
}

const input = "Saya sangat senang mengerjakan soal algoritma";
console.info(longestWord(input));