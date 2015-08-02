<?php

$meuBlog = array(
'titulo' => 'Thiago Belem / Blog',
'url' => '/',
'assuntos' => array('PHP', 'MySQL', 'jQuery', 'CakePHP', 'Desenvolvimento WEB')
);

$json = json_encode($meuBlog);

echo $json;
// Resultado: { titulo: 'Thiago Belem / Blog', url: '/', assuntos: ['PHP', 'MySQL', 'jQuery', 'CakePHP', 'Desenvolvimento WEB'] }
