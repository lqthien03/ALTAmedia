<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    const DeviceData=[
        [
            'id'=>4,
            'ma_device'=>"KIO_01",
            'name_device'=>"Kiosk",
            'address_ip'=>"192.168.1.10",
            'status_hd'=>"hoạt động",
            'status_connect'=>"kết nối",
            'device_use'=>"khám tim mạch, khám mắt"
        ],
        [
            'id'=>5,
            'ma_device'=>"KIO_01",
            'name_device'=>"Kiosk",
            'address_ip'=>"192.168.1.10",
            'status_hd'=>"không hoạt động",
            'status_connect'=>"mất kết nối",
            'device_use'=>"khám tim mạch, khám mắt"
        ],
        [
            'id'=>6,
            'ma_device'=>"KIO_01",
            'name_device'=>"Kiosk",
            'address_ip'=>"192.168.1.10",
            'status_hd'=>"hoạt động",
            'status_connect'=>"kết nối",
            'device_use'=>"khám tim mạch, khám mắt"
        ],        
    ];


    public function run(): void
    {
        foreach(self::DeviceData as $data){
            DB::table('device')->insert(
                $data
                // [
                //     'id'=> $data['id'],
                //     'ma_device'=>$data['ma_device'],
                //     'name_device'=>$data['name_device'],
                //     'address_ip'=>$data['address_ip'],
                //     'status_hd'=>$data['status_hd'],
                //     'status_connect'=>$data['status_connect'],
                //     'device_use'=>$data['device_use']
                // ]
            );
        }
    }
}
