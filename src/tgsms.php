<?php

namespace src\sms;

use src\sms\tginterface\tginterface;

class tgsms implements tginterface {

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