<?php
/*TODO: Token de acceso a tu BOT de Telegram */
$botToken = "8220663414:AAHlp2tkPn5J2qvko6PgEDkZfancqi5Qrq0" ;

/*TODO: URL del webhook*/
 $webhookUrl = "https://proyectoeureka.net/index.php";

/*TODO: configura el webhook mediante una solicitud http*/
$apiUrl = "https://api.telegram.org/bot$botToken/setWebhook?url=$webhookUrl" ;
$response = file_get_contents($apiUrl);
/*TODO: Verifica si la configuracion fue exitosa. */
if ($response === FALSE) 
{
  /* TODO: Verifica si la configuracion HTTP falla */
    $error = error_get_last();
    echo "Error al configurar el webhook: " . $error['message'];
}
else 
{
    /* TODO: verifica la respuesta de Telegram */ 
 $responseData = json_decode($response, true);

    if ($responseData['ok'] === true) 
    {
        echo "Webhook configurado correctamente.";
    } 
    else 
    {
        echo "Error al configurar el webhook: " . $responseData['description'];
    }
}


/*echo $response;*/
// 
// ?> 