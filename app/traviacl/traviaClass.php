<?php
/**
 * Created by PhpStorm.
 * User: travia
 * Date: 4/20/2015
 * Time: 1:36 PM
 */
use GuzzleHttp\Stream\Stream;
use GuzzleHttp\Stream\LimitStream;
class traviaClass{
    public static  function sampleSearch($number){
        $original = Stream::factory(fopen('public/gte.txt', 'r+'));
        $gt=$original->getContents();

        $json = json_decode($gt,true);
        $m=$json['result']['flights'][$number];

        if($m['id']=='s244a0hf3qx8fl34k')

            print_r($m[ 'providerKey']) ;

    }

    public static function flightSearchResult($url){
        $client = new GuzzleHttp\Client();
        $response = $client->get($url);
        $request=$response->json();


        $man =$response->json();

return $man;


    }


    public static function testSoap(){

$MerchantID = '4cf6b64-1408-4ffc-9965-61185bef37d4';
$Amount = 1000;
$Description = 'توضیحات خرید ';

$CallbackURL = 'http://www.ebdali.com/payment/verify/';

SoapWrapper::add(function ($service) {
    $service
        ->name('currency')
        ->wsdl('http://87.107.121.54/post/send.asmx?wsdl')
        ->trace(true)                                                   // Optional: (parameter: true/false)
        ->cache(WSDL_CACHE_NONE)                                        // Optional: Set the WSDL cache
        ->options(['login' => 'wsdemo', 'password' => 'wsdemo']);   // Optional: Set some extra options
});
$status = 3;

$data = [
    'username'=>'9147137118',
    'password'=> 'Aa@402960723',
    'from' => '10009147137118',
    'to' => array("9212837603"),

    'text'=>"سلام خسته نباشید",
    'isflash'=>false,
    'udh'=>'',
    'recId'=>array(0),
    'status'=>0x0,


];
$GetCreditResult=25;



\SoapWrapper::service('currency', function ( $service) use ($data) {
  /*  $response =$service->call(array("username"=>"wsdemo","password"=>"wsdemo"))->GetCreditResult;*/
    /*var_dump($service->call('PaymentRequest', [$data])->Status);*/

    var_dump($service->call('SendSms', [$data])->SendSmsResult);

    die();



    /*var_dump($status);*/



    /*$response = $service->call('GetConversionAmount',$data)->GetConversionAmountResult;*/
});





var_dump($GetCreditResult);









}
}