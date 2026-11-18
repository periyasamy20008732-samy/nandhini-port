<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    private function data(): array
    {
        $p = config('portfolio');
        foreach ($p['projects'] as &$proj) {
            $proj['slug'] = Str::slug($proj['title']);
        }
        return $p;
    }

    public function home()       { return view('home', ['p' => $this->data()]); }
    public function about()      { return view('about', ['p' => $this->data()]); }
    public function projects()   { return view('projects.index', ['p' => $this->data()]); }
    public function experience() { return view('experience', ['p' => $this->data()]); }
    public function skills()     { return view('skills', ['p' => $this->data()]); }

    public function project(string $slug)
    {
        $p = $this->data();
        $list = array_values($p['projects']);
        $i = array_search($slug, array_column($list, 'slug'));
        abort_if($i === false, 404);

        return view('projects.show', [
            'p'    => $p,
            'proj' => $list[$i],
            'prev' => $list[$i - 1] ?? null,
            'next' => $list[$i + 1] ?? null,
        ]);
    }
}
