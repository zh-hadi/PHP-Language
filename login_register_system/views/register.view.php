<?php  include __DIR__."/components/header.php"; ?>


<div class="w-1/2 mx-auto mt-20">
    <form action="/register" method="post" class=" border rounded shadow-lg p-10">
        <h2 class="text-center text-3xl font-bold text-blue-500 uppercase mb-5">Register A new user</h2>
        <div class="flex flex-wrap items-center mb-3">
            <label for="email" class="w-2/6 text-center">Email</label>
            <input type="text" name="email" id="email" class="w-4/6 p-2 text-center border border-slate-400">
        </div>
        <div class="flex flex-wrap items-center mb-3">
            <label for="email" class="w-2/6 text-center">Password</label>
            <input type="text" name="email" id="email" class="w-4/6 p-2 text-center border border-slate-400">
        </div>
        <div class="float-right">
            <button class="border border-slate-400 rounded px-3 py-1 bg-blue-200 ">Cancle</button>
            <button class="border border-slate-400 rounded px-3 py-1 bg-blue-200 ">Register</button>
        </div>
    </form>
</div>


<?php  include __DIR__."/components/footer.php"; ?>