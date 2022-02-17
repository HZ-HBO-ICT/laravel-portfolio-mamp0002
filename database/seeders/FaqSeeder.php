<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question'=>'How can you print a document from your laptop at HZ?',
            'answer'=>'<ol>
                        <li>Go to the website http://print.hz.nl</li>
                        <li>Type in your HZ username and password an click on Login</li>
                        <li>Click on Choose File and select the file you want to print</li>
                        <li>Click on Next. Repeat the previous step if you want to add more documents</li>
                        <li>Wait until the document has been processed and then rick the advanced option to state
                            whether you
                            want
                            double-sided or black&white printing</li>
                        <li>Click on the HZ printer or HZ plotter to print your documents</li>
                        <li>Once the print job has been requested you must register using your HZ pass on the TouchID
                            next to
                            the
                            multifunctional printer</li>
                        <li>Select printer option Print/Afdrukken</li>
                        <li>In the menu, select the multifunctional printer to where the job has been sent. Next, you
                            can see
                            which
                            job is ready to be printed</li>
                        <li>The print job is completed provided there is sufficient credit on your printing account.
                            When the
                            printing
                            is completed, press Stop on the TouchID, followed by Logout
                        </li>
                    </ol>',
            'link'=>'',
        ]);
        DB::table('faqs')->insert([
            'question'=>'How can you scan a document and send it to your laptop at HZ?',
            'answer'=>'<ol>
                        <li>Ensure you have at least &#8364 0,07 credit. Although scanning is free, you must have this
                            amount of credit on your HZ pass.</li>
                        <li>Register using your HZ pass on the TouchID next to the multifunctional printer</li>
                        <li>In the TouchID menu, select option Scanning - Scan</li>
                        <li>Lay the original sheet on the feeder or glass plate</li>
                        <li>Press Scan and Send</li>
                        <li>Press Scan to me</li>
                        <li>Press Yes</li>
                        <li>Press the Start button</li>
                        <li>Press the green Start button on the printer to scan page by page. Once this is finished,
                            press Start
                            Sending</li>
                        <li>When scanning is completed, press Stop on the TouchID, followed by Logout</li>
                    </ol>',
            'link'=>'',
        ]);
        DB::table('faqs')->insert([
            'question'=>'What do you need to do when you are sick / show symptoms of coronavirus?',
            'answer'=>'Contact the teachers/helpdesk at school and stay home. Follow the lessons on stream to compensate
                        for that unusual sickness.',
            'link'=>'',
        ]);
        DB::table('faqs')->insert([
            'question'=>'How can you book a project space in one of the wings?',
            'answer'=>'You can book a room on the HZ page after logging in by pressing the Selfservice Portal. Then
                        click "Make
                        a reservation" and
                        there you can, amongst other things, book a project room.',
            'link'=>'',
        ]);
        DB::table('faqs')->insert([
            'question'=>'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer'=>'You must park your car "across the road", at the parking lot of the former PEZM.',
            'link'=>'',
        ]);
    }
}
