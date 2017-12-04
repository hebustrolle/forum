<?php exit; ?>
1511373515
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (php_bbmoderator_cache m) LEFT JOIN php_bbusers u ON (m.user_id = u.user_id) LEFT JOIN php_bbgroups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}