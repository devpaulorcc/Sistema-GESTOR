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
                    <li><a href="<?= site_url('/estoque')?>">Estoque</a></li>
                    <li><a href="<?= site_url('/historico')?>">Histórico</a></li>
                </ul>
                <div class="lg:col-span-3">
                    <!-- Formulário de Registro -->
                    <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
                        <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
                        </div>
                        <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
                        </div>
                        <?= form_open('/estoque/cadastro') ?>
                        <h4 class="font-bold tracking-tight text-gray-900">Registre novos produtos</h4>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                            <div class="mt-2">
                                <input name="produto" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Nome do produto">
                            </div>
                            <div class="mt-2">
                                <input name="valor" type="number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Valor do produto">
                            </div>
                            <div class="mt-2">
                                <input name="quantidade" type="number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Quantidade">
                            </div>
                            <label for="categoria" class="sr-only">Categoria</label>
                            <select id="categoria" name="categoria" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                <option selected>. . .</option>
                                <option>Eletrônicos</option>
                                <option>Vestuário</option>
                                <option>Alimentos e bebidas</option>
                                <option>Infoprodutos</option>
                                <option>Outro</option>
                            </select>
                            <button type="submit" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Registrar agora <span aria-hidden="true">&rarr;</span></button>
                        </div>
                        <?= form_close() ?>

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
                                    <th scope="col" class="px-6 py-3">Categoria</th>
                                    <th scope="col" class="px-6 py-3">Quantidade</th>
                                    <th scope="col" class="px-6 py-3">Valor</th>
                                    <th scope="col" class="px-6 py-3">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($dados as $dado):?>
                                    <?= form_open('/estoque/atualizar/' . $dado->id) ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white"><?= $dado->produto ?></td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white"><?= $dado->categoria ?></td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <button class="decrement-button inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                                <span class="sr-only">Quantity button</span>
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                                </svg>
                                            </button>
                                            <div>
                                                <input name="quantidade" type="number" id="first_product" class="quantity-input bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $dado->quantidade ?>" required />
                                            </div>
                                            <button class="increment-button inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                                <span class="sr-only">Quantity button</span>
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">R$<?= $dado->valor ?>,00</td>
                                    <td class="px-6 py-4">
                                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline m-5">Atualizar</button>
                                        <a href="<?= site_url('/estoque/deletar/' . $dado->id)?>" class="font-medium text-red-600 dark:text-red-500 hover:underline m-5">Deletar</a>
                                    </td>
                                    <?= form_close() ?>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<!-- Adicionando o script de manipulação da quantidade -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const incrementButtons = document.querySelectorAll(".increment-button");
        const decrementButtons = document.querySelectorAll(".decrement-button");

        incrementButtons.forEach(button => {
            button.addEventListener("click", function() {
                const input = this.closest("tr").querySelector(".quantity-input");
                input.value = parseInt(input.value) + 1;
            });
        });

        decrementButtons.forEach(button => {
            button.addEventListener("click", function() {
                const input = this.closest("tr").querySelector(".quantity-input");
                if (input.value > 1) {
                    input.value = parseInt(input.value) - 1;
                }
            });
        });
    });
</script>

<?= $this->endSection() ?>
