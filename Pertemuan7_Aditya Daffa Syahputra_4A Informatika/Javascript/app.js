let nama = 'Aditya Daffa Syahputra'

const umur = 18
const mahasiswa = [
    "Aditya",
    "Daffa",
    "Syahputra"
]

console.log(mahasiswa)

console.log(nama)
console.log(umur)

console.error("Error : Data gagal diinput")

console.info("data masuk")

document.write("Adit <br>")

for (let i = 0; i < 10; i++) {
    document.write("Data " + (i+1) + "<br>")
}


for (let i = 0; i < mahasiswa.length; i++) {
    document.write(mahasiswa[i] + "<br>")   
}


const btn = document.querySelector(".btn")

console.log(btn);

btn.addEventListener("click", function(){

    //console.log("Tombol")
    document.body.style.backgroundColor = "black"
})