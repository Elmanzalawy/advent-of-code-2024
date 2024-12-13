<?php

function getInput()
{
    return file("input.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}