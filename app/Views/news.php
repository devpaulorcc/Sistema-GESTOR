<?php $this->extend('layout/base.php')?>

<?=$this->section('container')?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 border-t border-gray-100">
        <div class="flex justify-center mt-4 space-x-10">
        <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Notificações</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Confira todas as novidades.</p>
      <a href="<?= site_url("/news/marcar-como-lida")?>" class="self-end rounded-md bg-indigo-600 px-2 py-1.5 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 z-10 text-center">Marcar tudo como lido</a>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    <?php foreach($dados as $dado):?>
      <article class="flex max-w-xl flex-col items-start justify-between">
  <div class="relative mt-8 flex items-center gap-x-4">
    <div class="text-sm leading-6">
      <p class="font-semibold text-gray-900">
        <?= $dado->titulo ?>
      </p>
      <p class="text-gray-600"><?= $dado->legenda ?></p>
    </div>
  </div>
  <a href="<?= site_url("/news/marcar-como-lida/" . $dado->id)?>" class="self-end rounded-md bg-indigo-600 px-2 py-1.5 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 z-10 text-center">Marcar como lida</a>
</article>

      <?php endforeach;?>
      <!-- More posts... -->
    </div>
  </div>
</div>

        </div>
    </div>
</div>

<?=$this->endSection()?>