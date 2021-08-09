<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;

class HotelSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hotel-search';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backend process to collect hotel data and rates';

​    /**
    * Amadeus API url
    */
    private $url = 'https://test.api.amadeus.com/v1/security/oauth2/token';

    ​private $auth_data = [
        'client_id'     => 'slzhKT0uHLVWZrkWakAs6IktoD6sAB5K',
        'client_secret' => 'dF0008AIlsZGQrqc',
        'grant_type'    => 'client_credentials'
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $headers = array('Content-Type' => 'application/x-www-form-urlencoded');
        ​$requests_response = Requests::post($this->url, $headers, $this->auth_data);

        ​$response_body = json_decode($requests_response->body);
        echo json_encode($response_body, JSON_PRETTY_PRINT);
    }
}