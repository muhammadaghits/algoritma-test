function countOccurences(input, query) {
    return query.map(q => input.filter(i => i === q).length);
}

const input = ['xc', 'dz', 'bbb', 'dz'];
const query = ['bbb', 'ac', 'dz'];
console.info(countOccurences(input, query));