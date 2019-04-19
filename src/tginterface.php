<?php

namespace src\TGInterface;

interface TG {

    public function send($url, $endpoint, array $param);
}