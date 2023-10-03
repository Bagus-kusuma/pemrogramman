function validasi() {

    var nama = document.forms["form"]["nama"].value;
    var lahir = document.forms["form"]["lahir"].value;
    var alamat = document.forms["form"]["alamat"].value;
    var agama = document.forms["form"]["agama"].value;
    var univ = document.forms["form"]["univ"].value;
    var fakultas = document.forms["form"]["fakultas"].value;
    var prodi = document.forms["form"]["prodi"].value;
    var nim = document.forms["form"]["nim"].value;


    if (nama == "" || lahir == "" || alamat == "" || agama == "" || univ == "" || fakultas == "" || prodi == "" || nim == "") {
        alert("Semua field harus diisi !");
        return false;
    } else {
        alert("form berhasil di submit !");
        window.location.href = "about.html";
        return false;
    }
}
