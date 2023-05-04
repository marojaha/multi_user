let tugas = document.querySelectorAll('.tugas')
let pengumpulan = document.getElementById('pengumpulan')
let job = document.querySelector('.job')
let form = document.querySelector('form')
let controler = document.querySelector('.controler')
let container = document.querySelector('.container')
let bungkus = document.querySelector('.bungkus')
let body = document.body
    // const judul = document.getElementById('judul')

let tasks = ['Pengumpulan', 'Pembakaran', 'Pemilahan', 'Meteran', 'Pengangkutan', ' Limbah B3', 'Ph', 'Maintanance']
let perawatan = ['Ganti Oli', 'Grease', 'Filter', 'Kaporit']

function munculTasks(tugas) {
    tugas.forEach(function(task) {
        let tombol = document.createElement('button')
        tombol.innerText = task
        tombol.setAttribute('class', 'task')
        container.appendChild(tombol)

    })
}

function buatForm(id, nId) {
    let form = document.createElement('form')
    form.setAttribute(id, nId)
    $('.job').append(form)
}

function buatDiv(parent, id, nId) {
    let div = document.createElement('div')
    div.setAttribute(id, nId)
    parent.appendChild(div)
}



function buatInput(id, nId, pHolder, nPlaceH, parent) {

    let input = document.createElement('input')
    input.setAttribute(id, nId)
    input.setAttribute(pHolder, nPlaceH)
    parent.appendChild(input)
}




munculTasks(tasks)


$('.job').hide()



container.addEventListener('click', function(e) {

    if (e.target.innerText == 'Pengumpulan') {
        pengumpula()

    } else if (e.target.innerText == 'Pembakaran') {
        pembakar()

    } else if (e.target.innerText == 'Pemilahan') {
        pemilah()

    } else if (e.target.innerText == 'Meteran') {
        meteranLimbah()

    } else if (e.target.innerText == 'Pengangkutan') {
        angkut()

    } else if (e.target.innerText == 'Limbah B3') {
        limbahB3()

    } else if (e.target.innerText == 'Ph') {
        phAir()
    } else if (e.target.innerText == 'Maintanance') {
        // maintanance()
        hilangkanAnak(container)
        munculTasks(perawatan)
    }
    if (e.target.innerText !== 'Maintanance') {
        buatTombolKembali(job, 'kembali')
        kembali.addEventListener('click', function() {
            hilangkanAnak(job)
            $('.job').hide()
            $('.container').show()
            $('body').css('background-color', 'grey')
            $('#pesanErr').html('')
        })
    } else {
        buatTombolKembali(bungkus, 'kembali1')
        kembali1.addEventListener('click', function() {
            hilangkanAnak(container)
            munculTasks(tasks)
            kembali1.remove()
            return
        })

        container.addEventListener('click', function(e) {
            if (e.target.innerText == 'Ganti Oli') {

                kembali1.remove()
                hilangkanAnak(container)
                buatTombolKembali(bungkus, 'kembali2')
                kembali2.addEventListener('click', function() {

                    console.log('ganti oli')
                    munculTasks(perawatan)
                    kembali2.remove()
                    buatTombolKembali(bungkus, 'kembali1')
                    kembali1.addEventListener('click', function() {
                        hilangkanAnak(container)
                        munculTasks(tasks)
                        kembali1.remove()

                    })
                })

            }
        })
    }
})


function judulTask(jPesan, parent) {
    let task = document.createElement('p')
    task.innerText = jPesan
    task.setAttribute('id', 'judul')
    parent.appendChild(task)
}

function pembakar() {

    $('.container').hide()
    $('.job').show()
    judulTask('Pembakaran', job)
    buatForm('id', 'bakar')
    buatDiv(bakar, 'class', 'inputField')
    buatDiv(bakar, 'class', 'inputField')
    let inputField = document.querySelectorAll('.inputField')
    buatInput('id', 'mesin1', 'placeholder', 'Mesin 1', inputField[0])
    buatInput('id', 'mesin2', 'placeholder', 'Mesin 2', inputField[1])

    tombolMasuk(bakar)
    ajakBakar()
}

