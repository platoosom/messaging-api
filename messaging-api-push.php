<?php 

require_once __DIR__ . '/vendor/autoload.php';



try {
        
    $client = new \GuzzleHttp\Client();

    $config = new \LINE\Clients\MessagingApi\Configuration();
    $config->setAccessToken('v1vM0HPeqvjPdZOiAHZRIhmMqLJoMeXEp1+ZWWRnV5FFpiZNM+NrrXVJfGnq8FUIlmG0X+o1sQwV4gCKin/w2Z7fBazHR/3XZDnMl2omWLNl7ObCIyNlrmVUE4h6WsixkfpG1cUePIFTqyq1UI+LwgdB04t89/1O/w1cDnyilFU=');

    $messagingApi = new \LINE\Clients\MessagingApi\Api\MessagingApiApi(
    client: $client,
    config: $config,
    );

    $message = new \LINE\Clients\MessagingApi\Model\TextMessage([
        'type' => 'text',
        'text' => "คุณแอดมิน มีออเดอร์ใหม่ \r\n#123456"
    ]);

    $request = new \LINE\Clients\MessagingApi\Model\PushMessageRequest([
        'to' => 'U2c639252833d09ef273f085087babfd9',
        'messages' => [$message],
    ]);

    $response = $messagingApi->pushMessage($request);

  } catch (\Throwable $e) {
    
    var_dump($e);
    
  }


