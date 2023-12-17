//DOM Manipulation

const judul = document.getElementById('judul');
judul.innerHTML = 'UAS Pemrograman Web';

const container = document.querySelector('#container');
container.style.color = 'white';

//Buat elemen baru
const pBaru = document.createElement('p');
const teksPBaru = document.createTextNode('Silahkan Mengisi Formulir Yang Tersedia');

//Simpan tulisan ke dalam paragraf
pBaru.appendChild(teksPBaru);

//Simpan pBaru di akhir section a
const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);

//Validasi Form
function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
  
    if (name === "" || email === "") {
      alert("Nama dan Email harus diisi!");
      return;
    }
  
    displayFormData(name, email);
  }
  
function displayFormData(name, email) {
    var table = document.getElementById('dataTable');
    var newRow = table.insertRow(-1);
  
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
  
    cell1.innerHTML = name;
    cell2.innerHTML = email;
  
    var fakultasValue = document.getElementById('fakultas');
    cell3.innerHTML = fakultasValue ? fakultasValue.value : 'Belum dipilih';
  
    var radioValue = document.querySelector('input[name="radio"]:checked');
    cell4.innerHTML = radioValue ? radioValue.value : 'Belum dipilih';
  }