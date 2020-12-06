<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <?php
        require('../controller/viewVerification.php');
    ?>
        <br><br>
        <h1>View Page</h1>
        <br><br>
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">User Id</th>
            <th scope="col">Name</th>
            <th scope="col">Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $userId?></td>
            <td><?php echo $name?></td>
            <td><?php echo $balance?></td>
            </tr>
        </tbody>
        </table>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <br><br>
            <br><br>
            <div class="form-group">
                <label for="amount">Enter Your Amount</label>
                <input type="text" class="form-control" name="amount" placeholder="Enter The Amount" id="amount" value="<?php echo $amount;?>">
            </div>
            <br>
            <button type="submit" value="diposit" name="diposit" class="btn btn-success btn-lg">Diposit</button>
            <button type="submit" value="withdraw" name="withdraw" class="btn btn-danger btn-lg">Withdraw</button>
            <br><br><br>
            <hr>
            <button type="submit" value="deleteAccount" name="deleteAccount" class="btn btn-danger btn-lg">Delete Account</button>
        </form>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>