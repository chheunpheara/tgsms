<?php

namespace src\TG\SMS;

require 'tginterface.php';

use src\TGInterface\TG;

class SMS implements TG {

    /**
     * Send message to telegram
     *
     * @param string $url
     *
     * @param string $endpoint
     *
     * @param array $param
     *
     * @return string
     */
    public function send($url, $endpoint, array $param) {
        $data = http_build_query($param);
        return file_get_contents($url . '/' . $endpoint . '?' . $data);
    }
}