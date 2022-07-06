<?php

namespace Source\App;

use PreviewTechs\cPanelWHM\WHM\Accounts;
use PreviewTechs\cPanelWHM\WHMClient;

class WHM
{
    private $client;
    private $account;

    public function client($username = CONF_WHM_USER, $token = CONF_WHM_TOKEN, $url = CONF_WHM_URL, $port = CONF_WHM_PORT): WHMClient
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