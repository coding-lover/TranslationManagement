<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Admin\ApplicationService;

/**
 * 应用 Controller
 */
class ApplicationController extends Controller
{

    public function __construct( ApplicationService $applicationService )
    {
        $this->applicationService = $applicationService;
    }

    public function index()
    {
        return view( 'admin.application.index' );
    }

    public function create()
    {

    }

    public function ajaxIndex()
    {
        $responseData = $this->applicationService->ajaxIndex();
        return response()->json( $responseData );
    }
}