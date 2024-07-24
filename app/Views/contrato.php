<?php $this->extend('layout/base.php')?>

<?=$this->section('container')?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Contrato</h2>
  </div>
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
  <?php $form_attributes = ['class' => 'space-y-6', 'method' => 'POST', 'action' => '#'];?>
  <?= form_open_multipart('gerenciar/contratar/contratando', $form_attributes); ?>

    <div>
        <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Nome completo</label>
        <div class="mt-2.5">
          <input type="text" name="name" id="name" autocomplete="given-name" required class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>


      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Endereço de e-mail</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      

      <div>
        <label for="cargo" class="block text-sm font-semibold leading-6 text-gray-900">Cargo</label>
        <div class="mt-2.5">
          <input type="text" name="cargo" id="cargo" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <label for="salario" class="block text-sm font-semibold leading-6 text-gray-900">Salário</label>
        <div class="mt-2.5">
            <input type="number" name="salario" id="salario" step="1" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        </div>


        <div class="flex items-center justify-center w-full">
        <label for="photo-upload" class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V7a2 2 0 012-2h6a2 2 0 012 2v9m-4-4v4m0 0h4m-4 0H9"></path></svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Clique para carregar</span> sua foto</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">PNG or JPG</p>
            </div>
            <input id="photo-upload" name="photo-upload" type="file" class="hidden" accept=".jpeg, .jpg, .png"/>
        </label>
        </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Contratar</button>
      </div>
    <?= form_close() ?>
  </div>
</div>


<?=$this->endSection()?>