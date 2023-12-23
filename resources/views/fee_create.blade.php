<link rel="stylesheet" href="https://cdn.datatables.net/1.11.7/css/jquery.dataTables.min.css">
    <style>
        .data-table{width:100%;margin-top:20px;margin-bottom:20px;border-collapse:collapse;}
        .data-table th, .data-table td{border: 1px solid #ddd;padding: 8px;text-align: left;}
        @media screen and(max-width:600px){.data-table {overflow-x: auto;display: block;}}
        .alert {padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px;}
        .alert-danger {color:#721c24;background-color:#f8d7da;border-color:#f5c6cb;}
    </style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fee Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            <a href="{{ route('fee.index') }}">
                                {{ __('Go Back') }}
                            </a>
                        </x-primary-button>
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    
                    <form method="POST" action="{{ route('fee.store') }}">
                        @csrf
                        <!-- Name -->
                        <div>
                            <x-input-label for="class" :value="__('Select Class')" />
                            <select name="class" id="" class="block mt-1 w-full" required autofocus >
                                <option selected disabled>Please Select Class</option>
                                <option value="1">1st Class</option>
                                <option value="2">2nd Class</option>
                                <option value="3">3rd Class</option>
                                <option value="4">4th Class</option>
                                <option value="5">5th Class</option>
                                <option value="6">6th Class</option>
                                <option value="7">7th Class</option>
                                <option value="8">8th Class</option>
                                <option value="9">9th Class</option>
                                <option value="10">10th Class</option>
                                <option value="11">11th Class</option>
                                <option value="12">12th Class</option>
                                <option value="others">others</option>
                            </select>
                            <x-input-error :messages="$errors->get('class')" class="mt-2" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="status" :value="__('Status')" />
                            <select name="status" id="" class="block mt-1 w-full" required autofocus >
                                <option selected disabled>Please Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">In-Active</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="amount" :value="__('Amount')" />
                            <input type="number" name="amount" id="" class="block mt-1 w-full" required autofocus >
                            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
