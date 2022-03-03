MenuUtama();
var sambutan = document.getElementById("greetings");
sambutan.innerHTML = "Selamat datang di Universitas Multimedia Nusantara, Kampus Lokal dengan Kualitas Internasional";
teknikInfo();
sistemInfo();
sidebar();

function MenuUtama(){
    var collection = document.getElementsByTagName("a")[0];
    collection.innerHTML = "Utama";  

    collection = document.getElementsByTagName("a")[1];
    collection.innerHTML = "Prodi";

    collection = document.getElementsByTagName("a")[2];
    collection.innerHTML = "Akademis";

    collection = document.getElementsByTagName("a")[3];
    collection.innerHTML = "Beasiswa";

    collection = document.getElementsByTagName("a")[4];
    collection.innerHTML = "Kegiatan";

    collection = document.getElementsByTagName("a")[5];
    collection.innerHTML = "Berita";

    collection = document.getElementsByTagName("a")[6];
    collection.innerHTML = "Kontak";
}

function sistemInfo(){
    const judul = document.getElementsByTagName ("h2")[0];
    judul.innerHTML = "Jurusan Sistem Informasi";

    var image = document.getElementsByTagName("img")[1];
    document.getElementsByClassName("icon").innerHTML = image.style.marginTop = "5px";
    document.getElementsByClassName("icon").innerHTML = image.style.marginBottom = "5px";
    document.getElementsByClassName("icon").innerHTML = image.style.width = "90%";
    document.getElementsByClassName("icon").innerHTML = image.src = "gambar/jurusan_si.JPG";

    var isi = document.getElementsByClassName("content")[0];
    isi.innerHTML = "Jurusan ini mempelajari tentang bagaimana membangun dan menerapkan teknologi informasi dengan proses bisnis yang ada saat ini, sehingga suatu bisnis akan dapat dengan efektif mencapai tujuannya dengan menerapkan IT dalam bisnis.";
}


function teknikInfo(){
    const judul2 = document.getElementsByTagName("h2")[1];
    judul2.innerHTML = "Jurusan Teknik Informatika";

    var image2 = document.getElementsByTagName("img")[2];
    document.getElementsByClassName("icon").innerHTML = image2.style.marginTop = "5px";
    document.getElementsByClassName("icon").innerHTML = image2.style.marginBottom = "5px";
    document.getElementsByClassName("icon").innerHTML = image2.style.width = "90%";
    document.getElementsByClassName("icon").innerHTML = image2.src = "gambar/jurusan_ti.JPG";

    var isi2 = document.getElementsByClassName("content")[1];
    isi2.innerHTML = "Jurusan ini mempelajari tentang bagaimana mengembangkan computer vision, robotica intelligence system, dan hal-hal lainnya yang terkait dengan pengembangan komputer di masa yang akan datang"

}

function sidebar(){
    var pencarian = document.getElementsByTagName("h1")[0];
    pencarian.innerHTML="Pencarian";  
    
    var pencarian2 = document.getElementsByTagName("h1")[1];
    pencarian2.innerHTML="Jurusan";

    var pencarian3 = document.getElementsByTagName("h1")[2];
    pencarian3.innerHTML="Lowongan Pekerjaan";

    var pencarian4 = document.getElementsByTagName("h1")[3];
    pencarian4.innerHTML="UMN";

    var jurusan = document.getElementsByTagName("a")[6];
    jurusan.innerHTML="Sistem Informasi";

    jurusan = document.getElementsByTagName("a")[7];
    jurusan.innerHTML="Teknik Informatika";

    jurusan = document.getElementsByTagName("a")[8];
    jurusan.innerHTML="Ilmu Komunikasi";


    var tombol = document.getElementsByTagName("button")[1];
    tombol.innerHTML = "Programmer"

    tombol = document.getElementsByTagName("button")[2];
    tombol.innerHTML = "Designer"

    tombol = document.getElementsByTagName("button")[3];
    tombol.innerHTML = "Konsultan"

    tombol = document.getElementsByTagName("button")[4];
    tombol.innerHTML = "Analyst"

    var umn = document.getElementsByClassName("custom")[0];
    umn.innerHTML= "UMN adalah kampus terbaik di Tangerang. Ayo bergabung dengan keluarga besar UMN.";


    // const para = document.createElement("li");
    // // const para = document.createElement("li");
    // para.innerHTML = "Manajemen";
    // document.getElementsByTagName("li")[7].appendChild(para);

    // document.getElementsByTagName("li")[8].appendChild(li);
    // para.innerHTML = para.style.marginLeft = "15px";
    // para.innerHTML = para.style.marginBottom = "5px";
    // para.innerHTML = para.style.color = "gray";
    // para.innerHTML = para.style.fontFamily = "Times New Roman";
    
    const arr = ['Manajemen', 'Akuntansi', 'Broadcasting'];
    var select = document.getElementsByClassName("category")[0];
    for (var i = 0; i < arr.length; i++) {
        var li = document.createElement("li");
        li.innerHTML = li.style.marginLeft = "15px";
        li.innerHTML = li.style.marginBottom = "5px";
        li.innerHTML = li.style.color = "gray";
        li.innerHTML = li.style.fontFamily = "Times New Roman";
        li.innerHTML = arr[i];
        select.insertBefore(li, document.getElementsByTagName("br")[2]);
    
    }
        
    
}

