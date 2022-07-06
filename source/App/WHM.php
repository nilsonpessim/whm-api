<?php

namespace Source\App;

use PreviewTechs\cPanelWHM\WHM\Accounts;
use PreviewTechs\cPanelWHM\WHMClient;

/**
 * Classe de Conexão ao WHM
 * Nilson Pessim
 * 06/07/2022
 */
class WHM
{
    /**
     * @var
     */
    private $client;
    /**
     * @var
     */
    private $account;

    /**
     * @param $username
     * @param $token
     * @param $url
     * @param $port
     * @return WHMClient
     */
    public function client($username = CONF_WHM_USER, $token = CONF_WHM_TOKEN, $url = CONF_WHM_URL, $port = CONF_WHM_PORT): WHMClient
    {
        $this->client = new WHMClient($username, $token, $url, $port);
        return $this->client;
    }

    /**
     * @param $client
     * @return Accounts
     */
    public function account($client): Accounts
    {
        $this->account = new Accounts($client);
        return $this->account;
    }

}