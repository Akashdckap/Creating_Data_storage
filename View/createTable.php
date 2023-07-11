<html>
<head>
     <title>Create Table</title>
</head>
<style>
    body{
        background-color: powderblue;
    }
   form{
       border: solid 1px;
       height: 250px;
       width: 500px;
       border-radius: 10px;
   }
    .createTableBtn{
        height: 40px;
        width: 150px;
        border-radius: 5px;
        font-size: 15px;
        background-color: cadetblue;
        color: antiquewhite;
        border: none;
    }
    label{
        font-size: 20px;
    }
    .tableNameStyle{
        margin-right: 66px;
        margin-top: 20px;
    }
    .DBSelector{
        margin-right: 120px;
        margin-top: 20px;
    }
    .columnNameSelector{
        margin-top: 20px;
    }
    select{
        height: 30px;
        border-radius: 5px;
    }
    .newColumn{
        margin-left: 115px;
    }
    input{
        height: 30px;
        width: 250px;
        font-size: 15px;
        border-radius: 5px;
        border: none;
    }
    .AddBtn{
        height: 30px;
        border: none;
        border-radius: 5px;
        background-color: darkblue;
        color: aliceblue;
        width: 150px;
    }
</style>
<body>
<center>
    <h2>Create Tables for your Required DataBase</h2>
    <form method="post" action="/createTable">
        <div class="inputForm">
            <label class="DBNameSelect">DataBase Names</label>
            <select name="database" class="DBSelector">
                <option>Please select DB name</option>
                <?php foreach ($Databases as $dbs):?>
                    <option><?php echo $dbs->Database?></option>
                <?php endforeach; ?>
            </select>

            <br>

            <label class="tableNameSelect">Table Name</label>
            <input type="text" name="tableName" class="tableNameStyle">

            <br>
            <label class="columnNameSelect">Column Name</label>
            <input type="text" name="columnName[]" placeholder="column name" class="columnNameSelector">
            <select class="dataType" name="dataTypes[]">
                <option value="Int">Int</option>
                <option value="Varchar(255)">varchar</option>
                <option value="timestamp">Date Time</option>
            </select>
            <br>
        </div>
        <br>
        <button type="submit" class="createTableBtn">Create Table</button>
    </form>
    <button type="submit" class="AddBtn">Add more column</button>
    <br>
    <a href="View/create.php"><button style="margin-top: 20px; background-color: coral; height: 50px; width: 170px; border-radius: 10px; font-size: 15px">To create DataBase</button></a>
</center>
</body>
</html>
<script>

    let dataTypesValues = ['int','varchar(255)','timestamp'];
    let displayDataText = ['Int','varchar','Date Time'];

    let tableDiv = document.querySelector('.inputForm');
    let AddMoreBtn = document.querySelector('.AddBtn');


    AddMoreBtn.addEventListener("click",()=>{
        let createRow = document.createElement('input');
        createRow.placeholder = "column name";
        createRow.name = "columnName[]";
        createRow.className = "newColumn"
        tableDiv.append(createRow);

        let createSelect = document.createElement('select');
        createSelect.id = 'selectDatatype';
        createSelect.name = 'dataTypes[]';
        tableDiv.appendChild(createSelect)

        for(let i=0;i<dataTypesValues.length;i++){
            let createOption = document.createElement('option');
            createOption.value = dataTypesValues[i];
            createOption.text = displayDataText[i];
            createSelect.appendChild(createOption);
        }
    })
</script>