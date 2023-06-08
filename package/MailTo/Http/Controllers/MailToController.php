<?php

namespace Corebase\MailTo\Http\Controllers;

use App\Http\Controllers\Controller;
use Corebase\MailTo\Repositories\MailToRepository;
use Illuminate\Http\Request;

class MailToController extends Controller
{
    private $mailToRepository;

    public function __construct(
        MailToRepository $mailToRepository
    ) {
        $this->mailToRepository = $mailToRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->mailToRepository->all();

        return view('mailto::index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->mailToRepository->store($request);

        return response()->json(array('res' => 'Subscribe Completed'), 200);
    }

    public function softDelete($id)
    {
        $this->mailToRepository->softDelete($id);
        return redirect()->route('mailto.index');
    }
    public function listDeleted()
    {
        $data = $this->mailToRepository->showSoftDelete();
        return view('mailto::listdeleted', compact('data'));
    }

    public function restore($id)
    {
        $this->mailToRepository->restore($id);
        return redirect()->route('mailto.listdeleted');
    }

    public function forceDelete($id)
    {
        $this->mailToRepository->forceDelete($id);
        return redirect()->route('mailto.listdeleted');
    }
}
