<?php $this->extend('layout/base.php')?>

<?=$this->section('container')?>

<?php if(!session()->has('adm')): ?>
  <?= redirect()->to('/'); ?>
<?php endif;?>


<div class="bg-white py-24 sm:py-32 -mt-12">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl sm:text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Funcionários</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">Gerenciamento de equipe e seus dados</p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
      <div class="p-8 sm:p-10 lg:flex-auto">
        <h3 class="text-2xl font-bold tracking-tight text-gray-900">Gerenciamento de funcionários</h3>
        <p class="mt-6 text-base leading-7 text-gray-600">Consulte todos os seus funcionários, ajuste informações e imprima seus dados. <br> <span class="text-sm font-semibold leading-6 text-gray-900">OBS: Conceder cargo de "Admin" permite que o contratado utilize está página!</span></p>

        <ul role="list" class="divide-y divide-gray-100">

        <?php foreach($dados as $dado):?>
          <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="<?= base_url("perfil/" . "$dado->foto")?>" alt="Foto de perfil">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 text-gray-900"><?= $dado->nome ?></p>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500"><?= $dado->email ?></p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 text-gray-900"><?= $dado->cargo ?></p>
              <a href="<?= site_url('/gerenciar/perfil/id/' . $dado->id)?>"><span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Inspecionar</span></a>
            </div>
          </li>
        <?php endforeach;?>

        </ul>
      </div>
      <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
        <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
          <div class="mx-auto max-w-xs px-8">
            <p class="text-base font-semibold text-gray-600">Total de funcionários</p>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
              <span class="text-5xl font-bold tracking-tight text-gray-900"><?= count($dados) ?></span>
            </p>
            <a href="<?= site_url('/gerenciar/contratar')?>" class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Contratar</a>
            <p class="mt-6 text-xs leading-5 text-gray-600">Temos muito orgulho de ter essa equipe!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?=$this->endSection()?>
