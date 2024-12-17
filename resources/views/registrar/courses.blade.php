@extends('registrar.navbar')


@section('content')

<!-- Table Section -->
<div class="w-full mx-auto mb-8">

    <!-- Filtering -->
    <div class="flex justify-between items-center mb-4 pt-4">
        <!-- Left Filters -->
        <div class="flex items-center space-x-4">
            <h2 class="font-table-header text-xl">Courses</h2>
            <!-- Year Dropdown -->
            <select class="text-sm text-gray-700 bg-white border border-gray-300 rounded-lg w-32 px-4 py-2">
                <option value="">All</option>
                <option value="1">IT</option>
                <option value="2">CS</option>
            </select>
            <!-- Year Dropdown -->
            <select class="text-sm text-gray-700 bg-white border border-gray-300 rounded-lg w-40 px-4 py-2">
                <option value="">Year</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="1">3rd</option>
                <option value="2">4th</option>
            </select>
            <!-- Semester Dropdown -->
            <select class="text-sm text-gray-700 bg-white border border-gray-300 rounded-lg w-40 px-4 py-2">
                <option value="">Semester</option>
                <option value="1">1st Semester</option>
                <option value="2">2nd Semester</option>
            </select>
        </div>

        <!-- Right-Aligned Search Bar -->
        <div class="relative w-64">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                <img src="{{ asset('assets/search-icon.svg') }}" alt="Search Icon" class="h-6 w-6">
            </div>
            <input type="text"
                class="w-full text-sm border-hidden px-4 py-2 pl-12 rounded-lg focus:outline-none focus:ring-0 shadow-lg"
                placeholder="Search courses..." />
        </div>
    </div>
    <!-- End of Filtering -->
</div>


    <!-- Table  -->
    <div class="p-5 bg-light rounded-2xl shadow-big overflow-x-auto w-full">
        <table class="min-w-full bg-white shadow-sm rounded-lg">
            <thead>
                <tr class="bg-light-gray">
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Course ID</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Course Description</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Total Credit Units</th>
                    <th class="px-6 py-3 text-left text-sm font-bold text-gray-600">Department</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr class="hover:bg-gray-100 border-b border-border-color">
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $course->course_id }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $course->description }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $course->credit_units }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $course->department }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <!-- Pagination Section -->
        <div class="flex items-center justify-center space-x-6 mt-4">
            <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-primary hover:text-white">Previous</button>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">1</span>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">2</span>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">3</span>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">4</span>
            <span class="text-gray-600 hover:bg-primary hover:text-white hover:rounded-full p-2 cursor-pointer">5</span>
            <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-primary hover:text-light">Next</button>
        </div>
    </div>

    @endsection
