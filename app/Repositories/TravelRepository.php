<?php

namespace App\Repositories;

use App\Interfaces\TravelRepositoryInterface;

class TravelRepository implements TravelRepositoryInterface
{
    protected string $soapType = 'GetTeminatBedeliListItem';

    protected AnkaraSigortaRepository $sigortaRepository;

    public function __construct(AnkaraSigortaRepository $sigortaRepository)
    {
        $this->sigortaRepository = $sigortaRepository;
    }

    public function createInsurance(array $data)
    {
        return $this->sigortaRepository->connect($this->soapType, $data);
    }
}
