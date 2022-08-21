@extends('layout')
@section('title', 'Add Skill')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 items-center py-4 sm:pt-0">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">Edit Skill</div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-600  text-sm">
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="errorText">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('skills.update',$skill['id']) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <label for="skill_name">Skill Name</label>
                            <input type="text" placeholder="Input task name" value="{{ $skill["skill_name"] }}"
                                name="skill_name">
                            <br>
                            <label for="skill_percent">Skill Percent</label>
                            <input type="number" value="{{ $skill->skill_precent }}" placeholder="Enter Skill Percent"
                                name="skill_percent">
                            <br>
                            <input type="submit" name="update" value="Update Skill">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
