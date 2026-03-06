@php
    $team = $team ?? null;
    $isEdit = $isEdit ?? false;

    $skills = old('skills', $team?->skills ?? ['']);
    $languages = old('languages', $team?->languages ?? ['']);
    $experiences = old('experiences', $team?->experiences ?? [['title' => '', 'company' => '', 'start_year' => '', 'end_year' => '', 'description' => '']]);
    $educations = old('educations', $team?->educations ?? [['degree' => '', 'institution' => '', 'start_year' => '', 'end_year' => '', 'description' => '']]);
    $certifications = old('certifications', $team?->certifications ?? [['name' => '', 'issuer' => '', 'year' => '', 'description' => '']]);
    $awards = old('awards', $team?->awards ?? [['title' => '', 'issuer' => '', 'year' => '', 'description' => '']]);
    $projects = old('projects', $team?->projects ?? [['title' => '', 'link' => '', 'description' => '']]);

    foreach (['skills', 'languages'] as $simpleArrayName) {
        if (!is_array($$simpleArrayName) || empty($$simpleArrayName)) {
            $$simpleArrayName = [''];
        }
    }
@endphp

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">1. Professional Profile</h5>
    <div class="row g-3">
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" name="name" class="form-control form-control-lg"
                value="{{ old('name', $team?->name) }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Role</label>
            <input type="text" name="role" class="form-control form-control-lg"
                value="{{ old('role', $team?->role) }}" placeholder="Career Counselor">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Tagline</label>
            <input type="text" name="tagline" class="form-control form-control-lg"
                value="{{ old('tagline', $team?->tagline) }}" placeholder="Helping students build global careers">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Status</label>
            <select name="status" class="form-control form-control-lg">
                <option value="active" {{ old('status', $team?->status ?? 'active') === 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $team?->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Short Bio</label>
            <textarea name="bio" rows="4" class="form-control form-control-lg">{{ old('bio', $team?->bio) }}</textarea>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Portfolio Summary</label>
            <textarea name="portfolio_summary" rows="4" class="form-control form-control-lg">{{ old('portfolio_summary', $team?->portfolio_summary) }}</textarea>
        </div>
    </div>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">2. Contact & Media</h5>
    <div class="row g-3">
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" name="email" class="form-control form-control-lg"
                value="{{ old('email', $team?->email) }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Phone</label>
            <input type="text" name="phone" class="form-control form-control-lg"
                value="{{ old('phone', $team?->phone) }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">WhatsApp</label>
            <input type="text" name="whatsapp" class="form-control form-control-lg"
                value="{{ old('whatsapp', $team?->whatsapp) }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Location</label>
            <input type="text" name="location" class="form-control form-control-lg"
                value="{{ old('location', $team?->location) }}">
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Address</label>
            <input type="text" name="address" class="form-control form-control-lg"
                value="{{ old('address', $team?->address) }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Profile Pic</label>
            <input type="file" name="profile_pic" class="form-control form-control-lg">
            @if ($isEdit && $team?->profile_pic)
                <img src="{{ asset($team->profile_pic) }}" width="70" class="rounded mt-2 border">
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Banner</label>
            <input type="file" name="banner" class="form-control form-control-lg">
            @if ($isEdit && $team?->banner)
                <img src="{{ asset($team->banner) }}" width="140" class="rounded mt-2 border">
            @endif
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Contact Note</label>
            <textarea name="contact_note" rows="3" class="form-control form-control-lg">{{ old('contact_note', $team?->contact_note) }}</textarea>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="is_featured" id="is_featured" value="1"
                    {{ old('is_featured', $team?->is_featured) ? 'checked' : '' }}>
                <label for="is_featured" class="form-check-label fw-semibold">Set as featured portfolio profile</label>
            </div>
        </div>
    </div>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">3. Skills & Languages</h5>
    <div class="row g-3">
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Skills</label>
            <div id="skills-wrapper">
                @foreach ($skills as $skill)
                    <div class="input-group mb-2 repeater-simple-row">
                        <input type="text" name="skills[]" class="form-control form-control-lg"
                            value="{{ $skill }}">
                        <button class="btn btn-outline-danger remove-simple-row" type="button">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-sm btn-outline-primary add-simple-row" data-target="#skills-wrapper"
                data-input-name="skills[]">+ Add Skill</button>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Languages</label>
            <div id="languages-wrapper">
                @foreach ($languages as $language)
                    <div class="input-group mb-2 repeater-simple-row">
                        <input type="text" name="languages[]" class="form-control form-control-lg"
                            value="{{ $language }}">
                        <button class="btn btn-outline-danger remove-simple-row" type="button">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-sm btn-outline-primary add-simple-row"
                data-target="#languages-wrapper" data-input-name="languages[]">+ Add Language</button>
        </div>
    </div>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">4. Social Links</h5>
    <div class="row g-3">
        <div class="col-md-4 mb-3"><input type="text" name="linkedin" class="form-control form-control-lg"
                value="{{ old('linkedin', $team?->linkedin) }}" placeholder="LinkedIn URL"></div>
        <div class="col-md-4 mb-3"><input type="text" name="facebook" class="form-control form-control-lg"
                value="{{ old('facebook', $team?->facebook) }}" placeholder="Facebook URL"></div>
        <div class="col-md-4 mb-3"><input type="text" name="instagram" class="form-control form-control-lg"
                value="{{ old('instagram', $team?->instagram) }}" placeholder="Instagram URL"></div>
        <div class="col-md-4 mb-3"><input type="text" name="website" class="form-control form-control-lg"
                value="{{ old('website', $team?->website) }}" placeholder="Website URL"></div>
        <div class="col-md-4 mb-3"><input type="text" name="twitter" class="form-control form-control-lg"
                value="{{ old('twitter', $team?->twitter) }}" placeholder="Twitter/X URL"></div>
        <div class="col-md-4 mb-3"><input type="text" name="youtube" class="form-control form-control-lg"
                value="{{ old('youtube', $team?->youtube) }}" placeholder="YouTube URL"></div>
        <div class="col-md-6 mb-3"><input type="text" name="tiktok" class="form-control form-control-lg"
                value="{{ old('tiktok', $team?->tiktok) }}" placeholder="TikTok URL"></div>
        <div class="col-md-6 mb-3"><input type="text" name="github" class="form-control form-control-lg"
                value="{{ old('github', $team?->github) }}" placeholder="GitHub URL"></div>
    </div>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">5. Snapshot Stats</h5>
    <div class="row g-3">
        <div class="col-md-4 mb-3"><input type="number" name="years_experience" class="form-control form-control-lg"
                value="{{ old('years_experience', $team?->years_experience) }}" placeholder="Years Experience"></div>
        <div class="col-md-4 mb-3"><input type="number" name="clients_helped" class="form-control form-control-lg"
                value="{{ old('clients_helped', $team?->clients_helped) }}" placeholder="Clients Helped"></div>
        <div class="col-md-4 mb-3"><input type="number" name="sessions_completed" class="form-control form-control-lg"
                value="{{ old('sessions_completed', $team?->sessions_completed) }}" placeholder="Sessions Completed"></div>
    </div>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">6. Legacy Single Entries (Optional)</h5>
    <div class="row g-3">
        <div class="col-md-6 mb-3"><input type="text" name="designation" class="form-control form-control-lg"
                value="{{ old('designation', $team?->designation) }}" placeholder="Designation"></div>
        <div class="col-md-6 mb-3"><input type="text" name="company_name" class="form-control form-control-lg"
                value="{{ old('company_name', $team?->company_name) }}" placeholder="Company"></div>
        <div class="col-md-4 mb-3"><input type="number" name="work_start_year" class="form-control form-control-lg"
                value="{{ old('work_start_year', $team?->work_start_year) }}" placeholder="Work Start Year"></div>
        <div class="col-md-4 mb-3"><input type="number" name="work_end_year" class="form-control form-control-lg"
                value="{{ old('work_end_year', $team?->work_end_year) }}" placeholder="Work End Year"></div>
        <div class="col-md-4 mb-3"><input type="number" name="education_year" class="form-control form-control-lg"
                value="{{ old('education_year', $team?->education_year) }}" placeholder="Education Year"></div>
        <div class="col-md-6 mb-3"><input type="text" name="degree_name" class="form-control form-control-lg"
                value="{{ old('degree_name', $team?->degree_name) }}" placeholder="Degree"></div>
        <div class="col-md-6 mb-3"><input type="text" name="university_name" class="form-control form-control-lg"
                value="{{ old('university_name', $team?->university_name) }}" placeholder="Institution"></div>
    </div>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">7. Work Experiences</h5>
    <div id="experiences-wrapper" class="complex-repeater" data-name="experiences" data-template="#tpl-experience">
        @foreach ($experiences as $i => $item)
            <div class="card border mb-3 complex-row" data-index="{{ $i }}">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-6"><input type="text" name="experiences[{{ $i }}][title]"
                                class="form-control" placeholder="Title" value="{{ $item['title'] ?? '' }}"></div>
                        <div class="col-md-6"><input type="text" name="experiences[{{ $i }}][company]"
                                class="form-control" placeholder="Company" value="{{ $item['company'] ?? '' }}"></div>
                        <div class="col-md-3"><input type="text" name="experiences[{{ $i }}][start_year]"
                                class="form-control" placeholder="Start Year" value="{{ $item['start_year'] ?? '' }}"></div>
                        <div class="col-md-3"><input type="text" name="experiences[{{ $i }}][end_year]"
                                class="form-control" placeholder="End Year / Present" value="{{ $item['end_year'] ?? '' }}"></div>
                        <div class="col-md-6"><button type="button"
                                class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                        <div class="col-md-12"><textarea name="experiences[{{ $i }}][description]" class="form-control" rows="3"
                                placeholder="Description">{{ $item['description'] ?? '' }}</textarea></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-sm btn-outline-primary add-complex-row" data-target="#experiences-wrapper">+
        Add Experience</button>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">8. Educations</h5>
    <div id="educations-wrapper" class="complex-repeater" data-name="educations" data-template="#tpl-education">
        @foreach ($educations as $i => $item)
            <div class="card border mb-3 complex-row" data-index="{{ $i }}">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-6"><input type="text" name="educations[{{ $i }}][degree]"
                                class="form-control" placeholder="Degree" value="{{ $item['degree'] ?? '' }}"></div>
                        <div class="col-md-6"><input type="text" name="educations[{{ $i }}][institution]"
                                class="form-control" placeholder="Institution" value="{{ $item['institution'] ?? '' }}"></div>
                        <div class="col-md-3"><input type="text" name="educations[{{ $i }}][start_year]"
                                class="form-control" placeholder="Start Year" value="{{ $item['start_year'] ?? '' }}"></div>
                        <div class="col-md-3"><input type="text" name="educations[{{ $i }}][end_year]"
                                class="form-control" placeholder="End Year" value="{{ $item['end_year'] ?? '' }}"></div>
                        <div class="col-md-6"><button type="button"
                                class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                        <div class="col-md-12"><textarea name="educations[{{ $i }}][description]" class="form-control" rows="3"
                                placeholder="Description">{{ $item['description'] ?? '' }}</textarea></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-sm btn-outline-primary add-complex-row" data-target="#educations-wrapper">+
        Add Education</button>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">9. Certifications</h5>
    <div id="certifications-wrapper" class="complex-repeater" data-name="certifications"
        data-template="#tpl-certification">
        @foreach ($certifications as $i => $item)
            <div class="card border mb-3 complex-row" data-index="{{ $i }}">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-6"><input type="text" name="certifications[{{ $i }}][name]"
                                class="form-control" placeholder="Certification" value="{{ $item['name'] ?? '' }}"></div>
                        <div class="col-md-6"><input type="text" name="certifications[{{ $i }}][issuer]"
                                class="form-control" placeholder="Issuer" value="{{ $item['issuer'] ?? '' }}"></div>
                        <div class="col-md-6"><input type="text" name="certifications[{{ $i }}][year]"
                                class="form-control" placeholder="Year" value="{{ $item['year'] ?? '' }}"></div>
                        <div class="col-md-6"><button type="button"
                                class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                        <div class="col-md-12"><textarea name="certifications[{{ $i }}][description]" class="form-control" rows="3"
                                placeholder="Description">{{ $item['description'] ?? '' }}</textarea></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-sm btn-outline-primary add-complex-row"
        data-target="#certifications-wrapper">+ Add Certification</button>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">10. Awards</h5>
    <div id="awards-wrapper" class="complex-repeater" data-name="awards" data-template="#tpl-award">
        @foreach ($awards as $i => $item)
            <div class="card border mb-3 complex-row" data-index="{{ $i }}">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-6"><input type="text" name="awards[{{ $i }}][title]"
                                class="form-control" placeholder="Award Title" value="{{ $item['title'] ?? '' }}"></div>
                        <div class="col-md-6"><input type="text" name="awards[{{ $i }}][issuer]"
                                class="form-control" placeholder="Issuer" value="{{ $item['issuer'] ?? '' }}"></div>
                        <div class="col-md-6"><input type="text" name="awards[{{ $i }}][year]"
                                class="form-control" placeholder="Year" value="{{ $item['year'] ?? '' }}"></div>
                        <div class="col-md-6"><button type="button"
                                class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                        <div class="col-md-12"><textarea name="awards[{{ $i }}][description]" class="form-control" rows="3"
                                placeholder="Description">{{ $item['description'] ?? '' }}</textarea></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-sm btn-outline-primary add-complex-row" data-target="#awards-wrapper">+ Add
        Award</button>
</div>

<div class="mb-4">
    <h5 class="text-primary border-bottom pb-2 mb-3">11. Projects</h5>
    <div id="projects-wrapper" class="complex-repeater" data-name="projects" data-template="#tpl-project">
        @foreach ($projects as $i => $item)
            <div class="card border mb-3 complex-row" data-index="{{ $i }}">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-6"><input type="text" name="projects[{{ $i }}][title]"
                                class="form-control" placeholder="Project Title" value="{{ $item['title'] ?? '' }}"></div>
                        <div class="col-md-6"><input type="text" name="projects[{{ $i }}][link]"
                                class="form-control" placeholder="Project Link" value="{{ $item['link'] ?? '' }}"></div>
                        <div class="col-md-12"><textarea name="projects[{{ $i }}][description]" class="form-control" rows="3"
                                placeholder="Description">{{ $item['description'] ?? '' }}</textarea></div>
                        <div class="col-md-12"><button type="button"
                                class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-sm btn-outline-primary add-complex-row" data-target="#projects-wrapper">+ Add
        Project</button>
</div>

<script type="text/template" id="tpl-experience">
    <div class="card border mb-3 complex-row" data-index="__INDEX__">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md-6"><input type="text" name="experiences[__INDEX__][title]" class="form-control" placeholder="Title"></div>
                <div class="col-md-6"><input type="text" name="experiences[__INDEX__][company]" class="form-control" placeholder="Company"></div>
                <div class="col-md-3"><input type="text" name="experiences[__INDEX__][start_year]" class="form-control" placeholder="Start Year"></div>
                <div class="col-md-3"><input type="text" name="experiences[__INDEX__][end_year]" class="form-control" placeholder="End Year / Present"></div>
                <div class="col-md-6"><button type="button" class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                <div class="col-md-12"><textarea name="experiences[__INDEX__][description]" class="form-control" rows="3" placeholder="Description"></textarea></div>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="tpl-education">
    <div class="card border mb-3 complex-row" data-index="__INDEX__">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md-6"><input type="text" name="educations[__INDEX__][degree]" class="form-control" placeholder="Degree"></div>
                <div class="col-md-6"><input type="text" name="educations[__INDEX__][institution]" class="form-control" placeholder="Institution"></div>
                <div class="col-md-3"><input type="text" name="educations[__INDEX__][start_year]" class="form-control" placeholder="Start Year"></div>
                <div class="col-md-3"><input type="text" name="educations[__INDEX__][end_year]" class="form-control" placeholder="End Year"></div>
                <div class="col-md-6"><button type="button" class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                <div class="col-md-12"><textarea name="educations[__INDEX__][description]" class="form-control" rows="3" placeholder="Description"></textarea></div>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="tpl-certification">
    <div class="card border mb-3 complex-row" data-index="__INDEX__">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md-6"><input type="text" name="certifications[__INDEX__][name]" class="form-control" placeholder="Certification"></div>
                <div class="col-md-6"><input type="text" name="certifications[__INDEX__][issuer]" class="form-control" placeholder="Issuer"></div>
                <div class="col-md-6"><input type="text" name="certifications[__INDEX__][year]" class="form-control" placeholder="Year"></div>
                <div class="col-md-6"><button type="button" class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                <div class="col-md-12"><textarea name="certifications[__INDEX__][description]" class="form-control" rows="3" placeholder="Description"></textarea></div>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="tpl-award">
    <div class="card border mb-3 complex-row" data-index="__INDEX__">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md-6"><input type="text" name="awards[__INDEX__][title]" class="form-control" placeholder="Award Title"></div>
                <div class="col-md-6"><input type="text" name="awards[__INDEX__][issuer]" class="form-control" placeholder="Issuer"></div>
                <div class="col-md-6"><input type="text" name="awards[__INDEX__][year]" class="form-control" placeholder="Year"></div>
                <div class="col-md-6"><button type="button" class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
                <div class="col-md-12"><textarea name="awards[__INDEX__][description]" class="form-control" rows="3" placeholder="Description"></textarea></div>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="tpl-project">
    <div class="card border mb-3 complex-row" data-index="__INDEX__">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md-6"><input type="text" name="projects[__INDEX__][title]" class="form-control" placeholder="Project Title"></div>
                <div class="col-md-6"><input type="text" name="projects[__INDEX__][link]" class="form-control" placeholder="Project Link"></div>
                <div class="col-md-12"><textarea name="projects[__INDEX__][description]" class="form-control" rows="3" placeholder="Description"></textarea></div>
                <div class="col-md-12"><button type="button" class="btn btn-outline-danger w-100 remove-complex-row">Remove</button></div>
            </div>
        </div>
    </div>
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.add-simple-row').forEach(function(button) {
            button.addEventListener('click', function() {
                const wrapper = document.querySelector(button.dataset.target);
                const row = document.createElement('div');
                row.className = 'input-group mb-2 repeater-simple-row';
                row.innerHTML = `
                    <input type="text" name="${button.dataset.inputName}" class="form-control form-control-lg">
                    <button class="btn btn-outline-danger remove-simple-row" type="button">Remove</button>
                `;
                wrapper.appendChild(row);
            });
        });

        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-simple-row')) {
                const row = event.target.closest('.repeater-simple-row');
                const wrapper = row.parentElement;
                if (wrapper.querySelectorAll('.repeater-simple-row').length === 1) {
                    row.querySelector('input').value = '';
                    return;
                }
                row.remove();
            }
        });

        document.querySelectorAll('.add-complex-row').forEach(function(button) {
            button.addEventListener('click', function() {
                const wrapper = document.querySelector(button.dataset.target);
                const templateId = wrapper.dataset.template;
                const template = document.querySelector(templateId);
                const nextIndex = wrapper.querySelectorAll('.complex-row').length;
                const html = template.innerHTML.replace(/__INDEX__/g, String(nextIndex));
                wrapper.insertAdjacentHTML('beforeend', html);
            });
        });

        document.addEventListener('click', function(event) {
            if (!event.target.classList.contains('remove-complex-row')) {
                return;
            }
            const row = event.target.closest('.complex-row');
            const wrapper = row.parentElement;
            if (wrapper.querySelectorAll('.complex-row').length === 1) {
                row.querySelectorAll('input, textarea').forEach(function(field) {
                    field.value = '';
                });
                return;
            }
            row.remove();
        });
    });
</script>

