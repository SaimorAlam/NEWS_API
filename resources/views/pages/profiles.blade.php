@extends('layouts.master')
@section('title', 'Profile')

@section('content')
<!-- Profile Page -->
    <section>
        <div class="container">
            <div class="table">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <table class="w-full whitespace-normal">
                                    <thead>
                                        <tr class="text-left font-bold">
                                            <td class="border px-6 py-4 capitalize">Id</td>
                                            <td class="border px-6 py-4 capitalize">Title</td>
                                            <td class="border px-6 py-4 capitalize">Body</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td class="border px-6 py-4 break-words">{{$item['id']}}</td>
                                            <td class="border px-6 py-4 break-words">{{$item['title']}}</td>
                                            <td class="border px-6 py-4 break-words">{{$item['body']}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection