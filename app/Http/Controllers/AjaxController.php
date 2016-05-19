<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Apartment;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    /**
     * Подгружает занчения выпадающих списков в форме поиска
     * @param $data
     * @return mixed
     */
    public function getInfo($data) {
        $result = DB::table('apartments')
            ->select($data)
            ->groupBy($data)
            ->get();
        return $result;
    }

    /**
     * Возвращает список райнов выбранного города
     * @param Request $request
     * @return mixed
     */
    public function getArea(Request $request) {
        $data = $request->city;
        if($data == 'Все города') {
            $result = $this->getInfo('area');
        } else {
            $result = DB::table('apartments')
                ->select('area')
                ->where('location', $data)
                ->groupBy('area')
                ->get();
        }
        return $result;
    }
}
