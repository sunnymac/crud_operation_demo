<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <button onclick="window.location.href='user.php';" class="btn btn-primary my-5">
            Add User
        </button>


        <!--
        <button class="btn btn-primary my-5">
            <a class="text-light" href="user.php"> Add User </a>
        </button>
-->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conntect.php';
                $sql = "SELECT * FROM `crud` WHERE 1";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '
                        <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>
                    <td>
                    
                    <button onclick="window.location.href=\'update.php?myid=' . $id . '\';" class="btn btn-primary">Update</button>
                    <button onclick="window.location.href=\'delete.php?myid=' . $id . '\';" class="btn btn-danger">Delete</button>
                </td>
                </tr>
                        ';
                    }

                    // echo $row['name'];
                }
                // else {
                //  echo "error";
                //}

                ?>


            </tbody>
        </table>
    </div>
</body>

</html>