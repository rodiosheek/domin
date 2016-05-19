<?php
/**
 * Тестовый контроллер для ajax запросов
 */

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Posts;
use App\Comment;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TestAjaxController extends Controller
{
    public function getAjax(Request $request) {
        $data = $request->all();

        echo "<pre>";
        print_r($data);
    }

    public function getFlat() {
        return view('pages.flat');
    }
}
