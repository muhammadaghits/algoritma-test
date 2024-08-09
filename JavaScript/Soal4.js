function diagonalDiff(matrix) {
    const n = matrix.length;
    let ltor = 0;
    let rtol = 0;
    for (let i = 0; i < n; i++) {
        ltor += matrix[i][i];
        rtol += matrix[i][n - i - 1];
    }
    return Math.abs(ltor - rtol);
}

const matrix = [
    [1, 2, 0],
    [4, 5, 6],
    [7, 8, 9]
];
console.info(diagonalDiff(matrix));