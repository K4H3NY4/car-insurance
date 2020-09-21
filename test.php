<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <script src="inc/js/jquery.js"></script>

    <script>

        /*
        $(document).ready(function () {
            $(#input).onclick(function () {
                var name = $("input").val();
            $.post("entertodb.php",{
              total: name
    });
            });

        });
*/



        function total() {
            let number1 = parseFloat(document.getElementById("number1").value);
            let number2 = parseFloat(document.getElementById("number2").value);

            let  sum = number1 + number2;



        }

        document.getElementById("total1").innerHTML = totalsum.toFixed(0);
        console.log(sum);
    </script>
</head>

<input type="number" id="number1">
<input type="number" id="number2">

<p id="total1"sum</p>

<button onclick="total()" type="submit">calc  </button>

</html>
