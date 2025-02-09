<?php loadPartial('head'); ?>

<?php loadPartial('navbar'); ?>

<?php loadPartial('top-banner'); ?>

<!-- Job Listings -->
<section>
    <div class="container p-4 mx-auto mt-4">
        <div class="p-3 mb-4 text-3xl font-bold text-center border border-gray-300">All Jobs</div>

        <!-- flash message -->
        <?php loadPartial('message'); ?>

        <div class="grid grid-cols-1 gap-4 mb-6 md:grid-cols-3">

            <?php foreach ($listings as $list): ?>
            <div class="bg-white rounded-lg shadow-md">
                <div class="p-4">
                    <!-- <h2 class="text-xl font-semibold"><?= $list->title ?></h2> -->
                    <h2 class="text-xl font-semibold"><?php echo $list->title ?></h2>
                    <p class="mt-2 text-lg text-gray-700">
                        <?php echo $list->description ?>
                    </p>
                    <ul class="p-4 my-4 bg-gray-100 rounded">
                        <li class="mb-2"><strong>Salary:</strong> <?php echo formatSalary($list->salary) ?></li>
                        <li class="mb-2">
                            <strong>Location:</strong> <?php echo $list->city ?>, <?php echo $list->state ?>
                            <!-- <span class="px-2 py-1 ml-2 text-xs text-white bg-blue-500 rounded-full">Local</span> -->
                        </li>
                        <?php if (!empty($list->tags)) : ?>
                        <li class="mb-2">
                            <strong>Tags:</strong> <?php echo $list->tags; ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <a href="/listings/<?php echo $list->id; ?>"
                        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                        Details
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <a href="/listings" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-right"></i>
            Show All Jobs
        </a>
</section>

<?php loadPartial('bottom-banner'); ?>

<?php loadPartial('footer'); ?>