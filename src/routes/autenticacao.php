<?php
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;
use App\Models\Usuario;
use \Firebase\JWT\JWT;

//grupo de rotas usado para CRUD de produtos
$app->post('/api/token', function($request, $response){
    $dados = $request->getParsedBody();
    
    $email = $dados['email'] ?? null;
    $senha = $dados['senha'] ?? null;

    $usuario = Usuario::where('email', $dados['email'])->first();

    if(!is_null($usuario) && (md5($senha) === $usuario->senha)){
        //gerar token
        $secretKey   = $this->get('settings')['secretKey'];
		$chaveAcesso = JWT::encode($usuario, $secretKey);

        return $response->withJson([
            'chave' => $chaveAcesso
        ]);
    }

    return $response->withJson([
        'status' => 'erro'
    ]);
    
});


?>