<?php
require './vendor/autoload.php';


use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class HouseTest extends TestCase
{
  const apiKey =  '$2a$10$UL7Usqkb3s/o8PPz.ZOxxe3JJtOKObSTkaxqdeONfjp4RhKdMDQuS';
  /** 
   * @test 
   * */
  public function it_returns_all_house()
  {
    $client = new Client();
    $response = $client->get("https://www.potterapi.com/v1/houses?key=" . self::apiKey);
    $this->assertEquals('200', $response->getStatusCode());
  }
}