<div class="container">
    <form action=proses.php method="post">

    <h1>Formatter Tanggal</h1>
    <p>Tanggal: </p> 
    <input type="text" name="tgl" placeholder="DD/MM/YYYY"/>
    <br>
    <button type="submit">Proses</button>

    </form>
</div>

<style>
    body {
        margin: 5vh 0;
        background-color: #eee;
        font-family: arial;
        color: #54524d;
        text-align: center;
    }

    .container{
        width: 60%;
        margin: 0 auto;
        background-color: white;
        border-radius: 1rem;
        padding: 2% 5%;
    }

    button{
        margin: 0 45%;
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

    input[type=text] {
        width: 50%;
        padding: 1rem;
        margin-bottom: 2rem;
        border: 1px solid black;
        border-radius: 0.5rem;
    }
</style>