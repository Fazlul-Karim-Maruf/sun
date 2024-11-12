<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>PHP with AJAX</h1>

            </td>

        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" value="Load Data">

            </td>
        </tr>

        <tr>
            <td id="table-data"></td>
            <table border="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td>yahoo baba</td>
                </tr>
            </table>
        </tr>


    </table>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#load-button").on("click",function(e){
          $.ajax({
            url : "ajax-load.php",
            type : "POST",
            success : function(data){
                $("#table-data").html(data);
            }

          });

            });

        });



    </script>

</body>

</html>