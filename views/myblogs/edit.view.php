<?php require("views/partials/head.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/banner.php") ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/myblog">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?= $post["post_id"] ?>">

      <div class="space-y-12 bg-white border rounded-lg">
        <div class="border border-gray-900/10 p-8 rounded-lg">
          <div class="col-span-full">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <input id="title" name="title" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $post["title"] ?>" />

              <?php if (isset($errors["title"])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors["title"] ?></p>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-span-full">
            <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
            <div class="mt-2">
              <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $post["body"] ?></textarea>

              <?php if (isset($errors["body"])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors["body"] ?></p>
              <?php endif; ?>
            </div>
          </div>

          <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/myblog?id=<?= $post["post_id"] ?>" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>

            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
          </div>
        </div>
      </div>
    </form>

  </div>
</main>
<?php require("views/partials/foot.php") ?>