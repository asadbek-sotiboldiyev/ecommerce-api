<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => [
                'uz' => 'Yangi',
                'ru' => 'Noviy',
            ],
            'code' => 'new',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Tasdiqlandi',
                'ru' => 'RuTasdiqlandi',
            ],
            'code' => 'comfirmed',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Tayyorlanyabdi',
                'ru' => 'RuTayyorlanyabdi',
            ],
            'code' => 'processing',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Yetkazib berilapti',
                'ru' => 'Dostavka qilinyapti',
            ],
            'code' => 'shipping',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Yetkazib berildi',
                'ru' => 'Dostavleniy',
            ],
            'code' => 'delivered',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'To\'lov kutilmoqda',
                'ru' => 'Platej ojidayet',
            ],
            'code' => 'waiting_payment',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'To\'landi',
                'ru' => 'Platej',
            ],
            'code' => 'paid',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Tugatildi',
                'ru' => 'Zakoncheniy',
            ],
            'code' => 'completed',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Yopildi',
                'ru' => 'Zakrit',
            ],
            'code' => 'closed',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'bekor qilindi',
                'ru' => 'Otmenit',
            ],
            'code' => 'cancelled',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Qaytarib berildi',
                'ru' => 'Ru qaytarildi',
            ],
            'code' => 'refund',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'To\'lovda xatolik',
                'ru' => 'Platej neto',
            ],
            'code' => 'payment_error',
            'for' => 'order'
        ]);
    }
}
