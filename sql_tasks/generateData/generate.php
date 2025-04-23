<?php
require __DIR__ . '/vendor/autoload.php';

//подключаемся к бд
$db = new PDO('pgsql:host=localhost;dbname=Northwind', 'postgres', '2328');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$faker = Faker\Factory::create();
//

for ($i = 0; $i < 1000000; $i++) {
    $data = [
        'shipper_id' => $i + 1,
        'company_name' => $faker->company,
        'phone' => $faker->phoneNumber
    ];
    $stmt = $db->prepare('INSERT INTO shippers (shipper_id, company_name, phone) VALUES (?, ?, ?) ON CONFLICT (shipper_id) DO NOTHING');
    $stmt->execute([$data['shipper_id'], $data['company_name'], $data['phone']]);
}