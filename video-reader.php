<?php

/**
 * Carrego as classes que vamos usar
 * a primeira vamos baixar no GitHub
 * as duas seguintes vamos criar
 */
require __DIR__.'/vendor/getid3/getid3/getid3.php'; // lê as tags id3 dos vídeos
require __DIR__.'/src/Video.php'; // representa as informações de cada vídeo (nome e duração)
require __DIR__.'/src/VideosCollection.php'; // representa uma coleção de vídeos

/**
 * lê todos os arquivos do diretório atual com base no "padrão"passado
 * neste caso, irá encontrar todos os arquivos com extensão mp4
 */
$files = glob(getcwd() . "/*.mp4");

// crio a instância que irá guardas nossa coleção de vídeos
$videos = new \ErikFig\VideoReader\VideosCollection;

// para cada arquivo encontrado com extenção ".mp4"
foreach ($files as $file) {
    // crio um objeto passando o caminho completo e absoluto até o arquivo
    $video = new \ErikFig\VideoReader\Video($file);

    // adiciono o arquivo a coleção
    $videos->setVideo($video);
}

// imprimo o objeto de coleção, como se fosse uma string
echo $videos;
