function PMT() {
    var pv = parseFloat(document.loan.pv.value);
    var ir = parseFloat(document.loan.ir.value);
    var np = parseFloat(document.loan.np.value);
    return Math.floor(
        (pv * 10000 * (ir / 100 / 12) * Math.pow(1 + ir / 100 / 12, np * 12)) /
            (Math.pow(1 + ir / 100 / 12, np * 12) - 1)
    ).toLocaleString();
}
