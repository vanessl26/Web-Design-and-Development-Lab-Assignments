window.onload = function() { fungsidom(); }

function fungsidom() {






    // title 
	a = document.getElementsByTagName("title")[0].firstChild;
	a.nodeValue = "UMN";

    //intro
    document.getElementById("greetings").innerHTML = "Selamat datang di Universitas Multimedia Nusantara, Kampus Lokal dengan Kualitas Internasional";
	
	// menu
    var home = document.getElementById("menu").getElementsByTagName("a")[0].firstChild;
    home.nodeValue="Utama";

    var home = document.getElementById("menu").getElementsByTagName("a")[1].firstChild;
    home.nodeValue = "Prodi";

    var home = document.getElementById("menu").getElementsByTagName("a")[2].firstChild;
    home.nodeValue = "Akademis";

    var home = document.getElementById("menu").getElementsByTagName("a")[3].firstChild;
    home.nodeValue = "Beasiswa";

    var home = document.getElementById("menu").getElementsByTagName("a")[4].firstChild;
    home.nodeValue = "Kegiatan";

    var home = document.getElementById("menu").getElementsByTagName("a")[5].firstChild;
    home.nodeValue = "Berita";


    //BAGIAN KANAN 
    // side box h1 
	document.getElementsByTagName("h1")[0].firstChild.nodeValue = "Pencarian";
    document.getElementsByTagName("h1")[1].firstChild.nodeValue = "Jurusan";
    document.getElementsByTagName("h1")[2].firstChild.nodeValue = "Lowongan Kerja";
    document.getElementsByTagName("h1")[3].firstChild.nodeValue = "UMN";

    //list jurusan 
    document.getElementsByClassName("category")[0].getElementsByTagName("a")[0].firstChild.nodeValue = "Sistem Informasi";
    document.getElementsByClassName("category")[0].getElementsByTagName("a")[1].firstChild.nodeValue = "Teknik Informatika";
    document.getElementsByClassName("category")[0].getElementsByTagName("a")[2].firstChild.nodeValue = "Ilmu Komunikasi";
    //1
    let bref = document.createElement("a");
	bref.href = "#";
	bref.innerHTML = "Manajemen";
	let liB = document.createElement("li");
	liB.appendChild(bref);
	document.getElementsByClassName("category")[0].appendChild(liB);
    //2
	let cref = document.createElement("a");
	cref.href = "#";
	cref.innerHTML = "Akuntansi";
	let liC = document.createElement("li");
	liC.appendChild(cref);
	document.getElementsByClassName("category")[0].appendChild(liC);
    //3
	let dref = document.createElement("a");
	dref.href = "#";
	dref.innerHTML = "Broadcasting";
	let lid = document.createElement("li");
	lid.appendChild(dref);
	document.getElementsByClassName("category")[0].appendChild(lid);
	
    //remove all br 
    var cell = document.getElementsByClassName("category")[0].getElementsByTagName('br');
    var length = cell.length;
    for(var i = 0; i < length; i++) {
        cell[0].parentNode.removeChild(cell[0]);
    }


    //lowongan kerja 
    document.getElementsByClassName("tags")[0].getElementsByTagName("button")[0].firstChild.nodeValue = "Programmer";
	document.getElementsByClassName("tags")[0].getElementsByTagName("button")[1].firstChild.nodeValue = "Designer";
	document.getElementsByClassName("tags")[0].getElementsByTagName("button")[2].firstChild.nodeValue = "Konsultan";
	document.getElementsByClassName("tags")[0].getElementsByTagName("button")[3].firstChild.nodeValue = "Analysts";

    //UMN

    document.getElementsByClassName("custom")[0].getElementsByTagName("p1")[0].firstChild.nodeValue = "UMN adalah kampus terbaik di Tangerang. Ayo bergabung dengan keluarga besar UMN.";
	document.getElementsByClassName("custom")[0].getElementsByTagName("p1")[1].lastChild.nodeValue = " ";
   

    //BAGIAN KIRI 
	//title
    var title = document.getElementById("main").getElementsByTagName("h2")[0].firstChild;
    title.nodeValue = "Jurusan Sistem Informasi";
    var title = document.getElementById("main").getElementsByTagName("h2")[1].firstChild;
    title.nodeValue = "Jurusan Teknik Informatika";


    // isi konten 
    document.getElementsByClassName("content")[0].getElementsByTagName("p")[0].firstChild.nodeValue = "Jurusan ini mempelajari tentang bagaimana membangun dan menerapkan teknologi informasi dengan proses bisnis yang ada saat ini, sehingga suatu bisnis akan dapat dengan efektif mencapai tujuannya dengan menerapkan IT dalam bisnis";
	document.getElementsByClassName("content")[0].getElementsByTagName("p")[1].firstChild.nodeValue = "";
	document.getElementsByClassName("content")[1].getElementsByTagName("p")[0].firstChild.nodeValue = "Jurusan ini mempelajari  tentang bagaimana mengembangkan computer vision, robotica, intelegent system, dan hal-hal lainnya yang terkait dengan pengembangan komputer di masa yang akan datang";
	document.getElementsByClassName("content")[1].getElementsByTagName("p")[1].firstChild.nodeValue = "";

    //foto konten 


    document.getElementById("main").getElementsByTagName("img")[0].src = "gambar/jurusan_si.jpg";
    document.getElementById("main").getElementsByTagName("img")[1].src = "gambar/jurusan_ti.jpg";


    //footer 
	document.getElementsByTagName("p")[4].firstChild.nodeValue = "&copy;2019 UMN Students";
    

}