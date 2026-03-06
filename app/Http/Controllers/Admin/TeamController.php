<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    private function normalizeStringArray($values): array
    {
        if (is_string($values)) {
            $values = explode(',', $values);
        }

        if (!is_array($values)) {
            return [];
        }

        return collect($values)
            ->map(fn($value) => trim((string) $value))
            ->filter(fn($value) => $value !== '')
            ->values()
            ->all();
    }

    private function normalizeRepeater(?array $items, array $keys): array
    {
        if (!is_array($items)) {
            return [];
        }

        return collect($items)
            ->map(function ($item) use ($keys) {
                if (!is_array($item)) {
                    return null;
                }

                $normalized = [];
                foreach ($keys as $key) {
                    $normalized[$key] = trim((string) ($item[$key] ?? ''));
                }

                $hasAnyValue = collect($normalized)->contains(fn($value) => $value !== '');

                return $hasAnyValue ? $normalized : null;
            })
            ->filter()
            ->values()
            ->all();
    }

    private function rules(Request $request, bool $isUpdate = false): array
    {
        $idRule = $isUpdate
            ? ['required', Rule::exists('teams', 'id')]
            : ['nullable'];

        return [
            'id' => $idRule,
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'whatsapp' => ['nullable', 'string', 'max:50'],
            'location' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'tagline' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'portfolio_summary' => ['nullable', 'string'],
            'contact_note' => ['nullable', 'string'],
            'profile_pic' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'banner' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'skills' => ['nullable', 'array'],
            'skills.*' => ['nullable', 'string', 'max:100'],
            'languages' => ['nullable', 'array'],
            'languages.*' => ['nullable', 'string', 'max:100'],
            'facebook' => ['nullable', 'string', 'max:255'],
            'instagram' => ['nullable', 'string', 'max:255'],
            'linkedin' => ['nullable', 'string', 'max:255'],
            'website' => ['nullable', 'string', 'max:255'],
            'twitter' => ['nullable', 'string', 'max:255'],
            'youtube' => ['nullable', 'string', 'max:255'],
            'tiktok' => ['nullable', 'string', 'max:255'],
            'github' => ['nullable', 'string', 'max:255'],
            'work_start_year' => ['nullable', 'integer', 'min:1900', 'max:2100'],
            'work_end_year' => ['nullable', 'integer', 'min:1900', 'max:2100'],
            'designation' => ['nullable', 'string', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'years_experience' => ['nullable', 'integer', 'min:0'],
            'clients_helped' => ['nullable', 'integer', 'min:0'],
            'sessions_completed' => ['nullable', 'integer', 'min:0'],
            'degree_name' => ['nullable', 'string', 'max:255'],
            'university_name' => ['nullable', 'string', 'max:255'],
            'education_year' => ['nullable', 'integer', 'min:1900', 'max:2100'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
            'is_featured' => ['nullable', 'boolean'],
            'experiences' => ['nullable', 'array'],
            'experiences.*.title' => ['nullable', 'string', 'max:255'],
            'experiences.*.company' => ['nullable', 'string', 'max:255'],
            'experiences.*.start_year' => ['nullable', 'string', 'max:20'],
            'experiences.*.end_year' => ['nullable', 'string', 'max:20'],
            'experiences.*.description' => ['nullable', 'string'],
            'educations' => ['nullable', 'array'],
            'educations.*.degree' => ['nullable', 'string', 'max:255'],
            'educations.*.institution' => ['nullable', 'string', 'max:255'],
            'educations.*.start_year' => ['nullable', 'string', 'max:20'],
            'educations.*.end_year' => ['nullable', 'string', 'max:20'],
            'educations.*.description' => ['nullable', 'string'],
            'certifications' => ['nullable', 'array'],
            'certifications.*.name' => ['nullable', 'string', 'max:255'],
            'certifications.*.issuer' => ['nullable', 'string', 'max:255'],
            'certifications.*.year' => ['nullable', 'string', 'max:20'],
            'certifications.*.description' => ['nullable', 'string'],
            'awards' => ['nullable', 'array'],
            'awards.*.title' => ['nullable', 'string', 'max:255'],
            'awards.*.issuer' => ['nullable', 'string', 'max:255'],
            'awards.*.year' => ['nullable', 'string', 'max:20'],
            'awards.*.description' => ['nullable', 'string'],
            'projects' => ['nullable', 'array'],
            'projects.*.title' => ['nullable', 'string', 'max:255'],
            'projects.*.link' => ['nullable', 'string', 'max:255'],
            'projects.*.description' => ['nullable', 'string'],
        ];
    }

    private function payload(Request $request, array $validated): array
    {
        return [
            'name' => $validated['name'],
            'email' => $validated['email'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'whatsapp' => $validated['whatsapp'] ?? null,
            'location' => $validated['location'] ?? null,
            'address' => $validated['address'] ?? null,
            'role' => $validated['role'] ?? null,
            'tagline' => $validated['tagline'] ?? null,
            'bio' => $validated['bio'] ?? null,
            'portfolio_summary' => $validated['portfolio_summary'] ?? null,
            'contact_note' => $validated['contact_note'] ?? null,
            'skills' => $this->normalizeStringArray($request->input('skills', [])),
            'languages' => $this->normalizeStringArray($request->input('languages', [])),
            'facebook' => $validated['facebook'] ?? null,
            'instagram' => $validated['instagram'] ?? null,
            'linkedin' => $validated['linkedin'] ?? null,
            'website' => $validated['website'] ?? null,
            'twitter' => $validated['twitter'] ?? null,
            'youtube' => $validated['youtube'] ?? null,
            'tiktok' => $validated['tiktok'] ?? null,
            'github' => $validated['github'] ?? null,
            'work_start_year' => $validated['work_start_year'] ?? null,
            'work_end_year' => $validated['work_end_year'] ?? null,
            'designation' => $validated['designation'] ?? null,
            'company_name' => $validated['company_name'] ?? null,
            'years_experience' => $validated['years_experience'] ?? null,
            'clients_helped' => $validated['clients_helped'] ?? null,
            'sessions_completed' => $validated['sessions_completed'] ?? null,
            'degree_name' => $validated['degree_name'] ?? null,
            'university_name' => $validated['university_name'] ?? null,
            'education_year' => $validated['education_year'] ?? null,
            'status' => $validated['status'],
            'is_featured' => $request->boolean('is_featured'),
            'experiences' => $this->normalizeRepeater($request->input('experiences', []), [
                'title',
                'company',
                'start_year',
                'end_year',
                'description',
            ]),
            'educations' => $this->normalizeRepeater($request->input('educations', []), [
                'degree',
                'institution',
                'start_year',
                'end_year',
                'description',
            ]),
            'certifications' => $this->normalizeRepeater($request->input('certifications', []), [
                'name',
                'issuer',
                'year',
                'description',
            ]),
            'awards' => $this->normalizeRepeater($request->input('awards', []), [
                'title',
                'issuer',
                'year',
                'description',
            ]),
            'projects' => $this->normalizeRepeater($request->input('projects', []), [
                'title',
                'link',
                'description',
            ]),
        ];
    }

    public function index()
    {
        $teams = Team::latest()->get();

        return view('admin.team.index', [
            'heading' => "Team",
            'title' => "View Team Member",
            'active' => 'team',
            'teams' => $teams
        ]);
    }

    public function create()
    {
        return view("admin.team.create", [
            'heading' => "Team",
            'title' => "Add Team Member",
            'active' => 'team',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules($request));

        // Profile image
        $profilePicPath = null;
        if ($request->hasFile('profile_pic')) {
            $profilePicPath = ImageHelper::saveImage($request->profile_pic, 'Image');
        }

        // Banner image
        $bannerPath = null;
        if ($request->hasFile('banner')) {
            $bannerPath = ImageHelper::saveImage($request->banner, 'Image');
        }

        $data = $this->payload($request, $validated);
        $data['profile_pic'] = $profilePicPath;
        $data['banner'] = $bannerPath;

        Team::create($data);

        return redirect()->route('team.index')->with('success', 'Team member added successfully');
    }

    public function show(string $id)
    {
        $team = Team::findOrFail($id);

        return view('admin.team.details', [
            'heading' => "Team Member Detail",
            'title' => "View Team Member Detail",
            'active' => 'team',
            'team' => $team
        ]);
    }

    public function edit(string $id)
    {
        $team = Team::findOrFail($id);

        return view('admin.team.edit', [
            'heading' => 'Team',
            'title' => 'Edit Team Member',
            'active' => 'team',
            'team' => $team
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate($this->rules($request, true));
        $team = Team::findOrFail($validated['id']);

        $data = $this->payload($request, $validated);

        // Profile image update
        if ($request->hasFile('profile_pic')) {
            $data['profile_pic'] = ImageHelper::saveImage($request->profile_pic, 'Image');
        }

        // Banner image update
        if ($request->hasFile('banner')) {
            $data['banner'] = ImageHelper::saveImage($request->banner, 'Image');
        }

        $team->update($data);

        return redirect()->route('team.index')->with('success', 'Team member updated successfully');
    }

    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully');
    }
}
