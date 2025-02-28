<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    static function lists()
    {
        return collect([
            [
                'id' => 1,
                'name' => 'Deli กระเป๋าเดินทาง Suitcase สีเทา-20 นิ้ว',
                'description' => 'แลกรับสินค้าด้วย 1,000 คะแนน',
                'point' => 1000,
                'image_url' => 'https://cdn.nocnoc.com/assets-static/assets/portal-assets/1749551/product/images/28886/th-11134207-7qul9-ljezovybzmohca_6540a6a36d585__1200x1200.jpg',
                'expire_date' => Carbon::parse('2025-03-27')->format('d/m/Y')
            ],
            [
                'id' => 2,
                'name' => 'LaRonge กระเป๋าเดินทาง Luggage รุ่น Ocean 2030 Navy 24"',
                'description' => 'แลกรับสินค้าด้วย 2,000 คะแนน',
                'point' => 2000,
                'image_url' => 'https://cdn.nocnoc.com/assets-static/assets/portal-assets/1738482/product/images/26690/2_copy_11__1200x1200.jpg',
                'expire_date' => Carbon::parse('2025-03-27')->format('d/m/Y')
            ],
            [
                'id' => 3,
                'name' => 'Play Project PS5 DualSense Charging Station',
                'description' => 'แลกรับสินค้าด้วย 3,000 คะแนน',
                'point' => 3000,
                'image_url' => 'https://cdn.nocnoc.com/assets-static/assets/portal-assets/1751927/product/images/30518/bc1a3279fc112c056e5f6a23dde39cb9_65718c09dba54__1200x1200.jpg',
                'expire_date' => Carbon::parse('2025-03-27')->format('d/m/Y')
            ],
            [
                'id' => 4,
                'name' => 'Pico 4 All-in-One VR Headset 4K White แว่นวีอาร์ 256GB',
                'description' => 'แลกรับสินค้าด้วย 4,000 คะแนน',
                'point' => 4000,
                'image_url' => 'https://cdn.nocnoc.com/assets-static/assets/portal-assets/1252884/product/images/31083/4-all-in-one-vr-headset-4k-03_copy_2_6588f21e097c9__1200x1200.jpg',
                'expire_date' => Carbon::parse('2025-03-27')->format('d/m/Y')
            ],
            [
                'id' => 5,
                'name' => 'Aconatic LED Digital TV HD แอลอีดี ดิจิตอลทีวี ขนาด 32 นิ้ว รุ่น 32HD513AN',
                'description' => 'แลกรับสินค้าด้วย 5,000 คะแนน',
                'point' => 5000,
                'image_url' => 'https://cdn.nocnoc.com/assets-static/assets/portal-assets/485110/product/images/36730/_32hd513an_6647450dd07c1__1200x1200.jpg',
                'expire_date' => Carbon::parse('2025-03-27')->format('d/m/Y')
            ]
        ]);
    }
}
