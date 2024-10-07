// Operator Aritmatika 

let angka1 = 20
let angka2 = 10

let penjumlahan = angka1 + angka2
console.log(`ini adalah penjumlahan = ${penjumlahan}`)

let pengurangan =  angka1 - angka2
console.log(`ini adalah pengurangan = ${pengurangan}`)

let perkalian =  angka1 * angka2 
console.log(`ini adalah perkalian = ${perkalian}`)

let pembagian = angka1 / angka2
console.log(`ini adalah pembagian = ${pembagian}`)

console.log("----------------------------------------------------------------")

// Operator Assignment 
let number1 = 10
console.log(number1)

// Operator Perbandingan 

// Equal (membandingkan Isinya saja )
let number2 = 100
console.log(number2 == 200) //false
console.log(number2 == 100) //true

// Not Equal
let number3 = 100
console.log(number3 != 100) //false
console.log(number3 != 200) //true 

// Strict Equal (membandingkan Isi dan Tipe datanya)
let number4 = 200
console.log(number4 == "200") //True
console.log(number4 === "200") //false
console.log(number4 === 200) // True

// Strict Not Equal 
let number5 = 15
console.log(number5 != "15") //False 
console.log(number5 !== "15") // True, Karena tipe datanya (Number tidak sama dengan String) jadi benar
console.log(number5 !== 15) //False

// Kurang dari dan Lebih dari
let number6 = 20
console.log(number6 > 10) //True
console.log(number6 < 10) //False
console.log(number6 >= 20) //True karena ada sama dengan berarti dimulai dari 20
console.log(number6 <= 30) //True