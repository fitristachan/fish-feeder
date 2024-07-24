<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<div class="px-4 py-20 h-screen sm:ml-64">
    <main class="grid gap-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="p-6 border border-gray-200 rounded-lg shadow <?php if ($latestStatusId == 2) { echo 'bg-red-900'; } else { echo 'bg-green-900'; } ?>">
                <p class="text-white">Kualitas Air Akuarium</p>    
                <p class="mb-4 mt-5 text-4xl font-bold tracking-tight text-green-50"> 
                    <?php if ($latestStatusId == 2): ?>
                        Akuarium kotor, segera bersihkan akuarium!
                    <?php else: ?>
                        Akuarium kamu bersih
                    <?php endif; ?> 
                </p>
            </div>
            <div class="p-6 bg-blue-900 border border-gray-200 rounded-lg shadow">
                <h5 class="mb-4 text-5xl font-bold tracking-tight text-green-50"> <?= count($feeder) ?> </h5>
                <p class="mb-3 font-normal text-green-50"> Total Riwayat Pemberian Pakan </p>
                <a href="/log" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                    Lebih lengkap
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
            <!-- Tingkat Kekeruhan Air Saat Ini Section -->
            <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between">
                    <div>
                        <p class="text-base font-normal text-white">Tingkat Kekeruhan Air Saat Ini</p>
                    </div>
                </div>
                <div id="area-chart"></div>
                <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                    <div class="flex justify-between items-center pt-5">
                        <p class="mt-5 text-white text-5xl font-bold"><?= $tingkatKekeruhan ?></p>
                    </div>
                </div>
            </div>

            <!-- Table Section -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Tanggal dan Waktu</th>
                            <th scope="col" class="px-6 py-3">Tingkat Kekeruhan</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_countable($log) && count($log) > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach ($log as $row): ?>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap w-16">
                                <?= $i++; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $row['tanggal_waktu'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $row['tingkat_kekeruhan'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $row['status'] ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<?= $this->endSection(); ?>
