<html>

<body>
    <?php ?>

    <form action="form.php" method="get" role="form">
        <legend>Form title</legend>

        <div class="form-group">
            <label for="">label</label>
            Name:<input type="text" name="name" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">label</label>
            Email:<input type="text" name="email" placeholder="Input field">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <?php 
    echo $_GET["name"];
    echo'<br>';
    echo $_GET["email"];
    ?>
    <br>
</body>

</html>