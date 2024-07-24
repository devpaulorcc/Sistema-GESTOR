<?php $this->extend('layout/base.php')?>

<?=$this->section('container')?>


<div class="bg-white">

    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900">Faça uma venda</h1>
      </div>

      <section aria-labelledby="products-heading" class="pb-24 pt-6">

        <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                      <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
              <li>
                <a href="">Vender</a>
              </li>
              <li>
                <a href="<?= site_url('/estoque')?>">Estoque</a>
              </li>
              <li>
                <a href="#">Histórico</a>
              </li>
            </ul>
          <div class="lg:col-span-3">
            <!-- Your content -->
            
            <h1>OLa</h1>
          </div>
        </div>
      </section>
    </main>
  </div>
</div>


<?=$this->endSection()?>