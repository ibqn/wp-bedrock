<?php
copy('https://getcomposer.org/installer', 'composer-setup.php');
if (hash_file('sha384', 'composer-setup.php') === 'c5b9b6d368201a9db6f74e2611495f369991b72d9c8cbd3ffbc63edff210eb73d46ffbfce88669ad33695ef77dc76976') {
    echo("Installer verified\n");

    exec('php composer-setup.php', $output, $return_var);
    echo("Calling composer setup:\n\n" . implode("\n", $output) . "\n");
    echo("Composer setup returned " . $return_var . ".\n");
} else {
    echo("Installer corrupt\n");
}

unlink('composer-setup.php');
