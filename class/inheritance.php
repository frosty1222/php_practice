<html>
    <body>
        <?php 
        class Chef{
            function makeChicken(){
                echo "the chef makes chicken <br>";
            }
            function makeSalad()
            {
                echo "the chef makes salad <br>";
            }
            function makeSpecialDish()
            {
                echo "the chef makes bbq ribs <br>";
            }
        }
        class ItalianChef extends Chef{
            function makePasta(){
                echo "The chef makes pasta";
            }
            function makeSpecialDish(){
                echo "The chef makes chicken parm";
            }
        }
        $chef = new chef();
        $chef->makeChicken();
        $italianChef = new ItalianChef();
        $italianChef->makeSpecialDish();
        ?>
    </body>
</html>