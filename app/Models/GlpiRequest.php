<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \GuzzleHttp\Psr7\Request as ExternalRequest;
use \GuzzleHttp\Client;

class GlpiRequest
{
    private $base_url;
    private $headers;
    private $body;

    // Seta as configurações default do glpi.
    public function __construct()
    {
        // Pegar valores do env - env('somename')
        $this->client = new Client();
        $this->base_url = 'http://172.17.12.212/glpi-9.1.2/apirest.php';
        $this->headers['App-Token'] = "7rarevvd5ndywfiyb7hlnegm7v6ztu8fyge6u8e1";
    }

    public function getAppToken()
    {
    	return $this->headers['App-Token'];
    }

    //Adicionar um atributo ao cabeçalho, o mesmo deve ser uma array com nome do atributo como chave.
    public function addToHeader($name, $value)
    {
    	$this->headers[$name] = $value;
    }

    public function addToBody($name, $value)
    {	
    	$this->body[$name] = $value;
    }

    public function setBody($body)
    {
    	$this->body = $body;
    }

    //Adiciona as credenciais ao cabeçalho da requisição
    public function setCredentials($username, $password)
    {
    	$this->headers['Authorization'] = 'Basic '.base64_encode("{$username}:{$password}");
    }

    //Seta o token da aplicação Glpi.
    public function setAppToken($token)
    {
    	$this->headers['App-Token'] = $token;	
    }

    //Retorna o token de acesso
    public function getSessionToken()
    {
    	$url_session = "{$this->base_url}/initSession";
    	
    	$session_request = new ExternalRequest('GET', $url_session, $this->headers);
    	
    	$response = $this->client->send($session_request);
        
        $token = json_decode($response->getBody());
        
        return $token->session_token;
    }

    public function store($session_token, $entity_name, $data)
    {
    	$url_store = "{$this->base_url}/{$entity_name}";
    	$this->setBody($data);
    	$this->addToHeader('Session-Token', $session_token);
    	$response = $this->client->post($url_store, [
    		'headers' => $this->headers, 
    		'json' => ['input' => ['name' => 'teste']]
    	]);

    	
    	return $response->getBody();
    }
}
