<html>
<head>
    <title>
        Insert Into Table
    </title>
</head>
<body>
    <div class="dbForm">
    <form method="post" action="/insertValues">
        <label>Select Database to get Table Names</label>
        <select name="database">
            <?php foreach ($Databases as $dbs):?>
                <option><?php echo $dbs->Database?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="DbSubBtn">Submit</button>
    </form>
    </div>
    <div>
        <form method="post" action="/selectColumn">
            <input type="hidden" name="dataBase" value="<?php echo $_SESSION['database']?>">
        <label>Table Name list</label>
        <select name="tablesList">
            <?php foreach ($tables as $table):?>
            <option><?php echo $table->TABLE_NAME?></option>
            <?php endforeach;?>
        </select>
        <button type="submit">Submit</button>
    </form>
    </div>
    <div>
        <form>
            <?php foreach ($getedColumns as $columns):?>
            <h3><?php echo $columns->id?></h3>
            <?php endforeach; ?>
        </form>
    </div>
</body>
</html>
