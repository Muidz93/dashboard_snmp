<?php

namespace Database\Seeders;
use App\Models\snmp;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        user::create([
            'name' => 'toa',
            'email' => 'toa@gmail.com',
            'password' => bcrypt('mediakind123'),
            // 'level' => 'user',
        ]);
        user::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            // 'level' => 'admin',
        ]);
        snmp::create([
            'ip_control' => '192.168.112.2',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
        snmp::create([
            'ip_control' => '192.168.112.3',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
        snmp::create([
            'ip_control' => '192.168.112.4',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
        snmp::create([
            'ip_control' => '192.168.112.5',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
        snmp::create([
            'ip_control' => '192.168.112.6',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
        snmp::create([
            'ip_control' => '192.168.112.7',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
        snmp::create([
            'ip_control' => '192.168.112.8',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
        snmp::create([
            'ip_control' => '192.168.112.9',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
        snmp::create([
            'ip_control' => '192.168.112.10',
            'ts_bitrate' => 5.5,
            'video_bitrate' => 5.2,
            'status_sat' => 'UNLOCKED',
            'status_ip' => 'LOCKED',
            'margin' => 4.2,
            'service' => 1,
            'kualitas' => '1920x1080',
            'status_video' => 'Video Running',
            'temperature'=>27,
            'PID_audio' => 1,
            'PID_audio2' => 1,
        ]);
    }
}
