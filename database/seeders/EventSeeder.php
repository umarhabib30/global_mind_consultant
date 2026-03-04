<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'UK & Ireland University Admission Day 2026',
                'short_description' => 'Meet official representatives from top UK and Ireland universities for spot assessments and scholarship guidance.',
                'long_description' => "Join our full-day admission event focused on UK and Ireland intakes for 2026. Students will get direct counseling from partner institutions, profile review for scholarship chances, and complete visa documentation guidance.\n\nThis session is ideal for undergraduate and postgraduate applicants planning for Fall 2026 intake.",
                'picture' => null,
                'date' => '2026-05-16',
                'start_time' => '10:00:00',
                'end_time' => '16:00:00',
                'speaker' => 'Mr. Daniel Roberts',
                'location' => 'Global Mind Consultants, Lahore',
                'status' => 'scheduled',
                'event_type' => 'event',
                'attendees' => 120,
                'parameters' => [
                    'On-spot profile evaluation for UK and Ireland universities',
                    'Scholarship eligibility review with expert counselors',
                    'Visa SOP and document checklist support',
                    'One-to-one session booking for shortlisted candidates',
                ],
                'why_attend' => [
                    'Get personalized university options based on your profile',
                    'Understand realistic tuition, living cost, and funding plans',
                    'Reduce application mistakes with document-level guidance',
                ],
            ],
            [
                'title' => 'IELTS Band 7+ Strategy Webinar',
                'short_description' => 'A live webinar covering practical exam strategy for Listening, Reading, Writing, and Speaking modules.',
                'long_description' => "This webinar is designed for students targeting Band 7 or higher for admission and visa requirements. Our instructors will break down scoring criteria, high-impact writing structures, and speaking fluency techniques with sample answers.\n\nParticipants will receive a mock practice plan and recommended timeline for test booking and preparation.",
                'picture' => null,
                'date' => '2026-04-12',
                'start_time' => '18:30:00',
                'end_time' => '20:00:00',
                'speaker' => 'Ms. Ayesha Khan (IELTS Trainer)',
                'location' => 'Online (Zoom)',
                'status' => 'scheduled',
                'event_type' => 'webinar',
                'attendees' => 250,
                'parameters' => [
                    'Module-wise score improvement framework',
                    'Live writing task review with examiner-style feedback',
                    'Speaking response templates for common cue cards',
                    'Weekly study plan for working professionals and students',
                ],
                'why_attend' => [
                    'Save prep time with a proven, structured approach',
                    'Learn common mistakes that reduce your final band score',
                    'Get a practical plan to attempt IELTS confidently',
                ],
            ],
        ];

        foreach ($events as $event) {
            Event::updateOrCreate(
                ['title' => $event['title'], 'date' => $event['date']],
                $event
            );
        }
    }
}
