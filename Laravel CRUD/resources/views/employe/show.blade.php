<x-admin>
    <x-slot:heading>
        {{$employe->name}}
    </x-slot:heading>

    <div class="bg-red-200 mb-5">
        Name: <span class="font-bold">{{$employe->name}}</span><br>
        Address: <span class="font-bold">{{$employe->address}}</span>
    </div>
    <a href="/employe/{{$employe->id}}/edit" class="border p-2 mr-5">Edit Employe</a>
    <a href="/employe" class="border p-2">Back</a>
</x-admin>