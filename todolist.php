<?php 

$con = mysqli_connect("localhost","root","Suchada-pp-77","todolist");

$sql = "select * from list";

$data = $con->query($sql);
?>

<html>
<head>Todo List</head>
<body>
    <div>
        <form >
            <input type="text" name="list" require><button type="submit">ADD</button>
            <table>
                <?php while($result = $data->fetch_assoc()): ?>
                <tr>
                    <td><input type="checkbox" name="check"></td>
                    <td><?php echo $result['ListName']; ?></td>
                    <td><?php echo $result['Date']; ?></td>
                    <td>
                        <button type="submit">Update</button>
                        <button type="submit">Delete</button>
                    </td>
                </tr>
                <?php endwhile ?>
            </table>
        </form>
    </div>
</body>
</html>