<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = $_GET ['nome'];
        $email = $_GET ['email]';
        $endereco = $_GET ['endereco'];
        $cidade = $_GET ['cidade'];
        $telefone = $_GET ['telefone'];
        $tipoDeServico = $_GET ['tipoDeServico']; 
        $descricao = $_GET ['descricao'];         

        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "emilymarcelino59@gmail.com");
        $subject = "Novo Pedido de Orçamento";
        $to = new SendGrid\Email(null, "emailymarcelino59@gmail.com");
        $content = new SendGrid\Content("text/html", 
        "Olá Plottare, <br><br>novo pedido de orçamento de:<br><br> 
        Nome: $nome<br> 
        E-mail: $email<br> 
        Endereço: $endereco<br>
        Cidade: $cidade<br>
        Telefone: $telefone<br>
        Tipo de Serviço: $tipoDeServico<br>
        Descrição: $descricao<br>");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->get($mail);
        echo "Mensagem enviado com sucesso. Aguarde ser contactado."
        ?>
    </body>
</html>
