<?php

namespace Source\App;

use PreviewTechs\cPanelWHM\WHM\Accounts;
use PreviewTechs\cPanelWHM\WHMClient;

class WHM
{
    private $client;
    private $account;

    public function client($username, $token, $url, $port = 2087): WHMClient
    {
        $this->client = new WHMClient($username, $token, $url, $port);
        return $this->client;
    }

    public function account($client): Accounts
    {
        $this->account = new Accounts($client);
        return $this->account;
    }

}