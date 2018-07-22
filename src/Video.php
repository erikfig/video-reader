<?php

namespace ErikFig\VideoReader;

/**
 * Esta classe é responsável por representar um único vídeo
 */
class Video
{
    private $video;

    /**
     * Recebe o caminho absoluto até o vídeo
     */
    public function __construct(string $video)
    {
        $this->video = $video;
    }

    /**
     * Retorna o nome do arquivo
     */
    public function getName()
    {
        // pathinfo separa os valores de um caminho
        // de diretórios, ele retorna extenção,
        // nome do arquivo e outras informações
        return pathinfo($this->video)['filename'];
    }

    /**
     * Usa o objeto getID3 para retornar a duração do vídeo
     */
    public function getDuration()
    {
        $getID3 = new \getID3;
        return $getID3->analyze($this->video)['playtime_string'] ?? 'error';
    }
}
