<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<main>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register</h2>
      <?php if (isset($errors["main"])) : ?>
        <p class="text-red-500 text-xs mt-2 text-center"><?= $errors["main"] ?></p>
      <?php endif; ?>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/register" method="POST">
        <div>
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
          <div class="mt-2">
            <input id="username" name="username" type="text" autocomplete="username" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= old("username") ?>">
          </div>
          <?php if (isset($errors["username"])): ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors["username"] ?></p>
          <?php endif; ?>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= old("email") ?>">
          </div>
          <?php if (isset($errors["email"])): ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors["email"] ?></p>
          <?php endif; ?>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <!-- <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div> -->
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          <?php if (isset($errors["password"])): ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors["password"] ?></p>
          <?php endif; ?>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
          </div>

          <div class="mt-2">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="male" value="boy" required>
          </div>

          <div class="mt-2">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female" value="girl" required>
          </div>

          <?php if (isset($errors["gender"])): ?>
            <p class="text-red-500 text-xs mt-2"><?= $errors["gender"] ?></p>
          <?php endif; ?>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
        </div>
      </form>

      <!-- <p class="mt-10 text-center text-sm text-gray-500">
        Not a member?
        <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
      </p> -->
    </div>
  </div>
</main>

<?php require "views/partials/foot.php" ?>