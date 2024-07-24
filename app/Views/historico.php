<?= $this->extend('layout/base.php') ?>

<?= $this->section('container') ?>

<div class="bg-white">
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900">Caixa registrador</h1>
        </div>

        <section aria-labelledby="products-heading" class="pb-24 pt-6">
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                    <li><a href="<?= site_url('/vendas')?>">Estoque</a></li>
                    <li><a href="<?= site_url('/historico')?>">Histórico</a></li>
                </ul>
                <div class="lg:col-span-3">
                    <!-- Formulário de Registro -->
                    <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">

                        <div class="flex flex-1 justify-end">
                            <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                                <span class="sr-only">Dismiss</span>
                            </button>
                        </div>
                    </div>

                    <!-- Tabela de Produtos -->
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Produto</th>
                                    <th scope="col" class="px-6 py-3">Ação</th>
                                    <th scope="col" class="px-6 py-3">Contratado</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php foreach($dados as $dado): ?>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white"><?= $dado->produto ?></td>
            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white"><?= $dado->acao ?></td>
            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white"><?= $dado->id_responsavel ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?= $this->endSection() ?>
