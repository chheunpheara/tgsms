<?php

namespace src\sms\tginterface;

interface tginterface {

    public function send($url, $endpoint, array $param);
}