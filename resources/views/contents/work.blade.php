<div class="bg-white py-12 sm:py-12" id="work">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl text-center">Work Experience</h2>
        <div
            class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach ($works as $work)
            <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                    <p class="text-gray-500">{{ date('Y', strtotime($work->start_work_date)) }} -
                        {{ date('Y', strtotime($work->end_work_date)) }}
                    </p>
                    <p
                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                        {{ $work->work_type }}
                    </p>
                </div>
                <div class="group relative">
                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            {{ $work->work_title }}
                        </a>
                    </h3>
                    <p class="text-xs font-medium text-gray-600">
                        {{ $work->technologies }}
                    </p>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>