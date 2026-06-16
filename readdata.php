<?php


$IP="192.168.1.5:8029";

$URL=sprintf("http://%s/cm?cmnd=Status+0",$IP);

$jdata=file_get_contents($URL);

if(!empty($jdata)){
        $data=json_decode($jdata);

        #print_r($data);

        $total_in  = $data->StatusSNS->Strom->Total_in;
        $zotal_out = $data->StatusSNS->Strom->Total_out;


        printf("%s : > %s kWh : < %s kWh\n", date("m.d.y"), $total_in, $zotal_out);
}

?>
