<?php

class TestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        traviaClass::testSoap();
        die();
       /* $xml = simplexml_load_file("blog.xml");*/
/*      $url="public/test.txt";
        $man=(file_get_contents($url));
        $str=json_decode($man,true);

       return Response::json([
            'data'=>$str['result']['searchId']
        ],200);*/
       /* $client=new \GuzzleHttp\Client('http://testapi.iati.com/rest/test/sample/EF6E1AB4E49B9BF0D1F0BB9F6648621B');*/
/*$this->sampleSearch(4);*/
     /*  traviaClass::sampleSearch(4);*/
       
$url='http://testapi.iati.com/rest/test/sample/EF6E1AB4E49B9BF0D1F0BB9F6648621B';
        /*Cache::put('cashme', traviaClass::flightSearchResult($url)['error']['errorTitle'], 60);*/




        return Response::json([


            'errorTitle'=>traviaClass::flightSearchResult($url)['error']['errorTitle'],
            'errorCodem'=>traviaClass::flightSearchResult($url)['error']['errorCode']


        ],200);

       /* return $response->json();*/
/*        $xml = $response->xml();

        echo $xml->title;*/

//        $url='http://testapi.iati.com/rest/flightSearch/Acenta-kodu -d @request.json ';
//        $client=new  \Guzzle\Http\Client($url);
//        $response = $client->get('')->send();
//        dd($response->json());
//        try {
//            $response = $client->get('')->send();
//        } catch (Guzzle\Http\Exception\BadResponseException $e) {
//            echo 'Uh oh! ' . $e->getMessage();
//        }


	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $client=new \GuzzleHttp\Client('http://httpbin.org/get');


        $response = $client->put('', ['future' => true]);

        $response
            ->then(
                function ($response) {
                    // This is called when the request succeeded
                    echo 'Success: ' . $response->getStatusCode();
                    // Returning a value will forward the value to the next promise
                    // in the chain.
                    return $response;
                },
                function ($error) {
                    // This is called when the exception failed.
                    echo 'Exception: ' . $error->getMessage();
                    // Throwing will "forward" the exception to the next promise
                    // in the chain.
                    throw $error;
                }
            )
            ->then(
                function($response) {
                    // This is called after the first promise in the chain. It
                    // receives the value returned from the first promise.
                    echo $response->getReasonPhrase();
                },
                function ($error) {
                    // This is called if the first promise error handler in the
                    // chain rethrows the exception.
                    echo 'Error: ' . $error->getMessage();
                }
            );



	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
