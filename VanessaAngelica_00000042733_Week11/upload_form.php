<div class="container">
    <form action="upload_proses.php"
            method="post"
            enctype="multipart/form-data">

    <h1>Upload Page</h1>
    <p>Judul:</p>
    <input class="judul" type="text" name="judul" /><br />
    <p>Foto:</p> 
    <input class="foto" type="file" name="foto" /><br />
    <button type="submit">Upload</button>
</form>
</div>

<style>
    body {
        margin: 5vh 0;
        background-color: #eee;
        font-family: arial;
        color: #54524d;
    }

    .container{
        width: 80%;
        margin: 0 5%;
        background-color: white;
        border-radius: 1rem;
        padding: 2% 5%;
    }

    h1{
        text-align: center;
    }

    p{
        font-size: 1.2rem;
    }

    .judul {
        width: 100%;
        height: 6vh;
        border-radius: 0.3rem;
        font-size: 1.2rem;
        padding: 0 0.5vw;
    }

    .foto{
        border-radius: 0.2rem;
        font-size: 1.2rem;
    }

    button{
        margin: 5vh 45% 0 45%;
        padding: 0.5rem;
        font-weight: bold;
        background-color: #ffc21c;
        border-radius: 0.3rem;
        font-size: 1.2rem;
    }

    button:hover{
        background-color: #1cb030;
        color: whitesmoke;
        transition: 0.5s;
    }
</style>