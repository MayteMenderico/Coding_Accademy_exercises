<?php

function remove_session() {
    session_destroy();
    session_abort();
    session_reset();
}

?>