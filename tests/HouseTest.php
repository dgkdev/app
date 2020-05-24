<?php
require './vendor/autoload.php';


use PHPUnit\Framework\TestCase;
use Guzzle\Http\Client;

final class HouseTest extends TestCase
{
  /** 
   * @test 
   * */
  public function it_returns_all_house()
  {
    $config = include 'config.php';

    $client = new  GuzzleHttp\Client();
    $response = $client->get("https://www.potterapi.com/v1/houses?key={$config['api_key']}");
    $this->assertEquals('200', $response->getStatusCode());
  }
}