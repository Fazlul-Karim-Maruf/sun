<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and Ajax & Json</title>
    <style>
        #main{
            padding: 0;
            margin: 0;
        }
        #header{
            background: skyblue;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          padding: 5px;
        }
        #header h1{
            color: red;
            text-align: center;
        }

    </style>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>Show json file </h1>
        </div>
        <div id="load-data">
            <table id="load-table" border="1" cellpadding="10px" width ="100%">
                 <tr>
                    <th>id</th>
                    <th> first_name</th>
                    <th>last_name</th>
                    
                 </tr>
            </table>

        </div>

        
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
 $.getJSON(
    "fetch-json.php",
     function(data){
      $.each(data,function(key,value){
     $("#load-data").append("<tr><td>" + value.id +" </td> <td> " + value.first_name + "</td> <td> "+value.last_name + "</td> </tr>");
      });
     }
 )

    </script>
    
</body>
</html>