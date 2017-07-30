
<?php
// connecting dB
$mysqli = new mysqli('localhost','root','admin123','ipcamera');

// opening csv
$fp = fopen('data.csv','r');

// creating a blank string to store values of fields of first row, to be used in query
$col_ins = '';

// creating a blank string to store values of fields after first row, to be used in query
$data_ins = '';

// read first line and get the name of fields
$data = fgetcsv($fp);
for($field=0;$field< count($data);$field++){
    $col_ins = "'" . $col[$field] . "' , " . $col_ins;
}

// reading next lines and insert into dB
while($data=fgetcsv($fp)){
    for($field=0;$field<count($data);$field++){
        $data_ins = "'" . $data[$field] . "' , " . $data_ins;
    }
    $query = "INSERT INTO `table_name` (".$col_ins.") VALUES(".$data_ins.")";
    $mysqli->query($query);
}
echo 'Imported...';


