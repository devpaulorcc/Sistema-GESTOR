<?php $this->extend('layout/base.php')?>

<?=$this->section('container')?>

<?=form_open("/gerenciar/perfil/id/". $id ."/editar") ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 mt-8">
    <div class="mt-6 border-t border-gray-100 sm:mx-auto sm:w-full sm:max-w-sm">
        <dl class="divide-y divide-gray-100">
            <h3 class="text-base font-semibold leading-7 text-gray-900">Informações do contratado</h3>
            <div class="px-4 py-6">
                <dt class="text-sm font-medium leading-6 text-gray-900">Nome completo:</dt>
                <dd class="mt-1">
                    <input name="nome" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $nome ?>">
                </dd>
            </div>
            <div class="px-4 py-6">
                <dt class="text-sm font-medium leading-6 text-gray-900">Cargo:</dt>
                <dd class="mt-1">

                <input list="cargo" name="cargo" 
                class="block w-full p-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $cargo ?>">

                <datalist id="cargo">
                    <option value="<?= $cargo ?>"></option>
                    <option value="Admin"></option>
                </datalist>

                </dd>
            </div>
            <div class="px-4 py-6">
                <dt class="text-sm font-medium leading-6 text-gray-900">Email:</dt>
                <dd class="mt-1">
                    <input name="email" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $email ?>">
                </dd>
            </div>
            <div class="px-4 py-6">
                <dt class="text-sm font-medium leading-6 text-gray-900">Senha:</dt>
                <dd class="mt-1">
                    <input name="senha" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $senha ?>">
                </dd>
            </div>
            <div class="px-4 py-6">
                <dt class="text-sm font-medium leading-6 text-gray-900">Salário:</dt>
                <dd class="mt-1">
                    <input name="salario" type="number" step="1" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $salario ?>">
                </dd>
            </div>
        </dl>
        <div class="flex justify-center mt-4 space-x-10">
            <button type="submit" id="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atualizar</button>
            <a href="<?= site_url('/gerenciar/perfil/id/' . $id . '/excluir')?>" class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 ml-10" style="background-color: #dc2626;">Demitir</a>
        </div>
    </div>
</div>

<?= form_close() ?>

<?=$this->endSection()?>
