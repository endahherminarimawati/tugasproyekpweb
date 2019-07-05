function validasi(){
    var nama = document.getElementById("nama").value; //digunakan untuk menampung sebuah data dari nama
    var laki = kelamin[0].checked//digunakan untuk menampung sebuah data dari laki
    var perempuan = kelamin[1].checked//digunakan untuk menampung sebuah data dari perempuan
    var agama = document.getElementById("agama").value;//digunakan untuk menampung sebuah data dari agama
    var alamat = document.getElementById("alamat").value;//digunakan untuk menampung sebuah data dari alamat
    var jurusan1 = document.getElementById("jurusan1").value;//digunakan untuk menampung sebuah data dari jurusan1
    var jurusan2 = document.getElementById("jurusan2").value; //digunakan untuk menampung sebuah data dari jurusan2
  
    if(nama === ""){//jika tidak sama dengan nama maka akan keluar data tidak boleh kosong dan data harus terisi semua
        alert("Data tidak boleh kosong dan data harus terisi semua");//muncul pesan
        location.href='/tugas/daftar.html';//dialihkan ke daftar.html
    }else if(laki === "" && perempuan === ""){//jika tidak sama dengan laki laki dan perempuan maka akan keluar data tidak boleh kosong dan data harus terisi semua
        alert("Data tidak boleh kosong dan data harus terisi semua");//muncul pesan
        location.href='/tugas/daftar.html';//dialihkan ke daftar.html
    } else if(agama === ""){//jika tidak sama dengan agama maka akan keluar data tidak boleh kosong dan data harus terisi semua
        alert("Data tidak boleh kosong dan data harus terisi semua");//muncul pesan
        location.href='/tugas/daftar.html';//dialihkan ke daftar.html
    }else if(alamat === ""){//jika tidak sama dengan alamat maka akan keluar data tidak boleh kosong dan data harus terisi semua
        alert("Data tidak boleh kosong dan data harus terisi semua");//muncul pesan
        location.href='/tugas/daftar.html';//dialihkan ke daftar.html
    }else if(jurusan1 === ""){//jika tidak sama dengan jurusan1 maka akan keluar data tidak boleh kosong dan data harus terisi semua
        alert("Data tidak boleh kosong dan data harus terisi semua");//muncul pesan
        location.href='/tugas/daftar.html';//dialihkan ke daftar.html
    }else if(jurusan2 === ""){//jika tidak sama dengan jurusan2 maka akan keluar data tidak boleh kosong dan data harus terisi semua
        alert("Data tidak boleh kosong dan data harus terisi semua");//muncul pesan
        location.href='/tugas/daftar.html';//dialihkan ke daftar.html
    }else{
        location.href='/tugas/simpandata.php';//dialihkan simpandata.php
    }
}

function index(){
    alert("Selamat datang di web Endah Herminarimawati");//muncul pesan
}

function kampus(){
    alert("Selamat datang di Universitas Ahmad Dahlan");//muncul pesan
}