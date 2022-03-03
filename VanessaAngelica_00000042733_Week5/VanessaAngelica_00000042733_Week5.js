menuUtama();
kataSambutan();
sistemInformasi();
teknikInformatika();
searchBar();
jurusan();
lowongan();
kampusUMN();
footer();

function menuUtama() {
    const menu = ["Utama", "Prodi", "Akademis", "Beasiswa", "Kegiatan", "Berita", "Kontak"];

    for (let i = 0; i < menu.length; i++) {
        document.getElementsByTagName("a")[i].innerHTML = menu[i];
    }
}

function kataSambutan() {
    document.getElementById("greetings").innerHTML = "Selamat datang di Universitas Multimedia Nusantara, Kampus Lokal dengan Kualitas Internasional";
}

function sistemInformasi() {
    document.getElementsByTagName("h2")[0].innerHTML = "Jurusan Sistem Informasi";

    var gambarSI = document.getElementsByTagName("img")[1];
    document.getElementsByClassName("icon").innerHTML = gambarSI.src = "gambar/jurusan_si.jpg";
    document.getElementsByClassName("icon").innerHTML = gambarSI.style.width = "90%";

    document.getElementsByClassName("content")[0].innerHTML = "Jurusan ini mempelajari tentang bagaimana membangun dan menerapkan teknologi informasi dengan proses bisnis yang ada saat ini, sehingga suatu bisnis akan dapat dengan efektif mencapai tujuannya dengan menerapkan IT dalam bisnis.";
}

function teknikInformatika() {
    document.getElementsByTagName("h2")[1].innerHTML = "Jurusan Teknik Informatika";

    var gambarIF = document.getElementsByTagName("img")[2];
    document.getElementsByClassName("icon").innerHTML = gambarIF.src = "gambar/jurusan_ti.jpg";
    document.getElementsByClassName("icon").innerHTML = gambarIF.style.width = "90%";

    document.getElementsByClassName("content")[1].innerHTML = "Jurusan ini mempelajari tentang bagaimana membangun dan menerapkan teknologi informasi dengan proses bisnis yang ada saat ini, sehingga suatu bisnis akan dapat dengan efektif mencapai tujuannya dengan menerapkan IT dalam bisnis.";
}

function searchBar() {
    document.getElementsByTagName("h1")[0].innerHTML = "Pencarian";
}

function jurusan() {
    document.getElementsByTagName("h1")[1].innerHTML = "Jurusan";

    document.getElementsByClassName("category")[0].getElementsByTagName("a")[0].firstChild.nodeValue = "Sistem Informasi";
    document.getElementsByClassName("category")[0].getElementsByTagName("a")[1].firstChild.nodeValue = "Teknik Informatika";
    document.getElementsByClassName("category")[0].getElementsByTagName("a")[2].firstChild.nodeValue = "Ilmu Komunikasi";

    const tambahan = ['Manajemen', 'Akuntansi', 'Broadcasting'];
    var loc = document.getElementsByClassName("category")[0];
    for (let i = 0; i < tambahan.length; i++) {
        var li = document.createElement("li");
        li.innerHTML = li.style.marginLeft = "15px";
        li.innerHTML = li.style.marginBottom = "5px";
        li.innerHTML = li.style.color = "gray";
        li.innerHTML = li.style.fontFamily = "Times New Roman";
        li.innerHTML = tambahan[i];
        loc.insertBefore(li, document.getElementsByTagName("br")[2]);
    }
}

function lowongan() {
    document.getElementsByTagName("h1")[2].innerHTML = "Lowongan Pekerjaan";

    const pekerjaan = ["Programmer", "Designer", "Konsultan", "Analyst"];

    for (let i = 0; i < pekerjaan.length; i++) {
        document.getElementsByTagName("button")[i + 1].innerHTML = pekerjaan[i];
    }
}

function kampusUMN() {
    document.getElementsByTagName("h1")[3].innerHTML = "UMN";

    document.getElementsByClassName("custom")[0].innerHTML = "UMN adalah kampus terbaik di Tangerang. Ayo bergabung dengan keluarga besar UMN.";
}

function footer() {
    document.getElementById("copyright").innerHTML = "&copy;2019 UMN Students";
}