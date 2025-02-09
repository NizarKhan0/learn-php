<?php
use Framework\Session;
?>


<!-- Nav -->
<header class="p-4 text-white bg-blue-900">
    <div class="container flex items-center justify-between mx-auto">
        <h1 class="text-3xl font-semibold">
            <a href="index.html">Void</a>
        </h1>
        <nav class="space-x-4">

            <?php if (Session::has('user')): ?>

            <div class="flex justify-between items-center gap-4">
                <div>
                    <!-- associative array -->
                    Welcome, <?php echo Session::get('user')['name'] ?>
                </div>
                <form method="POST" action="/auth/logout">
                    <button type="submit" class="text-white hover:underline">Logout</button>
                </form>

                <a href="/listings/create"
                    class="px-4 py-2 text-black transition duration-300 bg-yellow-500 rounded hover:bg-yellow-600 hover:shadow-md"><i
                        class="fa fa-edit"></i> Post a Job</a>
            </div>

            <?php else: ?>

            <a href="/auth/login" class="text-white hover:underline">Login</a>
            <a href="/auth/register" class="text-white hover:underline">Register</a>

            <?php endif; ?>

        </nav>
    </div>
</header>