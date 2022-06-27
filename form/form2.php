<html>

<body>

    <form action="form2.php" method="get" role="form">
        <legend>Form title</legend>

        <div class="form-group">
            <label for="">Color</label>
            <input type="text" name="color" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">PluralNoun</label>
            <input type="text" name="pluralNoun" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Celebrity</label>
            <input type="text" name="celebrity" placeholder="Input field">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
      $color = $_GET["color"];
      $pluralNoun = $_GET[ "pluralNoun"];
      $celebrity = $_GET["celebrity"];
      echo "Roses are $color <br>";
      echo "$pluralNoun are blue <br>";
      echo "i love you $celebrity <br>";
    ?>
</body>

</html>