<?php
include 'inc/header.php';
include "database.php";
include "config.php";
?>

<?php
$id = $_GET["id"];
$db = new Database();
$query = "SELECT * FROM tbl_user WHERE id=$id";
$getData = $db->select($query)->fetch_assoc(); // to fecth data from table to send it in DB;

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $skill = mysqli_real_escape_string($db->link, $_POST['skill']);

    if ($name == ' ' || $email == ' ' || $skill == ' ') {
        $error = "field must not be empty ! ";
    } else {
        $query = "UPDATE tbl_user
        SET
        name  = '$name',
        email = '$email',
        skill = '$skill'
        WHERE id = $id";
        $update = $db->update($query);
    }
}
?>

<?php
if (isset($_POST['delete'])) {
    $query = "DELETE FROM tbl_user WHERE id=$id";
    $deleteData = $db->delete($query);
}
?>

<?php
if (isset($error)) {
    echo "<span style='color:greenyellow'>" . $error . "</span>";
}
?>

<form action="update.php?id=<?php echo $id; ?>" method="post">
    <!-- Jei id pass korse, oi id te thaka lagbe -->
    <table>
        <tr>
            <td>Name</td>
            <td> <input type="text" name="name" value="<?php echo $getData['name'] ?>" /></td>
        </tr>

        <tr>
            <td>Email</td>
            <td> <input type="text" name="email" value="<?php echo $getData['email'] ?>" /></td>
        </tr>

        <tr>
            <td>Skill</td>
            <td> <input type="text" name="skill" value="<?php echo $getData['skill'] ?>" /></td>
        </tr>

        <tr>
            <td></td>

            <td>
                <input type="submit" name="submit" value="Update" />
                <input type="reset" value="Cancel" />
                <input type="submit" name="delete" Value="Delete" />
            </td>
        </tr>

    </table>
</form>

<a href="index.php">Go home</a>

<?php include 'inc/footer.php'; ?>