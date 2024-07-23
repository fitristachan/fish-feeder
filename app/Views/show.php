<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="px-4 py-20 sm:ml-64">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal dan Waktu
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tingkat Kekeruhan
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php if(is_countable($data) && count($data) > 0): ?>
            <?php $i = 1; ?>
            <?php foreach($data as $row): ?>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap w-16">
                        <?= $i++; ?>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= $row->status ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $row->tanggal_waktu ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $row->tingkat_kekeruhan ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>