function tombolMasuk(parent) {
    let tombol = document.createElement('button')
    tombol.innerText = 'Masuk'
    tombol.setAttribute('type', 'submit')
    tombol.setAttribute('id', 'masuk')
    parent.appendChild(tombol)
}

function pengumpula() {
    $('.container').hide()
    $('.job').show()
        // job.style.background = '#e6eeee'
    body.style.background = '#62afaf'
    judulTask('Pengumpulan', job)
    buatForm('id', 'kumpul')
    buatDiv(kumpul, 'class', 'inputField')
    buatDiv(kumpul, 'class', 'inputField')
    buatDiv(kumpul, 'class', 'inputField')
    let inputField = document.querySelectorAll('.inputField')
    buatInput('id', 'jumlah', 'placeholder', 'Jumlah', inputField[0])
    buatInput('id', 'operator', 'placeholder', 'Operator', inputField[1])
    buatLabel('Sumber ', inputField[2])
    buatPilihan(inputField[2])

    tombolMasuk(kumpul)
    ajakKumpul()

}


function pemilah() {
    $('.container').hide()
    $('.job').show()
    judulTask('Pemilahan', job)
    buatForm('id', 'pilah')
        // $('#pilah').addClass('displayGrid')
    buatDiv(pilah, 'class', 'inputField')
    buatDiv(pilah, 'class', 'inputField')
    buatDiv(pilah, 'class', 'inputField')
    buatDiv(pilah, 'class', 'inputField')
    buatDiv(pilah, 'class', 'inputField')
    let inputField = document.querySelectorAll('.inputField')
    buatInput('id', 'botolPlastik', 'placeholder', 'Botol Plastik', inputField[0])
    buatInput('id', 'kardus', 'placeholder', 'Kardus', inputField[1])
    buatInput('id', 'kAlminium', 'placeholder', 'Kaleng Alminium', inputField[2])
    buatInput('id', 'kBiasa', 'placeholder', 'Kaleng Biasa', inputField[3])
    buatInput('id', 'organik', 'placeholder', 'Organik', inputField[4])

    tombolMasuk(pilah)
    ajakPilah()
}

function hilangkanAnak(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild)
    }
}

function meteranLimbah() {
    $('.container').hide()
    $('.job').show()
    judulTask('Meteran', job)
    buatForm('id', 'meteran')
    buatDiv(meteran, 'class', 'inputField')
    buatDiv(meteran, 'class', 'inputField')
    let inputField = document.querySelectorAll('.inputField')
    buatInput('id', 'ipal', 'placeholder', 'Ipal', inputField[0])
    buatInput('id', 'recycle', 'placeholder', 'Recycle', inputField[1])
    buatDiv(meteran, 'placeholder', 'Ipal', 'id', 'ipal')
    buatDiv(meteran, 'placeholder', 'Recycle', 'id', 'recycle')

    tombolMasuk(meteran)
    ajakMeteran()
}

function angkut() {
    $('.container').hide()
    $('.job').show()
    judulTask('Pengangkutan', job)
    buatForm('id', 'truck')
    buatDiv(truck, 'class', 'inputField')
    buatDiv(truck, 'class', 'inputField')
    buatDiv(truck, 'class', 'inputField')
    let inputField = document.querySelectorAll('.inputField')
    buatInput('placeholder', 'No Polisi', 'id', 'nopol', inputField[0])
    buatInput('placeholder', 'Volume', 'id', 'volume', inputField[1])
    buatInput('placeholder', 'Operator', 'id', 'operator', inputField[2])

    tombolMasuk(truck)
    ajakAngkut()
}

