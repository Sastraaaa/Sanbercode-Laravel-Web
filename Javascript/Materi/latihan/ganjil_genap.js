const readline = require('readline-sync')

let input = readline.question('input angka: ')

if (input % 2==0 ) {
    console.log('angka genap')
} else {
    console.log('angka ganjil')
}