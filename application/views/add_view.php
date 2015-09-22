<h1 align='center'>Add contact</h1>
<form action="" method="POST">
    <table>
        <tr>
            <td>Name:</td><td> <input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td><td><input type="email" name="email"> </td>
        </tr>
        <tr>
            <td>Phone:</td><td><input type="text" name="phone"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value='add'><br>
    <?php echo $result_msg ?>
</form>