function limbahB3() {
    $('.container').hide()
    $('.job').show()
    judulTask('Limbah B3', job)
    buatForm('id', 'b3')
    buatDiv(b3, 'class', 'inputField')
    buatDiv(b3, 'class', 'inputField')
    buatDiv(b3, 'class', 'inputField')
    buatDiv(b3, 'class', 'inputField')
    let inputField = document.querySelectorAll('.inputField')

    buatInput('id', 'jenisLimbah', 'placeholder', 'Jenis Limbah B3', inputField[0])
    buatInput('id', 'kode', 'placeholder', 'Kode L B3', inputField[1])
    buatInput('id', 'volume', 'placeholder', 'Volume', inputField[2])
    buatInput('id', 'sumber', 'placeholder', 'Sumber', inputField[3])

    tombolMasuk(b3)
    ajakB3()
}

function phAir() {
    $('.container').hide()
    $('.job').show()
    judulTask('Ph Air', job)
    buatForm('id', 'ph')
    buatDiv(ph, 'class', 'inputField')
    buatDiv(ph, 'class', 'inputField')
    buatDiv(ph, 'class', 'inputField')
    buatDiv(ph, 'class', 'inputField')
    buatDiv(ph, 'class', 'inputField')
    buatDiv(ph, 'class', 'inputField')
    buatDiv(ph, 'class', 'inputField')
    let inputField = document.querySelectorAll('.inputField')

    buatInput('id', 'aerasi1', 'placeholder', 'Aerasi 1', inputField[0])
    buatInput('id', 'aerasi2', 'placeholder', 'Aerasi 2', inputField[1])
    buatInput('id', 'aerasi3', 'placeholder', 'Aerasi 3', inputField[2])
    buatInput('id', 'effluent', 'placeholder', 'Effluent', inputField[3])
    buatInput('id', 'recycle', 'placeholder', 'Recycle', inputField[4])
    buatInput('id', 'inlet', 'placeholder', 'Inlet', inputField[5])
    buatInput('id', 'pam', 'placeholder', 'PAM', inputField[6])

    tombolMasuk(ph)
    ajakPhAir()
}

function maintanance() {
    hilangkanAnak(container)
    munculTasks(perawatan)


}

function buatTombolKembali(parent, nId) {
    let tombolKembali = document.createElement('button')


    tombolKembali.setAttribute('id', nId)
        // tombolKembali.setAttribute('type', 'submit')
    tombolKembali.innerText = 'Kembali'
    parent.appendChild(tombolKembali)


}





function buatPilihan(parent) {
    let select = document.createElement('select')
    select.setAttribute('id', 'sumber')
    let option = document.createElement('option')
    let option1 = document.createElement('option')
    let option2 = document.createElement('option')
    let option3 = document.createElement('option')
    let option4 = document.createElement('option')
    option.innerText = ''
    option1.innerText = 'Bandara'
    option2.innerText = 'Pesawat'
    option3.innerText = 'Pemeliharaan'
    option4.innerText = 'Pengembangan'
    select.appendChild(option)
    select.appendChild(option1)
    select.appendChild(option2)
    select.appendChild(option3)
    select.appendChild(option4)
    parent.appendChild(select)

}

function buatLabel(nLabel, parent) {
    let label = document.createElement('label')
    label.innerText = nLabel
    parent.appendChild(label)
}



function buatInputRadio(a, b, c, d, e, f, sumber) {
    const div = document.createElement('div')
    const input = document.createElement('input')
    const label = document.createElement('label')
    label.innerText = sumber
    input.setAttribute(a, b)
    input.setAttribute(c, d)
    input.setAttribute(e, f)
    div.setAttribute('id', 'inputRadio')
    div.appendChild(input)
    div.appendChild(label)
    job.appendChild(div)

}


let gambarUser = document.querySelector('.gambarUser')
gambarUser.addEventListener('click', function() {
    let gambar = document.querySelector('.gambar')
    gambar.style.display = 'none'
})


