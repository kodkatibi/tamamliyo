<?php

namespace App\Http\Controllers;

use App\Repositories\TravelRepository;
use Illuminate\Http\Request;

class InsurancePolicyController extends Controller
{
    protected TravelRepository $travelRepository;

    public function __construct(TravelRepository $travelRepository)
    {
        $this->travelRepository = $travelRepository;
    }

    public function travelPolicy(Request $request)
    {
        $data = [
        ];
        return $this->travelRepository->createInsurance($data);
    }
}
