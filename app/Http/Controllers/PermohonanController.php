<?php

namespace App\Http\Controllers;

use App\Permohonan;
use Illuminate\Http\Request;
use App\Transformers\PermohonanTransformer;

class PermohonanController extends Controller
{
    public function semak($nokp)
    {
        $permohonan = Permohonan::where('nokp', $nokp)->firstOrFail();
        
        $response = fractal()
            ->item($permohonan)
            ->transformWith(new PermohonanTransformer)
            ->addMeta(['saveStatus' => 'pass']);
        
        if($permohonan->detail_permohonan()->terpilih()->first())
            $response->includeInstitusi()
                ->includeKursus();

        return $response
            ->toArray();
    }

    public function jobmalaysia()
    {
        return response()->json(['status' => 'BERJAYA']);
    }
}
