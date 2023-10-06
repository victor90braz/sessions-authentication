# Laracasts Course - Session 5

This repository is for the Laracasts Course on Sessions and Authentication.

GitHub Repository: [Sessions and Authentication GitHub Repository](https://github.com/victor90braz/sessions-authentication.git)

## Laravel Setup with Laragon

### Installation Steps:

1. **Download Laragon:**
   Download Laragon, a development environment, from [laragon.org](https://laragon.org/download/index.html).

2. **Choose the Desired Version:**
   Select a version that suits your needs:
   - [Download Laragon Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)

### Using PHP in the Terminal (CMD):

- **Check Available PHP Commands:**
  You can check the available PHP commands using the following in the terminal:

  ```sh
  php -h
  ```

- **Start a Local PHP Server:**
  To start a local PHP server, use the following command in the terminal:
  ```sh
  php -S localhost:8888 -t public
  ```

To initialize a session in the application (usually at the beginning of `index.php` in the `public` folder), use:

```php
session_start();
$_SESSION['name'] = 'victor braz';
<?= $_SESSION['name'] ?? $heading ?>
```

- To get PHP information, run:

  ```sh
  php --info
  ```

- To find where session data has been saved if it's not temporary, check the session save path using:

  ```sh
  session.save_path
  ```

- If you want to find a session in the docs, create a file named `get_tmpdir.php` and save the following content:

  ```php
  <?php
  echo sys_get_temp_dir();
  ?>
  ```

  Run the command to get the path:

  ```sh
  php get_tmpdir.php
  ```
