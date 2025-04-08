<?php

/**
 * em php, o tipo mixed é o tipo mais generico de todos
 */

function testeMixed(mixed $dado) {
    var_dump($dado);
    echo "<br>";
}

testeMixed("Gabriel Rodrigues dos Santos");
testeMixed(12);
testeMixed(false);
testeMixed(22.22);
testeMixed(null);