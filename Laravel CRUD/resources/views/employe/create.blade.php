<x-admin>
    <x-slot:heading>
        Create new employe
    </x-slot:heading>

    <div class="border border-slate-200 w-2/6 mx-auto p-2 shadow-xl">
        <form action="/employe" method="post" class="flex flex-col">
            @csrf
            <div class="flex flex-wrap mb-4 items-center">
                <label for="name" class="w-2/6">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    value="{{old('name')}}"
                    class="w-4/6 border border-slate-400 p-1">
                @error('name')
                    <small class="text-red-400">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="flex flex-wrap mb-4 items-center">
                <label for="address"  class="w-2/6">Address</label>
                <input 
                    type="text" 
                    name="address" 
                    id="address" 
                    value="{{old('address')}}"
                    class="w-4/6 border border-slate-400 p-1">
                @error('address')
                    <small class="text-red-400">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <button type="submit" class="border p-2 bg-green-200">Save</button>
        </form>
    </div>
</x-admin>