<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'name' => 'Ayesha Khan',
                'email' => 'ayesha.khan@gmc.local',
                'phone' => '+92-300-1111111',
                'whatsapp' => '+92-300-1111111',
                'location' => 'Lahore, Pakistan',
                'address' => 'Johar Town, Lahore',
                'role' => 'Senior Career Counselor',
                'tagline' => 'Guiding students from profile to visa success.',
                'bio' => 'Ayesha has 9+ years of counseling experience for UK, Canada, and Australia admissions with a strong visa success track record.',
                'portfolio_summary' => 'Specializes in profile evaluation, course-country matching, application polishing, and interview preparation.',
                'contact_note' => 'Available Mon-Sat for online and in-person consultations.',
                'profile_pic' => 'images/single-person.jpg',
                'banner' => 'images/course-filter.png',
                'skills' => ['Profile Evaluation', 'SOP Review', 'Visa Interview Prep', 'University Applications', 'Scholarship Guidance'],
                'languages' => ['English', 'Urdu', 'Punjabi'],
                'facebook' => 'https://facebook.com/ayesha.gmc',
                'instagram' => 'https://instagram.com/ayesha.gmc',
                'linkedin' => 'https://linkedin.com/in/ayesha-gmc',
                'website' => 'https://globalmind.example/ayesha',
                'twitter' => 'https://x.com/ayesha_gmc',
                'youtube' => 'https://youtube.com/@ayeshagmc',
                'tiktok' => 'https://tiktok.com/@ayesha.gmc',
                'github' => null,
                'work_start_year' => 2016,
                'work_end_year' => null,
                'designation' => 'Senior Career Counselor',
                'company_name' => 'Global Mind Consultant',
                'years_experience' => 9,
                'clients_helped' => 1200,
                'sessions_completed' => 3200,
                'degree_name' => 'MS Psychology',
                'university_name' => 'University of the Punjab',
                'education_year' => 2015,
                'experiences' => [
                    ['title' => 'Senior Career Counselor', 'company' => 'Global Mind Consultant', 'start_year' => '2021', 'end_year' => 'Present', 'description' => 'Leads premium counseling and visa guidance for study-abroad applicants.'],
                    ['title' => 'Education Consultant', 'company' => 'Future Pathways', 'start_year' => '2018', 'end_year' => '2021', 'description' => 'Managed UK and Canada application pipelines and scholarship shortlisting.'],
                    ['title' => 'Student Advisor', 'company' => 'Campus Connect', 'start_year' => '2016', 'end_year' => '2018', 'description' => 'Handled initial counseling and document readiness checks.'],
                ],
                'educations' => [
                    ['degree' => 'MS Psychology', 'institution' => 'University of the Punjab', 'start_year' => '2013', 'end_year' => '2015', 'description' => 'Focused on career counseling and student behavior studies.'],
                    ['degree' => 'BS Applied Psychology', 'institution' => 'Kinnaird College', 'start_year' => '2009', 'end_year' => '2013', 'description' => 'Foundation in educational and developmental psychology.'],
                ],
                'certifications' => [
                    ['name' => 'ICEF Trained Agent Counsellor', 'issuer' => 'ICEF', 'year' => '2022', 'description' => 'International student recruitment best practices.'],
                    ['name' => 'Certified Career Coach', 'issuer' => 'CPD UK', 'year' => '2020', 'description' => 'Structured client coaching for career decisions.'],
                ],
                'awards' => [
                    ['title' => 'Top Counselor Award', 'issuer' => 'Global Mind Consultant', 'year' => '2024', 'description' => 'Highest annual student placement performance.'],
                ],
                'projects' => [
                    ['title' => 'Visa Mock Interview Program', 'link' => 'https://globalmind.example/projects/visa-mock', 'description' => 'Built a reusable interview prep framework with recorded feedback cycles.'],
                ],
                'status' => 'active',
                'is_featured' => true,
            ],
            [
                'name' => 'Muhammad Ali Raza',
                'email' => 'ali.raza@gmc.local',
                'phone' => '+92-300-2222222',
                'whatsapp' => '+92-300-2222222',
                'location' => 'Islamabad, Pakistan',
                'address' => 'G-11 Markaz, Islamabad',
                'role' => 'Admissions Strategist',
                'tagline' => 'From shortlist to offer letter with clarity.',
                'bio' => 'Ali helps students build strong university applications with data-backed shortlist strategy and document quality control.',
                'portfolio_summary' => 'Strong track record with business and engineering admissions in Europe and North America.',
                'contact_note' => 'Best for profile shortlisting and SOP/LOR planning.',
                'profile_pic' => 'images/test-girl.jpg',
                'banner' => 'images/hero-bg.jpg',
                'skills' => ['University Shortlisting', 'SOP Structuring', 'LOR Strategy', 'Application Tracking', 'Deadline Planning'],
                'languages' => ['English', 'Urdu'],
                'facebook' => 'https://facebook.com/ali.gmc',
                'instagram' => 'https://instagram.com/ali.gmc',
                'linkedin' => 'https://linkedin.com/in/ali-raza-gmc',
                'website' => 'https://globalmind.example/ali',
                'twitter' => 'https://x.com/ali_gmc',
                'youtube' => null,
                'tiktok' => null,
                'github' => 'https://github.com/ali-gmc',
                'work_start_year' => 2017,
                'work_end_year' => null,
                'designation' => 'Admissions Strategist',
                'company_name' => 'Global Mind Consultant',
                'years_experience' => 8,
                'clients_helped' => 950,
                'sessions_completed' => 2400,
                'degree_name' => 'MBA',
                'university_name' => 'NUST Business School',
                'education_year' => 2016,
                'experiences' => [
                    ['title' => 'Admissions Strategist', 'company' => 'Global Mind Consultant', 'start_year' => '2020', 'end_year' => 'Present', 'description' => 'Owns university shortlisting and application execution plans.'],
                    ['title' => 'Application Officer', 'company' => 'EduSphere', 'start_year' => '2017', 'end_year' => '2020', 'description' => 'Managed high-volume admission cycles and compliance checks.'],
                ],
                'educations' => [
                    ['degree' => 'MBA', 'institution' => 'NUST Business School', 'start_year' => '2014', 'end_year' => '2016', 'description' => 'Specialization in strategy and analytics.'],
                    ['degree' => 'BBA', 'institution' => 'COMSATS', 'start_year' => '2010', 'end_year' => '2014', 'description' => 'Business fundamentals and communication.'],
                ],
                'certifications' => [
                    ['name' => 'Certified Admissions Counselor', 'issuer' => 'NACAC', 'year' => '2021', 'description' => 'Admission ethics and standards.'],
                    ['name' => 'Google Project Management', 'issuer' => 'Google', 'year' => '2023', 'description' => 'Execution and process optimization skills.'],
                ],
                'awards' => [
                    ['title' => 'Process Excellence Award', 'issuer' => 'EduSphere', 'year' => '2019', 'description' => 'Reduced turnaround time for offer letter pipeline.'],
                ],
                'projects' => [
                    ['title' => 'Application Tracker Dashboard', 'link' => 'https://globalmind.example/projects/tracker', 'description' => 'Designed student-facing progress tracker for application stages.'],
                ],
                'status' => 'active',
                'is_featured' => false,
            ],
            [
                'name' => 'Sara Ahmed',
                'email' => 'sara.ahmed@gmc.local',
                'phone' => '+92-300-3333333',
                'whatsapp' => '+92-300-3333333',
                'location' => 'Karachi, Pakistan',
                'address' => 'PECHS Block 6, Karachi',
                'role' => 'Visa & Compliance Specialist',
                'tagline' => 'Clean documentation, confident submissions.',
                'bio' => 'Sara focuses on visa documentation quality, refusal analysis, and submission compliance across major study destinations.',
                'portfolio_summary' => 'Experienced in handling complex visa profiles and post-refusal re-application planning.',
                'contact_note' => 'For visa-focused sessions, share your documents before booking.',
                'profile_pic' => 'images/girl.jpg',
                'banner' => 'images/hero-bg-services.jpg',
                'skills' => ['Visa File Review', 'Refusal Analysis', 'Compliance Audit', 'Financial Documentation', 'Interview Preparation'],
                'languages' => ['English', 'Urdu', 'Sindhi'],
                'facebook' => 'https://facebook.com/sara.gmc',
                'instagram' => 'https://instagram.com/sara.gmc',
                'linkedin' => 'https://linkedin.com/in/sara-ahmed-gmc',
                'website' => 'https://globalmind.example/sara',
                'twitter' => null,
                'youtube' => 'https://youtube.com/@sara-gmc',
                'tiktok' => 'https://tiktok.com/@sara.gmc',
                'github' => null,
                'work_start_year' => 2015,
                'work_end_year' => null,
                'designation' => 'Visa & Compliance Specialist',
                'company_name' => 'Global Mind Consultant',
                'years_experience' => 10,
                'clients_helped' => 1400,
                'sessions_completed' => 3600,
                'degree_name' => 'LLB',
                'university_name' => 'University of Karachi',
                'education_year' => 2014,
                'experiences' => [
                    ['title' => 'Visa & Compliance Specialist', 'company' => 'Global Mind Consultant', 'start_year' => '2019', 'end_year' => 'Present', 'description' => 'Leads compliance checks and refusal-risk controls for visa files.'],
                    ['title' => 'Documentation Officer', 'company' => 'Study Bridge', 'start_year' => '2015', 'end_year' => '2019', 'description' => 'Managed end-to-end supporting documentation and embassy requirements.'],
                ],
                'educations' => [
                    ['degree' => 'LLB', 'institution' => 'University of Karachi', 'start_year' => '2011', 'end_year' => '2014', 'description' => 'Legal and compliance documentation foundations.'],
                ],
                'certifications' => [
                    ['name' => 'Visa Documentation Specialist', 'issuer' => 'CPD Accredited', 'year' => '2022', 'description' => 'Specialized compliance and document control training.'],
                    ['name' => 'IELTS Academic Trainer', 'issuer' => 'British Council Workshop', 'year' => '2018', 'description' => 'Interview communication and language guidance.'],
                ],
                'awards' => [
                    ['title' => 'Compliance Champion', 'issuer' => 'Global Mind Consultant', 'year' => '2023', 'description' => 'Best quality score on visa file audit.'],
                ],
                'projects' => [
                    ['title' => 'Refusal Recovery Playbook', 'link' => 'https://globalmind.example/projects/refusal-recovery', 'description' => 'Built a standardized remediation checklist for refused cases.'],
                ],
                'status' => 'active',
                'is_featured' => false,
            ],
        ];

        foreach ($members as $member) {
            Team::updateOrCreate(
                ['email' => $member['email']],
                $member
            );
        }
    }
}