function tampilData() {

    $.ajax({
        type: 'GET',
        data: '',
        url: '../ambilData.php',
        success: (result) => {
            let objResult = JSON.parse(result)
            let number = 1
            $.each(objResult, (key, val) => {
                let barisBaru = $('<tr>')
                barisBaru.html('<td>' + number + '</td><td>' + val.waktu + '</td><td>' + val.tanggal + '</td><td>' + val.jumlah + '</td><td>' + val.sumber + '</td><td>' + val.operator + '</td>')
                number++
                let dataHandler = $('#barisData')
                dataHandler.append(barisBaru)

            })
        }
    })
}

function ajakKumpul() {
    $(document).ready(function() {
        $('#kumpul').submit(function(event) {
            event.preventDefault()
            let jumlah = $('#jumlah').val()
            let operator = $('#operator').val()
            let sumber = $('#sumber').val()
            let kembali = $('#kembali').val()
            let submit = $('#submit').val()
            $('#pesanErr').load('indexData.php', {
                jumlah: jumlah,
                operator: operator,
                sumber: sumber,
                kembali: kembali,
                submit: submit
            })
        })
    })
}

function ajakBakar() {

    $(document).ready(function() {
        $('#bakar').submit(function(event) {
            event.preventDefault()
            let mesin1 = $('#mesin1').val()
            let mesin2 = $('#mesin2').val()
            let bakar = $('#bakar').val()
            $('#pesanErr').load('indexDataBakar.php', {
                mesin1: mesin1,
                mesin2: mesin2,
                bakar: bakar
            })
        })
    })
}

function ajakPilah() {

    $(document).ready(function() {
        $('#pilah').submit(function(event) {
            event.preventDefault()
            let botolPlastik = $('#botolPlastik').val()
            let kardus = $('#kardus').val()
            let kAlminium = $('#kAlminium').val()
            let kBiasa = $('#kBiasa').val()
            let organik = $('#organik').val()
            $('#pesanErr').load('indexDataPilah.php', {
                botolPlastik: botolPlastik,
                kardus: kardus,
                kAlminium: kAlminium,
                kBiasa: kBiasa,
                organik: organik
            })
        })
    })
}

function ajakMeteran() {

    $(document).ready(function() {
        $('#meteran').submit(function(event) {
            event.preventDefault()
            let ipal = $('#ipal').val()
            let recycle = $('#recycle').val()

            $('#pesanErr').load('indexDataMeteran.php', {
                ipal: ipal,
                recycle: recycle

            })
        })
    })
}

function ajakAngkut() {

    $(document).ready(function() {
        $('#truck').submit(function(event) {
            event.preventDefault()
            let nopol = $('#nopol').val()
            let volume = $('#volume').val()
            let operator = $('#operator').val()

            $('#pesanErr').load('indexDataAngkut.php', {
                nopol: nopol,
                volume: volume,
                operator: operator

            })
        })
    })
}

function ajakB3() {

    $(document).ready(function() {
        $('#b3').submit(function(event) {
            event.preventDefault()
            let jenisLimbah = $('#jenisLimbah').val()
            let kode = $('#kode').val()
            let volume = $('#volume').val()
            let sumber = $('#sumber').val()

            $('#pesanErr').load('indexDataB3.php', {
                jenisLimbah: jenisLimbah,
                kode: kode,
                volume: volume,
                sumber: sumber

            })
        })
    })
}

function ajakPhAir() {

    $(document).ready(function() {
        $('#ph').submit(function(event) {
            event.preventDefault()
            let aerasi1 = $('#aerasi1').val()
            let aerasi2 = $('#aerasi2').val()
            let aerasi3 = $('#aerasi3').val()
            let effluent = $('#effluent').val()
            let recycle = $('#recycle').val()
            let inlet = $('#inlet').val()
            let pam = $('#pam').val()

            $('#pesanErr').load('indexDataPhAir.php', {
                aerasi1: aerasi1,
                aerasi2: aerasi2,
                aerasi3: aerasi3,
                effluent: effluent,
                recycle: recycle,
                inlet: inlet,
                pam: pam

            })
        })
    })
}