<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: arial;
            background: #b2bec3;
            padding: 0;
            margin: 0;
        }
        h1{
            text-align: center;
            margin: 15px;
        }
        #main{
            width: 800px;
            margin: 0 auto;
            padding: 20px 10px;

        }
        #header{
       background: #b2b3;
        }
        #table-form{
            background: #9998b9ff;
            padding: 10px;
            margin: 10px;
        }
        #table-data{
            padding: 15px;
            height: 500px;
            vertical-align: top;
        }
        #table-data th{
            background: #74b9ff;
        }
        #table-data tr:nth-child(odd){
        background: #74b9ff;
        }
        #success-massage {
            background: #DEF1D8;
            color: green;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }

        #error-massage {
            background: black;
            color: red;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;

        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td id="header">
                <h1>Add records with PHP & AJAX</h1>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form id="addForm">
                    First Name : <input type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Last Name : <input type="text" id="lname">
                    <input type="submit" id="save-button" value="save">
                </form>
            </td>
        </tr>
        <tr>
            <td id="table-data">



            </td>
        </tr>
    </table>
    <div id="error-massage"></div>
    <div id="success-massage"></div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            function loadTable() {
                $.ajax({
                    url: "ajax-load.php",
                    type: "POST",
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable();
            $("#save-button").on("click", function(e) {
                e.preventDefault();

                var fname = $("#fname").val();
                var lname = $("#lname").val();
                if (fname == "" || lname == "") {
                    $("#error-massage").html("All fields  are required.").slideDown();
                    $("#success-massage").slideUp();
                } else {
                    $.ajax({
                        url: "ajax-insert.php",
                        type: "POST",
                        data: {
                            first_name: fname,
                            last_name: lname
                        },
                        success: function(data) {
                            if (data == 1) {
                                loadTable();
                                $("#addForm").trigger("reset");
                                $("#success-massage").html("data inserted successfully.").slideDown();
                                $("#error-massage").slideUp();
                            } else {
                                $("#error-massage").html("cann't save record.").slideDown();
                                $("#success-massage").slideUp();
                            }

                        }
                    });
                }


            })
        });
    </script>
</body>

</html>