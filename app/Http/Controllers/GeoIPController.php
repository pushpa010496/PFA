<?php

namespace App\Http\Controllers;

use GeoIp2\Database\Reader;

class GeoIPController extends Controller
{
    public function getCountry()
    {
        $ip_address = request()->ip();

        $reader = new Reader('/usr/local/share/GeoIP/GeoLite2-Country.mmdb');
        $record = $reader->country($ip_address);

        $country = $record->country->name;
        $countrycode = $record->country->isoCode;

        return response()->json([
            'ip_address' => $ip_address,
            'country' => $country,
            'country_code' => $countrycode
        ]);
    }
}
