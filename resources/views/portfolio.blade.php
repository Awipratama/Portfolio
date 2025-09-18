<x-layout.app2>
    <div class="main-body-content">
        <div class="content flex justify-between">
            <div class="about-me-card shadow-lg py-4 px-6 rounded-xl bg-[#f2f7fc]">
                <h2 class="text-[20px] font-semibold">About Me</h2>
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
            <div class="award py-4 px-4 bg-[#FAF1E6] rounded-xl shadow-lg">
                <h2 class="text-[16px] font-semibold pb-4 text-center">
                    Awards & Certification
                </h2>
                <div class="award-caraousel-wrapper max-w-[205px]">
                    <div class="award-track gap-2">
                        @foreach ($awards as $item)
                            <div class="award-child-1 flex gap-2">
                                <i class="bi bi-dot w-2 pt-2"></i>
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
            <h2 class="font-semibold text-[22px] uppercase text-center">
                My Current Skills
            </h2>
        </div>
        <div class="grid pt-6">
            <div class="about-content grid grid-cols-2 gap-4">
                <div class="about-child py-4 px-6 rounded-xl">
                    <div class="heading-about-child flex items-center gap-2">
                        <SiDailydotdev class="text-[20px] mb-2" />
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
                    <h3 class="font-semibold mb-2 text-[20px]">My Programming Skills</h2>
                        <div class="heading-about-child flex items-center gap-2 flex-wrap">
                            <!-- JavaScript -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                                alt="JavaScript" class="w-16 h-16" />

                            <!-- React -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                                alt="React" class="w-16 h-16" />

                            <!-- Vue -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg"
                                alt="Vue" class="w-16 h-16" />

                            <!-- Tailwind -->
                            <img src="{{ asset('assets/TailwindCSS.png') }}" alt="Tailwind" class="w-16 h-16" />

                            <!-- Bootstrap -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                                alt="Bootstrap" class="w-16 h-16" />

                            <!-- Laravel -->
                            <img src="{{ asset('assets/Laravel.png') }}" alt="Laravel" class="w-16 h-16" />

                            <!-- PHP -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                                alt="PHP" class="w-16 h-16" />

                            <!-- C++ -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg"
                                alt="C++" class="w-16 h-16" />

                            <img src="{{ asset('assets/Ubuntu.png') }}" alt="Linux" class="w-16 h-16" />

                            <img src="https://www.vectorlogo.zone/logos/mariadb/mariadb-icon.svg" alt="Mariadb"
                                class="w-16 h-16" />

                            <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg"
                                alt="MySql" class="w-16 h-16" />

                            <img src="{{ asset('assets/Java.png') }}" alt="Java" class="w-16 h-16" />

                            <img src="{{ asset('assets/WordPress.png') }}" alt="Java" class="w-16 h-16" />
                        </div>
                </div>
            </div>
        </div>
        <div class="portfolio-project mt-6 py-4 px-6 rounded-xl flex flex-col items-center">
            <h2 class="font-semibold text-[24px]">My Recent Projects</h2>
            <!-- Swiper Container -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($projects as $project)
                        <div class="swiper-slide">
                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                <img src="{{ asset($project->thumbnail) }}" alt="{{ $project->title }}"
                                    class="w-full h-60 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">{{ $project->title }}</h3>
                                    <p class="text-gray-600 text-sm">{{ $project->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div x-data="{
            current: 0,
            images: [
                '{{ asset('assets/icons/js.svg') }}',
                '{{ asset('assets/icons/react.svg') }}',
                '{{ asset('assets/icons/vue.svg') }}',
                '{{ asset('assets/icons/bootstrap.svg') }}',
                '{{ asset('assets/icons/laravel.svg') }}',
                '{{ asset('assets/icons/php.svg') }}',
                '{{ asset('assets/icons/cpp.svg') }}',
                '{{ asset('assets/icons/tailwind.svg') }}'
            ]
        }" class="relative w-full max-w-3xl mx-auto">

            <!-- Carousel Wrapper -->
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500"
                    :style="{ transform: `translateX(-${current * 100}%)` }">

                    <!-- Each Slide (2 images per slide) -->
                    <template
                        x-for="(chunk, index) in images.reduce((acc, _, i, arr) => 
                i % 2 === 0 ? [...acc, arr.slice(i, i + 2)] : acc, [])"
                        :key="index">

                        <div class="w-full flex-shrink-0 grid grid-cols-2 gap-4 p-6">
                            <template x-for="img in chunk" :key="img">
                                <div class="flex justify-center items-center">
                                    <img :src="img" class="w-32 h-32 object-contain" />
                                </div>
                            </template>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Controls -->
            <button @click="current = (current - 1 + Math.ceil(images.length / 2)) % Math.ceil(images.length / 2)"
                class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-full">
                ‹
            </button>
            <button @click="current = (current + 1) % Math.ceil(images.length / 2)"
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-full">
                ›
            </button>
        </div>

</x-layout.app2>
