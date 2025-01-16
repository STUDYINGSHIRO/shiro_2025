<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-5">
                <h3 class="text-2xl font-bold mb-5">Add work</h3>
                <form action="{{ route('works.store') }}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="start_work_date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Start Work Date</label>
                        <input type="date" id="start_work_date" name="start_work_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter year" required />
                    </div>
                    <div class="mb-5">
                        <label for="end_work_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            End Work Date</label>
                        <input type="date" id="end_work_date" name="end_work_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter year" required />
                    </div>
                    <div class="mb-5">
                        <label for="work_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Work Type</label>
                        <input type="text" id="work_type" name="work_type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter year" required />
                    </div>
                    <div class="mb-5">
                        <label for="work_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Work Title</label>
                        <input type="text" id="work_title" name="work_title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter year" required />
                    </div>
                    <div class="mb-5">
                        <label for="work_description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Work Descripttion</label>
                        <textarea name="work_description" id="work_description" cols="30" rows="10"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    <div class="mb-5">
                        <label for="technologies" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Technologies</label>
                        <input type="text" id="technologies" name="technologies"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter year" required />
                    </div>
                    <div class="mb-5">
                        <label for="company_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Company Name</label>
                        <input type="text" id="company_name" name="company_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter year" required />
                    </div>
                    <div class="mb-5">
                        <label for="company_address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Company Address</label>
                        <input type="text" id="company_address" name="company_address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter year" required />
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
