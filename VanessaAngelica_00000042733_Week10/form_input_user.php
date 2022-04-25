<form action="insert_user.php" style="width:80%; margin-left:5%" method="post">

    <div class="container">
    <h1>New User Data</h1>
    <p>Name<input type="text" name="user_name" required></p>
    <p>Address<input type="text" name="user_description" required></p>
    <button type="submit">Save</button>
    </div>
    
</form>

<style>
    body {
        margin: 5vh 0;
        background-color: #eee;
        font-family: arial;
        color: #54524d;
    }

    .container{
        width: 80%;
        margin: 0 10%;
        background-color: white;
        border-radius: 1rem;
        padding: 2% 5%;
    }

    h1{
        text-align: center;
    }

    form p {
        font-size: 1.2rem;
    }

    form input{
        width: 100%;
        height: 5vh;
        border-radius: 0.3rem;
        font-size: 1rem;
        padding: 0 0.5vw;
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
</style>