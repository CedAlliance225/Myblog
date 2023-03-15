
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Formulaire</h1>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST"  action="{{ route('articles.store') }}" enctype="multipart/form-data">
      @csrf
      @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="Titre">
          Titre
        </label>
        <input name="Titre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Titre">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="Text">
          Description
        </label>
        <textarea name="Text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="Description"></textarea>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="Image">
          Fichier
        </label>
        <input type="file" name="image" id="file" class="py-2 px-3 border border-gray-300 rounded">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Enregistrer
        </button>
      </div>
    </form>
  </div>
</x-app-layout>
  