<?php

/**
 * @file
 * Contains database additions to drupal-8.bare.standard.php.gz for testing the
 * upgrade path of https://www.drupal.org/node/2587275.
 */

use Drupal\Core\Database\Database;

$connection = Database::getConnection();

// Replace the user.mail configuration because the dump contains the right token
// already.
$connection->delete('config')->condition('name', 'user.mail')->execute();
$connection->insert('config')
  ->fields(['collection', 'name', 'data'])
  ->values([
  'collection' => '',
  'name' => 'user.mail',
  'data' => "a:10:{s:14:\"cancel_confirm\";a:2:{s:4:\"body\";s:369:\"[user:name],\n\nA request to cancel your account has been made at [site:name].\n\nYou may now cancel your account on [site:url-brief] by clicking this link or copying and pasting it into your browser:\n\n[user:cancel-url]\n\nNOTE: The cancellation of your account is not reversible.\n\nThis link expires in one day and nothing will happen if it is not used.\n\n--  [site:name] team\";s:7:\"subject\";s:59:\"Account cancellation request for [user:name] at [site:name]\";}s:14:\"password_reset\";a:2:{s:4:\"body\";s:397:\"[user:name],\n\nA request to reset the password for your account has been made at [site:name].\n\nYou may now log in by clicking this link or copying and pasting it to your browser:\n\n[user:one-time-login-url]\n\nThis link can only be used once to log in and will lead you to a page where you can set your password. It expires after one day and nothing will happen if it's not used.\n\n--  [site:name] team\";s:7:\"subject\";s:60:\"Replacement login information for [user:name] at [site:name]\";}s:22:\"register_admin_created\";a:2:{s:4:\"body\";s:463:\"[user:name],\n\nA site administrator at [site:name] has created an account for you. You may now log in by clicking this link or copying and pasting it to your browser:\n\n[user:one-time-login-url]\n\nThis link can only be used once to log in and will lead you to a page where you can set your password.\n\nAfter setting your password, you will be able to log in at [site:login-url] in the future using:\n\nusername: [user:name]\npassword: Your password\n\n--  [site:name] team\";s:7:\"subject\";s:58:\"An administrator created an account for you at [site:name]\";}s:29:\"register_no_approval_required\";a:2:{s:4:\"body\";s:437:\"[user:name],\n\nThank you for registering at [site:name]. You may now log in by clicking this link or copying and pasting it to your browser:\n\n[user:one-time-login-url]\n\nThis link can only be used once to log in and will lead you to a page where you can set your password.\n\nAfter setting your password, you will be able to log in at [site:login-url] in the future using:\n\nusername: [user:name]\npassword: Your password\n\n--  [site:name] team\";s:7:\"subject\";s:46:\"Account details for [user:name] at [site:name]\";}s:25:\"register_pending_approval\";a:2:{s:4:\"body\";s:281:\"[user:name],\n\nThank you for registering at [site:name]. Your application for an account is currently pending approval. Once it has been approved, you will receive another email containing information about how to log in, set your password, and other details.\n\n\n--  [site:name] team\";s:7:\"subject\";s:71:\"Account details for [user:name] at [site:name] (pending admin approval)\";}s:31:\"register_pending_approval_admin\";a:2:{s:4:\"body\";s:56:\"[user:name] has applied for an account.\n\n[user:edit-url]\";s:7:\"subject\";s:71:\"Account details for [user:name] at [site:name] (pending admin approval)\";}s:16:\"status_activated\";a:2:{s:4:\"body\";s:446:\"[user:name],\n\nYour account at [site:name] has been activated.\n\nYou may now log in by clicking this link or copying and pasting it into your browser:\n\n[user:one-time-login-url]\n\nThis link can only be used once to log in and will lead you to a page where you can set your password.\n\nAfter setting your password, you will be able to log in at [site:login-url] in the future using:\n\nusername: [user:name]\npassword: Your password\n\n--  [site:name] team\";s:7:\"subject\";s:57:\"Account details for [user:name] at [site:name] (approved)\";}s:14:\"status_blocked\";a:2:{s:4:\"body\";s:89:\"[user:name],\n\nYour account on [site:account-name] has been blocked.\n\n--  [site:name] team\";s:7:\"subject\";s:56:\"Account details for [user:name] at [site:name] (blocked)\";}s:15:\"status_canceled\";a:2:{s:4:\"body\";s:82:\"[user:name],\n\nYour account on [site:name] has been canceled.\n\n--  [site:name] team\";s:7:\"subject\";s:57:\"Account details for [user:name] at [site:name] (canceled)\";}s:8:\"langcode\";s:2:\"en\";}"
])->execute();
