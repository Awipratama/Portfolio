<x-layout.app2>
    <div class="main-body-content">
        <div class="content flex justify-between">
            <div class="about-me-card shadow-lg py-4 px-6 rounded-xl bg-[#f2f7fc]">
                <h2 class="text-[24px] font-semibold">About Me</h2>
                <p class="body-desc pb-2">
                    I am a graduate of SMKN 1 Denpasar with a major in
                    Software Engineering. I have a deep interest in the
                    digital world, especially in programming and curiosity,
                    which drives me to continue exploring the digital world.
                    In addition, I am an active student in participating in
                    various activities to improve my skills, such as
                    competitions and organizational activities.
                </p>
            </div>
            <div class="award py-4 px-6 bg-[#FAF1E6] rounded-xl shadow-lg">
                <h2 class="text-[16px] font-semibold pb-4">
                    Awards & Certification
                </h2>
                <div class="award-caraousel-wrapper">
                    <div class="award-track">
                        @foreach(array_merge($award, $award) as $item)
                            <div class="award-child-1 flex gap-2">
                                <i class="bi bi-dot w-2 pt-1"></i>
                                <div class="text-award flex flex-col">
                                    <p class="text-[14px] flex items-center gap-2">
                                        {{ $item['title'] }}
                                    </p>
                                    <span class="text-[12px]">
                                        {{ $item['year'] }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-title-body bg-[#FDFAF6] mt-6 p-4 rounded-xl shadow-lg">
            <h2 class="font-semibold text-[20px] uppercase text-center">
                My Current Skills
            </h2>
        </div>
        <div class="grid pt-6">
            <div class="about-content grid grid-cols-2 gap-4">
                <div class="about-child py-4 px-6 rounded-xl">
                    <div class="heading-about-child flex items-center gap-2">
                        <SiDailydotdev class="text-[24px] mb-2" />
                        <h3 class="font-semibold mb-2">
                            FrontEnd Developer
                        </h3>
                    </div>
                    <p class="text-justify">
                        I started my journey in front-end development with
                        HTML, CSS, and JavaScript — and have since grown
                        into React, Vue, Tailwind, and UI/UX design with
                        Figma. I was a Second Champion of Elizabeth
                        University Web Design Competition in 2024. Now i was
                        working in a Company and my position is a FrontEnd
                        Developer.
                    </p>
                </div>
                <div class="about-child2 py-4 px-6 rounded-xl">
                    <div class="heading-about-child flex items-center gap-2">
                        <SiDailydotdev class="text-[24px] mb-2" />
                        <h3 class="font-semibold mb-2">
                            IoT Developer
                        </h3>
                    </div>
                    <p class="text-justify">
                        IoT Developer experienced with ESP32, C programming,
                        and Android apps via MIT App Inventor. Built RC
                        cars, automated systems, and smart controllers using
                        voice and image recognition.
                    </p>
                </div>
            </div>
        </div>
        <div class="portfolio-project mt-6 py-4 px-6 rounded-xl">
            <h2>My Recent Projects</h2>
        </div>
    </div>
</x-layout.app2>
