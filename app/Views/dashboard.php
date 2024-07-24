<?php $this->extend('layout/base.php')?>

<?=$this->section('container')?>

<style>
    .bar {
        height: 100%;
        border-radius: 4px;
    }
    .bar-container {
        height: 200px;
        display: flex;
        align-items: flex-end;
        gap: 2px;
        padding: 0 2px;
        background-color: white;
        border-radius: 4px;
        justify-content: center;
    }
</style>

<div class="bg-white py-24 sm:py-32 mt-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <dl class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-16 text-center">
        <div class="flex flex-col gap-y-4">
          <dt class="text-base leading-7 text-gray-600">Total de administradores</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl"><?= count($adms) ?></dd>
        </div>
        <div class="flex flex-col gap-y-4">
          <dt class="text-base leading-7 text-gray-600">Gastos mensal</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">R$ <?= $salarios ?>,00</dd>
        </div>
        <div class="flex flex-col gap-y-4">
          <dt class="text-base leading-7 text-gray-600">Produtos</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl"><?= count($produtos) ?></dd>
        </div>
      </dl>
    </div>
  </div>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 -mt-10">
    <!-- Gráfico de Barras -->
    <div class="w-full max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg -mt-10">
        <div class="text-center mb-4">
            <h2 class="text-xl font-semibold">Gastos e despesas</h2>
        </div>
        <div class="bar-container flex justify-between">
            <div class="bar flex items-end justify-center" style="width: 20%; height: 100%; background-color: #ff6384;">
                <span class="text-white text-center text-xs">R$<?= $salarios ?>,00</span>
            </div>
        </div>
    </div>
</div>
</div>




<?=$this->endSection()?>
