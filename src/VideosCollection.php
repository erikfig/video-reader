<?php

namespace ErikFig\VideoReader;

/**
 * Esta classe representa a coleção de vídeos
 */
class VideosCollection
{
    private $videos = [];

    /**
     * Adiciona um novo vídeo a coleção, mas note
     * que eu adiciono os valores como uma string
     * no formato "{nome} - {duração}", exemplo:
     * "nome - 3:11"
     */
    public function setVideo(Video $video)
    {
        $this->videos[] = $video->getName() . ' - ' . $video->getDuration();
    }

    /**
     * Este método é executando quando esta classe é
     * executada como uma string e irá usar o texto
     * retornado aqui
     */
    public function __toString()
    {
        // O implode irá juntar o array em uma string
        // usando o PHP_EOL como separador.
        // PHP_EOL é a quebra de linha padrão do
        // sistema operacional atual.
        return implode(PHP_EOL, $this->videos);
    }
}
