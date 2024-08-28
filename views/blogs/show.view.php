<?php require ("views/partials/head.php") ?>
<?php require ("views/partials/nav.php") ?>
<?php require ("views/partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/blogs" class="text-blue-900 hover:underline">Go back ...</a>
    </p>
    <p>
      <?= htmlspecialchars($post["body"]) ?>
    </p>

    <footer class="mt-6">
      <!-- <a href="/note/edit?id=<?//= $note["id"] ?>" class="ounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 rounded-lg border border-current">Edit</a> -->
    </footer>
  </div>
</main>
<?php require ("views/partials/foot.php") ?>

<!-- <form class="mt-6" method="POST">
  <input type="hidden" name="_method" value="DELETE">
  <input type="hidden" value="<?//= $note["id"] ?>" name="id">
  <button class="text=-sm text-red-500">Delete</button>
</form> -->