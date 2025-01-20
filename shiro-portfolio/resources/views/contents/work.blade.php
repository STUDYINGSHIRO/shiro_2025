<div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8"
    id="work">

    <div>
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl mb-5">Work Experience</h2>
        @foreach ($works as $work)
            <div class="border-t border-gray-200 py-4 col-span-2">

                <div class="grid grid-cols-4 gap-4">
                    <p class="text-gray-800 text-sm col-span-1">
                        {{ date('Y', strtotime($work->start_work_date)) }} -
                        {{ date('Y', strtotime($work->end_work_date)) }}
                    </p>
                    <div class="col-span-3">
                        <p class="text-sm text-gray-500">{{ $work->work_type }}</p>
                        <h3 class="text-lg font-semibold">{{ $work->work_title }}</h3>
                        <p class="text-justify text-sm pb-5 text-gray-700">{{ $work->work_description }}</p>
                        <p class="text-sm text-gray-600">{{ $work->technologies }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <img src="https://i.pinimg.com/736x/0d/1b/14/0d1b14adbe62de05ec17dc9e3c862573.jpg"
        alt="PINTEREST IMAGE"
        class="rounded-lg bg-gray-100">
</div>
