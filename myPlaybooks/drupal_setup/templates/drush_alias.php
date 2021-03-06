<?php

/**
 * Drupal VM drush aliases.
 *
 * @see example.aliases.drushrc.php.
 */

{% for vhost in apache_vhosts %}
$aliases['{{ vhost.servername }}'] = array(
  'uri' => '{{ vhost.servername }}',
  'root' => '{{ vhost.documentroot }}',
  'remote-host' => '{{ vhost.servername }}',
  'remote-user' => 'aegir',
  'ssh-options' => '-o PasswordAuthentication=no -i ~/.vagrant.d/insecure_private_key',
);

{% endfor %}