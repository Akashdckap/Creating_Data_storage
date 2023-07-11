<html>
<head>
    <title>
        Create DataBase
    </title>
    <style>
        body{
            background-color: aquamarine;
        }
        label{
            font-size: 25px;
        }
        input{
            height: 30px;
            width: 300px;
            font-size: 15px;
            border-radius: 5px;
            border: none;
        }
        button {
            height: 30px;
            width: 100px;
            border-radius: 5px;
            border: none;
            font-size: 15px;
        }
    </style>
</head>
<body>
<center>
    <h2>Give a DataBase Name: </h2>
    <form method="post" action="/createDB">
        <label>DataBase Name</label>
        <input name="dataBaseName" type="text">
        <button type="submit">Submit</button>
    </form>
</center>
</body>
</html>