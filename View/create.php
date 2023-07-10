<html>
<head>
    <title>Options to Create</title>
    <style>
        button{
            height: 75px;
            width: 150px;
            border-radius: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
<center>
    <h2>Create Database, Tables, and Insert Rows</h2>
    <hr>
    <form method="post" action="/InsertDB">
        <button>Create Database</button>
    </form>
    <br>
    <form method="post" action="/InsertTable">
        <button>Create Table</button>
    </form>
    <br>
    <form method="post" action="/insertInto">
        <button>Insert rows</button>
    </form>
</center>
</body>
</html>