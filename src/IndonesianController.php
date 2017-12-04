<?php

namespace Ccseptian\Indonesian;

use App\Http\Controllers\Controller;

class IndonesianController extends Controller
{
    public function number($param)
    {
        return number_format($param, 0, ',', '.');
    }

    public function rupiah($param)
    {
        return 'Rp' . number_format($param, 0, ',', '.');
    }
}
