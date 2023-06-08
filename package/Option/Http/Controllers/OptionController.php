<?php

namespace Corebase\Option\Http\Controllers;

use App\Http\Controllers\Controller;
use Corebase\Option\Repositories\Option\OptionRepositoryInterface;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    private $optionRepository;

    public function __construct(
        OptionRepositoryInterface $optionRepository
    ) {
        $this->optionRepository = $optionRepository;
    }

    public function index()
    {
        $data = $this->optionRepository->all();
        $option = null;
        return view('option::index', compact('data', 'option'));
    }

    public function edit($key)
    {
        $data = $this->optionRepository->all();
        $option = $this->optionRepository->findOneBy(['key' => $key]);
        return view('option::index', compact('option', 'data'));
    }

    public function update(Request $request, $id)
    {
        $option = $this->optionRepository->find($id);
        $key = $option->key;
        if ($request->optionText == null) {
            $value = $this->optionRepository->uploadFile($request, $input = 'image');
        } elseif ($request->input == null) {
            $value = $request->optionText;
        }

        $dataUpdate = [
            'value' => $value,
        ];
        $this->optionRepository->update($id, $dataUpdate);
        return redirect(route('option.edit', $key));
    }

    public function addOption(Request $request){
        $dataRequest = $request->all();

        $options = $this->optionRepository->all();

        foreach($options as $option){
            if($option->key == $dataRequest['option']){
                return back();
            }
        }
        $dataOption = [
            'key' => $dataRequest['option'],
            'value' => ''
        ];


        $this->optionRepository->create($dataOption);

        return back();
    }
}
