<div class="container">
    <h1>Login</h1>

    <form action="login_proses.php" method="post">
        Username:
        <input type="text" name="uname"><br>
        Password:
        <input type="password" name="upass"><br>
        <button type="submit">Login</button>
    </form>

    Don't have an account yet? <a href="register.php">Register</a>
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
</style>