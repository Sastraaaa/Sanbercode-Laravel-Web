const readline = require('readline-sync')

let angka1 = readline.question('Input angka pertama: ')
let angka2 = readline.question('Input angka kedua: ')
let operator = readline.question('Input Operator: ')
let hasil

switch (operator) {
    case '+':
        hasil = parseFloat(angka1) + parseFloat(angka2)
        console.log(`Hasilnya adalah ${hasil}`)
        break;
    case '-':
        hasil = parseFloat(angka1) - parseFloat(angka2)
        console.log(`Hasilnya adalah ${hasil}`)
        break
    case '*':
        hasil = parseFloat(angka1) * parseFloat(angka2)
        console.log(`Hasilnya adalah ${hasil}`)
        break
    case '/':
        hasil = parseFloat(angka1) / parseFloat(angka2)
        console.log(`Hasilnya adalah ${hasil}`)
        break
    default:
        console.log('Masukan angka dan terlebih dahulu')
        break;
}