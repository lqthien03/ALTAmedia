<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'ma_device'=>"KIO_" . (($n = rand(1,99)) > 10 ? $n : "0" . $n),
            'name_device'=> fake()->text(5),
            'address_ip'=> fake()->localIpv4(),
            'status_hd'=> fake()->randomElement(['không hoạt động','hoạt động']),
            'status_connect'=>  fake()->randomElement(['kết nối','không kết nối']),
            'device_sd'=> "khám tim mạch, khám mắt"
        ];
    }
}
