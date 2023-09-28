let tugas = ['IPAL', 'SAMPAH', 'B3']
let cancel = document.getElementById('cancel')
let masuk = document.getElementById('masuk')
let kotak = document.getElementById('kotak')
let kotak1 = document.getElementById('kotak1')
let login = document.getElementById('login')
let bungkus = document.getElementById('bungkus')
let body = document.body
let label = document.getElementsByTagName('label')[0]
let tombolMasuk = document.querySelector('#tombolMasuk')
let kotakMasuk = document.querySelector('.kotakMasuk')


function buatTombo(index) {
    let tombol = document.createElement('button')
    tombol.innerText = index
    kotak.appendChild(tombol)
}


function hapusIsi() {
    while (kotak.firstChild) {
        kotak.removeChild(kotak.firstChild)
    }
}



tombolMasuk.addEventListener('click', function() {
    bungkus.style.display = 'block'
    tombolMasuk.style.display = 'none'
    const input = document.createElement('input')
    input.setAttribute('placeholder', 'User Name')
    input.setAttribute('id', 'userName')
    const password = document.createElement('input')
    password.setAttribute('placeholder', 'Password')
    kotak.appendChild(input)
    kotak.appendChild(password)
    login.innerText = 'LOGIN'
    masuk.style.display = 'block'
})

let kotakKedip = document.querySelector('.kotakKedip')

let count = 0

setInterval(function() {


    if (count >= 8) {
        clearInterval()
    } else {
        kotakKedip.style.visibility = (kotakKedip.style.visibility == 'hidden' ? 'visible' : 'hidden')
        count++

    }


}, 100)

// let nomor = [10, 22, 34, 4, 5]
// nomor.forEach(function(angka, value, array) {

//     console.log(value, angka)
// })
// let penduduk = { 'nama': 'Marojahan', 'alamat': { 'jalan': "gatot", 'kota': 'Medan', 'Provinsi': 'Sumut' }, 'pekerjaan': 'PNS' }
// let objek = JSON.parse(penduduk)
// console.log(objek.alamat.jalan)


// let error = false
// let masuk1 = document.querySelector('#masuk1')
// if (error == true) {
//     masuk1.addEventListener('click', function(e) {
//         e.preventDefault()
//         console.log('tidak masuk')
//     })

// }
// masuk1.addEventListener('click', function() {

//     console.log('masuk')
// })