<?php
function local_contagem_get_user_count() {
    global $DB;
    return $DB->count_records('user');
}
?>