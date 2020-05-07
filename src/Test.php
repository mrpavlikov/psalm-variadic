<?php

namespace App;

final class Test
{
    public function test(): void
    {
        $range = new \Google_Service_Sheets_ValueRange([]);

        print_r($range);
    }
}
