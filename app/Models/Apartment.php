<?php

namespace App\Models;

class Apartment
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Apartment One',
                'description' => 'Looking for a new place? Look No further, We got you covered'
            ],
            [
                'id' => 2,
                'title' => 'Apartment Two',
                'description' => 'Teekay Rentals is an easy-to-use rental management system that simplifies communication between landlords and tenants, ensuring that rent is paid on time and all maintenance issues are resolved promptly'
            ]
        ];
    }

    public static function find($id)
    {

        $apartments = self::all();

        foreach ($apartments as $apartment) {
            if ($apartment['id'] == $id) {
                return $apartment;
            }
        }
    }
}