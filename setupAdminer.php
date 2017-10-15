<?php

function adminer_object() {
    class AdminerCustomization extends Adminer {
        function loginForm()
        {
            $html = '<form method="post">
    <input type="hidden" name="auth[driver]" value="server">
    <input type="hidden" name="auth[server]" value="DATABASE_HOST:DATABASE_PORT">
    <input type="hidden" name="auth[username]" value="DATABASE_USER">
    <input type="hidden" name="auth[password]" value="DATABASE_PASSWORD">
    <input type="hidden" name="auth[db]" value="DATABASE_NAME">
</form>
<script>
    document.querySelector("form").submit();
</script>';

            echo str_replace(array_keys($_ENV), array_values($_ENV), $html);
        }

    }
    return new AdminerCustomization();
}

include __DIR__ . "/Adminer.php";