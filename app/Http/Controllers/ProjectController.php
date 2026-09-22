<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Show a single project's detail page.
     */
    public function show(string $slug): View|RedirectResponse
    {
        $project = collect(config('portfolio.projects'))
            ->firstWhere('slug', $slug);

        if (! $project) {
            return redirect(route('home').'#projects');
        }

        return view('projects.show', ['project' => $project]);
    }
}
