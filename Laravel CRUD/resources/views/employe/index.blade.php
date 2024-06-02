<x-admin>
    <x-slot:heading>
        All employes
    </x-slot:heading>

    <div class="block bg-gray-200 p-3 mb-5">
        <a href="/employe/create" class="p-2 bg-white border rounded">Create Employe</a>
    </div>

    @foreach ($employes as $employe)
        <a href="/employe/{{$employe->id}}">
            <div class="bg-red-200 mb-5 p-4">
                Name: <span class="font-bold">{{$employe->name}}</span><br>
                Address: <span class="font-bold">{{$employe->address}}</span>
            </div>
        </a>
    @endforeach
    
</x-admin>