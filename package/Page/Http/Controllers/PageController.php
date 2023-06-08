<?php

namespace Corebase\Page\Http\Controllers;

use App\Http\Controllers\Controller;
use Corebase\Page\Repositories\Page\PageRepositoryInterface;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $pageRepository;

    public function __construct(
        PageRepositoryInterface $pageRepository
    ) {
        $this->pageRepository = $pageRepository;
    }

    public function index(Request $request)
    {

        $data = $this->pageRepository->All();
        if ($request->has('view_deleted')) {
            $data = $this->pageRepository->showRemoved();
        }
        return view('page::index', compact('data'));
    }

    public function create()
    {
        return view('page::addpage');
    }

    public function store(Request $request)
    {
        $newData = $request->all();

        $dataCraete = [
            'title' => $newData['title'],
            'slug' => $newData['slug'],
            'content' => $newData['content'],
            'template' => $newData['tamplate'],
            'user_id' => auth()->user()->id,
            'note' => $newData['note'],
            'status' => $newData['status']
        ];

        $this->pageRepository->create($dataCraete);

        return redirect(route('page.index'));
    }

    public function edit($id)
    {
        $oldData = $this->pageRepository->findOneBy(['id' => $id]);
        $user = auth()->user($oldData['user'])->name;
        return view('page::editpage', compact('oldData'));
    }

    public function update($id, Request $request)
    {
        $newData = $request->all();
        $dataUpdate = [
            'title' => $newData['title'],
            'slug' => $newData['slug'],
            'content' => $newData['content'],
            'template' => $newData['tamplate'],
            'user_id' => auth()->user()->id,
            'note' => $newData['note'],
            'status' => $newData['status']
        ];
        $this->pageRepository->update($id, $dataUpdate);

        return redirect(route('page.edit', $id))->with('success', 'Page updated successfully');
    }

    public function destroy($id)
    {
        $this->pageRepository->delete($id);
        return redirect(route('page.index'))->with('success', 'Page deleted successfully');
    }

    public function restore($id)
    {
        $this->pageRepository->restore($id);
        return redirect(route('page.viewdel'))->with('success', 'Page Restore successfully');
    }

    public function hardelete($id)
    {
        $this->pageRepository->forceDelete($id);
        return redirect(route('page.viewdel'))->with('success', 'Page Hard Delete successfully');
    }
}
