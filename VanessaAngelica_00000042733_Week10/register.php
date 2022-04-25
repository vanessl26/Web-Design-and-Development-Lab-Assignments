<div class="container">
    <h1>Register</h1>
    <form action="register_proses.php" method="post">
        Username:
        <input type="text" name="uname"><br>
        Password
        <input type="password" name="upass"><br>
        <!-- Role:
        <select name="role">
            <option value="dosen">Dosen</option>
            <option value="mahasiswa">Mahasiswa</option>
        </select> -->
        <button type="submit">Register</button>
    </form>

    Already have an account? <a href="login.php">Login</a>
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

    form input{
        width: 100%;
        height: 5vh;
        margin-bottom: 3vh;
        border-radius: 0.3rem;
        font-size: 1rem;
        padding: 0 0.5vw;
    }

    select{
        width: fit-width;
        text-align: center;
        height: 5vh;
        border-radius: 0.3rem;
        font-size: 1rem;
        padding: 0 0.5vw;
    }

    button{
        margin: 3vh 45%;
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

    a:hover{
        color: red;
        transition: 0.5s;
    }
</style>