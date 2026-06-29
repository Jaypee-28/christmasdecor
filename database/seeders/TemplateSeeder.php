<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            'A' => "We are the owners of the premium digital asset ChristmasDecoratingService.com and are quietly initiating private acquisition discussions. Given your recent capital influx and push to dominate the sector, securing this asset gives you an immediate, defensible moat in the space.\n\nAre you handling M&A and brand assets right now, or should I speak with your CMO?",
            
            'B' => "I’m reaching out because my team is preparing to privately sell the asset ChristmasDecoratingService.com. We identified your company as a prime acquisition partner because owning this asset positions you as the definitive authority to real estate developers deciding on their tech stack.\n\nIs acquiring strategic digital real estate on your roadmap for this quarter?",
            
            'C' => "As your company continues to expand its hardware ecosystem, controlling the high-level narrative is critical. We are the owners of ChristmasDecoratingService.com and are looking for the right organization to acquire the domain and asset.\n\nIt’s a perfect fit to launch a consulting arm, partner network, or enterprise offering.\n\nAre you open to a brief chat about acquiring this?",
            
            'D' => "We are the owners of ChristmasDecoratingService.com and are initiating a private sale. We specifically flagged your company because an AI-driven operating system needs a category-defining domain to build enterprise trust.\n\nAre you the right person to speak with about acquiring strategic assets, or is there a VP of Growth I should ping?",

            'FollowUp1' => "Just floating this to the top of your inbox.\n\nAre you the right person to speak with regarding digital asset acquisitions, or is there someone else on your team handling M&A that I should be speaking to?",

            'FollowUp2' => "I haven't heard back, so I'll assume acquiring new strategic assets isn't a priority for your team this quarter.\n\nWe are opening discussions with other players in the space this week. If things change on your end, let me know."
        ];

        foreach ($templates as $key => $body) {
            \App\Models\Template::updateOrCreate(
                ['key' => $key],
                ['body' => $body, 'subject' => 'Acquisition Inquiry'] // Add a default subject if needed
            );
        }
    }
}
