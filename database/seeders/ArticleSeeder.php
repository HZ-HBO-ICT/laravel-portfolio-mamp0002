<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title'=>'Feedback pitch website',
            'excerpt'=>'I received feedback after my pitch and make a list of tasks.',
            'body'=>'<p>On Friday 15 sept I had my first pitch for my website. After this pitch,
            I received some points of feedback from two teachers and also from some other students.
            I added them together to form a task list for myself, I also listed the
                    compliments I received.<br><br>
                    <b>Task list</b>
                    <ul>
                        <li>Add some space to the sides, it seems very crowded</li>
                        <li>The links in the footer are in Times New Roman,
                        you should change it, so it fits more in your design</li>
                        <li>You forgot to add the article element to all pages</li>
                        <li>Make sure that the HZ logo is not cut off at the side</li>
                        <li>Structure the CSS file and make sure that you don`t use
                        inline-styling in the HTML-files.</li>
                    </ul>
                    <br>
                    <b>Compliments</b>
                    <ul>
                        <li>Well-structured code and files</li>
                        <li>Good naming</li>
                        <li>Nice design</li>
                    </ul>
                    </p>',
            'link'=>'feedbackwebsite.blade.php'
        ]);
        DB::table('articles')->insert([
            'title'=>'Profession',
            'excerpt'=>'I discuss three ICT companies that interest me and compare the pros and cons for each company.',
            'body'=>'<p>Last Friday, we had a company Safari. In the morning, we attended two presentations of IT companies, and in
                    the afternoon we looked online at some other IT companies. From those, I chose three companies that interested me the most.
                    In this blogpost, you will read what the companies do and what my pros and cons are. You can click on the posters, to be able
                    to read them better.</p>
                <br><br>
            </article>
        </section>
        <section class="grid-blogpostprof">
            <article><a href="/img/PosterSAP.png" target="_blank"><img alt="Poster with information about SAP" src="/img/PosterSAP.png"
                        class="poster"></a></article>
            <article class="item-2-and-8">
                <h3>What is SAP?</h3>
                <p>SAP is one of the worlds leading producers of software for the management of business processes,
                    developing solutions that facilitate effective data processing and information flow across organizations. They are
                    headquartered in Walldorf, Germany, with more than 101,000 employees spread out over more than 78 countries.
                </p>
                <h3>Why would I like to work at SAP in the future?</h3>
                <p>I really like the fact that employees are allowed to work in varying departments based on skill and
    interest. So especially for someone that is just entering the corporate world, it is good to have the
                    opportunity to find out what IT profession fits the best. It also sounds like they are always open
                for feedback, even when you are there as an intern. There
                    are
                    many possibilities for interns or new grads, so that is great.
                </p>
                <h3>The cons of working at SAP</h3>
                <p>I think being such a big company has both pros and cons. Mostly in companies of this size, you get to
                    work on one small thing for various projects and everything has to be done in a certain way. I
                    couldnt
                    find anywhere if this was actually the case, so maybe it is just me being biased.
                </p>
            </article>
            <article></article>
            <article></article>
            <article class="item5"><a href="resources/PosterSyntess.png" target="_blank"><img alt="Poster with information about Syntess"
                        src="resources/PosterSyntess.png" class="poster"></a></article>
            <article class="item6">
                <h3>What is Syntess?</h3>
                <p>
                    Syntess Software is producer of ERP- and mobile software in the Netherlands.
                    The customers of Syntess include installation, companies, companies in the construction
                    sectior, nautical sector, maintenance companies and mechanical engineering companies.<br>
                    Syntess is established in Zierikzee and Gorinchem. The company has no fewer than 3,000
                    partners who use their software. Furthermore, the company has more than 130 active employees.
                </p>
                <h3>Why would I like to work at Syntess in the future?</h3>
                <p>
                    It maybe is a superficial reason, but it is established near where I live. I am not planning on
                    moving for a future job, so it is great when I do not have to travel too far everyday.
                    Furthermore, it has quite a lot of partners who use the software, but not too much employees. A
                    pro of working at a company that is not that big, is that it will most likely be more flat than
                    bigger companies, where, so to speak, a manager could help you out when you are stuck.
                </p>
                <h3>The cons of working at Syntess</h3>
                <p>
                    Opposite of SAP, working at a smaller companies also has pros and cons. You maybe would not have as
                    big opportunities as at a bigger company as to finding out what you like and trying different things.
                    Overall, I do think a smaller company fits me better.
                </p>
            </article>
            <article><a href="/img/PosterMaxxton.png" target="_blank"><img alt="Poster with information about Maxxton"
                        src="/img/PosterMaxxton.png" class="poster"></a></article>
            <article class="item-2-and-8">
                <h3>What is Maxxton?</h3>
                <p>
                    The Maxxton Group is the leading provider of IT services and consultancy for the broader hospitality
                    and accommodation rental sector. Originally a DUtch company, since its formation in 1998, Maxxton has
                    grown into a multinational organization with operations in three continents and clients spread across the
                    globe.<br>
                    Maxxton has developed and perfected a holistic ERP approach to technology in hospitality and tourism
                    and a suite of solutions to suit the needs of most complex organizations. This means that they deliver efficient
                    solutions, adapted to the needs of each specific client, which means that they are very flexible in the delivery
                    of their technology and fully adapt it according to requirements. Their developments and continuos updates are driven by the
                    in-depth knowledge of our market and our clients, with which we work as true partners and which are both beneficiaries
                    and initiators of our continuous software enhancement.
                </p>
                <h3>Why would I like to work at Maxxton in the future?</h3>
                <p>
                What attracts me the most to Maxxton, is the fact that they adapt their software for each costumor. So every time there is a
                new customer, they will look at what they want and what is possible. To try and meet their needs as much as possible, sounds
                like a really fun and challenging job. Also the fact that they keep developing and updating the software, so you have to try
                and see what can be better now, even after you just finished your last change.<br>
                On the website of Maxxton, it is clear that they have grown a lot, but still want to grow further.
                But it feels like the culture is not going to change, it keeps the smaller company culture, even if it grows a lot.
                </p>
                <h3>The cons of working at Maxxton</h3>
                <p>
                    As I said, it is a fast growing company, which maybe means that there is a lot of pressure on the
                    developers, you have to deliver good work and fast. This is also the fun part, but sometimes the pressure gets to
                    too high standards. But I have no idea if that is the case at Maxxton.
                </p>',
            'link'=>'profession.blade.php'
        ]);
        DB::table('articles')->insert([
            'title'=>'First Feedback',
            'excerpt'=>'Containing the feedback I recieved on my Who Am I document.',
            'body'=>'<p>I received some points of feedback on my Who-Am-I document. The first point was that I really have to explore
                    and find out what my inner drive is for this study programme and ICT in general. With just `I like
                    programming, I think it is fun` you are probably not going to get far, because eventually you will
                    come
                    across a programming language that you really hate.
                    I have thought about this part of the feedback and I have added some things to the blogpost about my study
                    choice. I think I have found what drives me.<br><br>
                    The second point was about the SWOT Analysis. I want everything to be perfect and that gives me stress. Also
                    with this website, every day I am thinking `No it is not good enough, I have to change
                    everything`. The
                    feedback was mostly `less is more`, with the following tips:
                <ul>
                    <li>Set an alarm when you are studying, for when you have to stop and go do something else.</li>
                    <li>In the evening, when a lot of things pop into your head about what you need to do, write them down and
                        leave them.</li>
                    <li>In the morning, begin with the one thing that has to be finished by the end of the day.</li>
                    <li>Spend one hour less on school than your fellow classmates, you need the time to evaluate and recover
                        from the day.</li>
                </ul>
                A fellow student has kind of the same problem with this, and we agreed that we will look out for each other so
                that we are not doing too much.
                </p>',
            'link'=>'feedback.blade.php'
        ]);
        DB::table('articles')->insert([
            'title'=>'Programming experience',
            'excerpt'=>'Do I have programming experience? What kind of experience and how did I gain the experience?',
            'body'=>'<p>I have some programming experience, this is mostly due to my hobbies and interests, but also prior education.
                    In my last studies I had courses about basic programming and Python and Visual Basic. After that, I followed
                    some basic online courses about HTML/CSS, JavaScript, Java and C++.</p>',
            'link'=>'profession.blade.php'
        ]);
        DB::table('articles')->insert([
            'title'=>'Personal SWOT-Analysis',
            'excerpt'=>'My Personal SWOT-Analysis, my strengths and weaknesses and an inventory of the opportunities and
                    threats I expect in my studies.',
            'body'=>'<h4>By making a SWOT-analysis, you analyse your personal strengths and weaknesses and make an inventory of the
                opportunities and threats you expect in your studies. </h4>
            </article>
            <article>
        <p><i>Strengths - What do you do best? What are your positive traits?</i><br>
        <ol>
            <li>I have followed several basic courses about programming</li>
            <li>Perseverance</li>
            <li>Collaborate</li>
            <li>Planning</li>
            <li>Self-disciplined</li>
        </ol>
        <br>
        <i>Weaknesses - What personality traits may be holding you back in your studies/career?</i><br>
        <ol>
            <li>I experience stress very fast</li>
            <li>Perfectionism</li>
            <li>Performance anxiety</li>
        </ol>
        <br>
        <i>Opportunities - How can you turn your strengths/weaknesses into opportunities?</i><br>
        Because I can plan very well, I can reduce most of the stress. When you want to have a job in ICT,
        especially as a woman, perseverance is a good trait. Also, in most companies you work in groups to do a project,
        so it is good to be good at collaboration. The perfectionism is a weakness, because it is never enough. When I
        try to reduce it to a place that at some point, it is enough and it is finished, I will make very good products.
        <br><br>
        <i>Threats - What obstacles do you face to succeed as a student? Could any of your weaknesses prevent you from
            succeeding in your studies/career?</i><br>
        The stress and the perfectionism are a big threat, those were the reasons that I had to quit my previous study
        program. But I have grown a lot since then, I know how to handle the stress and when I plan everything well and
        I keep telling myself that it is good enough, I am certain I will succeed in the studies and in a further
        career.
        </p>',
            'link'=>'swot.blade.php'
        ]);
        DB::table('articles')->insert([
            'title'=>'Study Choice',
            'excerpt'=>'On the HomePage, I explained briefly why I chose for ICT, in this blogpost I elaborate on that
                    a bit more.',
            'body'=>'                <h2>Why I chose ICT</h2>
                <p>For a long time, I didn&#8217t know what I wanted to do. I have tried a studies at Law school and a
                    Mathematics
                    studies. Both were not the right choice for me. After I quit the last studies, I took two years off from
                    school.
                    I worked for a year and I really wanted to make sure that I was going to make the right choice for myself.
                    My dad is the founder of a very successful ICT-company. I think deep down I always knew I had a passion for
                    ICT;
                    when I was younger I wanted to go with him to work often, and I wanted to &#x0022help&#x0022 in my spare
                    time doing
                    basic
                    things for him.
                    So ICT was and is always connected to my dad. I think at first I didn&#8217t want to admit that I had a
                    passion
                    for
                    ICT, because I was afraid that people were going to think that I was just going in the same route as my dad
                    and
                    always compare me to him.
                    But last year I realized that I found ICT really fun and I decided that I was going to follow that passion.
                    I
                    want to prove to everyone and mostly myself, that I can be a good ICT-er as well. Even if my dad was very
                    successful and even if there are very few women in ICT.</p>
            </article>
            <article>
                <h2>Why I chose this study programme</h2>
                <p>At first I considered working at a firm where I could grow into being a software developer. But for me it is
                    better to learn the matter in a class and be more confident in the matter before I pursue a career.
                    I chose this study programme because it is very project-based with real companies with real questions. I
                    think
                    it is good to learn in projects and by finding things out yourself. In that way you can prepare better for a
                    future career, where you will likely have to work in groups and they don&#8217t spell everything out for
                    you.
                    I chose the international program, because the main language in ICT is English. It will give me more
                    opportunities in the future as of pursuing a good career, but It will also add to my personal development.
                </p>',
            'link'=>'studychoice.blade.php'
        ]);


    }
}
