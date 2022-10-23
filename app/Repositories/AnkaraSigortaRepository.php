<?php

namespace App\Repositories;

use App\Abstracts\AnkaraSigortaAbstract;
use App\Interfaces\AnkaraSigortaInterface;
use CodeDredd\Soap\Facades\Soap;

class AnkaraSigortaRepository extends AnkaraSigortaAbstract implements AnkaraSigortaInterface
{
    protected string $url = "https://tst-ws.ankarasigorta.com.tr/IncomingTravelWS.svc?wsdl";

    public function connect(string $type, array $params = [])
    {
        $credentials = $this->getCredentials();
        $params = array_merge($params, $credentials);
        return Soap::baseWsdl($this->url)->call($type, $params);
    }

}
