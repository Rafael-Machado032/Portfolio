<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Expressão Regular (Regex) 
    | Divisão do código caractere por caractere
    |--------------------------------------------------------------------------
    |
    | / (no início e no fim) -> São os delimitadores. Eles avisam o PHP: "O que está aqui dentro é uma regra de Regex".
    | ^                      -> Significa "Começa com". Ele garante que o texto deve começar exatamente com o que vem a seguir (https), impedindo que o link esteja escondido no meio de outra URL maliciosa.
    | https:\/\/             -> É o texto literal https://. As barras invertidas (\) servem para "escapar" a barra normal (/). Sem a barra invertida, o PHP acharia que o padrão acabou ali (já que o / é o delimitador).
    | .*                     -> Significa "Qualquer coisa".O ponto (.) significa "qualquer caractere" (letras, números, traços).O asterisco (*) significa "repetido várias vezes". Juntos, eles liberam qualquer subdomínio gerado pela Vercel.
    | \.                     -> É o ponto final literal do .vercel.app. Na Regex, o ponto sozinho significa "qualquer caractere", então usamos a barra invertida (\.) para avisar que queremos buscar um ponto final de verdade.
    | vercel\.app            -> É o texto literal do domínio.$: Significa "Termina aqui". Ele garante que a URL termina exatamente com .app. Se alguém tentar acessar com .vercel.app.sitehacker.com, o final não bate e o Laravel bloqueia.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:3000',
        'https://rafaelmachadodev.vercel.app'
    ],
    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
