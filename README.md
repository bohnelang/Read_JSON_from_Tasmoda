# Read_JSON_from_Tasmoda
Read Data in JSON froamt from any tasmoda device

While enabled API access, you can read device data in mashine friendly format by this URL:

```
http://<IP>/cm?cmnd=Status+0
```

In PHP you can fetch the data in few lines of code. PHP convert it to objects that can be easyly accessed:

```
E.g. the total energy you get from grid:

$data->StatusSNS->Strom->Total_in
```

This is an example for the data fraom a enery meter with an optical interface:

```
stdClass Object
(
    [Status] => stdClass Object
        (
            [Module] => 0
            [DeviceName] => Lesekopf
            [FriendlyName] => Array
                (
                    [0] => Lesekopf
                )

            [Topic] => lesekopf_70A6D8
            [ButtonTopic] => 0
            [Power] => 0
            [PowerOnState] => 3
            [LedState] => 1
            [LedMask] => FFFF
            [SaveData] => 1
            [SaveState] => 1
            [SwitchTopic] => 0
            [SwitchMode] => Array
                (
                    [0] => 0
                    [1] => 0
                    [2] => 0
                    [3] => 0
                    [4] => 0
                    [5] => 0
                    [6] => 0
                    [7] => 0
                    [8] => 0
                    [9] => 0
                    [10] => 0
                    [11] => 0
                    [12] => 0
                    [13] => 0
                    [14] => 0
                    [15] => 0
                    [16] => 0
                    [17] => 0
                    [18] => 0
                    [19] => 0
                    [20] => 0
                    [21] => 0
                    [22] => 0
                    [23] => 0
                    [24] => 0
                    [25] => 0
                    [26] => 0
                    [27] => 0
                )

            [ButtonRetain] => 0
            [SwitchRetain] => 0
            [SensorRetain] => 0
            [PowerRetain] => 0
            [InfoRetain] => 0
            [StateRetain] => 0
            [StatusRetain] => 0
        )

    [StatusPRM] => stdClass Object
        (
            [Baudrate] => 9600
            [SerialConfig] => 8N1
            [GroupTopic] => tasmotas
            [OtaUrl] => !!! SOFTWARE NICHT UPDATEN !!!
            [RestartReason] => Power On
            [Uptime] => 0T00:27:05
            [StartupUTC] => 2026-06-16T14:29:25
            [Sleep] => 50
            [CfgHolder] => 4617
            [BootCount] => 37
            [BCResetTime] => 2025-01-26T15:09:39
            [SaveCount] => 222
            [SaveAddress] => F6000
        )

    [StatusFWR] => stdClass Object
        (
            [Version] => 13.4.0(tasmota)
            [BuildDateTime] => 2024.05.26 15:54:08
            [Boot] => 31
            [Core] => 2_7_6
            [SDK] => 2.2.2-dev(38a443e)
            [CpuFrequency] => 80
            [Hardware] => ESP8266EX
            [CR] => 357/699
        )

    [StatusLOG] => stdClass Object
        (
            [SerialLog] => 0
            [WebLog] => 2
            [MqttLog] => 0
            [SysLog] => 0
            [LogHost] =>
            [LogPort] => 514
            [SSId] => Array
                (
                    [0] => mywlan
                    [1] =>
                )

            [TelePeriod] => 1
            [Resolution] => 558180C0
            [SetOption] => Array
                (
                    [0] => 00008009
                    [1] => 00000000
                    [2] => 00000080
                    [3] => 00006000
                    [4] => 00004000
                    [5] => 00000000
                )

        )

    [StatusMEM] => stdClass Object
        (
            [ProgramSize] => 541
            [Free] => 460
            [Heap] => 16
            [ProgramFlashSize] => 4096
            [FlashSize] => 4096
            [FlashChipId] => 164068
            [FlashFrequency] => 40
            [FlashMode] => DOUT
            [Features] => Array
                (
                    [0] => 0407
                    [1] => 00000582
                    [2] => 04080001
                    [3] => 00000003
                    [4] => 00000000
                    [5] => 00000008
                    [6] => 00000000
                    [7] => 00000000
                    [8] => 04000000
                    [9] => 00000000
                    [10] => 00000000
                )

            [Drivers] => 1,2,!4,10,12,62,!68
            [Sensors] => 1,2,53
        )

    [StatusNET] => stdClass Object
        (
            [Hostname] => lesekopf-70A6D8-1752
            [IPAddress] => 192.168.188.29
            [Gateway] => 192.168.188.1
            [Subnetmask] => 255.255.255.0
            [DNSServer1] => 192.168.188.1
            [DNSServer2] => 0.0.0.0
            [Mac] => 00:5F:45:70:FF:D8
            [Webserver] => 2
            [HTTP_API] => 1
            [WifiConfig] => 4
            [WifiPower] => 17
        )

    [StatusMQT] => stdClass Object
        (
            [MqttHost] =>
            [MqttPort] => 1883
            [MqttClientMask] => DVES_%06X
            [MqttClient] => DVES_70A6D8
            [MqttUser] => DVES_USER
            [MqttCount] => 0
            [MAX_PACKET_SIZE] => 1200
            [KEEPALIVE] => 30
            [SOCKET_TIMEOUT] => 4
        )

    [StatusTIM] => stdClass Object
        (
            [UTC] => 2026-06-16T14:56:30Z
            [Local] => 2026-06-16T15:56:30
            [StartDST] => 2026-03-29T02:00:00
            [EndDST] => 2026-10-25T03:00:00
            [Timezone] => +01:00
        )

    [StatusSNS] => stdClass Object
        (
            [Time] => 2026-06-16T15:56:30
            [Strom] => stdClass Object
                (
                    [Total_in] => 1525
                    [HT_in] => 0
                    [NT_in] => 0
                    [Power_cur] => 0
                    [Power_p1] => 0
                    [Power_p2] => 0
                    [Power_p3] => 0
                    [Total_out] => 581
                    [HT_out] => 0
                    [NT_out] => 0
                    [Meter_id] =>
                )

        )

    [StatusSTS] => stdClass Object
        (
            [Time] => 2026-06-16T15:56:30
            [Uptime] => 0T00:27:05
            [UptimeSec] => 1625
            [Heap] => 16
            [SleepMode] => Dynamic
            [Sleep] => 50
            [LoadAvg] => 21
            [MqttCount] => 0
            [Wifi] => stdClass Object
                (
                    [AP] => 1
                    [SSId] => mywlan
                    [BSSId] => 00:80:63:FF:88:3A
                    [Channel] => 8
                    [Mode] => 11n
                    [RSSI] => 84
                    [Signal] => -58
                    [LinkCount] => 1
                    [Downtime] => 0T00:00:04
                )

        )

)

```
