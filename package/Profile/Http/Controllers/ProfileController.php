<?php

namespace Corebase\Profile\Http\Controllers;

use App\Http\Controllers\Controller;
use Corebase\Profile\Repositories\DescriptionRepository;
use Corebase\Profile\Repositories\SkillRepository;
use Corebase\Profile\Repositories\SlideRepository;
use Corebase\Profile\Repositories\SocialRepository;
use Corebase\User\Repositories\UserRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * @var userRepository
     */
    private $userRepository;

    /**
     * @var slideRepository
     */
    private $slideRepository;

    /**
     * @var skillRepository
     */
    private $skillRepository;

    /**
     * @var socialRepository
     */
    private $socialRepository;

    /**
     * @var descriptionRepository
     */
    private $descriptionRepository;

    public function __construct(
        UserRepository $userRepository,
        SkillRepository $skillRepository,
        SlideRepository $slideRepository,
        DescriptionRepository $descriptionRepository,
        SocialRepository $socialRepository
    ) {
        $this->userRepository = $userRepository;
        $this->skillRepository = $skillRepository;
        $this->slideRepository = $slideRepository;
        $this->descriptionRepository = $descriptionRepository;
        $this->socialRepository = $socialRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this->userRepository->find(auth()->user()->id);
        $slides = $user->slide;
        $skills = $user->skill;
        $socials = $user->social;
        $description = $user->description;

        return view('profile::index', compact('user', 'slides', 'skills', 'socials', 'description'));
    }

    public function store(Request $request)
    {
        $this->skillRepository->updateSkill($request);

        $this->socialRepository->updatSocail($request);

        $this->descriptionRepository->updateDescription($request);

        $this->slideRepository->updateSlide($request);

        return back();
    }
}
