<?php
namespace Classes;

use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;

class ClassSpreadsheet extends ClassClient
{
    private $service;

    public function __construct()
    {
        $this->service = new Google_Service_Sheets($this->getClient());
    }

    public function insertSheet($spreadsheetId, $range, $values)
    {
        $body = new Google_Service_Sheets_ValueRange(['values' => [$values]]);
        $params = ['valueInputOption' => 'RAW'];
        $result = $this->service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
    }
}

