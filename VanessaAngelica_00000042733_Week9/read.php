<?php
require "conn.php";

$sql = "SELECT item.item_id as itemid, item.item_name as itemname, item.item_description as itemdesc , users.user_name as username FROM item INNER JOIN 
users ON  item.user_id = users.user_id";
$con = GetConnection();

$hasil = $con->prepare($sql);
$hasil->execute();
?>


<div class="container">

    <h1>List of Items</h1>
    
    <table align = "center" border = "1">
        <tr>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Desription</th>
            <th>Username</th>
            <th>Action Button</th>
        </tr>

        <?php
        $i = 1;
        while ($row = $hasil->fetch()) :
        ?>
            <tr>
                <td><?php echo $row['itemid'] ?></td>
                <td><?php echo $row['itemname'] ?></td>
                <td><?php echo $row['itemdesc'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td>
                    <a href="form_edit_user.php?itemid=<?php echo $row['itemid'] ?>">Edit</a> <B>||</B>
                    <a href="delete_user.php?itemid=<?php echo $row['itemid'] ?>">Delete</a>

                </td>
            </tr>
        <?php
            $i++;
        endwhile;
        ?>
    </table>

    <button> <a href="form_input_user.php" style="text-decoration: none">New User</a></button>
    <button> <a href="form_input_item.php" style="text-decoration: none">New Item</a></button>
    <button> <a href="view_users.php" style="text-decoration: none">View Users</a></button>
</div>

<style>
    body {
        background-color: #eee;
        font-family: arial;
        text-align: center;
        color: #54524d;
        margin: 5% 0;
    }

    .container{
        height: 100%;
        width: 80%;
        margin: 0 auto;
        background-color: white;
        border-radius: 1rem;
    }

    h1{
        padding-top: 3vh;
    }

    a{
        font-size: 1.5rem;
        font-weight: bold;
    }

    a:hover{
        color: red;
        transition: 0.5s;
    }

    table{
        margin-top: 2vh;
        background-color: white;
    }

    table th, table td{
        font-size: 1.5rem;
        padding: 0.5rem;
        color: #54524d;
    }

    button{
        margin-top: 5vh;
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