<html>
<head>
     <title>Create Table</title>
</head>
<body>
    <form method="post" action="/createTable">
        <label>DataBase Names</label>
        <select name="database">
            <option>Please select DB name</option>
            <?php foreach ($Databases as $dbs):?>
            <option><?php echo $dbs->Database?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Table Name</label>
            <input type="text" name="tableName">
        <br>
        <label>Column Name</label>
        <input type="text" name="columnName">
        <select class="dataType" name="dataType">
            <option>Int</option>
            <option>varchar</option>
            <option>text</option>
        </select>
        <br>
        <button type="submit">Create Table</button>
    </form>
    <button type="submit" class="AddBtn">Add more</button>
    <br>
    <a href="View/create.php"><button style="background-color: coral; height: 50px; width: 170px; border-radius: 10px; font-size: 15px">To create DataBase</button></a>
</body>
</html>
<script>
    const AddBtn = document.querySelector(".AddBtn");
    const formTag = document.querySelector("form");
    const selectDataType = document.querySelector(".dataType")
    AddBtn.addEventListener("click",()=>{
        let inputTag = document.createElement("INPUT");
        inputTag.setAttribute("type","text");

        let SelectTag = document.createElement("select");
        let option1 = document.createElement("option");
        let option2 = document.createElement("option");
        let option3 = document.createElement("option");

        option1.text = "Int";
        option2.text = "varchar";
        option3.text = "text";

        SelectTag.add(option1);
        SelectTag.add(option2);
        SelectTag.add(option3);


        formTag.append(inputTag);
        formTag.append(SelectTag);
    })
</script>